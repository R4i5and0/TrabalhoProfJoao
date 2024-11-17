<?php

include("../ConectarBd.php");

$recid= filter_input(INPUT_POST, 'id');

$recnum_mesa= filter_input(INPUT_POST, 'num_mesa');

$recnome_garcom= filter_input(INPUT_POST, 'nome_garcom');

$recitem_produto= filter_input(INPUT_POST, 'item_produto');

$recqtde_produto= filter_input(INPUT_POST, 'qtde_produto');

$recvalor_unit= filter_input(INPUT_POST, 'valor_unit');

$recsubtotal= filter_input(INPUT_POST, 'subtotal');

$rectx_servico= filter_input(INPUT_POST, 'tx_servico');

$recsoma_valores= filter_input(INPUT_POST, 'soma_valores');

$rectotal= filter_input(INPUT_POST, 'total');

    if(mysqli_query($conn, "UPDATE tb_comanda SET num_mesa='$recnum_mesa', nome_garcom='$recnome_garcom', item_produto='$recitem_produto', qtde_produto='$recqtde_produto', valor_unit='$recvalor_unit', subtotal='$recsubtotal', tx_servico='$rectx_servico', soma_valores='$recsoma_valores', total='$rectotal' WHERE id_comanda=$recid")) {

    echo "<script>alert('Dados alterado com sucesso!'); window.location = 'ConsultarComanda.php';</script>";

    }else {

    echo "Não foi possível alterar os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

    }

    mysqli_close($conn);

?>