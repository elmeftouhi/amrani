<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

class Intermediaire extends Model
{
    use HasFactory;
    use SoftDeletes;
    use LogsActivity;

    protected $fillable = [
        'intermediaire_code',
        'intermediaire_name',
        'intermediaire_category_id',
        'intermediaire_status_id',
        'intermediaire_city',
        'intermediaire_telephone',
        'created_at',
        'updated_at'
    ];

    public function status()
    {
        return $this->HasOne(IntermediaireStatus::class,'id', 'intermediaire_status_id');
    }
    public function category()
    {
        return $this->HasOne(IntermediaireCategory::class,'id', 'intermediaire_category_id');
    }
}
