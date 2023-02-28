<?php

namespace App\Models;

use CodeIgniter\Model;

class GejalaModel extends Model
{
   protected $table = 'gejala';
   protected $primaryKey = 'kode_gejala';

   public function datagejala() {
      return $this->findAll();
   }
}