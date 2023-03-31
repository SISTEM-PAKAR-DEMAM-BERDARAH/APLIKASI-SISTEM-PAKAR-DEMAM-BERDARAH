<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\DiagnosaModel;
use App\Models\GejalaModel;
use App\Models\PengetahuanModel;
use App\Models\PenggunaModel;
use App\Models\PenyakitModel;
use App\Models\SolusiModel;

class DashboardController extends BaseController
{
   protected $PenggunaModel;
   protected $PengetahuanModel;
   protected $GejalaModel;
   protected $PenyakitModel;
   protected $SolusiModel;
   protected $DiagnosaModel;

   public function __construct()
   {
      $this->PenggunaModel = new PenggunaModel();
      $this->PengetahuanModel = new PengetahuanModel();
      $this->GejalaModel = new GejalaModel();
      $this->PenyakitModel = new PenyakitModel();
      $this->SolusiModel = new SolusiModel();
      $this->DiagnosaModel = new DiagnosaModel();
   }

   public function index()
   {
      $data = [
         'totalpengguna' => $this->PenggunaModel->countAllResults(),
         'totalpengetahuan' => $this->PengetahuanModel->countAllResults(),
         'totalgejala' => $this->GejalaModel->countAllResults(),
         'totalpenyakit' => $this->PenyakitModel->countAllResults(),
         'totalsolusi' => $this->SolusiModel->countAllResults(),
         'totaldiagnosa' => $this->DiagnosaModel->countAllResults(),
         'notif' => $this->DiagnosaModel->notification()
      ];
      return view('/server-side/dashboard', $data);
   }

   public function rules() {
      return view('/server-side/rules-base');
   }
}
