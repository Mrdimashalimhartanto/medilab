<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function workload()
    {
        $pageConfigs = ['pageHeader' => false];

        return view('pages.report.workload', ['pageConfigs' => $pageConfigs]);
    }

    public function downloadexcel()
    {
        $pageConfigs = ['pageHeader' => false];

        return view('', ['pageConfigs' => $pageConfigs]);
    }

    public function backupexcel()
    {
        $pageConfigs = ['pageHeader' => false];

        return view('', ['pageConfigs' => $pageConfigs]);
    }

    public function storageexcel()
    {
        $pageConfigs = ['pageHeader' => false];

        return view('', ['pageConfigs' => $pageConfigs]);
    }

    public function chart()
    {
        $pageConfigs = ['pageHeader' => false];

        return view('', ['pageConfigs' => $pageConfigs]);

    }
}
