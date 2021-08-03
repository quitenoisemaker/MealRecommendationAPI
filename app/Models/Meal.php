<?php

namespace App\Models;

use App\Models\Allergies;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Factories\HasFactory;

class Meal extends Model
{
    //
    //use HasFactory;

    protected $fillable = [
        'main_item', 'side_item1', 'side_item2',
    ];

    public function allergy()
    {
        return $this->belongsTo(Allergies::class, 'allergies_id'); //here specifying the foreign key
    }
}
