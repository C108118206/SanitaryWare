<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class business_type extends Model
{
    use HasFactory;
    protected $table = 'business_type';
    protected $fillable = ["name"];

    public function business_items()
    {
        return $this->hasMany('App\Models\business_items');
    }

    public function business(){
        return $this->hasMany('App\Models\business');
    }
}
