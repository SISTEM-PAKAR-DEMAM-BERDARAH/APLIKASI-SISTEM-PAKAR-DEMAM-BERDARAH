<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\SolusiModel;

class SolusiController extends BaseController
{
   protected $SolusiModel;

   public function __construct()
   {
      $this->SolusiModel = new SolusiModel();
   }

   public function index()
   {
      $data = [
         'datasolusi' => $this->SolusiModel->datasolusi()
      ];
      return view('/server-side/data-solusi', $data);
   }
}
