@extends('layouts.main-layout')
@section('stanze')
  <h1>Nuova Stanza</h1>
  <form class="" action="{{route('store-stanza')}}" method="post">
    @csrf
    @method('POST')

    <div class="form">
      <label for="room_number">Numero Stanza</label>
      <br>
      <input type="text" name="room_number" value="">
    </div>
    <div class="form">
      <label for="floor">Piano</label>
      <br>
      <input type="text" name="floor" value="">
    </div>
    <div class="form">
      <label for="beds">Numero Letti</label>
      <br>
      <input type="text" name="beds" value="">
    </div>
    <br>
    <br>
    <button type="submit">Crea Stanza</button>
  </form>
@endsection
