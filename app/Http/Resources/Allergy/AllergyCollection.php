<?php

namespace App\Http\Resources\Allergy;

use Illuminate\Http\Resources\Json\ResourceCollection;

class AllergyCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [

            'name' => $this->name
            // 'Allergy Category' => [
            //     'name' => route('meals.show', $this->id)
            // ]
        ];
    }
}
