<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'product_id' => $this->id,
            'name_product' => $this->name_product,
            'image_product' => $this->getFeaturedImage(),
            'description' => $this->description,
            'qty' => $this->qty,
        ];
    }

    private function getFeaturedImage()
    {
        return ($this->image_product) ? asset('storage/'.$this->image_product) : null;
       

    }
}
