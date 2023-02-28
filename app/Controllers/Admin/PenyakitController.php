<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PenyakitModel;

class PenyakitController extends BaseController
{
   protected $PenyakitModel;

   public function __construct()
   {
      $this->PenyakitModel = new PenyakitModel();
   }

   public function index()
   {
      $data = [
         'datapenyakit' => $this->PenyakitModel->datapenyakit()
      ];
      return view('/server-side/data-penyakit', $data);
   }
}
