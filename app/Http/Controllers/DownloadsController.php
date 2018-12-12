<?php

namespace App\Http\Controllers;

use App\DownloadInfo;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DownloadsController extends Controller
{

    public function DownloadFile(Request $request)
    {
        return $request;

        if ($request->button_name == 'calendar_file') 
        {
            $path = storage_path('downloads/MAE_PROJECT_PRELIMINARY_REPORT.pdf');

            return response()->download($path);
        }
        else
        {
            $this->validate($request, [
                'name' => 'required|min:3',
                'email' => 'required|email',
                'company' => 'required|min:3',
                'privacy' => 'required'
            ]);
        }

        $user_info = new DownloadInfo;

        $user_info->updateOrCreate(['email' => $request->email], ['name' => $request->name, 'email' => $request->email, 'company' => $request->company, 'privacy' => $request->privacy]);        

        switch ($request->button_name) 
        {
            case 'file1':

                $path = storage_path('downloads/MAE_PROJECT_SUMMARY.pdf');

                return response()->download($path);

                break;

            case 'file2':
                
                $path = storage_path('downloads/MAE_2.zip');

                return response()->download($path);

                break;

            case 'file3':
                
                $path = storage_path('downloads/MAE_3.zip');

                return response()->download($path);

                break;

            case 'file4':
                
                $path = storage_path('downloads/MAE_4.zip');

                return response()->download($path);

                break;

            case 'file5':
                
                $path = storage_path('downloads/MAE_PROJECT_PRELIMINARY_REPORT.pdf');

                return response()->download($path);

                break;

            case 'file6':
                
                $path = storage_path('downloads/MAE_project_preliminary_report.pdf');

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
