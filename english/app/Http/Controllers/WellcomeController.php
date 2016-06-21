<?php

namespace App\Http\Controllers;

class WellcomeController extends Controller
{

	// public function testAction(){
	// 	echo 'Day la action';
	// }
	public function testAction(){
		return redirect()->route('hn');
	}

}