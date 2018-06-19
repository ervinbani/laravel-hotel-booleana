<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\room;
use App\prenotation;

class PrenotationsController extends Controller
{
  public function showprenotations(){
      $prenotations = prenotation::all();
      return view('rooms.showprenotations', ['prenotations'=>$prenotations]);
  }


}
