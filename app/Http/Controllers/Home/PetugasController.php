<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function petugas()
    {
        $pageConfigs = ['pageHeader' => false];

        return view('', ['pageConfigs' => $pageConfigs]);
    }
}
