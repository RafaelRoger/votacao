<?php

namespace App\Http\Controllers\admin;

use \Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Authentication extends Controller
{
    public function invoke() {
        return view('admin.login');
    }

    public function auth(Request $request)
    {
        //VALIDANDO CAMPOS DO FORMULARIO
        $request->validate([
            'username'          => 'required|email',
            'password'          => 'required'
        ], [
            'username.required' => 'Preencha o campo Email',
            'username.email'    => 'Email invalido',
            'password.required' => 'Preencha o campo Password',
        ]);

        //OBTEM OS DADOS DO FORMULARIO
        $credentials = [
            'email'    => $request->username,
            'password' => $request->password,
        ];

        //VALIDA OS DADOS NO BANCO
        if (Auth::attempt($credentials, ($request->get('remember') == 'on') ? true : false)) {
            return redirect()->intended(route('dashboard'));
        }
        return redirect()->back()->with('message', 'Email ou Senha incorretos');
    }

    public function logout() {
        Auth::logout();
        return redirect(route('login'));
    }
}
