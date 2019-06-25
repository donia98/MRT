<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Patient;
use App\Treatment;
use App\Doctor;
use App\Medicine;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('patients.index')->with('patients' , Patient::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients.create')->with('rooms' , Room::all());
        //->with('rooms' , Room::all());

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
            "P_name"    => "required",
        
            
        ]);
       $patient = new Patient;

    $patient->P_name = $request->P_name;
    $patient->gender = $request->gender;
    $patient->Rec_ID = $request->Rec_ID;
    $patient->B_date = $request->B_date;
    $patient->address = $request->address;
    $patient->contact_num = $request->contact_num;
    $patient->Room_ID = $request->Room_ID;
    $patient->save();
    return redirect()->back();

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
        
        $gender = array('Male' , 'Female');

        $patient =  Patient::find($id);
        return view('patients.edit')->with('patient' , $patient)->with('rooms' , Room::all())->with('gender' , $gender);;
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
        $patient = Patient::find($id);

        $patient->P_name = $request->P_name;
        $patient->gender = $request->gender;
        $patient->Rec_ID = $request->Rec_ID;
        $patient->B_date = $request->B_date;
        $patient->address = $request->address;
        $patient->contact_num = $request->contact_num;
        $patient->Room_ID = $request->Room_ID;

        $patient->save();
        return redirect()->route('patients');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $patient =  Patient::find($id);
        $patient->delete();
       return redirect()->route('patients');
    }


    public function view($id)
{

    $patient =  Patient::find($id);
    return view('patients.view')
                        ->with('patient' , $patient)
                        ->with('treatments' , Treatment::all())
                        ->with('doctors' , Doctor::all())
                        ->with('medicines' , Medicine::all());

}
}

