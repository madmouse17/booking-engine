<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class HotelDetails extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'hotel_id'       => [
                'type'       => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE
            ],
            'type' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'image' => [
                'type' => 'text',
            ],
            'price' => [
                'type' => 'BigInt',
                'constraint' => 20
            ],
            'max_user' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
        ]);


        $this->forge->addPrimaryKey('id', true);
        $this->forge->addForeignKey('hotel_id', 'Hotels', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('HotelDetails');
    }

    public function down()
    {
        //
    }
}
