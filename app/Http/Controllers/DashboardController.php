<?php

namespace App\Http\Controllers;

use App\Models\Appartement;
use App\Models\Client;
use App\Models\Ferma;
use App\Models\Intermediaire;
use App\Models\LocalCommercial;
use App\Models\Maison;
use App\Models\Terrain;
use App\Models\Villa;
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
            'total_terrains'         =>   Terrain::count(),
            'total_lcs'              =>   LocalCommercial::count(),
            'total_maisons'          =>   Maison::count(),
            'total_villas'           =>   Villa::count(),
            'total_fermas'           =>   Ferma::count()
        ];
        return $totals;
    }
}
