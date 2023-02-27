<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PenggunaModel;

class UsersController extends BaseController
{
   protected $PenggunaModel;

   public function __construct()
   {
      $this->PenggunaModel = new PenggunaModel();
   }

   public function index()
   {
      $data = [
         'datapengguna' => $this->PenggunaModel->datapengguna()
      ];
      return view('/server-side/data-pengguna', $data);
   }
}
