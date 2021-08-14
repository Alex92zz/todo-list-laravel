<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function create(Request $request){
        

        $todo = new Todo();

        $todo->content = $request->input('content');
        $todo->color = $request->color;

        $todo->save();

        return redirect('/');


    }

    public function delete($id){

        $cus = new Todo();
        $data = $cus->find($id);
        $data->delete();
        
        return redirect('/');

    }
}
