<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\room;
use App\prenotation;

class RoomsController extends Controller
{
    public function showrooms(){
        $rooms = room::all();
        return view('rooms.showrooms', ['rooms'=>$rooms]);
    }

}
