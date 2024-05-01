<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;
use App\Models\Hypothesis;

class HistoryController extends Controller
{
    public function index()
    {
        return view('history.index',[
            'title' => 'History',
            'histores' => History::orderby('id','desc')->get(),
            'hypotesis' => Hypothesis::all(),
            'history' => History::all(),
        ]);
    }
}
