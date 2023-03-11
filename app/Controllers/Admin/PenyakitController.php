<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PenyakitModel;

class PenyakitController extends BaseController
{
   protected $PenyakitModel;
   protected $helpers = ['form'];

   public function __construct()
   {
      $this->PenyakitModel = new PenyakitModel();
   }

   public function index()
   {
      $data = [
         'datapenyakit' => $this->PenyakitModel->datapenyakit()
      ];
      return view('/server-side/penyakit/index', $data);
   }

   public function create()
   {
      return view('/server-side/penyakit/create');
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
         'detail_penyakit' => [
            'rules' => 'required',
            'errors' => [
               'required' => 'Detail penyakit harus diisi.',
            ]
         ],
         'gambar' => [
            'rules' => 'required',
            'errors' => [
               'required' => 'Gambar harus diisi.',
            ]
         ]
      ])) {
         return redirect()->to('/data-penyakit/create')->withInput();
      }

      //* save to database
      $this->PenyakitModel->save([
         'kode_penyakit' => $this->request->getVar('kode_penyakit'),
         'nama_penyakit' => $this->request->getVar('nama_penyakit'),
         'detail_penyakit' => $this->request->getVar('detail_penyakit'),
         'gambar' => $this->request->getVar('gambar'),
      ]);

      // session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

      return redirect()->to('/data-penyakit');
   }

   public function edit($id)
   {
      $data = [
         'penyakit' => $this->PenyakitModel->getPenyakit($id)
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
               'is_unique' => 'Penyakit sudah terdaftar.'
            ]
         ],
         'detail_penyakit' => [
            'rules' => 'required',
            'errors' => [
               'required' => 'Detail penyakit harus diisi.',
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
         'detail_penyakit' => $this->request->getVar('detail_penyakit'),
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
