<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'unsigned'       => TRUE,
                'auto_increment' => TRUE,
            ],
            'username'          => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
                'null'           => 'false',
            ],
            'name'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
                'null'           => 'false',
            ],
            'email'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
                'null'           => 'false',
            ],
            'password'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
                'null'           => 'false',
            ]

        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
