<?php

/**
 * Pagination Tutorial
 * @ref https://www.sourcecodester.com/tutorial/php/15412/codeigniter-4-pagination-tutorial
 * @cli php spark db:create dummy_db
 *      php spark migrate
 *      php spark db:seed DummyTableModelSeeder
 */

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class DummyTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 1,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'contact' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'address' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp'
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('dummy_table');
    }

    public function down()
    {
        $this->forge->dropTable('dummy_table');
    }
}
