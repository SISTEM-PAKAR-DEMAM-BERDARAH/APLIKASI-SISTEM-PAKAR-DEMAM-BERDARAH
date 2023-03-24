<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Diagnosa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kode_diagnosa' => [
                'type'           => 'VARCHAR',
                'constraint'     => 6,
                'unsigned'       => false,
                'auto_increment' => false,
            ],
            'id_user' => [
                'type' => 'int',
                'unsigned'       => true,
            ],
            'tanggal_diagnosa' => [
                'type' => 'DATE',
                'null' => false,
            ],
            'gejala' => [
                'type' => 'TEXT',
                'null' => false,
            ],
            'penyakit' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
            ],
            'cf_pakar' => [
                'type' => 'float',
                'null' => false,
            ],

        ]);
        $this->forge->addKey('kode_diagnosa', true);
        $this->forge->addForeignKey('id_user', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('diagnosa');
    }

    public function down()
    {
        $this->forge->dropTable('diagnosa');
    }
}
