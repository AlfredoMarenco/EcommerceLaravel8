<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\ShippingAddress;
use Carbon\Carbon;
use Conekta\Conekta;
use Conekta\Handler;
use Conekta\Order as ConektaOrder;
use Conekta\ParameterValidationError;
use Conekta\ProcessingError;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use MercadoPago\Payment;
use MercadoPago\SDK;
use Openpay;
use OpenpayApiError;

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Cart::count() <= 0) {
            return redirect('/');
        } else {
                /* $response = Http::get('https://api-sepomex.hckdrk.mx/query/get_estados');
            return $response->json() */;
            return view('shop.checkout');
        }
    }

    public function directChargeOpenPay(Request $request)
    {
        //Creamos la instancia de openpay para poder hacer las solicitudes
        $user = auth()->user();
        $openpay = Openpay::getInstance(config('openpay.merchant_id'), config('openpay.private_key'), config('openpay.country_code'));
        $description = '';
        //Creamos la direccion que se le asignara a la orden de compra
        $shipping_address = ShippingAddress::create([
            'street' => $request->street,
            'number' => $request->number,
            'crosses' => $request->crosses,
            'suburb' => $request->suburb,
            'reference' => $request->reference,
            'state' => $request->state,
            'city' => $request->city,
            'postal_code' => $request->postal_code,
        ]);
        //Creamos la orden en la base de datos con un estado de process que indicara que no esta aun terminada la transaccion
        $order = Order::create([
            'amount' => (float)str_replace(',', '', Cart::total()), //aqui el metodo total() de Cart regresa un string con una coma, lo que hacemos es quitarcela
            'id_gateway' => null,
            'status' => 'charge_pending',
            'type' => 'card',
            'user_id' => $user->id,
            'shipping_address_id' => $shipping_address->id,
        ]);

        //Creamos los registros de la orden en la tabla order_producto obteniendo el contenido del carrito
        foreach (Cart::content() as $product) {
            DB::table('order_product')->insert([
                [
                    'order_id' => $order->id,
                    'product_id' => $product->id,
                    'quanty' => $product->qty,
                    'price' => $product->price,
                    'color' => $product->options->color,
                    'size' => $product->options->size,
                ]
            ]);
        }
        //Obtenemos los datos del cliente que esta autenticado y la pasamos a una variable $customer
        $customer = [
            'name' => $request->username,
            //'last_name' => $user->last_name,
            'phone_number' => '9993524136',
            'email' => $user->email,
            'requires_account' => false,
            'address' =>  [
                'line1' => $request->street . " " . $request->number,
                'line2' => $request->suburb,
                'line3' => $request->crosses,
                'state' => $request->state,
                'city' => $request->city,
                'postal_code' => $request->postal_code,
                'country_code' => 'MX'
            ],
        ];

        //Creacion del cargo en el sistema de openpay
        $chargeData = [
            'method' => 'card',
            'source_id' => $request->token_id,
            'amount' =>  '' . str_replace(',', '', Cart::total()),
            'currency' => 'MXN',
            /* 'confirm' => false, */
            'description' => config('app.name') . '-' . $order->id,
            'order_id' => $order->id,
            'device_session_id' => $request->deviceIdHiddenFieldName,
            'redirect_url' => config('app.url') . '/checkout/directChargeOpenpay/responsepayment',
            'use_3d_secure' => 'true',
            'customer' => $customer
        ];

        $charge = $openpay->charges->create($chargeData);

        $url3D = $charge->serializableData["payment_method"]->url;
        Cart::destroy();
        return redirect($url3D);
    }

    public function validateChargeOpenPay()
    {
        $idOrderOpenPay = $_GET['id'];
        $openpay = Openpay::getInstance(config('openpay.merchant_id'), config('openpay.private_key'), config('openpay.country_code'));
        $charge = $openpay->charges->get($idOrderOpenPay);
        $idOrder = $charge->serializableData["order_id"];
        /* $validationCharge = $charge->status; */
        $orderUpdate = Order::find($idOrder);
        $orderUpdate->id_gateway = $idOrderOpenPay;
        $orderUpdate->save();
        return redirect()->route('user.profile');
    }

    public function storeReference(){
        if (Cart::count() <= 0) {
            return redirect('/');
        } else {
                /* $response = Http::get('https://api-sepomex.hckdrk.mx/query/get_estados');
            return $response->json() */;
            return view('shop.checkout-store');
        }
    }

    //PAGO EN EFECTIVO
    public function storeReferenceOpenPay(Request $request)
    {

        $user = auth()->user();
        $openpay = Openpay::getInstance(config('openpay.merchant_id'), config('openpay.private_key'), config('openpay.country_code'));
        $description = '';
        //Creamos la direccion que se le asignara a la orden de compra
        $shipping_address = ShippingAddress::create([
            'street' => $request->street,
            'number' => $request->number,
            'crosses' => $request->crosses,
            'suburb' => $request->suburb,
            'reference' => $request->reference,
            'state' => $request->state,
            'city' => $request->city,
            'postal_code' => $request->postal_code,
        ]);
        //Creamos la orden en la base de datos con un estado de process que indicara que no esta aun terminada la transaccion
        $order = Order::create([
            'amount' => (float)str_replace(',', '', Cart::total()), //aqui el metodo total() de Cart regresa un string con una coma, lo que hacemos es quitarcela
            'id_gateway' => null,
            'status' => 'charge_pending',
            'type' => 'store',
            'user_id' => $user->id,
            'shipping_address_id' => $shipping_address->id,
        ]);

        //Creamos los registros de la orden en la tabla order_producto obteniendo el contenido del carrito
        foreach (Cart::content() as $product) {
            DB::table('order_product')->insert([
                [
                    'order_id' => $order->id,
                    'product_id' => $product->id,
                    'quanty' => $product->qty,
                    'price' => $product->price,
                    'color' => $product->options->color,
                    'size' => $product->options->size,
                ]
            ]);
        }
        //Obtenemos los datos del cliente que esta autenticado y la pasamos a una variable $customer
        $customer = [
            'name' => $user->name,
            'last_name' => $user->last_name,
            'phone_number' => $user->phone,
            'email' => $user->email,
            'requires_account' => false,
            'address' =>  [
                'line1' => $request->street . " " . $request->number,
                'line2' => $request->suburb,
                'line3' => $request->crosses,
                'state' => $request->state,
                'city' => $request->city,
                'postal_code' => $request->postal_code,
                'country_code' => 'MX'
            ],
        ];

        //Creacion de la referencia de pago en efectivo
        $chargeData = [
            'method' => 'store',
            'amount' =>  '' . str_replace(',', '', Cart::total()),
            'currency' => 'MXN',
            'description' => config('app.name') . '-' . $order->id,
            'order_id' => $order->id,
            'due_date' => Carbon::now()->addDay(2),
            'customer' => $customer
        ];

        $charge = $openpay->charges->create($chargeData);
        $reference = $charge->serializableData["payment_method"]->reference;
        $id_gateway = $charge->id;
        $order->update([
            'id_gateway' => $id_gateway,
            'reference' => $reference
        ]);
        //dd($charge);

        Cart::destroy();
        return redirect()->route('user.orders');
    }

    public function directChargeConekta(Request $request)
    {
        Conekta::setApiKey(config("conekta.key_conekta"));
        $user = auth()->user();
        //Implementación de una orden.
        try {
            $order = ConektaOrder::create(
                [
                    "line_items" => [
                        [
                            'name' => 'Producto 1',
                            'unit_price' => ((int)str_replace(',', '', Cart::total())) * 100,
                            'quantity' => Cart::count()
                        ]
                    ],
                    // "shipping_lines" => [
                    //     [
                    //         "amount" => 1500,
                    //         "carrier" => "FEDEX"
                    //     ]
                    // ], //shipping_lines - physical goods only
                    "currency" => "MXN",
                    "customer_info" => [
                        "name" => $user->name,
                        "email" => $user->email,
                    ],
                    // "shipping_contact" => [
                    //     "address" => [
                    //         "street1" => "Calle 123, int 2",
                    //         "postal_code" => "06100",
                    //         "country" => "MX"
                    //     ]
                    // ], //shipping_contact - required only for physical goods
                    // "metadata" => ["reference" => "12987324097", "more_info" => "lalalalala"],
                    "charges" => [
                        [
                            "payment_method" => [
                                "type" => "card",
                                "token_id" => $request->conektaTokenId
                            ] //payment_method - use customer's default - a card
                            //to charge a card, different from the default,
                            //you can indicate the card's source_id as shown in the Retry Card Section
                        ]
                    ]
                ]
            );
            return view('landing.checkout-approved', compact('order'));
        } catch (ProcessingError $error) {
            echo $error->getMessage();
        } catch (ParameterValidationError $error) {
            echo $error->getMessage();
        } catch (Handler $error) {
            echo $error->getMessage();
        }
        Cart::destroy();
    }

    public function directChargeMercadoPago(Request $request)
    {
        SDK::setAccessToken(config('mercadopago.access_token'));
        try {
            //Creando pago en mercadopago
            $payment = new Payment();
            $payment->transaction_amount = 100;
            $payment->token = $request->token;
            $payment->description = "Blue shirt";
            $payment->installments = $request->installments;
            $payment->payment_method_id = $request->payment_method_id;
            $payment->issuer_id = $request->issuer_id;
            $payment->payer = array(
                "email" => "alfredomarenco@boletea.com"
            );
            // Guarda y postea el pago
            $payment->save();

            // Imprime el estado del pago
            echo $payment->status;
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}
