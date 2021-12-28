<?php

namespace App\Controllers;

use App\Models\Hotel as Hotels;
use App\Controllers\BaseController;

class Hotel extends BaseController
{
    public function index()
    {
        $hotel = new Hotels();
        // $data['hotels'] = $hotel->getDetails();
        $data = $hotel->findAll();
        return view('pages/hotel', ['hotels' => $data]);
    }

    public function hotelDetails($id)
    {
        $details = new Hotels();
        $data['hotels'] = $details->getId($id);
        $details = $data['hotels'];
        $details['0']['image_hotel'] = json_decode($details['0']['image_hotel'], true);

        return view('pages/hotelDetails', ['details' => $details]);
    }
}
