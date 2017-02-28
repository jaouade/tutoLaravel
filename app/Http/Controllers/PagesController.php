<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller {

	public function contact(){
	    $to = 'jaouadelaoud@gmail.com';
        Mail::send('emails.email',['username'=>'test'],function ($message) use ($to){
            $message->to($to,'name')->subject('heloo world');
            
        });
    }

}
