<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juanca TechStore</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            margin: 0;
            background: #e9eef4;
            font-family: "Segoe UI", sans-serif;
        }

       
        header {
            background: #0d1b2a;
            padding: 18px 0;
            color: white;
            width: 100%;
            box-shadow: 0 2px 8px rgba(0,0,0,0.3);
        }

        header .brand {
            font-size: 1.7rem;
            font-weight: bold;
        }

        /* HERO */
        .hero {
            padding: 80px 20px;
            text-align: center;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: 800;
            color: #0d1b2a;
        }

        .hero p {
            font-size: 1.2rem;
            margin-top: 12px;
            color: #415a77;
        }

        .btn-main {
            margin-top: 25px;
            font-size: 1.1rem;
            padding: 12px 30px;
            border-radius: 8px;
            background-color: #0d1b2a;
            color: white;
            border: none;
            transition: 0.3s;
        }

        .btn-main:hover {
            background-color: #1b263b;
            transform: translateY(-3px);
        }

        /* CARDS */
        .section-card {
            background: white;
            border-radius: 14px;
            padding: 25px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            transition: 0.3s;
            height: 100%;
        }

        .section-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 18px rgba(0,0,0,0.15);
        }

        .section-icon {
            font-size: 40px;
            color: #0d1b2a;
            margin-bottom: 10px;
        }

        .section-card h4 {
            margin-top: 10px;
            font-weight: bold;
            color: #0d1b2a;
        }

        /* FOOTER */
        footer {
            background: #0d1b2a;
            padding: 15px;
            text-align: center;
            color: white;
            margin-top: 60px;
        }

    </style>
</head>
<body>

    
    <header>
        <div class="container d-flex justify-content-between align-items-center">
            <div class="brand">
                <i class="fa-solid fa-bolt"></i> Juanca TechStore
            </div>

            <a href="{{ route('login') }}" class="btn btn-light">
                <i class="fa-solid fa-right-to-bracket"></i> Iniciar Sesión
            </a>
        </div>
    </header>

    
    <section class="hero">
        <h1>Bienvenido a Juanca TechStore</h1>
        <p>Gestión de Productos y Tipos de Producto de forma rápida y moderna.</p>

    </section>

   
    <div class="container mb-5">
        <div class="row g-4 justify-content-center">

            
            <div class="col-md-4">
                <div class="section-card text-center">
                    <i class="fa-solid fa-bars-progress section-icon"></i>
                    <h4>Tipos de Producto</h4>
                    <p>Administra las categorías de tus productos electrónicos.</p>
                </div>
            </div>

           
            <div class="col-md-4">
                <div class="section-card text-center">
                    <i class="fa-solid fa-box-open section-icon"></i>
                    <h4>Productos</h4>
                    <p>Gestiona el inventario de tus productos fácilmente.</p>
                </div>
            </div>

        </div>
    </div>

    

</body>
</html>
