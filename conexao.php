<?php

$host    = '127.0.0.1';
$banco   = 'doceanalu_db';
$usuario = 'root';
$senha   = 'root';

$dsn = "mysql:host=$host;dbname=$banco;charset=utf8mb4";

$opcoes = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $usuario, $senha, $opcoes);
} catch (PDOException $e) {
    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}

function h($texto) {
    return htmlspecialchars($texto);
}

function dinheiro($valor) {
    return "R$ " . number_format($valor, 2, ",", ".");
}

function etiqueta($status) {
    if ($status == "pago") {
        return '<span class="badge rounded-pill text-bg-danger-subtle border border-danger-subtle">Pago</span>';
    }
    if ($status == "entregue") {
        return '<span class="badge rounded-pill text-bg-light border">Entregue</span>';
    }
    return '<span class="badge rounded-pill text-bg-secondary-subtle border">Cancelado</span>';
}
?>