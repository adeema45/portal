<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Directory;

class DirectoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Directory::all();
        $deleted= Directory::onlyTrashed()->get();
        return view('directory.index', compact('data','deleted'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('directory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Directory();
        $data->bizname = $request->bizname;
        $data->contactname = $request->contactname;
        $data->address = $request->address;
        $data->phone = $request->phone;
        $data->save();

        return redirect('directory');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Directory::find($id);

        return view('directory.show', compact('data'));
    }   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Directory::find($id);

        return view('directory.edit', compact('data'));
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
        $data = Directory::find($id);
        $data->bizname = $request->bizname;
        $data->contactname = $request->contactname;
        $data->address = $request->address;
        $data->phone = $request->phone;
        $data->save();

        return redirect('directory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function del($id)
    {
        $data = Directory::find($id);

        $data->delete();

        return redirect('directory');
    }
    public function removerow($id)
    {
        $data = Directory::find($id);
        $data->delete();
    return redirect('/directory')->with('message','record successfully deleted');    
    }
    public function restore($id)
    {
        $data = Directory::where('id',$id)->restore();
     return redirect('/directory')->with('message','record successfully restored');   
    }


    public function pdel($id)
    {
        $data = Directory::where('id',$id)->forceDelete();
     return redirect('/directory')->with('message','record successfully deleted');   
    }
}
