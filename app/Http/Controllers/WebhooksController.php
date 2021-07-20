<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use App\Models\Order;
use App\Models\ShippingAddress;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class WebhooksController extends Controller
{
    public function __invoke(Request $request)
    {
        /* $payment_id = $request->get('payment_id'); */
        $response = json_decode(file_get_contents('php://input'), true);
        Log::info($response);
        /*return response()->json(200); */
        $type = $response['payment_id'];
        $response = Http::get("https://api.mercadopago.com/v1/payments/$payment_id" . "?access_token=APP_USR-3891420111706382-072002-9f710511839dad9a6fb2cfec2063c5d3-794005891");
        $response = json_decode($response);
        $status =  $response->status;
        if ($status == 'approved') {
            //Creamos la direccion que se le asignara a la orden de compra
            $shipping_address = ShippingAddress::create([
                'street' => $request->session()->get('street'),
                'number' => $request->session()->get('number'),
                'crosses' => $request->session()->get('crosses'),
                'suburb' => $request->session()->get('suburb'),
                'reference' => $request->session()->get('reference'),
                'state' => $request->session()->get('state'),
                'city' => $request->session()->get('city'),
                'postal_code' => $request->session()->get('postal_code'),
            ]);
            //Creamos la orden en la base de datos con un estado de process que indicara que no esta aun terminada la transaccion
            $order = Order::create([
                'amount' => (float)str_replace(',', '', Cart::total()), //aqui el metodo total() de Cart regresa un string con una coma, lo que hacemos es quitarcela
                'id_gateway' => null,
                'status' => 'charge.succeeded',
                'type' => 'card',
                'user_id' => auth()->user()->id,
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
            Mail::to($order->user->email)->send(new OrderShipped($order));
            Cart::destroy();
        }

        return redirect()->route('user.profile');
    }
}
