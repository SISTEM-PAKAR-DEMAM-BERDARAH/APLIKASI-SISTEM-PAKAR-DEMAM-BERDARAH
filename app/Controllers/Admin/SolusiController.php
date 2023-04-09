<?php

namespace App\Controllers\Admin;

use App\Models\SolusiModel;
use App\Models\DiagnosaModel;
use App\Models\PenyakitModel;
use App\Models\PengetahuanModel;
use App\Controllers\BaseController;

class SolusiController extends BaseController
{
   protected $PenyakitModel;
   protected $SolusiModel;
   protected $DiagnosaModel;
   protected $PengetahuanModel;
   protected $helpers = ['form'];

   public function __construct()
   {
      $this->PenyakitModel = new PenyakitModel();
      $this->SolusiModel = new SolusiModel();
      $this->DiagnosaModel = new DiagnosaModel();
      $this->PengetahuanModel = new PengetahuanModel();
   }

   public function index()
   {
      $data = [
         'datasolusi' => $this->SolusiModel->datasolusi(),
         'notif' => $this->DiagnosaModel->notification()
      ];
      return view('/server-side/solusi/index', $data);
   }

   public function create()
   {
      $data = [
         'penyakit' => $this->PenyakitModel->datapenyakit(),
         'autocode' => $this->SolusiModel->autoCodeSolusi(),
         'notif' => $this->DiagnosaModel->notification()
      ];
      return view('/server-side/solusi/create', $data);
   }

   public function insert()
   {
      //* validasi input server-side
      if (!$this->validate([
         'kode_solusi' => [
            'rules' => 'required',
            'errors' => [
               'required' => 'Kode Solusi harus diisi.',
            ]
         ],
         'detail_solusi' => [
            'rules' => 'required',
            'errors' => [
               'required' => 'Detail Solusi harus diisi.',
            ]
         ],
         'kode_penyakit' => [
            'rules' => 'required',
            'errors' => [
               'required' => 'Nama Penyakit harus diisi.',
            ]
         ],
      ])) {
         return redirect()->to('/data-solusi/create')->withInput();
      }

      //* save to database
      $this->SolusiModel->save([
         'kode_solusi' => $this->request->getVar('kode_solusi'),
         'detail_solusi' => $this->request->getVar('detail_solusi'),
         'kode_penyakit' => $this->request->getVar('kode_penyakit'),
      ]);

      // session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

      return redirect()->to('/data-solusi');
   }
   public function edit($id)
   {
      $data = [
         'solusi' => $this->SolusiModel->getSolusi($id),
         'penyakit' => $this->PenyakitModel->datapenyakit(),
         'getpenyakit' => $this->SolusiModel->getPenyakit($id),
         'notif' => $this->DiagnosaModel->notification()
      ];
      return view('/server-side/solusi/edit', $data);
   }

   public function update($id)
   {
      if (!$this->validate([
         'kode_solusi' => [
            'rules' => 'required',
            'errors' => [
               'required' => 'Kode Solusi harus diisi.',
            ]
         ],
         'detail_solusi' => [
            'rules' => 'required',
            'errors' => [
               'required' => 'Detail Solusi harus diisi.',
            ]
         ],
         'kode_penyakit' => [
            'rules' => 'required',
            'errors' => [
               'required' => 'Nama Penyakit harus diisi.',
            ]
         ],
      ])) {
         return redirect()->to('/data-solusi/edit/' . $id)->withInput();
      }
      //* save to database
      $this->SolusiModel->save([
         'kode_solusi' => $this->request->getVar('kode_solusi'),
         'detail_solusi' => $this->request->getVar('detail_solusi'),
         'kode_penyakit' => $this->request->getVar('kode_penyakit'),
      ]);

      // session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

      return redirect()->to('/data-solusi');
   }
   public function delete($id)
   {
      $this->SolusiModel->delete($id);
      return redirect()->to('/data-solusi');
   }
}
