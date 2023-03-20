<?php

namespace App\Models;

use CodeIgniter\Model;

class PenyakitModel extends Model
{
   protected $table = 'penyakit';
   protected $primaryKey = 'kode_penyakit';
   protected $useAutoIncrement = false;
   protected $allowedFields = ['kode_penyakit', 'nama_penyakit', 'gambar'];

   public function datapenyakit()
   {
      return $this->findAll();
   }

   public function autoCodePenyakit()
   {
      $selectId = $this->db->table('penyakit')->selectMax('kode_penyakit')->get()->getResultArray();
      foreach ($selectId as $penyakitId) {
         $maxId = $penyakitId['kode_penyakit'];
      }
      $resultId = (int) substr($maxId, 1) + 1;
      return 'D' . sprintf("%02s", $resultId);
   }

   public function getPenyakit($id)
   {
      return $this->where(['kode_penyakit' => $id])->first();
   }
}
