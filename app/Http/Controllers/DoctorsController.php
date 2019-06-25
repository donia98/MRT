<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Doctor;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\User;
use Illuminate\Support\Facades\Hash;

class DoctorsController extends Controller
{

    use RegistersUsers;


    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('doctors.index')->with('doctors' , Doctor::all())->with('departments' , Department::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctors.create')->with('departments' , Department::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            "D_name"    => "required",
            "department_id"    => "required",
            "username" => "required"
            
        ]);
        $doctor = new Doctor;
       

        $doctor->username = $request->username;
        $doctor->D_name = $request->D_name;
        $doctor->gender = $request->gender;
        $doctor->salary = $request->salary;
        $doctor->B_date = $request->B_date;
        $doctor->adress = $request->adress;
        $doctor->contact_num = $request->contact_num;
        $doctor->department_id = $request->department_id;

        $doctor->save();

    $doctor2 =  User::create([
        'name' => $request->D_name,
        'username' => $request->username,
        'email' => $request->email,
        'password' => Hash::make($request->password),

    ]);

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

        $doctor =  Doctor::find($id);
        return view('doctors.edit')->with('doctor' , $doctor)->with('departments' , Department::all())->with('gender' , $gender);
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
        $doctor = Doctor::find($id);

        // $this->validate($request,[
        //     "D_name"    => "required",
        
            
        // ]);
 
        $doctor->D_name = $request->D_name;
        $doctor->gender = $request->gender;
        $doctor->salary = $request->salary;
        $doctor->B_date = $request->B_date;
        $doctor->adress = $request->adress;
        $doctor->contact_num = $request->contact_num;
        $doctor->department_id = $request->department_id;

        $doctor->save();
        return redirect()->route('doctors');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor =  Doctor::find($id);
        $doctor->delete();
       return redirect()->route('doctors');
    }
}
