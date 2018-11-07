<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DownloadsController extends Controller
{
    public function DownloadFile1()
    {
    	$path = storage_path('downloads/MAE_1.pdf');

    	return response()->download($path);
    }

    public function DownloadFile2()
    {
    	$path = storage_path('downloads/MAE_2.zip');

    	return response()->download($path);
    }

    public function DownloadFile3()
    {
    	$path = storage_path('downloads/MAE_3.zip');

    	return response()->download($path);
    }

    public function DownloadFile4()
    {
    	$path = storage_path('downloads/MAE_4.zip');

    	return response()->download($path);
    }
}
