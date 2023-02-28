<?php

namespace App\Models;

use CodeIgniter\Model;

class PengetahuanModel extends Model
{
   protected $table = 'basis_pengetahuan';
   protected $primaryKey = 'kode_pengetahuan';

   public function datapengetahuan() {
      return $this->db->table('basis_pengetahuan')->join('penyakit', 'penyakit.kode_penyakit = basis_pengetahuan.kode_penyakit', 'inner')->join('gejala', 'gejala.kode_gejala = basis_pengetahuan.kode_gejala', 'inner')->get()->getResultArray();
   }
}