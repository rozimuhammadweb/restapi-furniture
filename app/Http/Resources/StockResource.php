<?php

namespace App\Http\Resources;

use App\Models\Attribute;
use App\Models\Value;
use Illuminate\Http\Resources\Json\JsonResource;

class StockResource extends JsonResource
{

    public function toArray($request)
    {
        $result = [
            'stock_id' => $this->id,
            'quantity' => $this->quantity,
        ];

        return $this->getAttributes($result);
    }


    public function getAttributes($result)
    {
        $attributes = json_decode($this->attributes);

        foreach ($attributes as $stockAttribute) {
            /* Todo Cashe it*/
            $attribute = Attribute::find($stockAttribute->attribute_id);
            $value = Value::find($stockAttribute->value_id);

            if ($attribute && $value) {
                $result[$attribute->name] = $value->getTranslations('name');
            }
        }

        return $result;
    }


}
