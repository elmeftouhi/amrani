<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    public function sectors(){
        return $this->hasMany(CitySector::class)->orderBy('city_sector_name_fr');;
    }
}
