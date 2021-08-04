<?php

namespace App\Http\Resources\Allergy;

use App\Models\MealUser;
use Illuminate\Http\Resources\Json\JsonResource;

class AllUserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //Getting the User ID
        $id = $this->id;

        return [
            'Name' => $this->name,
            'Email' => $this->email,
            'Allergy' => AllergyResource::collection(MealUser::find($id)->Mealallergy)
        ];
    }
}
