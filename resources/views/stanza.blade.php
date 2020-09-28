@extends('layouts.main-layout')
@section('stanze')
  <h1>Stanza Numero: {{ $stanza -> room_number}}</h1>
  <ul>
    <li>Piano: {{ $stanza -> floor }}</li>
    <li>Numero letti: {{ $stanza -> beds }}</li>
  </ul>
@endsection
