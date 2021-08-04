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
            'Main meal' => $this->main_item,
            'Side meal' => $this->side_item1,
            'Side meal2' => $this->side_item2
        ];
    }
}
