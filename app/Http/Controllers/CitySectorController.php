<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\CitySector;
use Illuminate\Http\Request;

class CitySectorController extends Controller
{
    public function getByCity($id_city){
        $city = City::with('sectors')->find($id_city)->toArray();
        if($city){
            return $city['sectors'];
        }
        return [];
    }
}
