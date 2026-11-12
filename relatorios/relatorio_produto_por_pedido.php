
<?php
$conexao = new mysqli("localhost", "root", "root", "doceanalu_db");
$conexao->set_charset("utf8mb4");

$inicio = "";
$fim = "";
$resultado = null;

if (isset($_GET["inicio"]) && isset($_GET["fim"])) {
    $inicio = $_GET["inicio"];
    $fim = $_GET["fim"];

    $sql = "SELECT produtos.nome,
                   SUM(pedidosProdutos.quantidade) AS total_saiu,
                   AVG(pedidosProdutos.quantidade) AS media_por_pedido,
                   SUM(pedidosProdutos.quantidade) / COUNT(DISTINCT pedidos.data_pedido) AS media_por_dia
            FROM pedidosProdutos pedidosProdutos
            JOIN produtos produtos ON produtos.id_produto = pedidosProdutos.id_produto
            JOIN pedidos pedidos ON pedidos.id_pedido = pedidosProdutos.id_pedido
            WHERE pedidos.data_pedido BETWEEN ? AND ?
            GROUP BY produtos.id_produto, produtos.nome
            ORDER BY total_saiu DESC";

    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("ss", $inicio, $fim);
    $stmt->execute();
    $resultado = $stmt->get_result();
}
?>

<h2>Relatório de saída de produtos</h2>

<form method="get">
    <label>De:</label>
    <input type="date" name="inicio" value="<?php echo $inicio; ?>" required>

    <label>Até:</label>
    <input type="date" name="fim" value="<?php echo $fim; ?>" required>

    <button type="submit">Gerar relatório</button>
</form>

<?php if ($resultado != null) { ?>

    <?php if ($resultado->num_rows == 0) { ?>
        <p>Nenhuma saída encontrada nesse período.</p>
    <?php } else { ?>
        <table border="1" cellpadding="8">
            <tr>
                <th>Produto</th>
                <th>Total</th>
                <th>Média por pedido</th>
                <th>Média por dia</th>
            </tr>

            <?php while ($linha = $resultado->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $linha["nome"]; ?></td>
                    <td><?php echo $linha["total_saiu"]; ?></td>
                    <td><?php echo number_format($linha["media_por_pedido"], 2, ",", "."); ?></td>
                    <td><?php echo number_format($linha["media_por_dia"], 2, ",", "."); ?></td>
                </tr>
            <?php } ?>
        </table>
    <?php } ?>

<?php } ?>