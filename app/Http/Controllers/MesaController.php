<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MesaController extends Controller
{
    public function mesa_index_controller(){
        return view('conten/inicio');
    }

    public function mesa_inicio_controller(){
        return view('');
    }
    public function formato_controller(){
        return view('conten/formatos');
    }
}

