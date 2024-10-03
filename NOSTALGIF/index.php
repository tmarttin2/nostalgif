<?php include("header.php"); ?>

<?php
    //Inclui o arquivo de conexão com o Banco de Dados
    include("conexaoBD.php");

    $listarnots = "SELECT * FROM principal ORDER BY dtInicioPrincipal DESC"; //Seleciona todos os campos da tabela nots


    $res = mysqli_query($conn, $listarnots); //Executa o comando de listagem
    $totalnots = mysqli_num_rows($res); //Função para retornar a quantidade de registros da tabela

    if($totalnots > 0){
        $nomePagina = $_SERVER['SCRIPT_NAME']; // ou $_SERVER['PHP_SELF']
        $info_arquivo = pathinfo($nomePagina);
        $pagina = $info_arquivo['filename'];

        if($totalnots == 1){
            echo "<div class='alert alert-success text-center'><h4>Há <strong>$totalnots</strong> nots !</h4></div>";
        }
        else{
            echo "<div class='alert alert-success text-center'><h4>Há <strong>$totalnots</strong> nots !</h4></div>";
        }

        echo "
        <hr>";
            
        //Monta a tabela para exibir os registros encontrados
        echo "
        <div class='row'>";

            // Varre a tabela em busca de registros e armazena em um array
            //Enquanto houverem dados na linha da tabela, atribui o valor atual do array a uma variável
            while($registro = mysqli_fetch_assoc($res)){
                $fotonot      = $registro["fotoPrincipal"];
                $nomenot    = $registro["nomePrincipal"];
                $descricaonot = $registro["descricaoPrincipal"];
                $dataInicio     = $registro["dtInicioPrincipal"];
                
                
                //Cria uma linha da tabela com os registros encontrados
                echo "
                <div  style='margin-bottom:30px;'>
                    <div class='card' style='width:100%; height:100%;'>
                        <div class='card-body' style='height:100%'>
                            <img class='card-img-top' src='$fotonot' alt='Foto de $nomenot'>                         
                        </div>
                        <div class='card-body text-center'>
                            <h4 class='card-title'>$nomenot</h4>
                            <h4 class='card-title'>Data início: $dataInicio</h4>                       
                            <p class='card-text' style='white-space: normal;'>$descricaonot</p>
                        </div>
                    </div>
                </div>
                ";
            }
        echo "</div>";
    }
    else{
        echo "<div class='alert alert-warning text-center'>Não há nots à registrados! <i class='bi bi-emoji-frown'></i></div>";
    }
      
?>

<?php include("footer.php"); ?>

?>