<?php

namespace App\Http\Resources\Allergy;

use App\Models\Allergies;
use App\Http\Resources\Allergy\AllergyResource;
use Illuminate\Http\Resources\Json\JsonResource;

class MealUserResource extends JsonResource
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
            'name' => $this->name,
            'Email' => $this->email,
            'Allergies' => AllergyResource::collection(allergies::all())
        ];
    }
}
