<?php

namespace App\Http\Controllers;

use App\DownloadInfo;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;

class DownloadsController extends Controller
{
    public function DownloadFile(Request $request)
    {
        if (in_array($request->button_name, ['file4', 'file5', 'file6'])) {
            $this->validate($request, [
                'download_name' => 'required|min:3',
                'download_email' => 'required|email',
                'download_company' => 'required|min:3',
                'download_privacy' => 'required'
            ]);

            $user_info = new DownloadInfo;

            $user_info->updateOrCreate(['email' => $request->download_email], ['name' => $request->download_name, 'email' => $request->download_email, 'company' => $request->download_company, 'privacy' => $request->download_privacy]);

            Mail::send('new-download', [
                'name' => $request->download_name,
                'company' => $request->download_company,
                'email' => $request->download_email
            ], function($mail) use ($request){
                $mail->from($request->download_email, $request->download_name);
                $mail->to('mae.project@puertos.es')->subject('Nueva descarga de MAE-Project');
            }); 
        }

        switch ($request->button_name) 
        {
            case 'file1':

                $path = storage_path('downloads/MAE_project_briefing.pdf');

                return response()->download($path);

                break;

            case 'file2':
                
                $path = storage_path('downloads/191117_MAE_project_executive_summary_final_printed_2.pdf');

                return response()->download($path);

                break;

            case 'file3':
                
                $path = storage_path('downloads/191117_MAE_project_executive_report_final_EN_rev.pdf');

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
                
                $path = storage_path('downloads/191126_MAE_Action_MoS_forum_Rome.zip');

                return response()->download($path);

                break;

            case 'file8':
                
                $path = storage_path('downloads/MAE_project_Italian_Ecobonus_experience_final.pdf');

                return response()->download($path);

                break;

            case 'file9':
                
                $path = storage_path('downloads/MAE_project_legal_handbook_final.pdf');

                return response()->download($path);

                break;

            case 'file10':
                
                $path = storage_path('downloads/MAE_project_administrative_technological_pipeline_final.pdf');

                return response()->download($path);

                break;
        }
    }
}
