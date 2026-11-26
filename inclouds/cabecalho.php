
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Analu Doceria</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-yEPZ7jP9S0QKiUQ0m3jjsO4ProIW7wvR9gXkI7JOGa2XVsw53Yke2bsdkBbjmmiX"
          crossorigin="anonymous">

    <!-- CSS personalizado -->
    <link rel="stylesheet" href="estilo.css">

    <style>
        body {
            background-color: #fff9fb;
            font-family: Arial, sans-serif;
        }

        .topo-analu {
            background-color: #fff0f4;
            padding: 35px 15px 25px;
            text-align: center;
            border-bottom: 1px solid #f5d5e0;
        }

        .marca-analu {
            color: #b74770;
            font-size: clamp(2.3rem, 6vw, 4rem);
            font-weight: 900;
            margin: 8px 0;
            letter-spacing: 1px;
        }

        .frase-analu {
            color: #a66b7e;
            font-size: 1rem;
            margin-bottom: 0;
        }

        .enfeite-analu {
            color: #c94f78;
            font-size: 1.3rem;
        }

        .menu-analu {
            background-color: #fff;
            border-bottom: 1px solid #f3dce4;
        }

        .menu-analu .nav-link {
            color: #a74768;
            font-weight: 600;
            padding: 12px 16px;
            border-radius: 20px;
            transition: 0.3s;
        }

        .menu-analu .nav-link:hover {
            background-color: #fce4ec;
            color: #8f3155;
        }

        .menu-analu .navbar-toggler {
            border-color: #d98ba7;
        }
    </style>
</head>

<body>

<header>
    <div class="topo-analu">
        <div class="enfeite-analu">🍓 ✿ 🍓</div>

        <h1 class="marca-analu">Analu Doceria</h1>

        <p class="frase-analu">
            Pequenos doces, grandes momentos.
        </p>

        <div class="enfeite-analu">♡ 🍓 ♡</div>
    </div>

    <nav class="navbar navbar-expand-lg menu-analu">
        <div class="container justify-content-center">

            <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#menuPrincipal"
                    aria-controls="menuPrincipal"
                    aria-expanded="false"
                    aria-label="Abrir menu">

                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center"
                 id="menuPrincipal">

                <ul class="navbar-nav text-center">

                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Início</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="produtos.php">Produtos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="categorias.php">Categorias</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="clientes.php">Clientes</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="pedidos.php">Pedidos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="Relatorio.php">Relatórios</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>

<main class="container py-4">
