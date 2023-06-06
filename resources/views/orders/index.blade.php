<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders System</title>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
        
        /* Center mainTitle and addOrderBtn horizontally */
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        #mainTitle, #addOrderBtn {
            margin: 20px 0;
        }
    </style>
</head>
<body>
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
</body>
</html>