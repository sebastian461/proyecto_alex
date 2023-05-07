<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personal extends Model
{
    use HasFactory;

    protected $table = 'personal';

    protected $fillable = ['cedulaPersonal',
                            'nombresPersonal',
                            'apellidosPersonal',
                            'telefonoPersonal',
                            'correoPersonal',
                            'cargoPersonal',
                            'descripcionCargoPersonal'];
                            
    public function usuario()
    {
        return $this->hasMany(Usuario::class, 'cedulaPersonal', 'cedulaPersonal');
    }

}
