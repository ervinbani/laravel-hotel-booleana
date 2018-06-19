@extends('layout')

@section('contenuto')
    <h1>Lista delle prenotazioni</h1>
    @foreach($prenotations as $p)
      Id Prenotazione: {{$p['id']}}<br>


    @endforeach
@endsection
