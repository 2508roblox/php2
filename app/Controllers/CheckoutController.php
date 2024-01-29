<?php

use App\Libs\Controller;
use App\Middleware\AuthMiddleware;

class CheckoutController extends Controller
{

    public function get()
    {
        if (isset($_GET['vnp_TransactionStatus']) && $_GET['vnp_TransactionStatus'] == '02') {
            // dd($_GET['vnp_TransactionStatus']);
            // dd($_GET['vnp_TxnRef']);
            $this->model('order')->updateOrderStatus($_GET['vnp_TxnRef']);
            redirect('order');
        }
        // if (isset($_GET['vnp_TransactionStatus']) && $_GET['vnp_TransactionStatus'] == '00') {
        //     dd($_GET['vnp_TransactionStatus']);
        //     dd($_GET['vnp_TxnRef']);
        //     $this->model('order')->updateOrderStatus($_GET['vnp_TxnRef']);
        //     redirect('order');
        // }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $latestId = $this->model('order')->create_order($_POST);
            $result = $this->model('cart')->getAllCarts();
            $carts = [];

            if ($result) {
                while ($row = $result->fetch_assoc()) {
                    $carts[] = $row;
                }
            }

            $this->model('orderdetail')->create_order_detail($carts, $latestId);
            $this->model('cart')->deleteAllByUserId();

            if ($_POST['payment_method'] == 'momo') {
                $order_latest = $this->model('order')->getOrderById($latestId)->fetch_assoc();

                $payment_data['total_amount'] =  $order_latest['total_amount'];
                $payment_data['id'] =  $order_latest['id'];

                return $this->view('frontend/momo', ['data' => $payment_data]);
            } else if ($_POST['payment_method'] == 'vietinbank') {
                $order_latest = $this->model('order')->getOrderById($latestId)->fetch_assoc();

                $payment_data['total_amount'] =  $order_latest['total_amount'];
                $payment_data['id'] =  $order_latest['id'];

                return $this->view('frontend/bank', ['data' => $payment_data]);
            } else if ($_POST['payment_method'] == 'vnpay') {
                $order_latest = $this->model('order')->getOrderById($latestId)->fetch_assoc();
                $payment_data['total_amount'] =  $order_latest['total_amount'];
                $payment_data['id'] =  $order_latest['id'];

                $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
                $vnp_Returnurl = "http://localhost/source/order";
                $vnp_TmnCode = "D15NVMKJ";
                $vnp_HashSecret = "ZXFYJFBDTZTNQYUUHJZCOTWBVBJVAIWW";

                $vnp_TxnRef =  $payment_data['id'];
                $vnp_OrderInfo = 'Thanh Toán đơn hàng tại Electro';
                $vnp_OrderType = 'bank';
                $vnp_Amount = 100 *  $payment_data['total_amount'];
                $vnp_Locale = 'vn';
                $vnp_BankCode = 'NCB';
                $vnp_IpAddr = "http://localhost/source/order";

                $inputData = array(
                    "vnp_Version" => "2.1.0",
                    "vnp_TmnCode" => $vnp_TmnCode,
                    "vnp_Amount" => $vnp_Amount,
                    "vnp_Command" => "pay",
                    "vnp_CreateDate" => date('YmdHis'),
                    "vnp_CurrCode" => "VND",
                    "vnp_IpAddr" => $vnp_IpAddr,
                    "vnp_Locale" => $vnp_Locale,
                    "vnp_OrderInfo" => $vnp_OrderInfo,
                    "vnp_OrderType" => $vnp_OrderType,
                    "vnp_ReturnUrl" => $vnp_Returnurl,
                    "vnp_TxnRef" => $vnp_TxnRef
                );

                if (isset($vnp_BankCode) && $vnp_BankCode != "") {
                    $inputData['vnp_BankCode'] = $vnp_BankCode;
                }

                ksort($inputData);
                $query = "";
                $i = 0;
                $hashdata = "";

                foreach ($inputData as $key => $value) {
                    if ($i == 1) {
                        $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
                    } else {
                        $hashdata .= urlencode($key) . "=" . urlencode($value);
                        $i = 1;
                    }
                    $query .= urlencode($key) . "=" . urlencode($value) . '&';
                }

                $vnp_Url = $vnp_Url . "?" . $query;

                if (isset($vnp_HashSecret)) {
                    $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);
                    $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
                }

                $returnData = array(
                    'code' => '00',
                    'message' => 'success',
                    'data' => $vnp_Url
                );
                if (true) {
                    // after payment is completed




                    header('Location: ' . $vnp_Url);
                    die();
                } else {
                    echo json_encode($returnData);
                }
            }
        }
        AuthMiddleware::handle();

        if (isset($_SESSION['user'])) {
            $carts = $this->model('cart')->getAllCarts();
            $_SESSION['carts'] = $carts;
            $_SESSION['cartsCount'] = $carts->num_rows ?? 0;
            $wishlists =  $this->model('wishlist')->getAllWishlistsByUserId();
            $_SESSION['wishlists'] = $wishlists;
            $_SESSION['wishlistsCount'] = $wishlists->num_rows ?? 0;
        }
        return $this->view('frontend/checkout', ['carts' => $carts]);
    }
}