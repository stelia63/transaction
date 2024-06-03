<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewadminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
}
