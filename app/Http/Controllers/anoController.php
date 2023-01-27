<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facedes\input;
use Illuminate\Support\Facedes\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use App\Exports\UserExport;
use App\Imports\UsersImport;
use Carbon\Carbon;
use App\Exports\ProfileExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Testing\MimeType;
// use Intervention\Image\Facades\Image;
use Intervention\Image\Facades\Image as Image;
// use app\Models\ProviderMasterModel; 
// use App\Models\ConnectionMasterModel; 
// use App\Models\RegistrationDetailsModel;
use PDF;

use Session;
use Illuminate\Support\Facades\Crypt;



class anoController extends Controller
{

    public function import(Request $request)
    {
        // dd("hii");
        $validatedData = $request->validate([
 
            'file' => 'required',
  
         ]);
         Excel::import(new UsersImport,$request->file('file'));
         
         return redirect('excelview')->with('status', 'The file has been excel/csv imported to database in laravel 9');
       
     }
     public function excelview()
     {
        $regDetails = DB::table('salary_dtls')->select('*', 'emp_master.name', 'emp_master.basic_salary')
         ->leftjoin('emp_master', 'emp_master.emp_id', '=', 'salary_dtls.emp_id')->get();
        //  $regDetails = DB::table('salary_dtls')->get();
        //  dd($regDetails);
         return view('excelview', ['regDetails' => $regDetails]);
     }
     public function generatepdfex()
     {
        // dd("hiii");
        $regDetails = DB::table('salary_dtls')->select('*', 'emp_master.name', 'emp_master.basic_salary')
         ->leftjoin('emp_master', 'emp_master.emp_id', '=', 'salary_dtls.emp_id')->get();
        $pdf = PDF::loadView('excelview', ['regDetails' => $regDetails]);

        return $pdf->download('data.pdf');
     }
    
}
