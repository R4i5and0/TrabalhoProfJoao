<?php

include("../ConectarBd.php");

$recid= filter_input(INPUT_GET, 'reserva');



  if(mysqli_query($conn, "DELETE FROM tb_reserva WHERE id_reserva=$recid")) {

    echo "<script>alert('Dados excluidos com sucesso!'); window.location = 'ConsultarReserva.php';</script>";

  }else {

    echo "Não foi possível excluir os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);



?>