<?php

namespace App\Database\Seeds;

use App\Models\Fasilitas;
use App\Models\Hotel as Hotels;
use CodeIgniter\Database\Seeder;
use App\Models\HotelDetails as ModelsHotelDetails;

class Hotel extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($j = 0; $j < 10; $j++) {

            $data = [
                'nama_hotel' => $faker->sentence(),
                'alamat'    => $faker->address,
                'image_hotel' =>  $faker->randomElement([[$faker->image(('image/hotel'), 762, 900, 'hotels', false), $faker->image(('image/hotel'), 762, 900, 'hotel', false), $faker->image(('image/hotel'), 762, 900, 'hotels', false), $faker->image(('image/hotel'), 762, 900, 'hotel', false)]]),
            ];
            $data['image_hotel'] = json_encode($data['image_hotel']);


            $hotel = new Hotels();
            $val = $hotel->insert($data);

            for ($i = 0; $i <= 3; $i++) {
                $data1 = [
                    'type'    => $faker->word(),
                    'image' =>  $faker->image(('image/hoteldetails'), 270, 200, 'hotel', false),
                    'price' => $faker->randomNumber(5, true),
                    'max_user' => $faker->randomDigitNotNull(),
                    'hotel_id' => $val,
                ];
                $details = new ModelsHotelDetails();
                $value = $details->insert($data1);
            }
            for ($a = 0; $a < 3; $a++) {
                $fasilitas = [
                    'fasilitas'    => $faker->word('2'),
                    'hoteldetails_id' => $value,
                ];
                $db = new Fasilitas();
                $db->insert($fasilitas);
            }
        }
    }
}
