<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\ClientCategory;
use App\Models\ClientStatus;
use App\Models\Intermediaire;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class ClientController extends Controller
{

    public function index($is_intermediaire=0)
    {
        return view('amrani.pages.client.index')->with([
            'clients'       =>  Client::orderBy('client_name')->paginate(20),
            'categories'    =>  ClientCategory::all()
        ]);
    }

    public function create()
    {
        return view('amrani.pages.client.create')->with([
            'categories'    =>  ClientCategory::all(),
            'statuses'      =>  ClientStatus::all(),
            'code_client'   =>  $this->newCodeClient()
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'client_code'           => 'required|max:10',
            'client_name'           => 'required|max:255',
            'client_category_id'    => 'required',
            'client_status_id'      => 'required'
        ]);

        Client::create($request->all());
        return redirect()->route('client.index');
    }

    public function show(Client $client)
    {
        //
    }

    public function edit(Client $client)
    {
        return view('amrani.pages.client.edit')->with([
            'categories'    =>  ClientCategory::all(),
            'statuses'      =>  ClientStatus::all(),
            'client'        =>  $client
        ]);
    }


    public function update(Request $request, Client $client)
    {
        $validated = $request->validate([
            'client_code'           => 'required|max:10',
            'client_name'           => 'required|max:255',
            'client_category_id'    => 'required',
            'client_status_id'      => 'required'
        ]);

        $client->update($request->all());
        return redirect()->route('client.index');
    }


    public function destroy(Client $client)
    {
        //
    }

    public function newCodeClient(){
        return 'CL' . str_pad( (Client::max('id') + 1) , 5, 0, STR_PAD_LEFT );
    }

    public function getDefaultClientCategory(){
        $cc_default = ClientCategory::where('is_default', 1)->first();
        return $cc_default->id;
    }

    public function getDefaultClientStatus(){
        $cs_default = ClientStatus::where('is_default', 1)->first();
        return $cs_default->id;
    }

    public function search(Request $request){
        $str = addslashes( $request->req );
        if($request->is_intermediaire)
            return Intermediaire::with('category', 'status')->where('intermediaire_name', 'like', '%'.$str.'%')->get()->toJson();
        else
            return Client::with('category', 'status')->where('client_name', 'like', '%'.$str.'%')->get()->toJson();
    }

    public function filter(Request $request){
        try {
            if($request->client_category_id && $request->req){
                $clients = Client::with('category', 'status')->where('client_category_id', '=', $request->client_category_id)
                                                            ->where('client_name', 'like', '%'.$request->req.'%')
                                                            ->orderBy('client_name')
                                                            ->get();
            }elseif($request->client_category_id && !$request->req){
                $clients = Client::with('category', 'status')->where('client_category_id', '=', $request->client_category_id)
                                                            ->orderBy('client_name')
                                                            ->get();
            }elseif(!$request->client_category_id && $request->req){
                $clients = Client::with('category', 'status')->where('client_name', 'like', '%'.$request->req.'%')
                                                            ->orderBy('client_name')
                                                            ->get();
            }else{
                $clients = Client::with('category', 'status')->orderBy('client_name')
                                                            ->get();
            }
    
            $trs = "";
            foreach($clients as $client){
                $trs .= view('amrani.pages.client.partials.tr', ['client'=>$client]);
            }
            return $trs;
        } catch (\Throwable $th) {
            return $th;
        }

    }
}
