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
      return $this->db->table('diagnosa')->join('users', 'users.id = diagnosa.id_user', 'inner')->join('penyakit', 'penyakit.kode_penyakit = diagnosa.kode_penyakit', 'inner')->join('solusi', 'solusi.kode_penyakit = penyakit.kode_penyakit', 'inner')->get()->getResultArray();
   }

   public function notification()
   {
      return $this->db->table('diagnosa')->join('users', 'users.id = diagnosa.id_user', 'inner')->join('penyakit', 'penyakit.kode_penyakit = diagnosa.kode_penyakit', 'inner')->join('solusi', 'solusi.kode_penyakit = penyakit.kode_penyakit', 'inner')->limit(3)->get()->getResultArray();
   }



   public function userDiagnosa()
   {
      $builder = $this->db->table('diagnosa');
      $builder->join('penyakit','penyakit.kode_penyakit = diagnosa.kode_penyakit');
      $builder->join('solusi', 'solusi.kode_penyakit = penyakit.kode_penyakit');
      $query = $builder->get();
       return $query->getResultArray();
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
