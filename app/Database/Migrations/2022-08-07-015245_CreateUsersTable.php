<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'cpf' => [
                'type'       => 'VARCHAR',
                'constraint' => '11',
                'unique'    => true,
            ],
            'email' => [
                'type'      => 'VARCHAR',
                'constraint' => '100',
                'unique'    => true,
            ],
            'senha' => [
                'type'      => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('usuarios');
    }

    public function down()
    {
        $this->forge->dropTable('usuarios');
    }
}
