<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Peserta extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'kode' => [
                'type' => 'VARCHAR',
                'constraint' => 6,
                'null' => FALSE
            ],
            'nama' => [
                'type'=>'varchar',
                'constraint' => 50,
                'null' => FALSE
            ],
            'jk' => [
                'type' => 'varchar',
                'constraint' => 1,
                'null' => FALSE
            ],
            'ttl' => [
                'type' => 'varchar',
                'constraint' => 30,
                'null' => FALSE
            ],
            'agama' => [
                'type' => 'varchar',
                'constraint' => 10,
                'null' => FALSE
            ],
            'alamat' => [
                'type' => 'text',
                'null' => FALSE
            ],
            'telp' => [
                'type' => 'varchar',
                'constraint' => 15,
                'null' => FALSE
            ],
            'hp' => [
                'type' => 'varchar',
                'constraint' => 13,
                'null' => FALSE
            ],
            'asal_sekolah' => [
                'type' => 'varchar',
                'constraint' => 50,
                'null' => FALSE
            ],
            'tinggi_badan' => [
                'type' => 'int',
                'constraint' => 3,
                'null' => FALSE
            ],
            'berat_badan' => [
                'type' => 'int',
                'constraint' => 3,
                'null' => FALSE
            ],
            'golongan_darah' => [
                'type' => 'varchar',
                'constraint' => 2,
                'null' => FALSE
            ],
            'nama_ayah' => [
                'type' => 'varchar',
                'constraint' => 50,
                'null' => FALSE
            ],
            'nama_ibu' => [
                'type' => 'varchar',
                'constraint' => 50,
                'null' => FALSE
            ],
            'pekerjaan_ayah' => [
                'type' => 'varchar',
                'constraint' => 50,
                'null' => FALSE
            ],
            'pekerjaan_ibu' => [
                'type' => 'varchar',
                'constraint' => 50,
                'null' => FALSE
            ],
            'alamat_ortu' => [
                'type' => 'text',
                'null' => FALSE
            ],
            'created_at' => [
                'type' => 'datetime',
                'null' => TRUE
            ],
            'updated_at' => [
                'type' => 'datetime',
                'null' => TRUE
            ],
            'deleted_at' => [
                'type' => 'datetime',
                'null' => TRUE
            ]
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->addKey('kode', TRUE);
        $this->forge->createTable('peserta');

    }

    public function down()
    {
        $this->forge->dropTable('peserta');
    }
}
