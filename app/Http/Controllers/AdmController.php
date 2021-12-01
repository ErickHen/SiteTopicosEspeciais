<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmController extends Controller
{
    
    public function index(Request $request){

        $email = $request->input('email');
        $mensagem = $request->input('mensagem');
        return view('adm', ['email'=>$email, 'mensagem'=>$mensagem]); 
       
    } 

    
}
