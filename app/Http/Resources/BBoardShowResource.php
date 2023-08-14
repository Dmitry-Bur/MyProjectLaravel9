<?php

namespace App\Http\Resources;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Resources\Json\JsonResource;

class BBoardShowResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'status' => $this->status,
            'category' => Category::find($this->category_id)->name,
            'subcategory' => SubCategory::find($this->sub_category_id)->name,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'price' => $this->price,
        ];
    }
}
