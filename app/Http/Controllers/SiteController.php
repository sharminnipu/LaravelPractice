<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home(){
        return view ("home");


    }


    public function formHandler(Request $request){
         $rules=[
             'name'=>'required|min:5',
             'email'=>'required|email'
         ];

            $this->validate($request,$rules);


          return $request->all();

    
    }

    public function about(){
        return view ("about");


    }

    public function contact(){
        return view ("contact");


    }
    public function contactHandellar(Request $request){
        return "Your name is : " . $request->input('name');


    }

    public function post($id){

        return "You passed :" .$id;
    }
}
