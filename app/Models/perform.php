<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perform extends Model
{
    use HasFactory;
    protected $table = 'perform';
    protected $fillable = ['title','photo_path'];
}
