<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Bookings extends Migration
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
            'booking_id'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
                'unique'         => true,
            ],
            'nama' => [
                'type' => 'TEXT',
            ],
            'alamat' => [
                'type' => 'TEXT',
            ],
            'no_hp' => [
                'type' => 'TEXT',
            ],
            'amount' => [
                'type' => 'BigInt',
            ],
            'status' => [
                'type' => 'enum("unpaid","paid")',
                'default' => 'unpaid'
            ],
            'nama_hotel' => [
                'type' => 'text',
            ],
            'checkin' => [
                'type' => 'date',
            ],
            'checkout' => [
                'type' => 'date',
            ],

        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('bookings');
    }

    public function down()
    {
        //
    }
}
