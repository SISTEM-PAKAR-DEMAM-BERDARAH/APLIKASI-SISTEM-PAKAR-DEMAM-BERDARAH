<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\GejalaModel;

class GejalaController extends BaseController
{
   protected $GejalaModel;

   public function __construct()
   {
      $this->GejalaModel = new GejalaModel();
   }

   public function index()
   {
      $data = [
         'datagejala' => $this->GejalaModel->datagejala()
      ];
      return view('/server-side/data-gejala', $data);
   }
}
