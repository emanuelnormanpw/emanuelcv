<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;

class homepageController extends Controller
{
    public function getHomepage()
    {
      return view ('welcome');
    }

    public function getDownload()
    {
      $file= public_path(). "/assets/images/import/cv-emanuel.jpg";

      $headers = array(
             'Content-Type: application/jpg',
           );

      return Response::download($file, 'emanuelnpw-cv.jpg', $headers);
    }
}
