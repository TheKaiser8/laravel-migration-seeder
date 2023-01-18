<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // $trains = Train::all();
        $trains = Train::whereDate('departure_time', now())->orderBy('departure_time', 'asc')->get(); // per ottenere treni in partenza in data odierna e in ordine crescente di orario

        return view('homepage', compact('trains'));
    }
}
