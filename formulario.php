<?php
include_once 'pesquisa_ticket.php';
?>
<html>
<head>
    <!--Meta Tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Google Fonts -->
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Personalização-->
    <link rel="shortcut icon" href="img/logo.jpg">
    <title>Retirada de Equipamento</title>
</head>

<body>
<div class=”container”>
   <center> <h2>Retirada de Equipamento</h2> </center>
<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
    <!--Formulário-->
    <!--Usar maxlength="45" nas ipunt, de acordo com o tamanho do banco-->
    <center>
    <form method="POST" id="formulario" action="fechar_ticket.php">
        <label for="fname">Número do ticket</label><br>
        <input type="number" id="numero_chamado" name="numero_chamado" disabled = "" value="<?php echo $row_chamado['numero_chamado'];?>" ><br><br>
        <label for="fname">Nome do Cliente</label><br>
        <input type="text" id="nome_cliente" name="nome_cliente" disabled = "" value="<?php echo $row_chamado['nome_cliente'];?>"><br><br>
        <label for="fname">E-mail do cliente</label><br>
        <input type="text" id="email_cliente" name="email_cliente" disabled = "" value="<?php echo $row_chamado['email_cliente'];?>" ><br><br>
        <label for="fname">Data da Retirada</label><br>
        <input type="date" id="data_retirada" name="data_retirada" required> <br><br>
        <label for="fname">Nome do Responsável pela retirada</label><br>
        <input type="text" id="nome_resposavel_retirada" name="nome_resposavel_retirada" required><br><br>
        <label for="fname">Telefone do responsável pela retirada</label><br>
        <input type="text" id="telefone_resposavel_retirada" name="telefone_resposavel_retirada" required><br><br>
        <label for="fname">Tecnico responsável pela entrega do equipamento</label><br>
        <input type="text" id="tecnico_resposavel_entrega" name="tecnico_resposavel_entrega" required><br><br>
        <label for="fname">Observação</label><br>
        <input type="text" id="observacao" name="observacao" required><br><br>

        <div id="resultado"></div>

        <!--Puxar o e-mail do cliente e o nome do cliente-->
        <input type="submit" value="Submit">
    </form></center></div>
  <div class="col-md-4"></div>
</div></div>

    <center>
    

    <!--Bibliotecas-->
    </center>
</body>
</html>