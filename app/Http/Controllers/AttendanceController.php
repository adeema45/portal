<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\attendance;
use App\student; 
use DB;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $q = DB::table('students')
        // ->join('attendances', function ($join) {
        //     $join->on('students.id', '=', 'attendances.student_id');
        // })
        // ->get();

        $q = student::all();
            $qq = $q->get();
        return $qq; 

        // return attendance::Rightjoin('students','students.id','=', 'attendances.student_id')
        // ->Rightjoin('i_classes','i_classes.id','=','attendances.class_id')
        // ->Rightjoin('sections','sections.id','=','attendances.section_id')
        // ->select('students.id','students.name','i_classes.name as cls','sections.name as sec','attendances.date','attendances.status')
        // ->get(); 

        //attendance::with('students','iclass','isection')->get();




        // return attendance::addSelect(
        //     ['sname' => student::select('id','name')
        //     ->whereColumn('student_id', 'students.id')
        //     ->limit(1)])

        // ->get();
        // $data = attendance::all();
        // return view('attendance.index',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('attendance.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = attendance::all();
    return view('attendance.show',compact('data'));

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
