<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {

        /*         //Graficas de ordenes generedas hoy y acomulados
        $orderCompleteToday = Order::where('status', 'charge.succeeded')->whereBetween('created_at', [Carbon::today(), Carbon::now()])->count();
        $orderPendingToday = Order::where('status', 'charge_pending')->whereBetween('created_at', [Carbon::today(), Carbon::now()])->count();
        $orderComplete = Order::where('status', 'charge.succeeded')->count();
        $orderPending = Order::where('status', 'charge_pending')->count();

        $chart = (new LarapexChart)->donutChart()
            ->setTitle('Ordenes Generadas')
            ->setSubtitle('Hoy')
            ->addData([$orderCompleteToday, $orderPendingToday])
            ->setLabels(['Completed', 'Pending']);

        $chart2 = (new LarapexChart)->donutChart()
            ->setTitle('Total de ordenes generadas')
            ->setSubtitle('Acomulado')
            ->addData([$orderComplete, $orderPending])
            ->setLabels(['Completed', 'Pending']);
        //Grafica para el total de ingresos
        $orders = Order::all();
        $totalOrders = 0;
        foreach ($orders as $order) {
            $totalOrders += $order->amount;
        }
        $chart3 = (new LarapexChart)->barChart()
            ->setTitle('Total de Ingresos')
            ->setSubtitle('Ingresos')
            ->addData('Ingresos', [$totalOrders, 9, 3, 4, 10, 8])
            ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June', 'July', 'Agos', 'Sep']); */



        /* return view('chart', compact('chart')); */
        return view('admin.home'/* , compact('chart', 'chart2') */);
    }
}
