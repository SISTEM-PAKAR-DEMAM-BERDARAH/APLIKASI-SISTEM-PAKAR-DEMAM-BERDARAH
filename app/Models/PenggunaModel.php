<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggunaModel extends Model
{
   protected $table = 'users';
   protected $primaryKey = 'kode_user';

   public function datapengguna() {
      return $this->findAll();
   }
}