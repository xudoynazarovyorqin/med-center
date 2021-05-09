<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    

    public function index()
    {
        
        return view('patient.patient');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'region_id' => 'required',
            'city_id' => 'required',
            'phone' => 'required|max:9|min:9',
            'surname' => 'required|min:2',
            'name' => 'required|min:2',
        ]);
    

        $patient = Patient::create([ 
            'region_id'=>$request->region_id,
            'city_id'=>$request->city_id,
            'phone' => $request->phone,
            'name' => $request->name,
            'surname' => $request->surname,
            'diagnos_main' => $request->diagnos_main,
            'diagnos_eye' => $request->diagnos_eye,
            'diagnos_xray' => $request->diagnos_xray,
            'diagnos_cardiolog' => $request->diagnos_cardiolog,
        ]);
        $patient =Patient::where('phone',$request->phone)->get();

        return view('patient.patient-room', compact('patient'));
        // return redirect()->route('room-get');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // foreach($request as $obj){
            
        // }
       
        // dd($request, $id);
        $patient=Patient::find($id);
        
        // dd($patient->status);
        $data = [
            "pills" => $request["pills"],
            "doctordiagnosis" => $request["doctordiagnosis"],
            "advice" => $request["advice"],
        ];
        // $status = '2';
        switch($patient->status){
                case 0:
                    $patient -> update([  
                        'status'=>1,
                        // 'diagnos_main'=>$data
                    ]);
                    break;
        
                case 1:
                    $patient -> update([  
                        'status'=>2,
                        'diagnos_eye'=>$data,
                    ]);
                    break;
                case 2:
                    $patient -> update([  
                        'status'=>3,
                        'diagnos_cardiolog'=>$data,
                    ]);
                    break;
                case 3:
                    $patient -> update([  
                        'status'=>4,
                        'diagnos_xray'=>$data,
                    ]);
                    break;
                case 4:
                    $patient -> update([  
                        'status'=>5,
                        'diagnos_main'=>$data,
                    ]);
                    break;
        
                }
        
       
       
        
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // qani
    }

    public function diagnosis($id)
    {   
        $patient = Patient::where('id', $id )
                              ->first();
                            //   dd($patient->diagnos_eye['pills']);
        return view('doctor.inspection',compact('patient'));
    }

    public function newPatient()
    {
        $user = auth()->user();
        $patients = Patient::where('status', 0 )
                                   ->where( 'city_id', $user->city_id )
                                   ->get();
        return view('doctor.newPatient', compact('patients'));
    }
}
