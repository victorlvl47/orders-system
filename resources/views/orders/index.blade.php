<x-layout>
    <h1 id="mainTitle">Sistema pedidos</h1>

    <table>
        <thead>
            <tr>
                <th>id pedido</th>
                <th>nombre</th>
                <th>tipo de pedido</th>
                <th>descripcion</th>
                <th>fecha entrega</th>
                <th>fecha recoleccion</th>
                <th>cantidad de articulos</th>
                <th>costo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->nombre}}</td>
                    <td>{{$order->tipo_pedido}}</td>
                    <td>{{$order->descripcion}}</td>
                    <td>{{$order->fecha_entrega}}</td>
                    <td>{{$order->fecha_recoleccion}}</td>
                    <td>{{$order->cantidad_articulos}}</td>
                    <td>{{$order->costo}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <button id="addOrderBtn" type="button">+ agregar pedido</button>
</x-layout>