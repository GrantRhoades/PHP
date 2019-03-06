<?php

namespace App\Http\Controllers;

use App\Station;
use Illuminate\Http\Request;

class RadioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function create()
    {

        $stations = Station::all();

        return view('radio')->with('listOFStations',$stations);
    }
}
