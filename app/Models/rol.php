<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rol extends Model
{
    use HasFactory;

    protected $table = 'rol';

    protected $fillable = ['nombreRol', 'descripcionRol'];

    protected $guarded = ['idRol'];

    public function usuario()
    {
        return $this->hasMany(Usuario::class, 'idRol', 'idRol');
    }

}