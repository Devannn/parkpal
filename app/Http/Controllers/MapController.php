<?php

namespace App\Http\Controllers;

use App\Models\Spot;
use App\Models\LicensePlate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MapController extends Controller
{

    public function index()
    {
        $spots = Spot::where('lot_id', 1)->get();

        return view('pages.map', compact('spots'));
    }

    public function find(Request $request)
    {
        $spots = Spot::where('lot_id', 1)->get();

        $plateNumber = $request->input('plate_number');
        $spotId = $request->input('spot_id');

        $licensePlate = LicensePlate::where('plate_number', $plateNumber)->first();

        if ($licensePlate) {
            return view('pages.map', ['licensePlate' => $licensePlate], compact('spots'));
        } else {
            return view('pages.map', ['licensePlate' => null], compact('spots'));
        }
    }
}
