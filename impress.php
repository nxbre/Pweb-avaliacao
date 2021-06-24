<?php
	

  session_start();
    echo "<br> Telefone Celular- ". $_SESSION['cel'];
	  echo "Nome Completo- ". $_SESSION['nomec'];
	  session_unset(); session_destroy();
?><br>
<a href="form.html"> Realizar novo cadastro aqui </a>
