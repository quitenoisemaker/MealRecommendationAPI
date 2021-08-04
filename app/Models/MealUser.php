<?php

namespace App\Models;

use App\Models\Allergies;
use Illuminate\Database\Eloquent\Model;

class MealUser extends Model
{
    //

    protected $fillable = [
        'name',
    ];
    public function Mealallergy()
    {

        return $this->belongsToMany(Allergies::class);
    }
}
