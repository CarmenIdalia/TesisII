<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}