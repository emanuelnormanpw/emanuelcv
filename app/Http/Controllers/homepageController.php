<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homepageController extends Controller
{
    public function getHomepage()
    {
      return view ('welcome');
    }
}
