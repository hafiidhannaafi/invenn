<?php
namespace App\Http\Controllers;

use index;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class HomeController extends Controller
{
    

    public function index()
    {
        $role=Auth::user()->roles_id;
        if($role=='1')
        {
            return view('admin');
        }

        if($role=='2')
        {
            return view('kepalaunit');
        }

        if($role=='3')
        {
            return view('staff');
        }
        else
        {
            return view('dashboard');
        }
    }
}