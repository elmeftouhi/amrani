<?php

namespace App\Http\Controllers;

use App\Models\Appartement;
use App\Models\AppartementService;
use App\Models\City;
use App\Models\Client;
use App\Models\ClientCategory;
use App\Models\ClientStatus;
use App\Models\Intermediaire;
use Illuminate\Http\Request;

class AppartementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('amrani.pages.appartement.index')->with([
            'appartements'   =>  Appartement::all(),
            'services'      =>      AppartementService::all(),
            'cities'                =>  City::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()  
    {   
        $client = new ClientController;
        $lastID = 'APP' . (Appartement::max('id') + 1);
        return view('amrani.pages.appartement.create')->with([
            'code_client'           =>  $client->newCodeClient(),
            'client_categories'     =>  ClientCategory::all(),
            'client_statuses'       =>  ClientStatus::all(),
            'services'              =>  AppartementService::all(),
            'cities'                =>  City::all(),
            'facades'               =>  ['Rue', 'Pation', 'Place', 'Piscine', 'Sur Mer'],
            'etats'                 =>  ['Nouveau', 'Habite'],
            'types'                 =>  ['Appartement', 'Duplexe'],
            'situations'            =>  ['Titre', 'Milikia', 'Contrat', 'Miftah', 'Contrat Adlia'],
            'code_appartement'      =>  $lastID
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
        $request->validate([
            'appartement_code'           => 'required|max:10',
            'client_name'                => 'required|string|max:255',
            'appartement_service_id'     => 'required|integer|min:1'
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
            'appartements_en_etage' => $request->appartements_en_etage? $request->appartements_en_etage:0,
            'city_id' => $request->city_id? $request->city_id:-1,
            'city_sector_id' => $request->city_sector_id? $request->city_sector_id:-1,
        ]);
        Appartement::create($request->all());
        return redirect()->route('appartement.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appartement  $appartement
     * @return \Illuminate\Http\Response
     */
    public function show(Appartement $appartement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appartement  $appartement
     * @return \Illuminate\Http\Response
     */
    public function edit(Appartement $appartement)
    {
        return view('amrani.pages.appartement.edit')->with([
            'client_categories'     =>  ClientCategory::all(),
            'client_statuses'       =>  ClientStatus::all(),
            'services'              =>  AppartementService::all(),
            'cities'                =>  City::all(),
            'facades'               =>  ['Rue', 'Pation', 'Place', 'Piscine', 'Sur Mer'],
            'etats'                 =>  ['Nouveau', 'Habite'],
            'types'                 =>  ['Appartement', 'Duplexe'],
            'situations'            =>  ['Titre', 'Milikia', 'Contrat', 'Miftah', 'Contrat Adlia'],
            'appartement'        =>  $appartement
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appartement  $appartement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appartement $appartement)
    {
        $validated = $request->validate([
            'appartement_code'           => 'required|max:10',
            'client_name'                => 'required|string|max:255'
        ]);
        $request->merge([
            'appartements_en_etage' => $request->appartements_en_etage? $request->appartements_en_etage:0,
            'is_demande' => $request->is_demande? true:false,
        ]);
        $appartement->update($request->all());
        return redirect()->route('appartement.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appartement  $appartement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appartement $appartement)
    {
        $appartement->delete();
        return redirect()->route('appartement.index');
    }
}
