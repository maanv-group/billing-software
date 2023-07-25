<?php

namespace App\Http\Controllers;

use App\Models\Charts;
use Illuminate\Http\Request;

class ChartsController extends Controller
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
     * @param  \App\Models\Charts  $charts
     * @return \Illuminate\Http\Response
     */
    public function show(Charts $charts)
    {
        $data = $charts::sendDummy();
        return ['data' => $data];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Charts  $charts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Charts $charts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Charts  $charts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Charts $charts)
    {
        //
    }
}
