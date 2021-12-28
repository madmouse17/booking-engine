<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use App\Models\HotelDetails as ModelsHotelDetails;
use CodeIgniter\HTTP\Request;

class HotelDetails extends BaseController
{
    // public function index()
    // {
    //     //
    // }

    public function book()
    {
        $request = \Config\Services::request();
        // $data = $this->input->get('id');
        $param = [
            'checkin' => $request->getVar('checkin'),
            'checkout' => $request->getVar('checkout'),
            'id' => $request->getVar('id')
        ];
        $details = new ModelsHotelDetails();
        $data['book'] = $details->getId($request->getVar('id'));

        $book = $data['book'];
        array_push($param, $book);

        // dd($param);
        return view('pages/book', ['param' => $param]);
    }
}
