<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class business_items extends Model
{
    use HasFactory;
    protected $table = 'business_items';
    protected $fillable = ["name","business_type_id"];
    
    public function business_type(){
        return $this->belongsTo("App\Models\business_type");
    }
}
