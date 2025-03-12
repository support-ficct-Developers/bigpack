<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    use HasFactory;
    protected $table = "packs";
    protected $guarded = ['id', 'created_at'];

    public function materia()
    {
        return $this->belongsTo(Materia::class, 'id_materia');
    }

    public function docente()
    {
        return $this->belongsTo(Docente::class, 'id_docente');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
