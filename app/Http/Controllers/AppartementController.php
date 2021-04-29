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

    public function index()
    {
        return view('amrani.pages.appartement.index')->with([
            'appartements'      =>  Appartement::all(),
            'services'          =>  AppartementService::all(),
            'cities'            =>  City::all(),
            'situations'        =>  Appartement::FACADES,
        ]);
    }

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
            'facades'               =>  Appartement::FACADES,
            'etats'                 =>  ['Nouveau', 'Habite'],
            'types'                 =>  ['Appartement', 'Duplexe', 'Triplexe'],
            'situations'            =>  Appartement::FACADES,
            'code_appartement'      =>  $lastID
        ]);
    }


    public function store(Request $request)
    {

        $request->validate([
            'appartement_code'           => 'required|max:10',
            'client_name'                => 'required|string|max:255',
            'appartement_service_id'     => 'required|integer|min:1'
        ]);

        if($request->is_intermediaire){
            if($request->intermediaire_id == 0){
                $intermediaireTemp = new IntermediaireController;
                $intermediaire = Intermediaire::create([
                    'intermediaire_name'            =>  $request->client_name,
                    'intermediaire_telephone'          =>  $request->client_telephone? $request->client_telephone: "",
                    'intermediaire_code'           =>  $intermediaireTemp->newCodeIntermediaire(),
                    'intermediaire_category_id'    =>  $intermediaireTemp->getDefaultIntermediaireCategory(),
                    'intermediaire_status_id'    =>  $intermediaireTemp->getDefaultIntermediaireStatus()
                ]);
                $request->merge([
                    'intermediaire_id' =>  $intermediaire->id
                ]);
            }  
        }else{
            if($request->client_id == 0){
                $clientTemp = new ClientController;
                $client = Client::create([
                    'client_name'            =>  $request->client_name,
                    'client_telephone'          =>  $request->client_telephone? $request->client_telephone: "",
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

    public function show(Appartement $appartement)
    {
        //
    }

    public function edit(Appartement $appartement)
    {
        return view('amrani.pages.appartement.edit')->with([
            'client_categories'     =>  ClientCategory::all(),
            'client_statuses'       =>  ClientStatus::all(),
            'services'              =>  AppartementService::all(),
            'cities'                =>  City::all(),
            'facades'               =>  Appartement::$FACADES,
            'etats'                 =>  ['Nouveau', 'Habite'],
            'types'                 =>  ['Appartement', 'Duplexe'],
            'situations'            =>  ['Titre', 'Milikia', 'Contrat', 'Miftah', 'Contrat Adlia'],
            'appartement'        =>  $appartement
        ]);
    }

    public function update(Request $request, Appartement $appartement)
    {
        $request->validate([
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

    public function destroy(Appartement $appartement)
    {
        $appartement->delete();
        return redirect()->route('appartement.index');
    }

    public function filter(Request $request){
        try {


            $appartements = Appartement::with('service', 'city');

            if($request->req){
                $appartements = $appartements->where('appartement_code', 'like', '%'.$request->req.'%');
            }

            if($request->appartement_service_id){
                $appartements = $appartements->where('appartement_service_id', '=', $request->appartement_service_id);
            }

            if($request->appartement_situation){
                $appartements = $appartements->where('appartement_situation', '=', $request->appartement_situation);
            }

            if($request->client_city_id){
                $appartements = $appartements->where('client_city_id', '=', $request->client_city_id);
            }

            if($request->client_city_sector_id){
                $appartements = $appartements->where('client_city_sector_id', '=', $request->client_city_sector_id);
            }
            $count = $appartements->count();
            $appartements = $appartements->orderBy('appartement_code')->paginate(20);
    
            $trs = "";
            foreach($appartements as $appartement){
                $trs .= view('amrani.pages.appartement.partials.tr', ['appartement'=>$appartement]);
            }

            return response()->json([
                'success'   => $trs,
                'total'     =>  $appartements->count() . ' / ' . $count
            ]);

        } catch (\Throwable $th) {
            return $th;
        }

    }


}
