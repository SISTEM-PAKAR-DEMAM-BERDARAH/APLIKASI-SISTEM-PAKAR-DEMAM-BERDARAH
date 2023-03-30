<?php

namespace App\Models;

use CodeIgniter\Model;

class DiagnosaModel extends Model
{
   protected $table = 'diagnosa';
   protected $primaryKey = 'kode_diagnosa';
   protected $useAutoIncrement = false;
   protected $allowedFields = ['kode_diagnosa', 'id_user', 'tanggal_diagnosa', 'gejala', 'kode_penyakit', 'cf_hasil'];

   public function dataDiagnosa()
   {
      return $this->findAll();
   }

   public function autoCodeDiagnosa()
   {
      $selectId = $this->db->table('diagnosa')->selectMax('kode_diagnosa')->get()->getResultArray();
      foreach ($selectId as $diagnosaId) {
         $maxId = $diagnosaId['kode_diagnosa'];
      }
      $resultId = (int) substr($maxId, 2) + 1;
      return 'HD' . sprintf("%04s", $resultId);
   }
}
