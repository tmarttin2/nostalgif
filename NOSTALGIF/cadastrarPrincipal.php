<?php include("header.php") ?>

<?php

    //Bloco para declaração de variáveis para receber dados do form
    $nomePrincipal = $descricaoPrincipal =  $dtInicioPrincipal ="";

    $tudoCerto = true; //Variável responsável por verificar se os campos foram devidamente preenchidos

    //Verifica se o método de envio do formulário é POST
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        //Verifica se o campo "nomePrincipal" do form está vazio
        if(empty($_POST["nomePrincipal"])){
            echo "<div class='alert alert-warning text-center'>Atenção! o campo <strong>NOME</strong> é obrigatório!</div>";
            $tudoCerto = false;
        }
        else{
            $nomePrincipal = testar_entrada($_POST["nomePrincipal"]);
        }

        //Verifica se o campo "descricaoPrincipal" do form está vazio
        if(empty($_POST["descricaoPrincipal"])){
            echo "<div class='alert alert-warning text-center'>Atenção! o campo <strong>DESCRICAO</strong> é obrigatório!</div>";
            $tudoCerto = false;
        }
        else{
            $descricaoPrincipal = testar_entrada($_POST["descricaoPrincipal"]);
        }

    

        //Verifica se o campo "dtNascPrincipal" do form está vazio
        if(empty($_POST["dtInicioPrincipal"])){
            echo "<div class='alert alert-warning text-center'>Atenção! o campo <strong>DATA INICIO</strong> é obrigatório!</div>";
            $tudoCerto = false;
        }
        else{
            $dtInicioPrincipal = testar_entrada($_POST["dtInicioPrincipal"]);
        }



        //Aqui inicia o bloco para validação da foto
        $diretorio    = "img/"; //Define o diretório para o qual as imagens serão movidas
        $fotoPrincipal  = $diretorio . basename($_FILES["fotoPrincipal"]["name"]); //Gera o endereço do arquivo (img/nomedoarquivo.extensao)
        $uploadOK     = true; //Variável para verificar sucesso no upload do arquivo
        $tipoDaImagem = strtolower(pathinfo($fotoPrincipal, PATHINFO_EXTENSION)); //Pegar a extensão (tipo)

        //Verificar o tamanho do arquivo (neste caso, 5MB)
        if($_FILES["fotoPrincipal"]["size"] > 5000000){ //Verifica o tamanho do arquivo em bytes
            echo "<div class='alert alert-warning text-center'>Atenção! O <strong>TAMANHO MÁXIMO</strong> permitido para foto é 5MB!</div>";
            $uploadOK = false;
        }

        //Verifica o tipo do arquivo
        if ($tipoDaImagem != "jpg" && $tipoDaImagem != "jpeg" && $tipoDaImagem != "png"){
            echo "<div class='alert alert-warning text-center'>Atenção! A imagem precisa estar nos formatos <strong>JPG, JPEG ou PNG</strong>!</div>";
            $uploadOK = false;
        }

        if(!$uploadOK){
            echo "<div class='alert alert-danger'>Atenção! Erro ao tentar fazer o <strong>UPLOAD DA FOTO</strong>!</div>";
            $uploadOK = false;
        }
        else{
            //A função seguinte é reponsável por mover o arquivo para o diretório (img/)
            if(!move_uploaded_file($_FILES["fotoPrincipal"]["tmp_name"], $fotoPrincipal)){
                echo "<div class='alert alert-danger text-center'>Atenção! Erro ao tentar mover <strong>a foto</strong> para o diretório $diretorio!</div>";
                $uploadOK = false;
            }
        }

        //Se os dados do formulário tiverem sidos preenchidos corretamente, exibe uma tabela com os dados informados
        if($tudoCerto && $uploadOK){

            //Cria uma QUERY responsável por realizar a inserção dos dados do(a) Principal no BD
            $inserirPrincipal = "INSERT INTO principal (nomePrincipal, fotoPrincipal, descricaoPrincipal, dtInicioPrincipal)
                                    VALUES ('$nomePrincipal', '$fotoPrincipal', '$descricaoPrincipal','$dtInicioPrincipal')";

            //Toda vez que precisarmos executar operações no BD, precisamos incluir o arquivo de conexão
            include("conexaoBD.php");
            
            //Função para executar QUERYs no BD
             if(mysqli_query( $conn, $inserirPrincipal)){
                echo "<div class='alert alert-success text-center'><strong>Principal</strong> cadastrado(a) com sucesso!</div>";
                echo "<div class='container mt-3'>
                    <div class='container mt-3 text-center'>
                        <img src='$fotoPrincipal' title='Foto de $nomePrincipal' width='150'>
                    </div>
                    <table class='table'>
                        <tr>
                            <th>descrição:</th>
                            <td>$descricaoPrincipal</td>
                        </tr>
                        <tr>
                            <th>data inicio:</th>
                            <td>$dtInicioPrincipal</td>
                        </tr>
                    </table>
                </div>";
            }
            else{
                echo "<div class='alert alert-danger text-center'>Erro ao tentar cadastrar <strong>Principal</strong>!</div>" . mysqli_error($link) . $inserirPrincipal;
            }
        }
        
    }

    function testar_entrada($dado){
        $dado = trim($dado);//REMOVE caracteres desnecessários (TABS, espaços, etc)
        $dado = stripslashes($dado); //REMOVE barras invertidas
        $dado = htmlspecialchars($dado); //Converte caracteres especiais em entidades HTML
        return($dado); //Retorna a variável após processamento
    }

?>

<?php include("footer.php") ?>