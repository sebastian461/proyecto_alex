<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class usuario extends Model implements AuthenticatableContract
{
    use HasFactory;
    use AuthenticableTrait;

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

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model){
            if(empty($model->attributes['contraseñaUsuario'])) {
                $model->contraseñaUsuario = 'contraseña';
            }
        });
    }

    //Esta es una función de tipo mutable para la contraseña (se debe poner 'set')
    public function setcontraseñaUsuarioAttribute($value)
    {
        $this->attributes['contraseñaUsuario'] = bcrypt($value); // Asignación de valor correcta
    }

}
