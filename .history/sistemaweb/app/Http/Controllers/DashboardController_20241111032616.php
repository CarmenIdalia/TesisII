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

        // Obtener la última fecha de pedido
        $lastOrderDate = Order::max('created_at');
        $lastOrderDate = Carbon::parse($lastOrderDate)->endOfDay(); // Asegura que es el final del día de la última orden

        // Generar las fechas de los últimos 7 días a partir de la última fecha de pedido
        $dates = collect();
        for ($i = 6; $i >= 0; $i--) {
            $dates->push($lastOrderDate->copy()->subDays($i)->format('Y-m-d'));
        }

        // Obtener las ventas agrupadas por fecha para los últimos 7 días
        $salesData = Order::selectRaw('DATE(created_at) as date, SUM(total) as total')
            ->where('created_at', '>=', $lastOrderDate->copy()->subDays(6))
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

        return view('dashboard', compact('salesTotal', 'ordersToday', 'inventoryStatus', 'salesDatesLabels', 'salesTotals', 'inventoryItems', 'inventoryLevels'));
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
