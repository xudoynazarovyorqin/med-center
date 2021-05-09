<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Region;
use App\Models\City;
use App\Models\Patient;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use Auth;

class PagesController extends Controller
{
    
    public function doctor()
    {
        $regions = Region::all();
        $cities = City::all();
        return view('admin.add-doctor', [ 
            'regions' => $regions,
            'cities' => $cities    
        ]);
    }
    public function fetch(Request $request)
    {   
        
        $data = DB::table('cities')->where('region_id', $request->value)->get();

        $output = '<option value ="">Select City</option>';
        foreach($data as $row)
        {
            $output .= '<option value="'.$row->id.'">'.$row->name_uz.'</option>';
        }
        echo $output;
    }






















    public function actions()
    {        
        // $patients = Patient::all();
        $regions = Region::all();

        foreach($regions as $region)
        {
        $patients =  DB::table('patients')
                        ->join('regions','regions.id','=','patients.region_id')

                        ->select( 'regions.name_uz as region_name',
                        DB::raw('sum(case when patients.status=0 then 1 else 0 end) as patient_0,
                        sum(case when patients.status=1 then 1 else 0 end) as patient_1,
                        sum(case when patients.status=2 then 1 else 0 end) as patient_2,
                        sum(case when patients.status=3 then 1 else 0 end) as patient_3,
                        sum(case when patients.status=4 then 1 else 0 end) as patient_4,
                        sum(case when patients.status=5 then 1 else 0 end) as patient_5')
                        
                        )
                        ->groupBy('regions.id')
                        ->orderBy('regions.id')
                        ->get();
        }
        return view('admin.adminaction', compact('regions','patients'));
    }

    public function patientRegister(Request $request)
    {
        $patient = Patient::where('phone', $request->phone)->first(); 
        


        if($patient)
        {
            
        $patient = Patient::where('phone', $request->phone)->first();
           return view('patient.patient-room', compact('patient'));
        }else
        {
            $regions = Region::all();
            $cities = City::all();
            return view('patient.patientInfo', [ 
                'regions' => $regions,
                'cities' => $cities,
                'phone' => $request['phone'],
            ]);
        }
        
    }

    public function eyedoctor()
    {
        $regions = Region::all();
        $cities = City::all();
        $doctors = User::where('role',2)->orderBy('id','DESC')->get();
        return view('admin.admin-eye', compact('doctors','regions','cities'));
    }
    
    
    public function mainpanel()
    {
        $regions = Region::all();
        $cities = City::all();
        $doctors= User::where('role', 1)->orderBy('id','DESC')->get();
        return view('admin.mainpanel', compact('doctors','regions','cities'));
        
        // $doctors = User::where('role', 1)->get();
        // return view('admin.mainpanel', compact('doctors'));
    }

    public function cardiolog()
    {
        $regions = Region::all();
        $cities = City::all();
        $doctors = User::where('role',3)->orderBy('id','DESC')->get();
        return view('admin.admin-cardiolog', compact('doctors','regions','cities'));
    }
    
     public function xray()
    {
        $regions = Region::all();
        $cities = City::all();
        $doctors = User::where('role',4)->orderBy('id','DESC')->get();
        return view('admin.admin-xray', compact('doctors','regions','cities'));
    }

    public function room(){
      
        return view('patient.patient-room');
    }

    

}

