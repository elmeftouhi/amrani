<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

class Appartement extends Model
{
    use HasFactory;
    use SoftDeletes;
    use LogsActivity;

    protected $fillable = [
        'appartement_etat',
        'appartement_code',
        'appartement_type',
        'appartement_situation',
        'appartement_etage',
        'appartements_en_etage',
        'appartements_en_immeuble',
        'largeur_1',
        'largeur_2',
        'largeur_3',
        'appartement_facade',
        'surface',
        'ascenseur',
        'parking',
        'nbr_chambre',
        'nbr_salon',
        'nbr_facade',
        'nbr_patio',
        'nbr_toilette',
        'nbr_cuisine',
        'prix_metre',
        'prix_total',
        'prix_declaration',
        'client_id',
        'intermediaire_id',
        'is_demande',
        'created_at',
        'updated_at'
    ];

    public function client(){
        return $this->belongsTo(Client::class);
    }
    public function intermediaire(){
        return $this->belongsTo(Intermediaire::class);
    }

}
