<?php

include("../ConectarBd.php");

$recid= filter_input(INPUT_GET, 'comanda');

  if(mysqli_query($conn, "DELETE FROM tb_comanda WHERE id_comanda=$recid")) {

    echo "<script>alert('Dados excluidos com sucesso!'); window.location = 'ConsultarComanda.php';</script>";

  }else {

    echo "Não foi possível excluir os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);



?>