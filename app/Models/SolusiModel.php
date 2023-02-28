<?php

namespace App\Models;

use CodeIgniter\Model;

class SolusiModel extends Model
{
   protected $table = 'solusi';
   protected $primaryKey = 'kode_solusi';

   public function datasolusi() {
      return $this->db->table('solusi')->join('penyakit', 'penyakit.kode_penyakit = solusi.kode_penyakit', 'inner')->get()->getResultArray();
   }
}