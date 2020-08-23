<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectDashboardController extends Controller
{
  public function index(Request $request)
  {
    return view ('project-dashboard');
  }
}
