<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\ClientCategory;
use App\Models\ClientStatus;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($is_intermediaire=0)
    {
        return view('amrani.pages.client.index')->with([
            'clients'   =>  Client::orderBy('client_name')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lastID = 'CL' . str_pad( (Client::max('id') + 1) , 5, 0, STR_PAD_LEFT );
        return view('amrani.pages.client.create')->with([
            'categories'    =>  ClientCategory::all(),
            'statuses'      =>  ClientStatus::all(),
            'code_client'   =>  $lastID
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
        $validated = $request->validate([
            'client_code'           => 'required|max:10',
            'client_name'           => 'required|max:255',
            'client_category_id'    => 'required',
            'client_status_id'      => 'required'
        ]);

        Client::create($request->all());
        return redirect()->route('client.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('amrani.pages.client.edit')->with([
            'categories'    =>  ClientCategory::all(),
            'statuses'      =>  ClientStatus::all(),
            'client'        =>  $client
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
