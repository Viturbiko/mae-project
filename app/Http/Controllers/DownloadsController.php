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
                
                $path = storage_path('downloads/MAE_project_summary.pdf');

                return response()->download($path);

                break;

            case 'file3':
                
                $path = storage_path('downloads/MAE_project_preliminary_report.pdf');

                return response()->download($path);

                break;

            case 'file4':
                
                $path = storage_path('downloads/MAE_external_cost_calculator_tool.zip');

                return response()->download($path);

                break;

            case 'file5':
                
                $path = storage_path('downloads/MAE_calibrated_transport_model_tool.zip');

                return response()->download($path);

                break;

            case 'file6':
                
                $path = storage_path('downloads/MAE_shipowners_perspective_tool.zip');

                return response()->download($path);

                break;

            case 'file7':
                
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
