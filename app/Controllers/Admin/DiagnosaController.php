<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\DiagnosaModel;

class DiagnosaController extends BaseController
{
   protected $DiagnosaModel;
   protected $helpers = ['form'];

   public function __construct()
   {
      $this->DiagnosaModel = new DiagnosaModel();
   }

   public function index() {
      return view('/server-side/diagnosa/index');
   }

   public function insert()
   {
      $this->DiagnosaModel->save([
         'kode_diagnosa' => $this->request->getVar('kode_diagnosa'),
         'id_user' => $this->request->getVar('id_user'),
         'tanggal_diagnosa' => $this->request->getVar('tanggal_diagnosa'),
         'gejala' => $this->request->getVar('gejala'),
         'kode_penyakit' => $this->request->getVar('kode_penyakit'),
         'cf_hasil' => $this->request->getVar('cf_hasil')
      ]);

      return redirect()->to('/data-diagnosa-user');
   }
}
