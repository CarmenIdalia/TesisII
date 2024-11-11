<?php

namespace App\Http\Controllers;

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

        // Obteniendo datos para varias fechas y asegurando múltiples puntos
        $salesData = Order::selectRaw('DATE(created_at) as date, SUM(total) as total')
            ->groupBy('date')
            ->orderBy('date', 'ASC')
            ->pluck('total');
        $salesDates = Order::selectRaw('DATE(created_at) as date')
            ->groupBy('date')
            ->orderBy('date', 'ASC')
            ->pluck('date');

        $inventoryItems = InventoryItem::pluck('name');
        $inventoryLevels = InventoryItem::pluck('quantity');

        return view('dashboard', compact('salesTotal', 'ordersToday', 'inventoryStatus', 'salesData', 'salesDates', 'inventoryItems', 'inventoryLevels'));
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
