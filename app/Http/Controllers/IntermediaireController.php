<?php

namespace App\Http\Controllers;

use App\Models\Intermediaire;
use App\Models\IntermediaireCategory;
use App\Models\IntermediaireStatus;
use Illuminate\Http\Request;

class IntermediaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('amrani.pages.intermediaire.index')->with([
            'intermediaires'   =>  Intermediaire::orderBy('intermediaire_name')->paginate(20)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('amrani.pages.intermediaire.create')->with([
            'categories'    =>  IntermediaireCategory::all(),
            'statuses'      =>  IntermediaireStatus::all(),
            'code_intermediaire'   =>  $this->newCodeIntermediaire()
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
            'intermediaire_code'           => 'required|max:10',
            'intermediaire_name'           => 'required|max:255',
            'intermediaire_category_id'    => 'required',
            'intermediaire_status_id'      => 'required'
        ]);

        Intermediaire::create($request->all());
        return redirect()->route('intermediaire.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Intermediaire  $intermediaire
     * @return \Illuminate\Http\Response
     */
    public function show(Intermediaire $intermediaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Intermediaire  $intermediaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Intermediaire $intermediaire)
    {
        return view('amrani.pages.intermediaire.edit')->with([
            'categories'    =>  IntermediaireCategory::all(),
            'statuses'      =>  IntermediaireStatus::all(),
            'intermediaire'        =>  $intermediaire
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Intermediaire  $intermediaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Intermediaire $intermediaire)
    {
        $validated = $request->validate([
            'intermediaire_code'           => 'required|max:10',
            'intermediaire_name'           => 'required|max:255',
            'intermediaire_category_id'    => 'required',
            'intermediaire_status_id'      => 'required'
        ]);

        $intermediaire->update($request->all());
        return redirect()->route('intermediaire.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Intermediaire  $intermediaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Intermediaire $intermediaire)
    {
       $intermediaire->delete();
       return redirect()->route('intermediaire.index');
    }

    public function newCodeIntermediaire(){
        return 'INT' . str_pad( (Intermediaire::max('id') + 1) , 5, 0, STR_PAD_LEFT );
    }

    public function getDefaultIntermediaireCategory(){
        $cc_default = IntermediaireCategory::where('is_default', 1)->first();
        return $cc_default->id;
    }

    public function getDefaultIntermediaireStatus(){
        $cs_default = IntermediaireStatus::where('is_default', 1)->first();
        return $cs_default->id;
    }    
}
