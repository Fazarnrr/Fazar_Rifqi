<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notif extends Model
{
    use HasFactory;
    protected $table = 'notifikasi';

    public function users()
    {
        return $this->belongsTo(\App\Models\Users::class, 'user_id');
    }
}
