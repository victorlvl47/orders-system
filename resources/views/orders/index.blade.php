<x-layout>
    <h1 id="mainTitle">Sistema pedidos</h1>
    <div class="flex items-center justify-center min-h-screen bg-gray-900">
        <div class="col-span-12">
            <div class="overflow-auto lg:overflow-visible">
                <table class="table text-gray-400 border-separate space-y-6 text-sm">
                    <thead class="bg-gray-800 text-gray-500">
                        <tr>
                            <th>Id Pedido</th>
                            <th>Nombre</th>
                            <th>Tipo de Pedido</th>
                            <th>Descripcion</th>
                            <th>Fecha Entrega</th>
                            <th>Fecha Recoleccion</th>
                            <th>Cantidad de Articulos</th>
                            <th>Costo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr class="bg-gray-800">
                                <td class="p-3">{{$order->id}}</td>
                                <td class="p-3">{{$order->nombre}}</td>
                                <td class="p-3">{{$order->tipo_pedido}}</td>
                                <td class="p-3">{{$order->descripcion}}</td>
                                <td class="p-3">{{$order->fecha_entrega}}</td>
                                <td class="p-3">{{$order->fecha_recoleccion}}</td>
                                <td class="p-3">{{$order->cantidad_articulos}}</td>
                                <td class="p-3">{{$order->costo}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    

    <button id="addOrderBtn" type="button">+ agregar pedido</button>
</x-layout>