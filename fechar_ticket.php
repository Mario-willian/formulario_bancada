<?php

    //Recebendo o Ticket da pagina anterior
    $numero_chamado = $_POST['numero_chamado'];
    $nome_cliente = $_POST['nome_cliente'];
    $email_cliente = $_POST['email_cliente'];
    $data_retirada = $_POST['data_retirada'];
    $nome_resposavel_retirada = $_POST['nome_resposavel_retirada'];
    $telefone_resposavel_retirada = $_POST['telefone_resposavel_retirada'];
    $tecnico_resposavel_entrega = $_POST['tecnico_resposavel_entrega'];
    $observacao = $_POST['observacao'];

    //Conexão ao Banco
    //include_once 'conexao.php';

    Echo $numero_chamado;
    echo $nome_cliente;
    echo $tecnico_resposavel_entrega;
    echo $observacao;

    //FAZER O TEXTO DA INTERACAO DO CHAMADO
    //$texto = '';

    //Inserir Interação no chamado
    //$inserir_interacao = "INSERT INTO *INTERAÇÃO* (interacao) values ($texto))";
    //$enviar_atualizacao = mysqli_query($conn, $pesquisa_chamado);



    //Atualizar chamado e fechar chamado
    //$atualizar_chamado = "UPDATE chamado SET Status = Solucionado where numero_chamado = $numero_chamado)";
    //$enviar_atualizacao = mysqli_query($conn, $pesquisa_chamado);

    
    Echo "Chamado Atualizado e fechado";

?>