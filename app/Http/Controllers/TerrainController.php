<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Terrain;
use App\Models\TerrainService;
use App\Models\ClientCategory;
use App\Models\ClientStatus;
use App\Models\Intermediaire;

use Illuminate\Http\Request;

class TerrainController extends Controller
{

    public function index()
    {
        return view('amrani.pages.terrain.index')->with([
            'terrains'          =>  Terrain::all(),
            'services'          =>  TerrainService::all(),
            'cities'            =>  City::all()
        ]);
    }

    public function create()
    {
        $client = new ClientController;
        $lastID = 'TER' . (Terrain::max('id') + 1);
        return view('amrani.pages.terrain.create')->with([
            'code_client'           =>  $client->newCodeClient(),
            'client_categories'     =>  ClientCategory::all(),
            'client_statuses'       =>  ClientStatus::all(),
            'services'              =>  TerrainService::all(),
            'cities'                =>  City::all(),
            'facades'               =>  Terrain::$FACADES,
            'etats'                 =>  Terrain::$ETATS,
            'situations'            =>  Terrain::$SITUATIONS,
            'recules'               =>  Terrain::$RECULES,
            'terrain_code'          =>  $lastID
        ]);
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
     * @param  \App\Models\Terrain  $terrain
     * @return \Illuminate\Http\Response
     */
    public function show(Terrain $terrain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Terrain  $terrain
     * @return \Illuminate\Http\Response
     */
    public function edit(Terrain $terrain)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Terrain  $terrain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Terrain $terrain)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Terrain  $terrain
     * @return \Illuminate\Http\Response
     */
    public function destroy(Terrain $terrain)
    {
        //
    }
}
