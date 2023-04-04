<?php

    //Recebendo o Ticket da pagina anterior
    $numero_chamado = $_POST['numero_chamado'];

    //Conexão ao Banco
    include_once 'conexao.php';

    //Pesquisa do Banco
    $pesquisa_chamado = "SELECT * FROM chamado WHERE numero_chamado = '$numero_chamado'";
    $resultado_chamado = mysqli_query($conn, $pesquisa_chamado);
    $row_chamado = mysqli_fetch_assoc($resultado_chamado);

?>