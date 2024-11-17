<?php 
include_once "../ConectarBd.php"; 
?>
<html>
    <body>
        <?php
        // Capturando dados do formulário
        $num_mesa = $_POST["num_mesa"];
        $nome_garcom = $_POST["nome_garcom"];
        $item_produto = $_POST["item_produto"];
        $qtde_produto = $_POST["qtde_produto"];
        $valor_unit = $_POST["valor_unit"];
        $subtotal = $_POST["subtotal"];
        $tx_servico = $_POST["tx_servico"];
        $soma_valores = $_POST["soma_valores"];
        $total = $_POST["total"];

        // Preparando a query de inserção
        $sql = "INSERT INTO tb_comanda (num_mesa, nome_garcom, item_produto, qtde_produto, valor_unit, subtotal, tx_servico, soma_valores, total) 
                VALUES (:num_mesa, :nome_garcom, :item_produto, :qtde_produto, :valor_unit, :subtotal, :tx_servico, :soma_valores, :total)";
        
        try {
            // Preparando a consulta
            $stmt = $pdo->prepare($sql);
            
            // Executando a consulta com os parâmetros
            $stmt->execute([
                ':num_mesa' => $num_mesa,
                ':nome_garcom' => $nome_garcom,
                ':item_produto' => $item_produto,
                ':qtde_produto' => $qtde_produto,
                ':valor_unit' => $valor_unit,
                ':subtotal' => $subtotal,
                ':tx_servico' => $tx_servico,
                ':soma_valores' => $soma_valores,
                ':total' => $total
            ]);

            // Mensagem de sucesso
            echo "<script>alert('Seus dados foram salvos!'); window.location = '../index.php';</script>";
            
        } catch (PDOException $e) {
            // Tratamento de erro
            echo "Erro ao cadastrar a comanda: " . $e->getMessage();
        }
        ?>
    </body>
</html>
