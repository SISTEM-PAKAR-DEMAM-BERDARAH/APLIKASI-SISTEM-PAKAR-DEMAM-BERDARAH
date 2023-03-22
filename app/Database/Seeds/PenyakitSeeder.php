<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PenyakitSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kode_penyakit' => 'D01',
                'nama_penyakit' => 'Demam Dengue',
                'gambar' => 'demam-dengue-seeder.png'
            ],
            [
                'kode_penyakit' => 'D02',
                'nama_penyakit' => 'Demam Berdarah Dengue (DBD)',
                'gambar' => 'demam-berdarah-dengue-seeder.png'
            ],
            [
                'kode_penyakit' => 'D03',
                'nama_penyakit' => 'Syok Syndrome Dengue (SSD)',
                'gambar' => 'syok-syndrome-dengue-seeder.png'
            ]
        ];

        $this->db->table('penyakit')->insertBatch($data);
    }
}
