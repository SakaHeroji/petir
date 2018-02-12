<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BountyController extends Controller
{
  
    public function list(){
         return view('bounty.list');
    }
}
