<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectBorobudurSilverController extends Controller
{
  public function index(Request $request)
  {
    return view ('project-borobudur-silver');
  }
}
