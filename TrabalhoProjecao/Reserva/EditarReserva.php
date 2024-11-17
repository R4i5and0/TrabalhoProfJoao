<?php

include("../ConectarBd.php");

$recid = filter_input(INPUT_POST, 'id');

$recnome_cliente = filter_input(INPUT_POST, 'nome_cliente');

$rectelefone_cliente = filter_input(INPUT_POST, 'telefone_cliente');

$recemail_cliente = filter_input(INPUT_POST, 'email_cliente');

$recdata_evento = filter_input(INPUT_POST, 'data_evento');

$rechora_evento = filter_input(INPUT_POST, 'hora_evento');




  if(mysqli_query($conn, "UPDATE tb_reserva SET nome_cliente='$recnome_cliente', telefone_cliente='$rectelefone_cliente', email_cliente='$recemail_cliente', data_evento='$recdata_evento', hora_evento='$rechora_evento' WHERE id_reserva=$recid")) {

    echo "<script>alert('Dados alterado com sucesso!'); window.location = 'ConsultarReserva.php';</script>";

  }else {

    echo "Não foi possível alterar os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);



?>