<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PageController extends Controller
{
    public function index()
    {
        // $trains = Train::all();
        // $trains = Train::whereDate('departure_time', now())->orderBy('departure_time', 'asc')->get(); // per ottenere treni in partenza e/o già partiti in data odierna (dalle 00 alle 24) e in ordine crescente di orario

        // $trains = Train::where('departure_time', '>=', now())->orderBy('departure_time', 'asc')->get(); // per ottenere treni in partenza a partire dall'orario attuale

        // Utilizzando Carbon:
        $trains = Train::where('departure_time', '>=', Carbon::now())->orderBy('departure_time', 'asc')->get(); // per ottenere treni in partenza a partire dall'orario attuale

        // L'orario attuale è in UTC ed è dato dal server (in questo caso MAMP), per cui potrebbe non corrispondere a quello dell'utente (se NON si trova nella stessa zona UTC). Per risalire all'orario dell'utente è necessario utilizzare JS (che ricava l'orario dal sistema operativo dell'utente)

        return view('homepage', compact('trains'));
    }
}
