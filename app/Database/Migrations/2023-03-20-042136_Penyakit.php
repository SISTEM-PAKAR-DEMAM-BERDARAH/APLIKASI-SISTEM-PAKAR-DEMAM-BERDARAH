<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penyakit extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kode_penyakit' => [
                'type'           => 'VARCHAR',
                'constraint'     => 3,
                'unsigned'       => false,
                'auto_increment' => false,
            ],
            'nama_penyakit' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'gambar' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);
        $this->forge->addKey('kode_penyakit', true);
        $this->forge->createTable('penyakit');
    }

    public function down()
    {
        $this->forge->dropTable('penyakit');
    }
}
