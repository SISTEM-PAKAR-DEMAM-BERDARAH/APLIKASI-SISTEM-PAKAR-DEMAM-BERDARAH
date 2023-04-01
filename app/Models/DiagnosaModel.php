<?php

namespace App\Models;

use CodeIgniter\Model;
use Myth\Auth\Authentication\LocalAuthenticator;




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

   public function autoCodeDiagnosa()
   {
      $selectId = $this->db->table('diagnosa')->selectMax('kode_diagnosa')->get()->getResultArray();
      foreach ($selectId as $diagnosaId) {
         $maxId = $diagnosaId['kode_diagnosa'];
      }
      $resultId = (int) substr($maxId, 2) + 1;
      return 'HD' . sprintf("%04s", $resultId);
   }

   public function dataDiagnosaUser($userId)
   {
    return $this->db->table('diagnosa')->join('penyakit','penyakit.kode_penyakit = diagnosa.kode_penyakit')->join('solusi', 'solusi.kode_penyakit = penyakit.kode_penyakit')->where('id_user', $userId)->get()->getResultArray();
   }
}
