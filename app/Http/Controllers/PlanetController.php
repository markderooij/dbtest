<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = DB::table('planets')->get();
        return view('planets.index', compact('planets'));
    }

    public function show($id)
    {
        $planet = DB::table('planets')->where('id', $id)->get();
        return view('planets.show', compact('planet'));
    }
}
