<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\DB;

class UsersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd("hii csv");
        
        $emp_id=$row['emp_id'];
        $hra=$row['hra'];
        
        $da=$row['da'];
        $ta=$row['ta'];
        $pf=$row['pf'];
        $data=DB::table('emp_master')->where('emp_id',$emp_id)->get();
        $basicSal=$data[0]->basic_salary;
        $hrap = ($basicSal / 100 )*$hra;
        $dap = ($basicSal / 100 )*$da;
        $tap = ($basicSal / 100 )*$ta;
        $pap = ($basicSal / 100 )*$pf;
        // dd($hrap);
        $netSal= $basicSal + $hrap + $dap + $tap - $pap ;

        $value=DB::table('salary_dtls')->where('emp_id',$emp_id)->count();
        if ($value >0)
        {
            dd("alredy exist");
        }else{
            DB::table('salary_dtls')->insert(
                [
                        'emp_id'     => $emp_id,
                        'hra'    => $hrap, 
                        'da'    => $dap, 
                        'ta'    => $tap, 
                        'pf'    => $pap, 
                        'net_salary'    => $netSal, 
    
                ]
            );

        }
      
    }
}
