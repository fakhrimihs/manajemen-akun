<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    //
    function index()
    {
        echo view('login');
    }
    function login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ], [
            'email.required' => 'Email Wajib Diisi',
            'password.required' => 'Password Wajib diisi',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password, 
        ];

        if (Auth::attempt($infologin)){
           if(Auth::user()->role=='admin'){
                return redirect('admin/admin');
           }elseif (Auth::user()->role=='developer'){
                return redirect('admin/developer');
           }elseif (Auth::user()->role=='member'){
                return redirect('admin/member');
           }
        }else{
            return redirect('')->withErrors('Username Tidak ada')->withInput();
        }
    }

    function logout(){
    Auth::logout();
        return redirect('');
    }

}
