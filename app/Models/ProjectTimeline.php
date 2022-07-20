<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTimeline extends Model
{
    use HasFactory;
    protected $fillable = ["nama_institusi", "nama_project", "start_date", "finish_date", "sign_to"];
}
