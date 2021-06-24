<?php

  session_start();
    $cel = $_POST['Telefone Celular'];
	  $nomec = $_POST['Nome Completo'];

    $_SESSION['Telefone Celular'] = $cel;
	  $_SESSION['Nome Completo'] = $nomec;

?> a href="impress.php"> Impressão </a>
