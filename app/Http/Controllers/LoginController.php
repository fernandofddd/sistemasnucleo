<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Session;


class LoginController extends Controller
{
    public function Login()
    {
        return view("Login");
    }

    public function validar(Request $request)
    {
        $this->validate($request, [
            'email' => 'required', 
            'password' => 'required', 
        ]);


        $consulta = User::where('email', $request->email)->where('password', $request->password)->get();
        $cuantos = count($consulta);

        if($cuantos== 1){
            return redirect()->route('Menu');
        } else {
            echo "Acceso denegado";
        }

        
    }
}