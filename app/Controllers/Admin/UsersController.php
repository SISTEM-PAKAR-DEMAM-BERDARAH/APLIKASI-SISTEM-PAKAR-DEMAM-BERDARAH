<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\DiagnosaModel;
use App\Models\PenggunaModel;

class UsersController extends BaseController
{
   protected $PenggunaModel;
   protected $DiagnosaModel;

   public function __construct()
   {
      $this->PenggunaModel = new PenggunaModel();
      $this->DiagnosaModel = new DiagnosaModel();
   }

   public function index()
   {
      $data = [
         'datapengguna' => $this->PenggunaModel->datapengguna(),
         'notif' => $this->DiagnosaModel->notification()
      ];
      return view('/server-side/data-pengguna', $data);
   }
}
