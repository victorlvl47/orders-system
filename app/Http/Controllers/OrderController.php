<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Show all orders
    public function index() {
        return view('orders.index', [
            'orders' => Order::all()
        ]);
    }

    // Show the create order form
    public function create() {
        return view('orders.create');
    }

    // Store order data
    public function store(Request $request) {
        // dd($request->all());

        $formFields = $request->validate([
            'nombre' => 'required', 
            'tipo_pedido' => 'required', 
            'descripcion' => 'required', 
            'fecha_entrega' => 'required', 
            'fecha_recoleccion' => 'required', 
            'cantidad_articulos' => 'required', 
            'costo' => 'required'
        ]);

        Order::create($formFields);

        return redirect('/');
    }

    // Delete Order
    public function destroy(Order $order) {
        $order->delete();

        return redirect('/orders/manage');
    }

    // Manage Orders
    public function manage() {
        return view('orders.manage', [
            'orders' => Order::all()
        ]);
    }
}
