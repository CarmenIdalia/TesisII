@extends('adminlte::page')


@section('content_header')
    <h1><i class="fas fa-utensils"></i>
        </i>BIENVENIDOS</h1>

@stop

@section('content')
    {{-- <div class="mb-4 text-center">
        <img src="vendor/adminlte/dist/img/Fondo1.jpeg" alt="logo" style="width: 1150px; height: 500px;">
    </div> --}}
    <div class="container-fluid">
        <div class="row">
            <!-- Ventas Totales -->
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ number_format($salesTotal, 2) }}</h3>
                        <p>Ventas Totales</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                </div>
            </div>

            <!-- Pedidos Hoy -->
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ $ordersToday }}</h3>
                        <p>Pedidos Hoy</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                </div>
            </div>

            <!-- Inventario Bajo Nivel -->
            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ $inventoryStatus->count() }}</h3>
                        <p>Artículos a Reabastecer</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-box"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gráficas -->
        <div class="row">
            <div class="col-md-6">
                <canvas id="salesChart"></canvas>
            </div>
            <div class="col-md-6">
                <canvas id="inventoryChart"></canvas>
            </div>
        </div>
    </div>
@stop




@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    {{-- <script>
        console.log("Hi, I'm using the Laravel-AdminLTE package!");
    </script> --}}

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Ejemplo de gráfica de ventas
        var ctx = document.getElementById('salesChart').getContext('2d');
        var salesChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [ /* Datos de etiquetas */ ],
                datasets: [{
                    label: 'Ventas Diarias',
                    data: [ /* Datos de ventas */ ],
                    borderWidth: 1
                }]
            }
        });
    </script>
@stop
