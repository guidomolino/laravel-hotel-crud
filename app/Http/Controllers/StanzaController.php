<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stanza;

class StanzaController extends Controller
{
  public function index() {

    $stanze = Stanza::all();

    return view('stanze', compact('stanze'));
  }

  public function show($id) {

    $stanza = Stanza::findOrFail($id);

    return view('stanza', compact('stanza'));
  }

  public function create() {
    return view('create-stanza');
  }

  public function store(Request $request) {
    $data = $request -> all();
    $stanza = Stanza::create($data);
    return redirect() -> route('stanze');
  }
}
