<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\House;

class HomeController extends Controller
{
    public function index() {
        $houses = House::paginate(8);
        // $houses = House::simplePaginate(8);

        return view('home', compact('houses'));
    }
}
