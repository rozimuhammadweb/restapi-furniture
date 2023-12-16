<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Http\Resources\ReviewResource;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index(Product $product)
    {
        return $this->response([
            'overall_rating' => $product->reviews()->avg('rating'),
            'reviews_count' => $product->reviews()->count(),
            'reviews' => ReviewResource::collection($product->reviews()->paginate(5)),
        ]);
    }

    public function store(Product $product, StoreReviewRequest $request)
    {
        $review = $product->reviews()->create([
            'user_id' => auth()->id(),
            'rating' => $request->rating,
            'body' => $request->body,
        ]);

        return $this->success('Izoh yaratildi', [$review]);
    }
}
