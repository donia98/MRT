<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Treatment;
use App\Patient;
use App\Doctor;
use App\Medicine;
class TreatmentController extends Controller
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
        return view('treatments.create')->with('patients' , Patient::all())->with('doctors' , Doctor::all())->with('medicines' , Medicine::all());

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            "patient_id" => "required",
            "doctor_id" => "required",
            "medicine_id" => "required",
            "T_date" => "required"

            
  
           ]);

           $treatment = new Treatment;
           $treatment->patient_id = $request->patient_id;
           $treatment->doctor_id = $request->doctor_id;
           $treatment->medicine_id = $request->medicine_id;
           $treatment->T_date = $request->T_date;
           $treatment->disease = $request->disease;
           $treatment->treatment_details = $request->treatment_details;


           $treatment->save();
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
