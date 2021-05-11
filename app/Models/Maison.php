<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

class Maison extends Model
{
    use HasFactory;
    use SoftDeletes;
    use LogsActivity;

    protected $fillable = [
        'maison_code',
        'maison_facade', // array
        'maison_situation', // array
        'maison_etat', // array
        'garage_surface',
        'garage_hauteur',
        'surface_etage',
        'surface_recule',
        'nbr_etages',
        'maison_details', // array
        'largeur_1',
        'largeur_2',
        'largeur_3',
        'description',
        'prix_metre',
        'prix_total',
        'prix_declaration',
        'client_id',
        'city_id',
        'city_sector_id',
        'intermediaire_id',
        'maison_service_id',
        'created_at',
        'updated_at'
    ];
    public const ETATS = ['Nouveau', 'Déjà Utilisé'];
    public const FACADES = ['Rue', 'Kisaria', 'Place', 'Souk'];
    public const SITUATIONS = ['Titre', 'Milikia', 'Contrat', 'Miftah', 'Contrat Adlia'];
    public const DETAILS = ['Soudda', 'Sous Sol', 'Garage', 'Mezzanine'];

    public function client(){
        return $this->belongsTo(Client::class);
    }
    
    public function intermediaire(){
        return $this->belongsTo(Intermediaire::class);
    }

    public function service(){
        return $this->belongsTo(MaisonService::class, 'maison_service_id', 'id');
    }

    public function city(){
        return $this->belongsTo(City::class);
    }

    public function city_sector(){
        return $this->belongsTo(CitySector::class);
    }
}
