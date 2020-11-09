<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function getlist() 
    
    {
    	// this is for get all products form porducts tabel
    	// this is query select * form products 
     	$data = Product::all();
        $deleted = Product::onlyTrashed()->get();

    	// pass data to view 
    	return view('products.productlist', compact('data','deleted'));
    }

    public function searchpro(Request $r)
    {
        if($r->has(['name', 'cost']))
        {
        $data = Product::where('name',$r->q)->where('cost',$r->cost)->get();

                 return view('result',compact('data'));
        }else
        {
            $data = Product::where('name','like','%'.$r->q.'%')->get();
            return view('result',compact('data'));
            
        }               

        // 
        return view('result',compact('data'));
    }
    public function form()//creatproduct controller
    {
    	return view('products.createproduct');
    }

    public function save(Request $request)//save controller
    {
    	// for check form date required
    	$this->validate($request, [
      'name'   => 'required',
      'brand'  => 'required',
      'cost'  => 'required'
    	 ]);


    	// for save new row in database
    	$pro = new Product(); //for new data insertion
    	$pro->name = $request->name;
    	$pro->brand = $request->brand;
    	$pro->cost = $request->cost;
    	$pro->save();

    	// after save redirect get all prodtuct page
    	// with msg
    	// without msg
    	return redirect('/products')->with('message','new record successfully saved');
    }

    public function edit($id)//edit controller
    {
    	$data = Product::find($id);
    	return view('products.aditproduct',compact('data'));
    }
    public function update(Request $request ,$id)//update controller
    {
    	$data = Product::find($id);
		$data->name = $request->name;
    	$data->brand = $request->brand;
    	$data->cost = $request->cost;   
   	    $data->save();
    	return redirect('/products');
    }
    public function showrec($id)
    {
    	$data = Product::find($id);
    	return view('products.showproduct',compact('data'));
    }
    public function removerow($id)
    {
    	$data = Product::find($id);
    	$data->delete();
	return redirect('/products')->with('message','record successfully deleted');    
	}
	// public function reset($id)
	// {
 //    	$data = Product::find($id);
	// return view('products.aditproduct',compact('data'));    
	// }

    public function restore($id)
    {
        $data = Product::where('id',$id)->restore();
     return redirect('/products')->with('message','record successfully restored');   
    }


    public function del($id)
    {
        $data = Product::where('id',$id)->forceDelete();
     return redirect('/products')->with('message','record successfully deleted');   
    }


}


