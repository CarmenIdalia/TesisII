<?php

namespace App\Http\Controllers\API;

use Carbon\Carbon;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\InventoryItem;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //
    public function getDashboardData()
    {
        try {
            $daysToShow = 14;

            // Datos básicos
            $salesTotal = Order::sum('total');
            $ordersToday = Order::whereDate('created_at', now()->toDateString())->count();

            // Ventas diarias - Usando la misma lógica que el controlador web
            $salesData = Order::selectRaw('DATE(order_date) as date, SUM(total) as total')
                ->where('order_date', '>=', now()->subDays($daysToShow - 1))
                ->groupBy('date')
                ->orderBy('date', 'ASC')
                ->get()
                ->keyBy('date');

            $fechas = [];
            $totales = [];

            // Generar fechas y rellenar con datos en orden cronológico
            for ($i = $daysToShow - 1; $i >= 0; $i--) {
                $date = now()->subDays($i);
                $fechas[] = $date->translatedFormat('j M');

                $dateKey = $date->format('Y-m-d');
                $total = isset($salesData[$dateKey]) ? $salesData[$dateKey]->total : 0;
                $totales[] = number_format($total, 2);
            }

            // Obtener todo el inventario sin límite
            $inventory = InventoryItem::select('name', 'quantity')
                ->orderBy('quantity', 'desc')
                ->get();

            $maxSales = max(array_map('floatval', $totales));
            $yAxisMax = ceil($maxSales * 1.15);

            return response()->json([
                'ventas_totales' => number_format($salesTotal, 2),
                'pedidos_hoy' => $ordersToday,
                'ventas_diarias' => [
                    'fechas' => $fechas,
                    'totales' => $totales,
                    'maximo_eje_y' => $yAxisMax
                ],
                'inventario' => [
                    'productos' => $inventory->pluck('name')->toArray(),
                    'niveles_stock' => $inventory->pluck('quantity')->toArray()
                ]
            ]);

        } catch (\Exception $e) {
            Log::error('Dashboard Error: ' . $e->getMessage());
            return response()->json([
                'error' => 'Error al cargar los datos del dashboard',
                'message' => $e->getMessage()
            ], 500);
        }
    }


    // public function getInventoryData()
    // {
    //     $inventoryItems = InventoryItem::select('name', 'quantity')->get();
    //     return response()->json($inventoryItems);
    // }

    // public function getSalesData()
    // {
    //     $daysToShow = 14;
    //     $dates = collect();
    //     for ($i = $daysToShow - 1; $i >= 0; $i--) {
    //         $dates->push(Carbon::now()->subDays($i)->format('Y-m-d'));
    //     }

    //     $salesData = Order::selectRaw('DATE(created_at) as date, SUM(total) as total')
    //         ->where('created_at', '>=', Carbon::now()->subDays($daysToShow - 1))
    //         ->groupBy('date')
    //         ->orderBy('date', 'ASC')
    //         ->pluck('total', 'date');

    //     $sales = $dates->map(function ($date) use ($salesData) {
    //         return [
    //             'date' => $date,
    //             'total' => $salesData->get($date, 0),
    //         ];
    //     });

    //     return response()->json($sales);
    // }
}
