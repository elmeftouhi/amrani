<?php

namespace App\Http\Controllers;

use App\Models\Appartement;
use App\Models\Client;
use App\Models\Intermediaire;
use App\Models\Terrain;
use Spatie\Activitylog\Models\Activity;

class DashboardController extends Controller
{
    public function index()
    {
        return view('amrani.dashboard.index')->with([
            'activities'    =>  Activity::orderBy('created_at', 'desc')->paginate(5)
        ]);
    }

    public function getTotals(){
        $totals = [
            'total_clients'          =>   Client::count(),
            'total_intermediaires'   =>   Intermediaire::count(),
            'total_appartements'     =>   Appartement::count(),
            'total_terrains'         =>   Terrain::count()
        ];
        return $totals;
    }
}
