<?php

namespace App\Http\Controllers\Admin;

use App\Exports\OrdersExport;
use App\Exports\ProductExport;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Graficas de ordenes generedas hoy y acomulados
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
            ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June', 'July', 'Agos', 'Sep']);



        /* return view('chart', compact('chart')); */
        return view('admin.reports.graficas', compact('chart', 'chart2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function sales()
    {
        $users = User::pluck('name', 'id');
        $users->push('Todos');
        return view('admin.reports.ventas', compact('users'));
    }

    public function inventary()
    {
        return view('admin.reports.inventary');
    }

    public function exportInventary()
    {
        return Excel::download(new ProductExport, 'Inventario_Productos_Bajce.xlsx');
    }

    public function getTableReport(Request $request)
    {
        return Excel::download(new OrdersExport($request->date_start, $request->date_end), 'Reporte_Ordenes ' . Carbon::now() . '.xlsx');
    }

    public function exportReportSales()
    {
        return Excel::download(new OrdersExport('2021-12-10', ''), 'Reporte_Ordenes.xlsx');
    }
}
