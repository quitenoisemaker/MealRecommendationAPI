<?php

namespace App\Http\Resources\Allergy;

use Illuminate\Http\Resources\Json\JsonResource;

class AllergyResource extends JsonResource
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

            'Allergy Category' => [
                'Allergy' => route('meals.index', $this->id)
            ]
        ];
    }
}
