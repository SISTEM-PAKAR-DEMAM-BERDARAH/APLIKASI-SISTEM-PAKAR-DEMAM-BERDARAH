<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SolusiSeeder extends Seeder
{
   public function run()
   {
      $data = [
         [
            'kode_solusi' => 'S01',
            'detail_solusi' => 'Kompres air hangat, Antipiretik, Analgesik, dan Anti mual muntah.',
            'kode_penyakit' => 'D01'
         ],
         [
            'kode_solusi' => 'S02',
            'detail_solusi' => 'Kompres air hangat, Antipiretik, Analgesik, Anti mual muntah dan anti pendarahan hemostatik.',
            'kode_penyakit' => 'D02'
         ],
         [
            'kode_solusi' => 'S03',
            'detail_solusi' => 'Rujukan ke Rumah Sakit.',
            'kode_penyakit' => 'D03'
         ]
      ];

      $this->db->table('solusi')->insertBatch($data);
   }
}
