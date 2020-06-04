<?php

namespace App\Http\Controllers;

use App\DownloadInfo;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DownloadsController extends Controller
{

    public function DownloadFile(Request $request)
    {
        
        $this->validate($request, [
            'download_name' => 'required|min:3',
            'download_email' => 'required|email',
            'download_company' => 'required|min:3',
            'download_privacy' => 'required'
        ]);

        $user_info = new DownloadInfo;

        $user_info->updateOrCreate(['email' => $request->download_email], ['name' => $request->download_name, 'email' => $request->download_email, 'company' => $request->download_company, 'privacy' => $request->download_privacy]);        

        switch ($request->button_name) 
        {
            case 'file1':

                $path = storage_path('downloads/MAE_project_briefing.pdf');

                return response()->download($path);

                break;

            case 'file2':
                
                $path = storage_path('downloads/01_MAE_Action_Executive_Summary_191117_printed_2.pdf');

                return response()->download($path);

                break;

            case 'file3':
                
                $path = storage_path('downloads/02_MAE_Action_Executive_Report_191117.pdf');

                return response()->download($path);

                break;

            case 'file4':
                
                $path = storage_path('downloads/MAE_case-study_external_cost_calculator.zip');

                return response()->download($path);

                break;

            case 'file5':
                
                $path = storage_path('downloads/MAE_case-study_market_analysis_modelling_tool.zip');

                return response()->download($path);

                break;

            case 'file6':
                
                $path = storage_path('downloads/MAE_case-study_shipowners_perspective_tool.zip');

                return response()->download($path);

                break;

            case 'file7':
                
                $path = storage_path('downloads/MAE_Action_short_presentation_200121.pdf');

                return response()->download($path);

                break;
        }
    }

    public function DownloadAgenda()
    {
        $path = storage_path('downloads/Mae_Forum_rome.zip');

        return response()->download($path);
    }

}
