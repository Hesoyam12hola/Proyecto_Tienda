<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Principal | Juanca</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            display: flex;
            height: 100vh;
            font-family: 'Poppins', sans-serif;
            background: #f2f5fa;
        }

        .sidebar {
            width: 260px;
            background: #001a44; 
            color: white;
            padding: 20px 10px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .sidebar h2 {
            text-align: center;
            font-size: 1.8rem;
            margin-bottom: 40px;
            font-weight: bold;
        }

        .menu {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .menu a {
            padding: 12px 18px;
            text-decoration: none;
            color: white;
            background: rgba(255,255,255,0.06);
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 12px;
            transition: 0.3s;
        }

        .menu a:hover {
            background: rgba(255,255,255,0.2);
        }

        .logout-btn {
            text-align: center;
            margin-top: 40px;
        }

        .logout-btn a {
            display: block;
            padding: 12px;
            background: #d9534f;
            color: white;
            border-radius: 8px;
            font-weight: bold;
            text-decoration: none;
        }

        .logout-btn a:hover {
            background: #c0392b;
        }

        .content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px;
        }

        .welcome-card {
            background: #ffffff;
            width: 70%;
            max-width: 850px;
            padding: 60px 40px;
            border-radius: 18px;
            position: relative;
            text-align: center;
            box-shadow: 0 10px 35px rgba(0,0,0,0.12);
            transition: transform .3s ease, box-shadow .3s ease;
        }

        .welcome-card:hover {
            transform: scale(1.01);
            box-shadow: 0 15px 40px rgba(0,0,0,0.18);
        }

        .icon-bg {
            position: absolute;
            top: -40px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 80px;
            color: #001a44;
            opacity: 0.15;
        }

        .welcome-title {
            font-size: 2.8rem;
            font-weight: 800;
            color: #001a44;
            margin-bottom: 10px;
        }

        .welcome-sub {
            font-size: 1.2rem;
            color: #555;
            font-weight: 500;
        }

        .line {
            width: 60%;
            margin: 25px auto;
            height: 3px;
            background: #001a44;
            opacity: 0.2;
            border-radius: 50px;
        }

        .welcome-text {
            font-size: 1rem;
            color: #666;
        }
    </style>

</head>
<body>

    <div class="sidebar">
        <div>
            <h2>Juanca TechStore</h2>

            <div class="menu">
                <a href="{{ route('tipoproducto.index') }}">
                    <i class="fa-solid fa-tags"></i> Tipos de Producto
                </a>

                <a href="{{ route('producto.index') }}">
                    <i class="fa-solid fa-box"></i> Productos
                </a>
            </div>
        </div>

        <div class="logout-btn">
            <a href="{{ url('/') }}">Cerrar Sesión</a>
        </div>
    </div>

    <div class="content">
        <div class="welcome-card">
            <h1 class="welcome-title">Bienvenido a Juanca TechStore</h1>
            <p class="welcome-sub">Administra productos y tipos de producto fácilmente.</p>
            <div class="line"></div>
            <p class="welcome-text">
                Usa el panel lateral para navegar por las opciones disponibles.
            </p>
        </div>
    </div>

</body>
</html>
