<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePageController extends Controller
{

    public function homelanding()
    {
        $pageConfigs = ['pageHeader' => false];

        return view('pages.homepage.landingpage', ['pageConfigs' => $pageConfigs]);
    }

    public function homepage()
    {
        $pageConfigs = ['pageHeader' => false];

        return view('pages.homepage.homepage', ['pageConfigs' => $pageConfigs]);
    }

    public function templatedoctor()
    {
        $pageConfigs = ['pageHeader' => false];

        return view('pages.homepage.templatedokter', ['pageConfigs' => $pageConfigs]);
    }

    public function reportdokter()
    {
        $pageConfigs = ['pageHeader' => false];

        return view('pages.homepage.reportdokter', ['pageConfigs' => $pageConfigs]);
    }

    // auth untuk dokter 

    public function logindokter()
    {
        $pageConfigs = ['pageHeader' => false];

        return view('pages.auth.logindokter', ['pageConfigs' => $pageConfigs]);
    }

    public function registrasipasien()
    {
        $pageConfigs = ['pageHeader' => false];

        return view('pages.auth.registrasipasien', ['pageConfigs' => $pageConfigs]);
    }


    // template dokter
    public function allorder()
    {
        $pageConfigs = ['pageHeader' => false];

        return view('pages.homepage.allorder', ['pageConfigs' => $pageConfigs]);
    }

    public function imageviewer()
    {
        $pageConfigs = ['pageHeader' => false];

        return view('', ['pageConfigs' => $pageConfigs]);
    }

    public function registerpasienworkload()
    {
        $pageConfigs = ['pageHeader' => false];

        return view('pages.homepage.registerpasienworkload', ['pageConfigs' => $pageConfigs]);
    }

    public function examroom()
    {
        $pageConfigs = ['pageHeader' => false];

        return view('pages.homepage.examroom', ['pageConfigs' => $pageConfigs]);
    }
}
