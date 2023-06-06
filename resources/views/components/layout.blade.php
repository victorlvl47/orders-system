<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    {{$slot}}
</body>
</html>