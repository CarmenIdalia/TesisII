export interface DashboardData {
  ventas_totales: string;
  pedidos_hoy: number;
  ventas_diarias: VentasDiarias;
  inventario: Inventario;
  products: Product[];
}

export interface VentasDiarias {
  fechas: string[];
  totales: string[];
  maximo_eje_y: number;
}

export interface Inventario {
  productos: string[];
  niveles_stock: number[];
  niveles_reorden: number[];
  maximo_eje_y?: number;
}

export interface Product {
  id: number;
  name: string;
  quantity: number;
  niveles_reorden: number;
}
