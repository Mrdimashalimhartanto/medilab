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

    public function registrasipasien()
    {
        $pageConfigs = ['pageHeader' => false];

        return view('pages.auth.registrasipasien', ['pageConfigs' => $pageConfigs]);
    }

    // Dicom viewer report
}
