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
        'created_at',
        'updated_at'
    ];
}
