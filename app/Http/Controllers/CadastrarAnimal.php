<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastrarAnimal extends Controller
{
    function cadastrarAnimal(){
        return View('cadastrar-animal');
    }
}
