<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class projectController extends Controller
{
    public function index(Request $request)
    {
      return view ('project');
    }

    public function getdataProject(Request $request)
    {
      return view ('welcome');
    }
}
