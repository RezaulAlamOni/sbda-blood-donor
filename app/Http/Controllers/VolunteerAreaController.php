<?php

namespace App\Http\Controllers;

use App\Models\VolunteerArea;
use Illuminate\Http\Request;

class VolunteerAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas = VolunteerArea::all();
        return response()->json(['areas' => $areas]);
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
     * @param  \App\Models\VolunteerArea  $volunteerArea
     * @return \Illuminate\Http\Response
     */
    public function show(VolunteerArea $volunteerArea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VolunteerArea  $volunteerArea
     * @return \Illuminate\Http\Response
     */
    public function edit(VolunteerArea $volunteerArea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VolunteerArea  $volunteerArea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VolunteerArea $volunteerArea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VolunteerArea  $volunteerArea
     * @return \Illuminate\Http\Response
     */
    public function destroy(VolunteerArea $volunteerArea)
    {
        //
    }
}
