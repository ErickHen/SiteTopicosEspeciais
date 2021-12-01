<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    
    public function index(Request $request){
    
        $email = $request->input('email');
        $mensagem = $request->input('mensagem');

        return view('contato', ['email'=>$email, 'mensagem'=>$mensagem]); 
       
    } 
   
    
}
