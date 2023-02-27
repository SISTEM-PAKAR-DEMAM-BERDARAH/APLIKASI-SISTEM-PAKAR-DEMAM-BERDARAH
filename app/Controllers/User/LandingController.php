<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class LandingController extends BaseController
{
   public function index()
   {
      return view('/client-side/index');
   }
}
