<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Empresa RentByRent</title>
    <!-- Estilos CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #7f69a5; /* Color de fondo */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            text-align: center;
            padding: 50px; 
            border-radius: 20px; 
            background-color: #fff;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2); 
            width: 80%; 
            max-width: 500px; 
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
            margin-bottom: 30px; 
        }
        a {
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            padding: 15px 30px;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Benvingut a RentByRent</h1>
        <p>¡Portal del treballador!</p>
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            @else
                <a href="{{ route('login') }}">Iniciar sessio</a>
            @endauth
        @endif
    </div>
</body>
</html>
