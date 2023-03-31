<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\DiagnosaModel;
use App\Models\GejalaModel;
use App\Models\PengetahuanModel;
use App\Models\PenyakitModel;

class PengetahuanController extends BaseController
{
   protected $PengetahuanModel;
   protected $PenyakitModel;
   protected $GejalaModel;
   protected $DiagnosaModel;
   protected $helpers = ['form'];

   public function __construct()
   {
      $this->PengetahuanModel = new PengetahuanModel();
      $this->PenyakitModel = new PenyakitModel();
      $this->GejalaModel = new GejalaModel();
      $this->DiagnosaModel = new DiagnosaModel();
   }

   public function index()
   {
      $data = [
         'datapengetahuan' => $this->PengetahuanModel->datapengetahuan(),
         'notif' => $this->DiagnosaModel->notification()
      ];
      return view('/server-side/basis-pengetahuan/index', $data);
   }

   public function create()
   {
      $data = [
         'penyakit' => $this->PenyakitModel->datapenyakit(),
         'gejala' => $this->GejalaModel->datagejala(),
         'autocode' => $this->PengetahuanModel->autoCodePengetahuan(),
         'notif' => $this->DiagnosaModel->notification()
      ];
      return view('/server-side/basis-pengetahuan/create', $data);
   }

   public function insert()
   {
      //* validasi input server-side
      if (!$this->validate([
         'kode_pengetahuan' => [
            'rules' => 'required',
            'errors' => [
               'required' => 'Kode pengetahuan harus diisi.',
            ]
         ],
         'kode_penyakit' => [
            'rules' => 'required',
            'errors' => [
               'required' => 'Nama penyakit harus diisi.',
            ]
         ],
         'kode_gejala' => [
            'rules' => 'required',
            'errors' => [
               'required' => 'Nama gejala harus diisi.',
            ]
         ],
         'cf_pakar' => [
            'rules' => 'required',
            'errors' => [
               'required' => 'CF pakar harus diisi.',
            ]
         ]
      ])) {
         return redirect()->to('/basis-pengetahuan/create')->withInput();
      }

      //* save to database
      $this->PengetahuanModel->save([
         'kode_pengetahuan' => $this->request->getVar('kode_pengetahuan'),
         'kode_penyakit' => $this->request->getVar('kode_penyakit'),
         'kode_gejala' => $this->request->getVar('kode_gejala'),
         'cf_pakar' => $this->request->getVar('cf_pakar'),
      ]);

      // session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

      return redirect()->to('/basis-pengetahuan');
   }

   public function edit($id)
   {
      $data = [
         'pengetahuan' => $this->PengetahuanModel->getPengetahuan($id),
         'penyakit' => $this->PenyakitModel->datapenyakit(),
         'getpenyakit' => $this->PengetahuanModel->getPenyakit($id),
         'gejala' => $this->GejalaModel->datagejala(),
         'getgejala' => $this->PengetahuanModel->getGejala($id),
         'notif' => $this->DiagnosaModel->notification()
      ];
      return view('/server-side/basis-pengetahuan/edit', $data);
   }

   public function update($id)
   {
      //* validasi input server-side
      if (!$this->validate([
         'kode_penyakit' => [
            'rules' => 'required',
            'errors' => [
               'required' => 'Nama penyakit harus diisi.',
            ]
         ],
         'kode_gejala' => [
            'rules' => 'required',
            'errors' => [
               'required' => 'Nama gejala harus diisi.',
            ]
         ],
         'cf_pakar' => [
            'rules' => 'required',
            'errors' => [
               'required' => 'CF pakar harus diisi.',
            ]
         ]
      ])) {
         return redirect()->to('/basis-pengetahuan/edit/' . $id)->withInput();
      }

      //* save to database
      $this->PengetahuanModel->save([
         'kode_pengetahuan' => $this->request->getVar('kode_pengetahuan'),
         'kode_penyakit' => $this->request->getVar('kode_penyakit'),
         'kode_gejala' => $this->request->getVar('kode_gejala'),
         'cf_pakar' => $this->request->getVar('cf_pakar'),
      ]);

      // session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

      return redirect()->to('/basis-pengetahuan');
   }

   public function delete($id)
   {
      $this->PengetahuanModel->delete($id);
      return redirect()->to('/basis-pengetahuan');
   }
}
