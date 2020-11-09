
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;

class CustomerController extends Controller
{
    function index()
    {
    	return view('customer');
    }

    function savecustomer(Request $request)
    {
     $this->validate($request, [
      'name'   => 'required|name',
      'password'  => 'required|alphaNum|min:3',
     ]);
	}
}