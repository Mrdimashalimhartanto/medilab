<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function dokter()
    {
        $pageConfigs = ['pageHeader' => false];

        return view('pages.dokter.dokter', ['pageConfigs' => $pageConfigs]);
    }
}
