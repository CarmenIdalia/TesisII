<?php

namespace App\Http\Controllers\API;

use Carbon\Carbon;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\InventoryItem;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //
    public function getDashboardData()
    {
        try {
            $daysToShow = 14; // Últimos 14 días

            // Datos básicos
            $salesTotal = Order::sum('total');
            $ordersToday = Order::whereDate('created_at', now()->toDateString())->count();
            $inventoryStatus = InventoryItem::whereColumn('quantity', '<=', 'reorder_level')->get();

            // Preparar datos de ventas diarias
            $salesData = Order::selectRaw('DATE(created_at) as date, SUM(total) as total')
                ->where('created_at', '>=', now()->subDays($daysToShow))
                ->groupBy('date')
                ->orderBy('date')
                ->get();

            // Generar array de fechas
            $salesDatesLabels = [];
            $salesTotals = [];

            for ($i = $daysToShow - 1; $i >= 0; $i--) {
                $date = now()->subDays($i);
                $formattedDate = $date->format('d/m');
                $salesDatesLabels[] = $formattedDate;

                $dayTotal = $salesData->where('date', $date->format('Y-m-d'))->first();
                $salesTotals[] = $dayTotal ? round($dayTotal->total, 2) : 0;
            }

            // Datos de inventario
            $inventory = InventoryItem::select('name', 'quantity')->get();
            $inventoryItems = $inventory->pluck('name')->toArray();
            $inventoryLevels = $inventory->pluck('quantity')->toArray();

            // Calcular máximos para los ejes Y
            $maxSales = max($salesTotals);
            $yAxisMax = ceil($maxSales * 1.15);

            $maxInventory = max($inventoryLevels);
            $yAxisInventoryMax = ceil($maxInventory * 1.15);

            return response()->json([
                'salesTotal' => round($salesTotal, 2),
                'ordersToday' => $ordersToday,
                'inventoryStatus' => $inventoryStatus,
                'salesDatesLabels' => $salesDatesLabels,
                'salesTotals' => $salesTotals,
                'inventoryItems' => $inventoryItems,
                'inventoryLevels' => $inventoryLevels,
                'yAxisMax' => $yAxisMax,
                'yAxisInventoryMax' => $yAxisInventoryMax
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error al cargar los datos del dashboard',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function getInventoryData()
    {
        $inventoryItems = InventoryItem::select('name', 'quantity')->get();
        return response()->json($inventoryItems);
    }

    public function getSalesData()
    {
        $daysToShow = 14;
        $dates = collect();
        for ($i = $daysToShow - 1; $i >= 0; $i--) {
            $dates->push(Carbon::now()->subDays($i)->format('Y-m-d'));
        }

        $salesData = Order::selectRaw('DATE(created_at) as date, SUM(total) as total')
            ->where('created_at', '>=', Carbon::now()->subDays($daysToShow - 1))
            ->groupBy('date')
            ->orderBy('date', 'ASC')
            ->pluck('total', 'date');

        $sales = $dates->map(function ($date) use ($salesData) {
            return [
                'date' => $date,
                'total' => $salesData->get($date, 0),
            ];
        });

        return response()->json($sales);
    }
}
