<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /*public function index(){
        return view('welcome');
    }*/

    /*public function index(){
        return view('pages.index');
    } */

    // send data controller to view
    public function index(){
        $index = "Welcome to Lara Lesson"; 
        return view('pages.index')->with('title',$index);
    }

    public function about(){
        $about = "About Us"; 
        return view('pages.about')->with('title',$about);
    }

    public function service(){

        //pass array
        $data = array(
            'title' => "Our Services",
            'services' => ['SYAFIQA','AIN','ALFIDA'] 
        );
        
        return view('pages.service')->with($data);
    }
}
