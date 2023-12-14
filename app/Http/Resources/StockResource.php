<?php

namespace App\Http\Resources;

use App\Models\Attribute;
use App\Models\Value;
use Illuminate\Http\Resources\Json\JsonResource;

class StockResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'stock_id' => $this->id,
            'quantity' => $this->when(isset($this->quantity), $this->quantity),
            'attributes' => $this->getAttributes(),
        ];
    }


    public function getAttributes()
    {
        $attributes = json_decode($this->attributes);

        $result = [];

        foreach ($attributes as $stockAttribute) {
            $attribute = Attribute::find($stockAttribute->attribute_id);
            $value = Value::find($stockAttribute->value_id);

            if ($attribute && $value) {
                $result[$attribute->name] = $value->getTranslations('name');
            }
        }

        return $result;
    }

}
