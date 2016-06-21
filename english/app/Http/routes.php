<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dangnhap',function(){
	$hoten="TBT";
	return view('dangnhap',compact('hoten'));
});
//
Route::get('/testController','WellcomeController@testAction');
//
Route::get('ha-noi',['as'=>'hn',function(){
	return "Ha noi nong nan";
}]);

Route::group(['prefix'=>'banh'],function(){
	Route::get('banh-beo',function(){
	return "Day la ban banh beo";
	});
	Route::get('banh-nam',function(){
		return "Day la ban banh nam";
	});
	Route::get('banh-xeo',function(){
		return "Day la ban banh xeo";
	});
	Route::get('banh-khoai',function(){
		return "Day la ban banh khoai";
	});
});

//demo view
Route::get('demoView',function(){
	return view('layout.sub.view');
});
Route::get('check-view',function(){
	if(view()->exists('layout.sub.view')){
		return "Ton tai view";
	}
	else{
		return 'Khong ton tai view';
	}
});
Route::get('demoMaster',function(){
	return view('layout.template.sub');
});
Route::get('demoLayout',function(){
	return view('layout.template.layout');
});
Route::get('demoMarquee',function(){
	return view('layout.template.marquee');
});
Route::get('url/asset',function(){
	return asset('public/template/css/mystyle.css');
});
Route::get('url/to',function(){
	return URL::to('');
});

//
Route::get('schema/create',function(){
	Schema::create('users',function($table){
		$table->increments('id');
		$table->string('username');
		$table->string('password');
		$table->text('detail');
		$table->timestamps();
	});
});
Route::get('schema/rename',function(){
	Schema::rename('users', 'sttt');	
});
Route::get('schema/drop',function(){
	Schema::drop('sttt');
});
Route::get('schema/chang-col-attr',function(){
	Schema::table('users',function($table){
		$table->string('password',50)->change();
	});
});
Route::get('schema/drop-col',function(){
	Schema::table('users',function($table){
		$table->dropColumn('password');
	});
});
Route::get('schema/create/cate',function(){
	Schema::create('category',function($table){
		$table->increments('id',10);
		$table->string('name',255);
		$table->timestamps();
	});
});
Route::get('schema/create/pro',function(){
	Schema::create('product',function($table){
		$table->increments('id');
		$table->string('name');
		$table->integer('gia');
		//User key foreign
		$table->integer('cate_id')->unsigned();
		$table->foreign('cate_id')->references('id')->on('category');
		$table->timestamps();
	});
	echo 'create table product success!!!';
});
//Query Buider
Route::get('query/select',function(){
	$category = DB::table('category')->select()->get();
	return view('layout.template.category')->with('category',$category);
});