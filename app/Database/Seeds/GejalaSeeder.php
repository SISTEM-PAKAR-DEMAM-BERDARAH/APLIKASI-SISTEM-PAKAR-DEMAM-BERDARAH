<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GejalaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kode_gejala' => 'G01',
                'nama_gejala' => 'Trombosit 100.000 per mikroliter darah'
            ],
            [
                'kode_gejala' => 'G02',
                'nama_gejala' => 'Demam tinggi mendadak'
            ],
            [
                'kode_gejala' => 'G03',
                'nama_gejala' => 'Nyeri kepala berat bagian dahi'
            ],
            [
                'kode_gejala' => 'G04',
                'nama_gejala' => 'Nyeri otot dan persendian'
            ],
            [
                'kode_gejala' => 'G05',
                'nama_gejala' => 'Mual'
            ],
            [
                'kode_gejala' => 'G06',
                'nama_gejala' => 'Muntah'
            ],
            [
                'kode_gejala' => 'G07',
                'nama_gejala' => 'Ruam (dada, perut, kaki, tangan)'
            ],
            [
                'kode_gejala' => 'G08',
                'nama_gejala' => 'Trombosit menurun hingga 40.000-100.000 per mikroliter darah'
            ],
            [
                'kode_gejala' => 'G09',
                'nama_gejala' => 'Demam 2-7 hari'
            ],
            [
                'kode_gejala' => 'G10',
                'nama_gejala' => 'Wajah cenderung memerah'
            ],
            [
                'kode_gejala' => 'G11',
                'nama_gejala' => 'Tinja berwarna hitam atau mengeluarkan darah'
            ],
            [
                'kode_gejala' => 'G12',
                'nama_gejala' => 'Nyeri kepala'
            ],
            [
                'kode_gejala' => 'G13',
                'nama_gejala' => 'Nyeri tulang'
            ],
            [
                'kode_gejala' => 'G14',
                'nama_gejala' => 'Perut terasa kembung'
            ],
            [
                'kode_gejala' => 'G15',
                'nama_gejala' => 'Mimisan'
            ],
            [
                'kode_gejala' => 'G16',
                'nama_gejala' => 'Demam mendadak turun'
            ],
            [
                'kode_gejala' => 'G17',
                'nama_gejala' => 'Tubuh terasa dingin'
            ],
            [
                'kode_gejala' => 'G18',
                'nama_gejala' => 'Nyeri perut atau ulu hati'
            ],
            [
                'kode_gejala' => 'G19',
                'nama_gejala' => 'Wajah pucat'
            ],
            [
                'kode_gejala' => 'G20',
                'nama_gejala' => 'Nadi melemah'
            ],
            [
                'kode_gejala' => 'G21',
                'nama_gejala' => 'Hilang kesadaran'
            ],
            [
                'kode_gejala' => 'G22',
                'nama_gejala' => 'Trombosit menurun dibawah 40.000 per mikroliter darah'
            ],
            [
                'kode_gejala' => 'G23',
                'nama_gejala' => 'Pendarahan dari hidung dan anus'
            ]
        ];

        $this->db->table('gejala')->insertBatch($data);
    }
}
