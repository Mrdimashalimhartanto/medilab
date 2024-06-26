<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PemberianObatController extends Controller
{
    public function pemberianobat()
    {
        $pageConfigs = ['pageHeader' => false];

        return view('', ['pageConfigs' => $pageConfigs]);
    }
}
