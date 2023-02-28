<?php

namespace App\Models;

use CodeIgniter\Model;

class PenyakitModel extends Model
{
   protected $table = 'penyakit';
   protected $primaryKey = 'kode_penyakit';

   public function datapenyakit() {
      return $this->findAll();
   }
}