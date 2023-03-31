<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\DiagnosaModel;
use App\Models\GejalaModel;

class GejalaController extends BaseController
{
   protected $GejalaModel;
   protected $DiagnosaModel;
   protected $helpers = ['form'];

   public function __construct()
   {
      $this->GejalaModel = new GejalaModel();
      $this->DiagnosaModel = new DiagnosaModel();
   }

   public function index()
   {
      $data = [
         'datagejala' => $this->GejalaModel->datagejala(),
         'notif' => $this->DiagnosaModel->notification()
      ];
      return view('/server-side/gejala/index', $data);
   }

   public function create()
   {
      $data = [
         'autocode' => $this->GejalaModel->autoCodeGejala(),
         'notif' => $this->DiagnosaModel->notification()
      ];
      return view('/server-side/gejala/create', $data);
   }

   public function insert()
   {
      //* validasi input server-side
      if (!$this->validate([
         'nama_gejala' => [
            'rules' => 'required|is_unique[gejala.nama_gejala]',
            'errors' => [
               'required' => 'Nama gejala harus diisi.',
               'is_unique' => 'Gejala sudah terdaftar.'
            ]
         ]

      ])) {
         return redirect()->to('/data-gejala/create')->withInput();
      }

      //* save to database
      $this->GejalaModel->save([
         'kode_gejala' => $this->request->getVar('kode_gejala'),
         'nama_gejala' => $this->request->getVar('nama_gejala'),
      ]);

      // session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

      return redirect()->to('/data-gejala');
   }

   public function edit($id)
   {
      $data = [
         'gejala' => $this->GejalaModel->getGejala($id),
         'notif' => $this->DiagnosaModel->notification()
      ];
      return view('/server-side/gejala/edit', $data);
   }

   public function update($id)
   {
      //* validasi input server-side
      if (!$this->validate([
         'nama_gejala' => [
            'rules' => 'required',
            'errors' => [
               'required' => 'Nama gejala harus diisi.'
            ]
         ]
      ])) {
         return redirect()->to('/data-gejala/edit/' . $id)->withInput();
      }

      //* save to database
      $this->GejalaModel->save([
         'kode_gejala' => $id,
         'nama_gejala' => $this->request->getVar('nama_gejala'),
      ]);

      // session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

      return redirect()->to('/data-gejala');
   }

   public function delete($id)
   {
      $this->GejalaModel->delete($id);
      return redirect()->to('/data-gejala');
   }
}
