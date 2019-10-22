<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test extends Controller
{
    public function index()
    {
    	return view('indreni');
    }
    public function printmsg($fname,$lname)
    {
    	echo "hello"." ".$fname." ".$lname;
    }
}
