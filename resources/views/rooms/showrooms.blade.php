@extends('layout')

@section('contenuto')
  <h1>Lista delle stanze</h1>
  @foreach($rooms as $r)
    Id Room:{{$r['id']}}<br>
    Room number:{{$r['room_number']}}<br>
    Floor:{{$r['floor']}}<br>
    number of Beds:{{$r['beds']}}<br><br>
    Num prenotazioni: 



  @endforeach


@endsection
