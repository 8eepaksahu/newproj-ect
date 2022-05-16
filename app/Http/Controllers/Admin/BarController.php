<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BarController extends Controller
{
    //
    public function index(){
        return view('admin.chart.bar');
    }
    public function pie(){
        return view('admin.chart.pie');
    }
    public function mix(){
        return view('admin.chart.mixchart');
    }
}
