<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
    	return view('main.list');
    }
    public function show(){
    	return view('main.show');
    }
    public function getAdd(){
    	return view('main.add');
    }
}
