<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home(){
        return view ("home");


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
