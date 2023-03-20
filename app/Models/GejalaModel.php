<?php

namespace App\Models;

use CodeIgniter\Model;

class GejalaModel extends Model
{
   protected $table = 'gejala';
   protected $primaryKey = 'kode_gejala';
   protected $useAutoIncrement = false;
   protected $allowedFields = ['kode_gejala', 'nama_gejala'];


   public function datagejala()
   {
      return $this->findAll();
   }

   public function autoCodeGejala()
   {
      $selectId = $this->db->table('gejala')->selectMax('kode_gejala')->get()->getResultArray();
      foreach ($selectId as $gejalaId) {
         $maxId = $gejalaId['kode_gejala'];
      }
      $resultId = (int) substr($maxId, 1) + 1;
      return 'G' . sprintf("%02s", $resultId);
   }

   public function getGejala($id)
   {
      return $this->where(['kode_gejala' => $id])->first();
   }
}
