<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión | Juanca TechStore</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #e9eef4;
            font-family: "Segoe UI", sans-serif;
        }

        .login-box {
            max-width: 420px;
            margin: 80px auto;
            padding: 35px;
            background: #ffffff;
            border-radius: 14px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.10);
        }

        .title {
            font-weight: 700;
            color: #0d1b2a;
        }

        .subtitle {
            color: #415a77;
            font-size: 0.95rem;
        }

        .btn-techstore {
            background-color: #0d1b2a;
            color: white;
            font-weight: bold;
            border-radius: 8px;
            padding: 10px;
            transition: 0.3s ease;
        }

        .btn-techstore:hover {
            background-color: #1b263b;
            color: white;
            transform: translateY(-2px);
        }

        .btn-volver {
            background-color: #1b263b;
            color: white;
            font-weight: bold;
            border-radius: 25px;
            padding: 8px 20px;
            font-size: 14px;
            transition: background 0.3s ease, transform 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .btn-volver:hover {
            background-color: #0d1b2a;
            color: white;
            transform: translateY(-2px);
            text-decoration: none;
        }

        input.form-control {
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="text-start mt-4">
        <a href="{{ url('/') }}" class="btn-volver">
            ⬅ Volver al inicio
        </a>
    </div>

    <div class="login-box mt-3">
        <h3 class="text-center title">Iniciar Sesión</h3>
        <p class="text-center subtitle">Acceso al sistema de Juanca TechStore</p>

        {{-- FORMULARIO --}}
        <form action="{{ route('panel') }}" method="GET">

            <div class="mb-3">
                <label class="form-label">Correo</label>
                <input type="email" class="form-control" placeholder="nombre@correo.com" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Contraseña</label>
                <input type="password" class="form-control" placeholder="********" required>
            </div>

            <button type="submit" class="btn btn-techstore w-100 mt-2">
                Iniciar sesión
            </button>
        </form>
    </div>
</div>

</body>
</html>
