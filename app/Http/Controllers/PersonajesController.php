<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personajes;
use App\Models\Pelicula;

class PersonajesController extends Controller
{
    public function index()
    {
        // Fetch all personajes along with their associated pelicula
        $personajes = Personajes::with('pelicula')->get();

        return view('index', compact('personajes'));
    }

    // Optionally, a method for showing a single pelicula
    public function showPelicula($id)
    {
        $pelicula = Pelicula::findOrFail($id); // Find the pelicula by ID
        return view('show', compact('pelicula'));
    }
}
