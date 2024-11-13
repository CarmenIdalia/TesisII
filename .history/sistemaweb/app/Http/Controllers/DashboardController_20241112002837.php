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
        $daysToShow = 14; // Cambia esto al número de días que quieres mostrar
        $salesTotal = Order::sum('total');
        $ordersToday = Order::whereDate('created_at', now()->toDateString())->count();
        $inventoryStatus = InventoryItem::whereColumn('quantity', '<=', 'reorder_level')->get();

        // Generar las fechas de los últimos X días hasta hoy
        $dates = collect();
        $startDate = Carbon::now()->subDays($daysToShow - 1);
        
        // Obtener las ventas agrupadas por fecha para los últimos X días
        $salesData = Order::selectRaw('DATE(order_date) as date, SUM(total) as total')
            ->where('order_date', '>=', $startDate)
            ->groupBy('date')
            ->orderBy('date', 'ASC')
            ->get()
            ->pluck('total', 'date');

        // Generar array de fechas y totales en orden correcto
        $salesDates = collect();
        for ($i = 0; $i < $daysToShow; $i++) {
            $currentDate = $startDate->copy()->addDays($i);
            $dateKey = $currentDate->format('Y-m-d');
            $formattedDate = $currentDate->translatedFormat('j M');
            
            $salesDates->push([
                'date' => $formattedDate,
                'total' => $salesData->get($dateKey, 0)
            ]);
        }

        // Separar las fechas y los totales
        $salesDatesLabels = $salesDates->pluck('date');
        $salesTotals = $salesDates->pluck('total');

        $inventoryItems = InventoryItem::pluck('name');
        $inventoryLevels = InventoryItem::pluck('quantity');

        $maxSales = $salesTotals->max();
        $yAxisMax = ceil($maxSales * 1.15);

        $maxInventoryLevel = $inventoryLevels->max();
        $yAxisInventoryMax = ceil($maxInventoryLevel * 1.15);  // Agrega un 10% de margen por encima del máximo
        return view('dashboard', compact('salesTotal', 'ordersToday', 'inventoryStatus', 'salesDatesLabels', 'salesTotals', 'inventoryItems', 'inventoryLevels', 'yAxisMax', 'yAxisInventoryMax'));
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
