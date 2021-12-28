<?php

namespace App\Controllers;

use Midtrans;
use CodeIgniter\HTTP\Request;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use App\Models\HotelDetails as ModelsHotelDetails;

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

    public function payment()
    {
        helper('text');
        $request = \Config\Services::request();
        $this->initPaymentGateway();
        $customerDetails = [
            'first_name' => $request->getVar('nama'),
            'email' => $request->getVar('email'),
            'phone' =>  $request->getVar('no_hp'),
        ];
        $params = [
            'enable_payments' => ['credit_card', 'mandiri_clickpay', 'cimb_clicks', 'bca_klikbca', 'bca_klikpay', 'bri_epay', 'echannel', 'permata_va', 'bca_va', 'bni_va', 'other_va', 'gopay', 'indomaret', 'danamon_online', 'akulaku'],
            'transaction_details' => [
                'booking_id' => random_string('alnum', 20),
                'gross_amount' =>  $request->getVar('total'),
            ],
            'customer_details' => $customerDetails,
            'expiry' => [
                'start_time' => date('Y-m-d H:i:s T'),
                'unit' => 'minutes',
                'duration' => 60,
            ],
        ];
        $snap = \Midtrans\Snap::createTransaction($params);
        // $order = Order::find($request->id);
        if ($snap->token) {
            return redirect()->to($snap->redirect_url);
        }
        // dd($snap);
        // if ($snap->token) {
        // 	$order->payment_token = $snap->token;
        // 	$order->payment_url = $snap->redirect_url;
        // 	$order->save();
        //      return redirect($snap->redirect_url);
        //  }
    }
}
