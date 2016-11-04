<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ServicioController extends Controller
{
    public function index(){
        return view('servicios.index');
    }
}
