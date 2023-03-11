<?php

namespace App\Models;

use CodeIgniter\Model;

class PenyakitModel extends Model
{
   protected $table = 'penyakit';
   protected $primaryKey = 'kode_penyakit';
   protected $useAutoIncrement = false;
   protected $allowedFields = ['kode_penyakit', 'nama_penyakit', 'detail_penyakit', 'gambar'];

   public function datapenyakit()
   {
      return $this->findAll();
   }

   public function getPenyakit($id)
   {
      return $this->where(['kode_penyakit' => $id])->first();
   }
}
