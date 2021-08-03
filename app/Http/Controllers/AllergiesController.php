<?php

namespace App\Http\Controllers;

use App\Http\Resources\Allergy\AllergyCollection;
use App\Http\Resources\Allergy\AllergyResource;
use App\Models\Allergies;
use App\Models\Meal;
use Illuminate\Http\Request;

class AllergiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        // return allergies::all();
        return AllergyResource::collection(allergies::all());
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
     * @param  \App\Allergies  $allergies
     * @return \Illuminate\Http\Response
     */
    public function show(Allergies $allergy)
    {
        // //
        // return $allergy;

        // return new AllergyResource($allergy);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Allergies  $allergies
     * @return \Illuminate\Http\Response
     */
    public function edit(Allergies $allergies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Allergies  $allergies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Allergies $allergies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Allergies  $allergies
     * @return \Illuminate\Http\Response
     */
    public function destroy(Allergies $allergies)
    {
        //
    }
}
