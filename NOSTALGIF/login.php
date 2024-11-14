<?php

// Inclui a conexão com o banco de dados
include("conexaoBD.php");
session_start(); // Inicia a sessão

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recebe os dados do formulário de login
    $email = $_POST['emailUsuario'];
    $senha = $_POST['senhaUsuario'];

    // Consulta o banco de dados para verificar as credenciais
    $query = "SELECT * FROM usuarios WHERE emailUsuario = '$email' AND senhaUsuario = md5('$senha')";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // O usuário foi encontrado, inicia a sessão
        $user = mysqli_fetch_assoc($result);

        // Armazena as informações do usuário na sessão
        $_SESSION['usuario_id'] = $user['id'];  // ou outro campo único
        $_SESSION['usuario_nome'] = $user['nomeUsuario'];
        $_SESSION['usuario_email'] = $user['emailUsuario'];

        // Redireciona para a página inicial
        header("Location: index.php");
        exit;
    } else {
        // Se as credenciais forem inválidas, mostra uma mensagem de erro
        echo "<div class='alert alert-danger text-center'>Credenciais inválidas. Tente novamente.</div>";
    }
}
?>
