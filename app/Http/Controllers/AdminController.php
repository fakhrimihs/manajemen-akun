<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    function index()
    {
      return view('adminhome');
      echo "<a href='logout'>Logout</a>";
    }

    function admin()
    {
        return view('adminhome');
    }

    function developer()
    {
        return view('adminhome');
    }

    function member()
    {
     return view('adminhome');
    }
}
