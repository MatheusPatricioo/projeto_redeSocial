<?php
session_start();

// Definindo a base da URL; :)
$base = 'http://localhost/projeto_redeSocial'; // Verifique se este caminho está correto

// Configurações do banco de dados
$db_name = 'devsbook';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';

$maxWidth = 800;
$maxHeight = 800;

try {
    // Criando uma nova conexão PDO
    $pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Habilita o modo de erro
} catch (PDOException $e) {
    // Se a conexão falhar, exibe a mensagem de erro
    die("Não foi possível conectar ao banco de dados: " . $e->getMessage());
}
?>
