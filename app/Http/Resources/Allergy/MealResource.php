<?php

namespace App\Http\Resources\Allergy;

use App\Models\Meal;
use Illuminate\Http\Resources\Json\JsonResource;

class MealResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'Main' => $this->main_item,
            'Side1' => $this->side_item1,
            'Side2' => $this->side_item2
        ];
    }
}
