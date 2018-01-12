<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BasicpersonController extends Controller
{
    public function index()
    {
        return view('admin.basicperson');
    }

    public function show()
    {
        return view('admin.basicinformation');
    }
}
