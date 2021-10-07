<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auxiliar extends Model
{
    use HasFactory;
    protected $table = "auxiliars";
    protected $guarded = ['id','created_at'];

    public function materia(){
        return $this->belongsTo('App\Models\Materia', 'id_materia');
    }
}
