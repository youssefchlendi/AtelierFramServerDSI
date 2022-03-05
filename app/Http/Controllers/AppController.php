<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class AppController extends Controller
{
    function show(){
        $Todos = Todo::all();
        // return $Todos;
        return view('welcome',['todos' => $Todos]);
    }
}
