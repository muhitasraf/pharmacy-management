<?php
namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index(){
        $title = 'Dashboard';
        return view('dashboard.index',compact('title'));
    }
}
