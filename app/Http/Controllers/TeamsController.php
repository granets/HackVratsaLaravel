<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class TeamsController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('teams', compact('teams'));
    }
}