<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SignInRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\usuario;
use Illuminate\Support\Facades\Hash;

class SignInController extends Controller
{
    // Método para cargar la vista del formulario de inicio de sesión
    public function index()
    {
        return view('aplicacion.sign-in.index');
    }

    // Método para procesar el inicio de sesión
    public function signIn(SignInRequest $request)
    {
        // Se validan los datos ingresados en el formulario
        $credenciales = $request->validated();

        // Se busca en la base de datos el usuario con el nombre de usuario proporcionado
        $usuario = Usuario::where('nombreUsuario', $credenciales['nombreUsuario'])->first();

        // Si no se encuentra el usuario o la contraseña es incorrecta se redirige a la página de inicio de sesión
        if (!$usuario || !Hash::check($credenciales['contraseñaUsuario'], $usuario->contraseñaUsuario)) {
            return redirect()->route('sign-in')->withErrors('auth.failed');
        }

        // Si se encuentra el usuario y la contraseña es correcta, se inicia sesión con el usuario
        Auth::login($usuario);

        // Se redirige al usuario al rol correspondiente
        return $this->autentificado($request, $usuario);
    }

    // Método para redirigir al usuario al rol correspondiente
    public function autentificado(Request $request, $usuario)
    {
        return redirect()->route('rol');
    }
}
