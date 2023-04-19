<?php
    //Evitar erros no site
    include_once 'erro.php';
    //Recebendo o Ticket da pagina anterior
    $numero_chamado = $_POST['numero_chamado'];
    //Conexão ao Banco
    include_once __DIR__.'/conexao.php';



    //Pesquisa no banco as informações completas do chamado
    $pesquisa_chamado = "SELECT * FROM glpi_consult_website WHERE ticket = '$numero_chamado'";
    $resultado_chamado = mysqli_query($conn, $pesquisa_chamado);
    $row_chamado = mysqli_fetch_assoc($resultado_chamado);

    //Variaveis
    $emails = "";
    $i = 0;

    //Repetição para receber todos os e-mails existentes no chamado
    $resultado_emails = mysqli_query($conn, $pesquisa_chamado);
    while($row_emails = mysqli_fetch_assoc($resultado_emails)){
        
        //Recebe o número da ID do usuário requerente do chamado
        $id_usuario = $row_emails['id_usuario'];
        
        //Caso a ID seja 0, o requerente tem um e-mail que não é cadastrado no glpi.
        //Caso a ID seja diferente de 0, o requerente tem cadastro no glpi.
        if($id_usuario != 0){
            //Pesquisa no banco as usuários com acesso criado no glpi - Solução para campos do e-mail em branco na View glpi_consult_website
            $pesquisa_usuario = "SELECT name FROM glpi_users WHERE id = '$id_usuario'";
            $resultado_usuario = mysqli_query($conn, $pesquisa_usuario);
            $row_usuario = mysqli_fetch_assoc($resultado_usuario);

            $email_linha_atual = $row_usuario['name'];
        }else{
            $email_linha_atual = $row_emails['email_inserido'];
        }
        
        //Condição para inserir |, caso tenha mais de 1 e-mail - SEPARAR
        if($email_linha_atual != ""){
            if($i >= 1){
                $emails.= " | ".$email_linha_atual;
            }else{
                $emails .= $email_linha_atual;
            }
        }
        else{
        }
        $i++;
    }
?>