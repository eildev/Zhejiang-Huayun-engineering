<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesDetails extends Model
{
    use HasFactory;
    protected $guarded =[];
    public function Service(){
        return $this->belongsTo(OurServices::class,'services_id','id');
    }
}
