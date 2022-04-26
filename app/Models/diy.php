<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diy extends Model
{
    use HasFactory;
    protected $table = "diys";
    protected $fillable = ['title','content','launch_date','takedown_date','video_path','file_path','image_path'];
}
