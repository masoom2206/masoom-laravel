<?php

namespace App\Http\Controllers;

class AdminController extends Controller {
    public function index( $number, $second = NULL )
    {
        //echo "Index method from AdminController.";
        //return view('welcome');
        print "Number passed is = $number<br/>";
        print "Another number is = $second";
    }
    public function postMethod()
    {
        
    }
}
