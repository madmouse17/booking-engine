<?php

namespace App\Controllers;

use Midtrans;
use CodeIgniter\HTTP\Request;
use App\Controllers\BaseController;
use App\Models\Bookings;
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
        $save = new Bookings();
        $moreUnique = md5(uniqid(rand(), true));
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
                'order_id' => $moreUnique,
                'gross_amount' =>  $request->getVar('total'),
            ],
            'customer_details' => $customerDetails,
            'expiry' => [
                'start_time' => date('Y-m-d H:i:s T'),
                'unit' => 'minutes',
                'duration' => 60,
            ],
        ];

        $data = [
            'booking_id' => $moreUnique, 'nama' => $request->getVar('nama'), 'alamat' => $request->getVar('alamat'), 'no_hp' => $request->getVar('no_hp'), 'amount' => $request->getVar('total'), 'nama_hotel' => $request->getVar('nama_hotel'), 'checkin' => $request->getVar('checkin'), 'checkout' => $request->getVar('checkout')
        ];
        // dd($data);
        $save->insert($data);
        $snap = \Midtrans\Snap::createTransaction($params);
        // $order = Order::find($request->id);
        if ($snap->token) {
            return redirect()->to($snap->redirect_url);
        }
        // dd($snap);
    }
    public function notif()
    {
        $request = \Config\Services::request();
        $payload = $request->getContent();
        $notification = json_decode($payload);

        $validSignatureKey = hash("sha512", $notification->booking_id . $notification->status_code . $notification->gross_amount . 'SB-Mid-server-ZKe3a5xJzbsnWL_0FuZ5dqkw');



        $this->initPaymentGateway();
        $statusCode = null;

        $paymentNotification = new \Midtrans\Notification();


        $transaction = $paymentNotification->transaction_status;
        $type = $paymentNotification->payment_type;
        $orderId = $paymentNotification->order_id;
        $fraud = $paymentNotification->fraud_status;

        $vaNumber = null;
        $vendorName = null;
        if (!empty($paymentNotification->va_numbers[0])) {
            $vaNumber = $paymentNotification->va_numbers[0]->va_number;
            $vendorName = $paymentNotification->va_numbers[0]->bank;
        }

        $paymentStatus = null;
        if ($transaction == 'capture') {
            // For credit card transaction, we need to check whether transaction is challenge by FDS or not
            if ($type == 'credit_card') {
                if ($fraud == 'challenge') {
                    // TODO set payment status in merchant's database to 'Challenge by FDS'
                    // TODO merchant should decide whether this transaction is authorized or not in MAP
                    $paymentStatus = 'challenge';
                } else {
                    // TODO set payment status in merchant's database to 'Success'
                    $paymentStatus = 'success';
                }
            }
        } else if ($transaction == 'settlement') {
            // TODO set payment status in merchant's database to 'Settlement'
            $paymentStatus = 'settlement';
        } else if ($transaction == 'pending') {
            // TODO set payment status in merchant's database to 'Pending'
            $paymentStatus = 'pending';
        } else if ($transaction == 'deny') {
            // TODO set payment status in merchant's database to 'Denied'
            $paymentStatus = 'deny';
        } else if ($transaction == 'expire') {
            // TODO set payment status in merchant's database to 'expire'
            $paymentStatus = 'expire';
        } else if ($transaction == 'cancel') {
            // TODO set payment status in merchant's database to 'Denied'
            $paymentStatus = 'cancel';
        }


        $message = 'Payment status is : ' . $paymentStatus;

        $response = [
            'code' => 200,
            'message' => $message,
        ];

        echo json_encode($response);
    }

    public function completed()
    {
        $request = \Config\Services::request();
        $request->getVar('order_id');
        $model = new Bookings();
        $val = $model->where('booking_id', $request->getVar('order_id'))->first();

        $model->update($val['id'], [
            'status' => 'paid'
        ]);
        // dd($val);
        return view('pages/completed', ['val' => $val]);
    }
}
