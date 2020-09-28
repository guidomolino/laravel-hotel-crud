@extends('layouts.main-layout')
@section('stanze')
  <ul>
    @foreach ($stanze as $stanza)
      <li>
        <a href="{{route('stanza-show', $stanza -> id)}}">
          {{$stanza -> room_number}}
        </a>
      </li>
    @endforeach
  </ul>

  <a href="{{route('create-stanza')}}">AGGIUNGI STANZA</a>
@endsection
