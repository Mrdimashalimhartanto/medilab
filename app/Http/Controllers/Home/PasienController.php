<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function pasien()
    {
        $pageConfigs = ['pageHeader' => false];

        return view('pages.list-pasien.pasien', ['pageConfigs' => $pageConfigs]);
    }
}
