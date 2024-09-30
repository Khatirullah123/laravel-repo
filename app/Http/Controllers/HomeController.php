<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {
            return view('admin.home'); // Ensure the admin view exists
        } else {
            return view('user.home'); // Ensure the dashboard view exists
        }
    }

    public function index()
    {

        if(Auth::id()){
            return redirect('redirect');
        }
        return view('user.home');
    }

}
