<?php

namespace App\Http\Controllers;

use App\Models\Planet;
class PlanetController extends Controller
{
    public function index()
    {
        $planets = Planet::all();
        return view('planets.index', compact('planets'));
    }

    public function show($id)
    {
        $planet = Planet::where('id', $id)->first();
        return view('planets.show', compact('planet'));
    }
}
