<?php
// Configurações do banco de dados
$host = 'localhost';         // Endereço do servidor
$dbname = 'sistema_restaurante'; // Nome do banco de dados
$user = 'root';       // Nome de usuário do banco
$password = '';     // Senha do banco

// Conexão PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão com o banco de dados realizada com sucesso!";
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
    exit();
}

// Conexão mysqli
$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados (mysqli): " . $conn->connect_error);
}
?>
