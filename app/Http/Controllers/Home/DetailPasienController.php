<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailPasienController extends Controller
{
    public function detailpasien()
    {
        $pageConfigs = ['pageHeader' => false];

        return view('pages.list-pasien.detail', ['pageConfigs' => $pageConfigs]);
    }

}
