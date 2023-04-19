<?php

header("Content-Type:Text/html; charset=utf8");

//Caso não seja inserido o ticket, voltar para o index.php
if($row_chamado['ticket'] = ""){
    header("location:index.php");
}

?>