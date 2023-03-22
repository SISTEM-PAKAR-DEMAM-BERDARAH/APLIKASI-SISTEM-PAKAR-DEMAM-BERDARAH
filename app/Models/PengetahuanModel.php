<?php

namespace App\Models;

use CodeIgniter\Model;

class PengetahuanModel extends Model
{
   protected $table = 'basis_pengetahuan';
   protected $useAutoIncrement = false;
   protected $primaryKey = 'kode_pengetahuan';
   protected $allowedFields = ['kode_pengetahuan', 'kode_penyakit', 'kode_gejala', 'cf_pakar'];


   public function datapengetahuan()
   {
      return $this->db->table('basis_pengetahuan')->join('penyakit', 'penyakit.kode_penyakit = basis_pengetahuan.kode_penyakit', 'inner')->join('gejala', 'gejala.kode_gejala = basis_pengetahuan.kode_gejala', 'inner')->get()->getResultArray();
   }

   public function autoCodePengetahuan() {
      $selectId = $this->db->table('basis_pengetahuan')->selectMax('kode_pengetahuan')->get()->getResultArray();
      foreach ($selectId as $pengetahuanId) {
         $maxId = $pengetahuanId['kode_pengetahuan'];
      }
      $resultId = (int) substr($maxId, 2) + 1;
      return 'BP' . sprintf("%02s", $resultId);
   }

   public function getPengetahuan($id)
   {
      return $this->where(['kode_pengetahuan' => $id])->first();
   }

   public function getPenyakit($id)
   {
      return $this->table('basis_pengetahuan')->join('penyakit', 'penyakit.kode_penyakit = basis_pengetahuan.kode_penyakit', 'inner')->where(['kode_pengetahuan' => $id])->first();
   }

   public function getGejala($id)
   {
      return $this->table('basis_pengetahuan')->join('gejala', 'gejala.kode_gejala = basis_pengetahuan.kode_gejala', 'inner')->where(['kode_pengetahuan' => $id])->first();
   }

   public function dataForDiagnosa() {
      return $this->db->table('basis_pengetahuan')->select('basis_pengetahuan.kode_gejala, gejala.*')->join('gejala', 'gejala.kode_gejala = basis_pengetahuan.kode_gejala', 'inner')->groupBy('basis_pengetahuan.kode_gejala')->get()->getResultArray();
   }

   public function dataDiagnosaPakar() {
      return $this->db->table('basis_pengetahuan')->select('*')->get()->getResultArray();
   }
}
