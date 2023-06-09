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
      
      $pizza = new Pizza();

      $pizza->name = request('name');
      $pizza->type = request('type'); 
      $pizza->base = request('base'); 
      $pizza->toppings = request('toppings');
      
      $pizza->save();

      return redirect('/')->with('mssg', 'Thanks for your order');
    } 

    public function destroy($id) { 
      $pizza = Pizza::findOrFail($id);
      $pizza->delete();

      return redirect('/pizzas');
    }
}
