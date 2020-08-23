<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class projectHeliposController extends Controller
{
    public function index(Request $request)
    {
      return view ('project-helipos');
    }
}
