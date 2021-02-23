<?php

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

//myexamples:

Route::get('/test', function () {
    return view('hw1');
});

Route::view('/test1', 'welcome'); //'/test1' -> view('example');

Route::get('/test2', function () {
    return redirect('/test');
});

Route::redirect('/test3','/');// '/test3' -> '/'

Route::get('/test3', function(){
	return "This my test3";
});

Route::get('/testid/{id}', function($id){
	return "My id:".$id;
});

Route::get('/testids/{id?}', function($id='123'){
	return "My id static:".$id;
});

Route::get('/testidname/{id}/{name}', function($id, $name){
	return view('hw1').$id." ".$name;
});

Route::get('/contain/{age}/{name?}', function($age, $name = null){
	return 'Your age: '.$age.' '.'Your name:'.$name;
})->where('name', '[a-zA-Z]+');

Route::get('/contain2/{id}/{name?}', function($id, $name=null){
	return "id: ".$id."Name:".$name;
})->where(['id'=>'[0-9]+', 'name'=>'[a-zA-Z]+']);

Route::get('/providers/{sos?}', function($sos=null){
	return "Providers->RouteService..->function boot :".$sos;
});

Route::get('/hw/{name}/{surname}', function($name, $surname){
	return view('hw2').$name.'<br> '.view('hw1').$surname;
});

Route::get('/controller', 'StudentController@index');

//Route::resource('/resource/{id}', 'StudentController');

Route::resource('/onlyr', "StudentController", ['only' => ['index', 'create']]);

//Route::recource('/student', 'StudentController', ['names' => ['crate' => '/student.buld']]);

//array
Route::get('/example', function(){
	return view('example', ["name" => "Alnur", 'age' => '19']);
});

//with()
Route::get('/example2', function(){
	return view('example') -> with("name", "Aruzhan")-> with("age", "18");
});

//compact()
Route::get('/ex/{name}/{age}', function($name, $age){
	return view('example', compact('name', 'age' ));
});

// Route::get('/calculator/{n1}/{sign}/{n2}', 'CalculatorCantroller@c');

Route::get('/hw5/{id}/{dateof}/{age}', 'CalculatorCantroller@show');

