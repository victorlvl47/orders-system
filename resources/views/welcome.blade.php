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
            <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>Online</td>
                <td>Lorem ipsum dolor sit amet</td>
                <td>2023-05-20</td>
                <td>2023-05-22</td>
                <td>5</td>
                <td>$50.00</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Jane Smith</td>
                <td>In-store</td>
                <td>Consectetur adipiscing elit</td>
                <td>2023-05-25</td>
                <td>2023-05-25</td>
                <td>3</td>
                <td>$30.00</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Michael Johnson</td>
                <td>Phone</td>
                <td>Sed do eiusmod tempor incididunt</td>
                <td>2023-05-30</td>
                <td>2023-05-30</td>
                <td>10</td>
                <td>$100.00</td>
            </tr>
        </tbody>
    </table>

    <button id="addOrderBtn" type="button">+ agregar pedido</button>
</body>
</html>