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
        // Cargar datos iniciales
        $salesTotal = Order::sum('total');
        $ordersToday = Order::whereDate('created_at', now()->toDateString())->count();
        $topMenuItems = MenuItem::withCount('orderItems')->orderBy('order_items_count', 'desc')->take(5)->get();
        $inventoryStatus = InventoryItem::whereColumn('quantity', '<=', 'reorder_level')->get();

        return view('dashboard.index', compact('salesTotal', 'ordersToday', 'topMenuItems', 'inventoryStatus'));
    }

    public function getSalesData()
    {
        // Lógica para obtener datos de ventas por día/mes
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
