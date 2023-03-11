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

   public function getGejala($id)
   {
      return $this->where(['kode_gejala' => $id])->first();
   }
}
