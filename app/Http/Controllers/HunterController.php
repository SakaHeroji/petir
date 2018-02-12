<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HunterController extends Controller
{
     public function index() {
       
        return view('hunters.dashboard');
    }

    public function profile() {
       
        return view('hunters.profile');
    }

    public function mailbox() {
       
        return view('hunters.mailbox');
    }


    public function compose() {
       
        return view('hunters.compose');
    }



}
