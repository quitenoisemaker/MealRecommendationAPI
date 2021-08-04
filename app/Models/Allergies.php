<?php

namespace App\Models;

use App\Models\Meal;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Factories\HasFactory;

class Allergies extends Model
{
    //

    // use HasFactory;
    protected $fillable = [
        'name',
    ];
    public function meals()
    {

        return $this->hasMany(Meal::class, 'allergies_id');
    }

    public function MealUsers()
    {

        return $this->belongsToMany(MealUser::class);
    }
}
