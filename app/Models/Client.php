<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

class Client extends Model
{
    use HasFactory;
    use SoftDeletes;
    use LogsActivity;

    public function status()
    {
        return $this->HasOne(ClientStatus::class,'id', 'client_status_id');
    }
    public function category()
    {
        return $this->HasOne(ClientCategory::class,'id', 'client_category_id');
    }
}
