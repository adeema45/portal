<?php

use App\student;
use App\attendece;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return view('welcome');
});



Route::get('/profile/{id}',function($id)
{
	$data =  \App\User::find($id);

	return view('profile', compact('data'));
//->with('profile')->get();
});
// Route::get('/sam', function () 
// {
// 	$uzma = 'my first variable';


// 	$ali ='show data';
// 	$sami ='field filled';
//     return view('sam', compact('uzma','ali','sami'));
// });


// Route::get('/st',function()
// {
// 	$uzma =('enter students data');
// 	return view('sam',compact('uzma'));
// });
// Route::get('/ft',function()
// {
// 	$uzma ='enter teachers data';
// 	return view('sam',compact('uzma'));
// });
// Route::get('/ai',function()
// {
// 	$myname='pakistan zindabad';
// 	return view('sam',compact('myname'));
// });


// Route::get('/uploadfile', 'MainController@index');
// Route::post('/uploadfile', 'MainController@upload');
// Route::get('/main', 'MainController@index');
// Route::get('/main/ureg', 'MainController@create');
// Route::post('/main/checklogin', 'MainController@checklogin');
// Route::post('/main/register', 'MainController@store');
// Route::get('main/successlogin', 'MainController@successlogin');
// Route::get('main/logout', 'MainController@logout');


// Route::get('/customer', 'CustomerController@index');



Route::get('/products', 'ProductController@getlist');
Route::get('/search', 'ProductController@searchpro');
Route::get('/products/new', 'ProductController@form');
Route::get('/products/edit/{id}', 'ProductController@edit');
Route::get('/products/show/{id}', 'ProductController@showrec');

Route::get('/products/restore/{id}', 'ProductController@restore');
Route::get('/products/del/{id}', 'ProductController@del');
Route::get('/products/removerow/{id}', 'ProductController@removerow');

Route::post('/products/save', 'ProductController@save');
Route::get('/products/reset/{id}', 'ProductController@reset');
Route::post('/products/update/{id}', 'ProductController@update');


Route::prefix('admin')->group(function () {
Route::get('/directory', 'DirectoryController@index');
Route::get('/directory/create', 'DirectoryController@create');
Route::post('directory/store', 'DirectoryController@store');
Route::get('/directory/show/{id}', 'DirectoryController@show');
Route::get('/directory/edit/{id}', 'DirectoryController@edit');
Route::get('/directory/dele/{id}', 'DirectoryController@del');
Route::post('/directory/update/{id}', 'DirectoryController@update');


Route::get('/directory/restore/{id}', 'DirectoryController@restore');
Route::get('/directory/pdel/{id}', 'DirectoryController@pdel');
Route::get('/directory/removerow/{id}', 'DirectoryController@removerow');

});
// Route::get('/client','ClientController@index');


Route::get('/books','BooksController@index');
Route::get('/books/create','BooksController@create');
Route::get('/books/show','BooksController@show');
Route::get('/books/edit/{id}','BooksController@edit');
Route::get('/books/trash/{id}','BooksController@trash');
Route::get('/books/del/{id}','BooksController@delete');
Route::post('/books/store','BooksController@store');

// Route::get('/client/index', 'ClientController@index');





Route::resource('boks','BookController');
Route::resource('group','GroupController');

Route::get('test',function(){
	$a ="22q";
	$b =22;

	if($a == "22q"){
		return 'hello 1';

	}elseif($a == $b){
		return 'hello 2';
	}
	else{
		return 'byby';
	}});
Route::resource('client','ClientController');

Route::resource('table','TableController');

Route::resource('multiple','MultipleController');

Route::get('att',function()
{
	$data = student::where('id',1)->with('attendence')
		->get();
	//dd($data);
	return view('att.att',compact('data'));
});
Route::resource('att','StudentController');






// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('mydate',function(){
// 	$year = date("y");
// $month = date("m");
// $day = '30';

// $current_date = new DateTime(date('Y-m-d'), new DateTimeZone('Asia/Dhaka'));
// $end_date = new DateTime("$year-$month-$day", new DateTimeZone('Asia/Dhaka'));
// $interval = $current_date->diff($end_date);
// echo $interval->format('%a day(s)');
	return view('mydate');
});


Route::resource('atnd','AttendanceController');
