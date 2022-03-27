<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','launch_date','takedown_date'
    ];


    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
