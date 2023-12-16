<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Http\Resources\OrderResource;
use App\Models\Product;
use App\Models\Stock;
use App\Models\UserAddress;

class OrderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index()
    {

        if (request()->has('status_id')) {
            return response(OrderResource::collection(auth()->user()->orders()->where('status_id', request('status_id'))->paginate()));
        }

        return response(OrderResource::collection(auth()->user()->orders()->paginate()));
    }


    public function store(StoreOrderRequest $request)
    {
        $sum = 0;
        $products = [];
        $notFound = [];
        $address = UserAddress::find($request->address_id);

        foreach ($request['products'] as $requestProduct) {
            $prod = Product::with('stocks')->findOrFail($requestProduct['product_id']);
            $productResource['quantity'] = $requestProduct['quantity'];

            if ($prod->stocks()->find($requestProduct['stock_id']) && $prod->stocks()->find($requestProduct['stock_id'])->quantity >= $requestProduct['quantity']) {
                $productWithStock = $prod->withStock([$requestProduct['stock_id']]);
                $productResource = new ProductResource($productWithStock);
                $sum += $productResource['price'];
                $products[] = $productResource->resolve();
            } else {
                if (isset($requestProduct['quantity'])) {
                    $productResource['quantity'] = $requestProduct['quantity'];
                } else {
                    // $requestProduct['we_have'] = $prod->stocks()->find($requestProduct['stock_id'])->quantity;
                    continue;
                    // $notFound[] = $requestProduct;
                }
            }
        }

        if ($notFound == [] && $products != []) {
            //        TODO add order status
            // dd(in_array($request['payment_type_id'], [1, 2]) ? 1 : 10);
            $order = auth()->user()->orders()->create([
                'comment' => $request->comment,
                'delivery_method_id' => $request->delivery_method_id,
                'payment_type_id' => $request->payment_type_id,
                'status_id' => in_array($request['payment_type_id'], [1, 2]) ? 1 : 10,
                'sum' => $sum,
                'address' => $address,
                'products' => $products
            ]);

            if (isset($order)) {
                foreach ($products as $product) {
                    $stock = Stock::find($product['inventory'][0]['id']);
                    $stock->quantity -= $product['order_quantity'];
                    $stock->save();
                }
            }
            return $this->success('order created', $order);
        } else {
            return $this->error(
                'some products not found',
                ['not_found_products' => $notFound],
            );
        }
    }


    public function show(Order $order)
    {
        return $this->response(new OrderResource($order));
    }


    public function edit(Order $order)
    {
        //
    }


    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }


    public function destroy(Order $order)
    {
        //
    }
}
