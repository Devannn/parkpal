<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomepageController extends Controller
{
    public function index()
    {
        $plates = DB::table('license_plates')->count();

        $lots = DB::table('lots')->count();

        // $count = $lots->count();

        return view('pages.homepage', ['plates' => $plates, 'lots' => $lots]);
    }
}
