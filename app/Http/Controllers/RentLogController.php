<?php

namespace App\Http\Controllers;

use App\Models\Rent_log;
use App\Http\Requests\StoreRent_logRequest;
use App\Http\Requests\UpdateRent_logRequest;

class RentLogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreRent_logRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRent_logRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rent_log  $rent_log
     * @return \Illuminate\Http\Response
     */
    public function show(Rent_log $rent_log)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rent_log  $rent_log
     * @return \Illuminate\Http\Response
     */
    public function edit(Rent_log $rent_log)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRent_logRequest  $request
     * @param  \App\Models\Rent_log  $rent_log
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRent_logRequest $request, Rent_log $rent_log)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rent_log  $rent_log
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rent_log $rent_log)
    {
        //
    }
}
