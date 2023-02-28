<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class LandingController extends BaseController
{
   public function index()
   {
      return view('/client-side/index');
   }
   public function home()
   {
      return view('/client-side/home');
   }
   public function diagnosa()
   {
      return view('/client-side/diagnosa');
   }
}
