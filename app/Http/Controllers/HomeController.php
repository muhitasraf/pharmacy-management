<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $title = 'Dashboard';
        $total_customer = DB::table('customer')->count();
        $total_supplier = DB::table('company')->count();
        $total_medicine = DB::table('brands')->count();
        return view('dashboard.summary',compact('title','total_customer','total_supplier','total_medicine'));
    }
}
