<?php

namespace App\Http\Controllers;

use App\Http\Resources\Allergy\AllMealResource;
use App\Http\Resources\Allergy\MealResource;
use Illuminate\Support\Facades\Cache;
use App\Models\Allergies;
use App\Models\Meal;
use Illuminate\Http\Request;


class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Allergies $allergies)
    {

        //
        return MealResource::collection($allergies->meals);


        // $meal = Cache::rememberForever('meal', function () {

        //     return MealResource::collection($this->allergies->meals);
        // });

        // return $meal;
    }


    //function to get all Meal
    public function allMeal()
    {


        $value = Cache::rememberForever('allmeals', function () {
            return AllMealResource::collection(Meal::paginate(10));
        });

        return $value;
    }
    //end

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function show(Meal $meal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function edit(Meal $meal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meal $meal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meal $meal)
    {
        //
    }
}
