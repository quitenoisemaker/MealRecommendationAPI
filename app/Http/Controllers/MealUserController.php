<?php

namespace App\Http\Controllers;

use App\Http\Resources\Allergy\AllUserResource;
use App\Http\Resources\Allergy\MealUserResource;
use App\Models\MealUser;
use Illuminate\Http\Request;

class MealUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 

        return AllUserResource::collection(MealUser::all());
    }

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
     * @param  \App\MealUser  $mealUser
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user = MealUser::find($id);
        return new MealUserResource($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MealUser  $mealUser
     * @return \Illuminate\Http\Response
     */
    public function edit(MealUser $mealUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MealUser  $mealUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MealUser $mealUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MealUser  $mealUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(MealUser $mealUser)
    {
        //
    }
}
