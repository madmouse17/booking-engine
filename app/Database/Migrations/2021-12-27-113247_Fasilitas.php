<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Fasilitas extends Migration
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
            'hoteldetails_id' => [
                'type'       => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE
            ],
            'fasilitas' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);


        $this->forge->addPrimaryKey('id', true);
        $this->forge->addForeignKey('hoteldetails_id', 'HotelDetails', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('fasilitas');
    }

    public function down()
    {
        //
    }
}
