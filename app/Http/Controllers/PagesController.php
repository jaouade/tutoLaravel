<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public  function about(){
	    $about ="about us";
	    $numbers=[];//[1,2,3,4,5,6,7,8,9,10];
//	    for ($i=1;$i<9;$i++){
//            $numbers [$i]= $i;
//        }
	    return view('pages/about',compact('about','numbers'));
    }

}
