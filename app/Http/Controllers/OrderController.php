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
}
