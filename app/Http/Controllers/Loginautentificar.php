<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
//use Illuminate\support\facades\DB;


class Loginautentificar extends Controller
{

/*     public function vistaLogin(){
        return view('login');
    }
 */
  
/*     public function validaEntrada(Request $request){

        $datos = DB::select("select * from usuario where usuario=? and password=?", [$request->usuario,$request->password]);

        //var_dump($datos);

        //El isset solo valida que la variable sea crea

        if(!empty($datos)){ //si datos es diferente a vacio es correcto
           return view('inicio',['entrar' => true]);
        } else{
            return view('login',['msg' => "Usuario o contraseña incorrecta"]);
        }

    } */

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function authenticate(Request $request)
    {
        # code...
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);
    
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
    
                return redirect()->intended('/');
            }
    
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'confirm-password' => 'required|same:password'
        ]);
        $data = $request->except('confirm-password', 'password');
        $data['password'] = Hash::make($request->password);
        User::create($data);
        return redirect('/login');
    
    }

    public function logout(Request $request)
    {
        # code...
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

}
