<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PengetahuanModel;

class PengetahuanController extends BaseController
{
   protected $PengetahuanModel;

   public function __construct()
   {
      $this->PengetahuanModel = new PengetahuanModel();
   }

   public function index()
   {
      $data = [
         'datapengetahuan' => $this->PengetahuanModel->datapengetahuan()
      ];
      return view('/server-side/basis-pengetahuan', $data);
   }
}
