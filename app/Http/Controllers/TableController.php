<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\table;
class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = table::all();
        return view('table.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('table.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
    $this->validate(request(),[
            //put fields to be validated here
            ]);         
      
    $name = $request->name;
$class = $request->class;
$subject= $request->subject;

foreach($name as $key => $no)
{
    $input['name'] = $no;
    $input['class'] = $class[$key];
    $input['subject'] = $subject[$key];

    table::create($input);

}


        return redirect()->route('table.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = table::find($id);
        return view('table.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = table::all();
        return view('table.edit',compact('data'));
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
        $data = new table();
        $data->id = $request->id;
        $data->name = $request->name;
        $data->class = $request->class;
        $data->subject = $request->subject;
        $data->save();
        return redirect('table');
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
