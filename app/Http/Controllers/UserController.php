<?php

namespace App\Http\Controllers;

use App\Models\Access;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function create(Request $request)
    {
        $user = User::where('email', '=', strtolower($request->email))->first();
        if ($user) {
            return back()->with('msg', ('Email já cadastrado!'));
        }

        if ($request->password != $request->confirmpassword) {
            return back()->with('msg', ('Senhas não conferem!'));
        }

        if (!empty($request->all())) {
            $user = new User();
            $user->name = $request->name;
            $user->email = strtolower($request->email);
            $user->password = Hash::make($request->password);

            $user->save();
        } else {
            return back()->with('msg', ('Preencha todos os campos!'));
        }

        return redirect('/');
    }

    public function auth(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $acesso = new Access();
            $acesso->useremail = $request->email;
            $acesso->ip = $_SERVER['REMOTE_ADDR'];
            $acesso->save();

            return redirect('/');
        } else {
            return back()->with('msg', ('Credenciais Inválidas!'));
        }
    }

    public function Logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
