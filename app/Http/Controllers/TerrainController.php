<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Client;
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

    public function store(Request $request)
    {
        $request->validate([
            'terrain_code'              => 'required|max:10',
            'client_name'                => 'required|string|max:255',
            'terrain_service_id'     => 'required|integer|min:1'
        ]);

        if($request->is_intermediaire){
            if(!$request->intermediaire_id){
                $intermediaireTemp = new IntermediaireController;
                $intermediaire = Intermediaire::create([
                    'intermediaire_name'            =>  $request->client_name,
                    'intermediaire_telephone'          =>  $request->client_telephone? $request->client_telephone: "",
                    'intermediaire_city'          =>  $request->client_city? $request->client_city: "",
                    'intermediaire_code'           =>  $intermediaireTemp->newCodeIntermediaire(),
                    'intermediaire_category_id'    =>  $intermediaireTemp->getDefaultIntermediaireCategory(),
                    'intermediaire_status_id'    =>  $intermediaireTemp->getDefaultIntermediaireStatus()
                ]);
                $request->merge([
                    'intermediaire_id' =>  $intermediaire->id
                ]);
            }  
        }else{
            if(!$request->client_id){
                $clientTemp = new ClientController;
                $client = Client::create([
                    'client_name'            =>  $request->client_name,
                    'client_telephone'          =>  $request->client_telephone? $request->client_telephone: "",
                    'client_city'          =>  $request->client_city? $request->client_city: "",
                    'client_code'           =>  $clientTemp->newCodeClient(),
                    'client_category_id'    =>  $clientTemp->getDefaultClientCategory(),
                    'client_status_id'    =>  $clientTemp->getDefaultClientStatus()
                ]);
                $request->merge([
                    'client_id' =>  $client->id
                ]);
            }            
        }

        $request->merge([
            'city_id' => $request->city_id? $request->city_id:-1,
            'city_sector_id' => $request->city_sector_id? $request->city_sector_id:-1,
        ]);
        Terrain::create($request->all());
        return redirect()->route('terrain.index');
    }

    public function show(Terrain $terrain)
    {
        //
    }

    public function edit(Terrain $terrain)
    {
        return view('amrani.pages.terrain.edit')->with([
            'client_categories'     =>  ClientCategory::all(),
            'client_statuses'       =>  ClientStatus::all(),
            'services'              =>  TerrainService::all(),
            'cities'                =>  City::all(),
            'facades'               =>  Terrain::$FACADES,
            'etats'                 =>  Terrain::$ETATS,
            'situations'            =>  Terrain::$SITUATIONS,
            'recules'               =>  Terrain::$RECULES,
            'terrain'           =>  $terrain
        ]);
    }

    public function update(Request $request, Terrain $terrain)
    {
        $request->validate([
            'appartement_code'           => 'required|max:10',
            'client_name'                => 'required|string|max:255'
        ]);
        $request->merge([
            'appartements_en_etage' => $request->appartements_en_etage? $request->appartements_en_etage:0,
            'is_demande' => $request->is_demande? true:false,
        ]);
        $terrain->update($request->all());
        return redirect()->route('terrain.index');
    }

    public function destroy(Terrain $terrain)
    {
        //
    }
}
