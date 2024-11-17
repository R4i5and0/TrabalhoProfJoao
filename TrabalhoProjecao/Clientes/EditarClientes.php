<?php

include("../ConectarBd.php");

$recid= filter_input(INPUT_POST, 'id');

$recnome_cliente= filter_input(INPUT_POST, 'nome_cliente');

$reccpf_cliente= filter_input(INPUT_POST, 'cpf_cliente');

$recrg= filter_input(INPUT_POST, 'rg');

$rectelefone= filter_input(INPUT_POST, 'telefone');

$recdataExped= filter_input(INPUT_POST, 'dataExped');

$recorgaoEmis= filter_input(INPUT_POST, 'orgaoEmis');

$recnacionalidade= filter_input(INPUT_POST, 'nacionalidade');




  if(mysqli_query($conn, "UPDATE tb_cliente SET nome_cliente='$recnome_cliente', cpf_cliente='$reccpf_cliente', rg='$recrg', telefone='$rectelefone', dataExped='$recdataExped', orgaoEmis='$recorgaoEmis', nacionalidade='$recnacionalidade' WHERE id_cliente=$recid")) {

    echo "<script>alert('Dados alterado com sucesso!'); window.location = 'ConsultarClientes.php';</script>";

  }else {

    echo "Não foi possível alterar os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);



?>