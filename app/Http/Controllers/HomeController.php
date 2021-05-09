<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Region;
use App\Models\City;
use App\Models\Patient;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        

        $user = auth()->user();
        switch($user->role) {
            case 0:
                $regions = Region::all();
                $cities =City::all();
                $doctors= User::where('role', 1)->get();
                
                return view('admin.mainpanel', compact('doctors','regions','cities'));
                break;
            case 1:
                $patients = Patient::where('status', 0 )
                                   ->where( 'city_id', $user->city_id )
                                   ->get();
                $patient_complate = Patient::where('status', 4 )
                                   ->where( 'city_id', $user->city_id )
                                   ->get();

                return view('doctor.maindoctor', compact('patients', 'patient_complate'));
                break;
            case 2:
                 $patients = Patient::where('status', 1 )
                                   ->where( 'city_id', $user->city_id )
                                   ->get();
                return view('doctor.eye-doctor', compact('patients'));
                break;
            case 3:
                 $patients = Patient::where('status', 2 )
                                   ->where( 'city_id', $user->city_id )
                                   ->get();
                return view('doctor.cardiologist' , compact('patients'));
                break;
            case 4:
                 $patients = Patient::where('status', 3 )
                                   ->where( 'city_id', $user->city_id )
                                   ->get();
                return view('doctor.x-ray' , compact('patients'));
                break;
        }
    }
    public function main()
    {
        return view('show');
    }
}
