<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use \Input;
use App\Link;

class LinksController extends Controller {

	public function create(){
	    return view('links.create');
    }
    public function store(){
        $url =Input::get('url');
        $link = Link::firstOrCreate(['url'=>$url]);
       return view('links.success',compact('link'));
    }
    public function show($id){

        $link  = Link::find($id);
        //dd($link);
        return new RedirectResponse($link->url,301);
    }

}
