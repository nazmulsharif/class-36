<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentController extends Controller
{
   public function index(){
   		return view('testview');
   		
    }
    public function contact(){
 
    	return view('contact',['name'=>'nazmul','age'=>'25']);
    }
    public function create(){
    	return view('form');

    }
    public function store(Request $req){
    	$req->validate([
    		'username'=>'required',
    		'pass'=>'required'

    	]);
    	 $username = $req->username;
    	 $pass = $req->pass;
    	 return view('index',['name'=>$username,'pass'=>$pass]);
    }
}
