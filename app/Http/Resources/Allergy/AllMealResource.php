<?php

namespace App\Http\Resources\Allergy;

use App\Models\Meal;
use Illuminate\Http\Resources\Json\JsonResource;

class AllMealResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $id = $this->allergies_id;
        return [
            'Allergy' => Meal::find($id)->allergy->name,
            'Main Meal' => $this->main_item,
            'Side Meal 1' => $this->side_item1,
            'Side Meal 2' => $this->side_item2,

        ];
    }
}
