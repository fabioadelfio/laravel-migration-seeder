<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index()
    {
        $oggi = now()->startOfDay();

        $trains = Train::where('orario_partenza', '>=', $oggi)
            ->orderBy('orario_partenza', 'asc')
            ->get();

        return view('home', compact('trains'));
    }
}
