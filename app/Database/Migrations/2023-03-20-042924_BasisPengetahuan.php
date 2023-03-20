<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BasisPengetahuan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kode_pengetahuan' => [
                'type'           => 'VARCHAR',
                'constraint'     => 4,
                'unsigned'       => false,
                'auto_increment' => false,
            ],
            'kode_penyakit' => [
                'type'       => 'VARCHAR',
                'constraint' => 3,
            ],
            'kode_gejala' => [
                'type' => 'VARCHAR',
                'constraint' => 3,
            ],
            'cf_pakar' => [
                'type' => 'float',
                'null' => false,
            ],

        ]);
        $this->forge->addKey('kode_pengetahuan', true);
        $this->forge->addForeignKey('kode_penyakit', 'penyakit', 'kode_penyakit', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('kode_gejala', 'gejala', 'kode_gejala', 'CASCADE', 'CASCADE');
        $this->forge->createTable('basis_pengetahuan');
    }

    public function down()
    {
        $this->forge->dropTable('basis_pengetahuan');
    }
}
