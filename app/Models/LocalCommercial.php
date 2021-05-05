<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

class LocalCommercial extends Model
{
    use HasFactory;
    use SoftDeletes;
    use LogsActivity;

    protected $fillable = [
        'lc_code',
        'lc_etat',
        'lc_projets',
        'lc_facade',
        'lc_situation',
        'lc_localisation',
        'lc_details',
        'largeur_1',
        'largeur_2',
        'largeur_3',
        'surface',
        'description',
        'hauteur',
        'prix_metre',
        'prix_total',
        'prix_declaration',
        'client_id',
        'intermediaire_id',
        'city_id',
        'city_sector_id',
        'lc_service_id',
        'created_at',
        'updated_at'
    ];
    public const ETATS = ['Nouveau', 'Déjà Utilisé'];
    public const PROJETS = ['Café', 'Restaurant', 'Club Sportif', 'Coiffure', 'Commerce', 'Vente de Vêtements'];
    public const FACADES = ['Rue', 'Kisaria', 'Place', 'Souk'];
    public const SITUATIONS = ['Titre', 'Milikia', 'Contrat', 'Miftah', 'Contrat Adlia'];
    public const LOCALISATIONS = ['Immeuble', 'Maison', 'Indépendant'];
    public const DETAILS = ['Soudda', 'Sous Sol', 'Toilette', 'Eau', 'Electricité', 'Pateo'];

    public function client(){
        return $this->belongsTo(Client::class);
    }
    public function intermediaire(){
        return $this->belongsTo(Intermediaire::class);
    }
    public function service(){
        return $this->belongsTo(LocalCommercialService::class, 'lc_service_id', 'id');
    }
    public function city(){
        return $this->belongsTo(City::class);
    }

    public function city_sector(){
        return $this->belongsTo(CitySector::class);
    }


}
