<?php

namespace App\Models;

use CodeIgniter\Model;

class SolusiModel extends Model
{
   protected $table = 'solusi';
   protected $primaryKey = 'kode_solusi';
   protected $useAutoIncrement = false;
   protected $allowedFields = ['kode_solusi', 'detail_solusi', 'kode_penyakit'];

   public function datasolusi()
   {
      return $this->db->table('solusi')->join('penyakit', 'penyakit.kode_penyakit = solusi.kode_penyakit', 'inner')->get()->getResultArray();
   }

   public function getSolusi($id)
   {
      return $this->where(['kode_solusi' => $id])->first();
   }

   public function autoCodeSolusi()
   {
      $selectId = $this->db->table('solusi')->selectMax('kode_solusi')->get()->getResultArray();
      foreach ($selectId as $solusiId) {
         $maxId = $solusiId['kode_solusi'];
      }
      $resultId = (int) substr($maxId, 1) + 1;
      return 'S' . sprintf("%02s", $resultId);
   }

   public function getPenyakit($id)
   {
      return $this->table('solusi')->join('penyakit', 'penyakit.kode_penyakit = solusi.kode_penyakit', 'inner')->where(['kode_solusi' => $id])->first();
   }
}
