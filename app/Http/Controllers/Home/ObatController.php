<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function obat()
    {
        $pageConfigs = ['pageHeader' => false];

        // return view page untuk detail obat
        return view('', ['pageConfigs' => $pageConfigs]);
    }
}
