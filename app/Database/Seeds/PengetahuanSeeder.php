<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PengetahuanSeeder extends Seeder
{
   public function run()
   {
      $data = [
         [
            'kode_pengetahuan' => 'BP01',
            'kode_penyakit' => 'D01',
            'kode_gejala' => 'G01',
            'cf_pakar' => '1.0'
         ],
         [
            'kode_pengetahuan' => 'BP02',
            'kode_penyakit' => 'D01',
            'kode_gejala' => 'G02',
            'cf_pakar' => '0.6'
         ],
         [
            'kode_pengetahuan' => 'BP03',
            'kode_penyakit' => 'D01',
            'kode_gejala' => 'G03',
            'cf_pakar' => '0.4'
         ],
         [
            'kode_pengetahuan' => 'BP04',
            'kode_penyakit' => 'D01',
            'kode_gejala' => 'G04',
            'cf_pakar' => '0.6'
         ],
         [
            'kode_pengetahuan' => 'BP05',
            'kode_penyakit' => 'D01',
            'kode_gejala' => 'G05',
            'cf_pakar' => '0.4'
         ],
         [
            'kode_pengetahuan' => 'BP06',
            'kode_penyakit' => 'D01',
            'kode_gejala' => 'G06',
            'cf_pakar' => '0.4'
         ],
         [
            'kode_pengetahuan' => 'BP07',
            'kode_penyakit' => 'D01',
            'kode_gejala' => 'G07',
            'cf_pakar' => '0.8'
         ],
         [
            'kode_pengetahuan' => 'BP08',
            'kode_penyakit' => 'D02',
            'kode_gejala' => 'G08',
            'cf_pakar' => '1.0'
         ],
         [
            'kode_pengetahuan' => 'BP09',
            'kode_penyakit' => 'D02',
            'kode_gejala' => 'G09',
            'cf_pakar' => '0.6'
         ],
         [
            'kode_pengetahuan' => 'BP10',
            'kode_penyakit' => 'D02',
            'kode_gejala' => 'G10',
            'cf_pakar' => '0.4'
         ],
         [
            'kode_pengetahuan' => 'BP11',
            'kode_penyakit' => 'D02',
            'kode_gejala' => 'G11',
            'cf_pakar' => '0.4'
         ],
         [
            'kode_pengetahuan' => 'BP12',
            'kode_penyakit' => 'D02',
            'kode_gejala' => 'G05',
            'cf_pakar' => '0.4'
         ],
         [
            'kode_pengetahuan' => 'BP13',
            'kode_penyakit' => 'D02',
            'kode_gejala' => 'G06',
            'cf_pakar' => '0.4'
         ],
         [
            'kode_pengetahuan' => 'BP14',
            'kode_penyakit' => 'D02',
            'kode_gejala' => 'G12',
            'cf_pakar' => '0.4'
         ],
         [
            'kode_pengetahuan' => 'BP15',
            'kode_penyakit' => 'D02',
            'kode_gejala' => 'G04',
            'cf_pakar' => '0.6'
         ],
         [
            'kode_pengetahuan' => 'BP16',
            'kode_penyakit' => 'D02',
            'kode_gejala' => 'G13',
            'cf_pakar' => '0.4'
         ],
         [
            'kode_pengetahuan' => 'BP17',
            'kode_penyakit' => 'D02',
            'kode_gejala' => 'G14',
            'cf_pakar' => '0.4'
         ],
         [
            'kode_pengetahuan' => 'BP18',
            'kode_penyakit' => 'D02',
            'kode_gejala' => 'G15',
            'cf_pakar' => '0.6'
         ],
         [
            'kode_pengetahuan' => 'BP19',
            'kode_penyakit' => 'D03',
            'kode_gejala' => 'G16',
            'cf_pakar' => '0.6'
         ],
         [
            'kode_pengetahuan' => 'BP20',
            'kode_penyakit' => 'D03',
            'kode_gejala' => 'G17',
            'cf_pakar' => '0.4'
         ],
         [
            'kode_pengetahuan' => 'BP21',
            'kode_penyakit' => 'D03',
            'kode_gejala' => 'G18',
            'cf_pakar' => '0.4'
         ],
         [
            'kode_pengetahuan' => 'BP22',
            'kode_penyakit' => 'D03',
            'kode_gejala' => 'G19',
            'cf_pakar' => '0.4'
         ],
         [
            'kode_pengetahuan' => 'BP23',
            'kode_penyakit' => 'D03',
            'kode_gejala' => 'G20',
            'cf_pakar' => '0.4'
         ],
         [
            'kode_pengetahuan' => 'BP24',
            'kode_penyakit' => 'D03',
            'kode_gejala' => 'G21',
            'cf_pakar' => '0.6'
         ],
         [
            'kode_pengetahuan' => 'BP25',
            'kode_penyakit' => 'D03',
            'kode_gejala' => 'G22',
            'cf_pakar' => '1.0'
         ],
         [
            'kode_pengetahuan' => 'BP26',
            'kode_penyakit' => 'D03',
            'kode_gejala' => 'G23',
            'cf_pakar' => '0.8'
         ]
      ];

      $this->db->table('basis_pengetahuan')->insertBatch($data);
   }
}
