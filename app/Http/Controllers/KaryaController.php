<?php

namespace App\Http\Controllers;

use App\Models\Karya;
use Illuminate\Http\Request;

class KaryaController extends Controller
{


// menampilkan semua karya
public function index() {
    return view('karyas', [
        'karyas' => Karya::all()
    ]);
}

// menampilkan karya berdasarkan id
public function show(Karya $id) {
    return view("karya", [
        'karya' => $id
    ]);
}
}
