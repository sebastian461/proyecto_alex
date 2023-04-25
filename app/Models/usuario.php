<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    use HasFactory;

    protected $table = 'usuario';

    protected $fillable = ['cedulaPersonal', 
                            'idRol', 
                            'nombreUsuario', 
                            'contraseñaUsuario', 
                            'estadoUsuario'];

    protected $guarded = ['idUsuario'];

    protected $hidden = ['contraseñaUsuario'];

    protected $casts = [
        'estadoUsuario' => 'boolean',
    ];

    public function rol()
    {
        return $this->belongsTo(Rol::class, 'idRol', 'idRol');
    }

    public function personal()
    {
        return $this->belongsTo(Personal::class, 'cedulaPersonal', 'cedulaPersonal');
    }

    //Esta es una función de tipo mutable para la contraseña (se debe poner 'set')
    public function setPasswordAttribute($value)
    {
        $this->attributes['contraseñaUsuario'] = bcrypt($value);
    }

}
