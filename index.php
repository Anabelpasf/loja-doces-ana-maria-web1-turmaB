
<?php include "inclouds/cabecalho.php"; ?>

<style>
    .painel {
        padding: 20px 10px;
    }

    .boas-vindas {
        background: linear-gradient(135deg, #fce4ec, #fff3f6);
        border-radius: 18px;
        padding: 30px;
        margin-bottom: 30px;
        color: #984765;
    }

    .boas-vindas h2 {
        font-weight: 800;
        color: #b74770;
    }

    .subtitulo {
        color: #a66b7e;
    }

    .card-painel {
        background-color: #fff;
        border: 1px solid #f4dce5;
        border-radius: 16px;
        padding: 22px;
        height: 100%;
        transition: 0.3s;
        box-shadow: 0 3px 12px rgba(183, 71, 112, 0.06);
    }

    .card-painel:hover {
        transform: translateY(-4px);
        box-shadow: 0 6px 18px rgba(183, 71, 112, 0.12);
    }

    .icone-painel {
        font-size: 30px;
        margin-bottom: 12px;
    }

    .numero-painel {
        font-size: 30px;
        font-weight: bold;
        color: #b74770;
    }

    .titulo-card {
        color: #91445f;
        font-weight: bold;
    }

    .atalho {
        text-decoration: none;
        color: inherit;
        display: block;
        height: 100%;
    }

    .atalho .card-painel:hover {
        background-color: #fff7fa;
    }

    .botao-painel {
        background-color: #b74770;
        color: white;
        border: none;
        border-radius: 20px;
        padding: 9px 20px;
        text-decoration: none;
        display: inline-block;
    }

    .botao-painel:hover {
        background-color: #963858;
        color: white;
    }
</style>

<div class="painel">

    <!-- Boas-vindas -->
    <section class="boas-vindas">
        <span>🍓 Bem-vinda ao seu cantinho!</span>

        <h2 class="mt-2">
            Painel Administrativo
        </h2>

        <p class="mb-0">
            Gerencie os produtos, clientes e pedidos
            da Analu Doceria em um só lugar.
        </p>
    </section>

    <!-- Indicadores -->
    <section class="mb-5">

        <h3 class="titulo-card mb-3">
            Resumo do sistema ♡
        </h3>

        <div class="row g-3">

            <div class="col-md-4">
                <div class="card-painel">
                    <div class="icone-painel">🛍️</div>
                    <h5 class="titulo-card">Pedidos</h5>
                    <div class="numero-painel">—</div>
                    <p class="subtitulo mb-0">
                        Total de pedidos cadastrados
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card-painel">
                    <div class="icone-painel">🍰</div>
                    <h5 class="titulo-card">Produtos</h5>
                    <div class="numero-painel">—</div>
                    <p class="subtitulo mb-0">
                        Produtos cadastrados
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card-painel">
                    <div class="icone-painel">👥</div>
                    <h5 class="titulo-card">Clientes</h5>
                    <div class="numero-painel">—</div>
                    <p class="subtitulo mb-0">
                        Clientes cadastrados
                    </p>
                </div>
            </div>

        </div>
    </section>

    <!-- Acessos rápidos -->
    <section class="mb-5">

        <h3 class="titulo-card mb-3">
            Acessos rápidos ♡
        </h3>

        <div class="row g-3">

            <div class="col-md-4 col-sm-6">
                <a href="produtos.php" class="atalho">
                    <div class="card-painel">
                        <div class="icone-painel">🍓</div>
                        <h5 class="titulo-card">Produtos</h5>
                        <p class="subtitulo">
                            Gerencie os doces da doceria.
                        </p>
                        <span class="botao-painel">
                            Acessar
                        </span>
                    </div>
                </a>
            </div>

            <div class="col-md-4 col-sm-6">
                <a href="categorias.php" class="atalho">
                    <div class="card-painel">
                        <div class="icone-painel">🧁</div>
                        <h5 class="titulo-card">Categorias</h5>
                        <p class="subtitulo">
                            Organize os tipos de produtos.
                        </p>
                        <span class="botao-painel">
                            Acessar
                        </span>
                    </div>
                </a>
            </div>

            <div class="col-md-4 col-sm-6">
                <a href="clientes.php" class="atalho">
                    <div class="card-painel">
                        <div class="icone-painel">👤</div>
                        <h5 class="titulo-card">Clientes</h5>
                        <p class="subtitulo">
                            Consulte os clientes cadastrados.
                        </p>
                        <span class="botao-painel">
                            Acessar
                        </span>
                    </div>
                </a>
            </div>

            <div class="col-md-4 col-sm-6">
                <a href="pedidos.php" class="atalho">
                    <div class="card-painel">
                        <div class="icone-painel">🛍️</div>
                        <h5 class="titulo-card">Pedidos</h5>
                        <p class="subtitulo">
                            Consulte e acompanhe os pedidos.
                        </p>
                        <span class="botao-painel">
                            Acessar
                        </span>
                    </div>
                </a>
            </div>

            <div class="col-md-4 col-sm-6">
                <a href="relatorios/relatorio_produto_por_pedido.php"
                   class="atalho">
                    <div class="card-painel">
                        <div class="icone-painel">📊</div>
                        <h5 class="titulo-card">Relatórios</h5>
                        <p class="subtitulo">
                            Visualize informações do sistema.
                        </p>
                        <span class="botao-painel">
                            Acessar
                        </span>
                    </div>
                </a>
            </div>

        </div>
    </section>

    <!-- Mensagem final -->
    <section class="text-center py-4">
        <h4 class="titulo-card">
            🍓 Analu Doceria
        </h4>

        <p class="subtitulo">
            Organização e carinho em cada detalhe!
        </p>
    </section>

</div>

<?php include "inclouds/rodape.php"; ?>
