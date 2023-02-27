<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PenggunaModel;

class DashboardController extends BaseController
{
   protected $PenggunaModel;

   public function __construct()
   {
      $this->PenggunaModel = new PenggunaModel();
   }

   public function index()
   {
      $data = [
         'totalpengguna' => $this->PenggunaModel->countAllResults()
      ];
      return view('/server-side/dashboard', $data);
   }
}
