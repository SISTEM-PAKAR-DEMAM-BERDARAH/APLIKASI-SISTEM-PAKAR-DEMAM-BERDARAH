<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\DiagnosaModel;
use App\Models\PenyakitModel;

class PenyakitController extends BaseController
{
   protected $PenyakitModel;
   protected $DiagnosaModel;
   protected $helpers = ['form'];

   public function __construct()
   {
      $this->PenyakitModel = new PenyakitModel();
      $this->DiagnosaModel = new DiagnosaModel();
   }

   public function index()
   {
      $data = [
         'datapenyakit' => $this->PenyakitModel->datapenyakit(),
         'notif' => $this->DiagnosaModel->notification()
      ];
      return view('/server-side/penyakit/index', $data);
   }

   public function create()
   {
      $data = [
         'autocode' => $this->PenyakitModel->autoCodePenyakit(),
         'notif' => $this->DiagnosaModel->notification()
      ];
      return view('/server-side/penyakit/create', $data);
   }

   public function insert()
   {
      //* validasi input server-side
      if (!$this->validate([
         'nama_penyakit' => [
            'rules' => 'required|is_unique[penyakit.nama_penyakit]',
            'errors' => [
               'required' => 'Nama penyakit harus diisi.',
               'is_unique' => 'Penyakit sudah terdaftar.'
            ]
         ],
         'gambar' => [
            'rules' => 'uploaded[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png]|max_size[gambar,2048]',
            'errors' => [
               'uploaded' => 'Harus ada gambar yang diupload!',
               'mime_in' => 'File extention harus berupa *.jpg, *.jpeg, *.gif, *.png',
               'max_size' => 'Ukuran file maksimal 2 MB'
            ]
         ]
      ])) {
         return redirect()->to('/data-penyakit/create')->withInput();
      }

      $gambar = $this->request->getFile('gambar');
      $filename = $gambar->getRandomName();

      //* save to database
      $this->PenyakitModel->save([
         'kode_penyakit' => $this->request->getVar('kode_penyakit'),
         'nama_penyakit' => $this->request->getVar('nama_penyakit'),
         'detail_penyakit' => $this->request->getVar('detail_penyakit'),
         'gambar' => $filename,
      ]);

      $gambar->move('assets/images/uploaded/', $filename);

      // session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

      return redirect()->to('/data-penyakit');
   }

   public function edit($id)
   {
      $data = [
         'penyakit' => $this->PenyakitModel->getPenyakit($id),
         'notif' => $this->DiagnosaModel->notification()
      ];
      return view('/server-side/penyakit/edit', $data);
   }

   public function update($id)
   {
      //* validasi input server-side
      if (!$this->validate([
         'nama_penyakit' => [
            'rules' => 'required',
            'errors' => [
               'required' => 'Nama penyakit harus diisi.',
            ]
         ],
         'gambar' => [
            'rules' => 'required',
            'errors' => [
               'required' => 'Gambar harus diisi.',
            ]
         ]
      ])) {
         return redirect()->to('/data-penyakit/edit/' . $id)->withInput();
      }

      //* save to database
      $this->PenyakitModel->save([
         'kode_penyakit' => $id,
         'nama_penyakit' => $this->request->getVar('nama_penyakit'),
         'gambar' => $this->request->getVar('gambar'),
      ]);

      // session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

      return redirect()->to('/data-penyakit');
   }

   public function delete($id)
   {
      $this->PenyakitModel->delete($id);
      return redirect()->to('/data-penyakit');
   }
}
