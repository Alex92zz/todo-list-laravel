<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class ListController extends Controller
{
    public function index(){

        $todos = Todo::all();

        return view('list', [
            'todos' =>$todos
        ]);
    }
}


// youtube video time: 27:49