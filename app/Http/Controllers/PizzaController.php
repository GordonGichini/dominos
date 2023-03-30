<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){ 
        // get data from db 
       // $pizzas = Pizza::all();
       // $pizzas = Pizza::orderBy('name', 'desc')->get();
       // $pizzas = Pizza::where('type', 'hawaiian')->get();
        $pizzas = Pizza::latest()->get();
        
          return view('pizzas.index', [
            'pizzas' => $pizzas,
          ]);  
    } 

    public function show($id){ 

      $pizza = Pizza::find($id); 

        return view('pizza.show', ['pizza' => $pizza]);
      }

    public function create() {
      return view('pizzas.create');
    } 

    public function store() { 
      error_log(request('name'));
      error_log(request('type'));
      error_log(request('base'));
      return redirect('/');
    }
}
