<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $today = date('Y-m-d');
        $trains = Train::where('departure_time', 'LIKE', "$today%")->get();
        return view('home', compact('trains'));
        
    }
}
