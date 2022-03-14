<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Burger;
use DB;

class BurgerController extends Controller
{
    public function index() {
        return view ('options');
    }

    public function store() {
        
        $burger = new Burger();

        $burger->buns = request('buns');
        $burger->meat = request('meat');
        $burger->vegetables = request('vegetables');
        $burger->dressing = request('dressing');
        $burger->extras = request('extras');

        $burger->save();
// return view('home');
        return redirect()->route('show_breakdown', $burger->id);
    }

    public function showBreakdown($id) {
        $burger = Burger::findOrFail($id);       

        return view('breakdown', ['burger' => $burger]);
    }

    public function showCheckout() {
    

        return view('checkout');
    }
}
