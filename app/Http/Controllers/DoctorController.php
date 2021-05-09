<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Region;
use App\Models\City;


class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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

         $doctor = User::create([ 
            'region_id'=>$request->region_id,
            'city_id'=>$request->city_id,
            'password' => bcrypt($request->password),
            'login' => $request->login,
            'role' => $request->role,
        ]);
        return redirect()->route('admin-panel');

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
        $doctor = User::where('id',$id)->first();
        $regions = Region::all();
        $cities = City::all();
        // dd($doctor);
        return view('admin.update', compact('doctor','regions','cities'));
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
   // update huddi createdagiday prosta method put yoki patch buladi routedagi metodmi ha uyam formdagiyam keyin unda id yuborish kerak idsiga qarab bazadan doktorni topib tahrirlaydi yangi malumotlarga shu uzing urnab kur qayta qayta keyini suraysan bulmay qoilsahay davaymaulaslkdhflkahsdjfajiahg hahahaha
        
        $data =$request->all();
        $doctor=User::find($id);
        $doctor -> update($data);        
        return redirect()->route('admin-panel');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($request);
        $data= User::find($id); // idni qerdan to request $request emas edi $id edi o'rniga
        $data -> delete();

        return redirect()->route('admin-panel');
        
    }
}
