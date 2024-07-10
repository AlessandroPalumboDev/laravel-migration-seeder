<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index(){

        $today = \Carbon\Carbon::today()->toDateString();

        $trains = Train::where('partenza_data', $today)->get();
        // $trains = Train::where('partenza_data', '>=', now())->get();

        return view('trains', compact('trains'));
    }
}