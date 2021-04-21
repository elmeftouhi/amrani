<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CitySector extends Model
{
    use HasFactory;
    protected $fillable = [
        'city_sector_name_fr'
    ];
    
    public $timestamps = false;
}
