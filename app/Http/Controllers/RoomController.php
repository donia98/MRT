<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        
        return view('rooms.index')->with('rooms' , Room::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aaas = array('1' => 'ameer' , '2' => '121');

        return view('rooms.create')->with('aaas' , $aaas);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

           $room = new Room;
           $room->status = $request->status;
           $room->R_type = $request->R_type;

           $room->save();
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
        $aaas = array('1' => 'ameer' , '2' => '121');

        $room =  Room::find($id);
        return view('rooms.edit')->with('room' , $room)->with('aaas' , $aaas);
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
        $room =  Room::find($id);
        $room->status = $request->status;
        $room->R_type = $request->R_type;

        $room->save();
       return redirect()->route('rooms');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room =  Room::find($id);
        $room->delete();
       return redirect()->route('rooms');
    }
}
