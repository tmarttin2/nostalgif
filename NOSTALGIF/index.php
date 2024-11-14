<?php
// Inclui o arquivo de conexão com o Banco de Dados
include("conexaoBD.php");

session_start(); // Inicia a sessão
include("header.php"); // Inclui o cabeçalho

// Verifica se o usuário está logado
if (isset($_SESSION['usuario_id'])) {
    // Exibe as informações do usuário logado
    echo "<div class='alert alert-info text-center'>";
    echo "<h4>Bem-vindo, " . $_SESSION['usuario_nome'] . "!</h4>";
    echo "<p>Email: " . $_SESSION['usuario_email'] . "</p>";
    echo "</div>";
} else {
    // Se o usuário não estiver logado
    echo "<div class='alert alert-warning text-center'>";
    echo "<p>Você não está logado. Algumas funcionalidades podem estar restritas.</p>";
    echo "</div>";
}



$listarnots = "SELECT * FROM principal ORDER BY dtInicioPrincipal DESC"; // Seleciona todos os campos da tabela principal
$res = mysqli_query($conn, $listarnots); // Executa o comando de listagem
$totalnots = mysqli_num_rows($res); // Função para retornar a quantidade de registros

if ($totalnots > 0) {
    echo "<hr>";
    echo "<div class='alert alert-success text-center'><h4>Há <strong>$totalnots</strong> nots registrados!</h4></div>";

    echo "<div class='row'>";

    // Exibe os registros da tabela principal
    while ($registro = mysqli_fetch_assoc($res)) {
        $fotonot = $registro["fotoPrincipal"];
        $nomenot = $registro["nomePrincipal"];
        $descricaonot = $registro["descricaoPrincipal"];
        $dataInicio = $registro["dtInicioPrincipal"];

        echo "
        <div class='col-12 col-md-4 mb-3'>
            <div class='card' style='width: 100%;'>
                <img class='card-img-top' src='$fotonot' alt='Foto de $nomenot'>
                <div class='card-body'>
                    <h4 class='card-title'>$nomenot</h4>
                    <p class='card-text'>$descricaonot</p>
                    <p class='card-text'><strong>Data Início: </strong>$dataInicio</p>
                </div>
            </div>
        </div>";
    }

    echo "</div>";
} else {
    echo "<div class='alert alert-warning text-center'>Não há nots registrados!</div>";
}

include("footer.php"); // Inclui o rodapé
?>
