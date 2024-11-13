<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Order;
use App\Models\MenuItem;
use Illuminate\Http\Request;
use App\Models\InventoryItem;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $salesTotal = Order::sum('total');
        $ordersToday = Order::whereDate('created_at', now()->toDateString())->count();
        $inventoryStatus = InventoryItem::whereColumn('quantity', '<=', 'reorder_level')->get();

        // Generar las fechas de los últimos 7 días
        $dates = collect();
        for ($i = 6; $i >= 0; $i--) {
            $dates->push(Carbon::now()->subDays($i)->format('Y-m-d'));
        }

        // Obtener las ventas agrupadas por fecha
        $salesData = Order::selectRaw('DATE(created_at) as date, SUM(total) as total')
            ->where('created_at', '>=', Carbon::now()->subDays(6))
            ->groupBy('date')
            ->orderBy('date', 'ASC')
            ->pluck('total', 'date');

        // Rellenar los días faltantes con 0 ventas
        $salesDates = $dates->map(function ($date) use ($salesData) {
            return [
                'date' => $date,
                'total' => $salesData->get($date, 0)  // Si no hay ventas en esa fecha, se asigna 0
            ];
        });

        // Separar las fechas y los totales en dos colecciones
        $salesDatesLabels = $salesDates->pluck('date');
        $salesTotals = $salesDates->pluck('total');

        $inventoryItems = InventoryItem::pluck('name');
        $inventoryLevels = InventoryItem::pluck('quantity');

        return view('dashboard', compact('salesTotal', 'ordersToday', 'inventoryStatus', 'salesData', 'salesDates','salesDatesLabels', 'salesTotals' 'inventoryItems', 'inventoryLevels'));
    }

    public function getSalesData()
    {
        $salesData = Order::selectRaw('DATE(created_at) as date, SUM(total) as total')
            ->groupBy('date')
            ->orderBy('date', 'ASC')
            ->get();

        return response()->json($salesData);
    }

    public function getInventoryStatus()
    {
        // Lógica para obtener el estado del inventario
    }

    public function getEmployeePerformance()
    {
        // Lógica para obtener el rendimiento de empleados
    }
}