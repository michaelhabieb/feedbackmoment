<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Opdracht;
use App\Models\Fruit;

class OpdrachtController extends Controller
{
    public function show()
    {
        

        $name = "Michael van der Reijden";

        $fruits = Fruit::all();

        // Stuur de opgehaalde Fruits en de $name variabele mee naar de "opdracht" view
        return view('opdracht', ['fruits' => $fruits, 'name' => $name]);
    }
}
