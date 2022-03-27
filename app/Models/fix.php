<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fix extends Model
{
    use HasFactory;

    protected $fillable = ['title','content','launch_date','takedown_date'];

    
}
