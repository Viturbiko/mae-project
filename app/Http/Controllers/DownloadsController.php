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
                
                $path = storage_path('downloads/MAE_PROJECT_SUMMARY.pdf');

                return response()->download($path);

                break;

            case 'file3':
                
                $path = storage_path('downloads/MAE_PROJECT_PRELIMINARY_REPORT.pdf');

                return response()->download($path);

                break;

            case 'file4':
                
                $path = storage_path('downloads/MAE_EXTERNAL_COST_CALCULATOR_TOOL_V10_2_user_manual.pdf');

                return response()->download($path);

                break;

            case 'file5':
                
                $path = storage_path('downloads/MAE_CALIBRATED_TRANSPORT_MODEL_TOOL_user_manual.pdf');

                return response()->download($path);

                break;

            case 'file6':
                
                $path = storage_path('downloads/MAE_SHIPOWNERS_PERSPECTIVE_TOOL_V2_user_manual.pdf');

                return response()->download($path);

                break;

            case 'file7':
                
                $path = storage_path('downloads/MAE_project_general_presentation.pdf');

                return response()->download($path);

                break;

            case 'file8':
                
                $path = storage_path('downloads/MAE_project_EP_presentation.pdf');

                return response()->download($path);

                break;
        }
    }

    public function DownloadAgenda()
    {
        $path = storage_path('downloads/MAE_PROJECT_PRELIMINARY_REPORT.pdf');

        return response()->download($path);
    }

}
