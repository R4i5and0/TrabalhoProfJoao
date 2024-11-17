<?php include_once "../ConectarBd.php"; ?>
<html>
    <body>
        <?php
        // Verificar se os campos do formulário foram enviados
        if(isset($_POST["nome_cliente"])) {
            $nome_cliente = $_POST["nome_cliente"];
            $cpf_cliente = $_POST["cpf_cliente"];
            $rg = $_POST["rg"];
            $telefone = $_POST["telefone"];
            $dataExped = $_POST["dataExped"];
            $orgaoEmis = $_POST["orgaoEmis"];
            $nacionalidade = $_POST["nacionalidade"];
            
            // Query SQL de inserção usando prepared statements para evitar SQL Injection
            $sql = "INSERT INTO tb_cliente (nome_cliente, cpf_cliente, rg, telefone, dataExped, orgaoEmis, nacionalidade) 
                    VALUES (:nome_cliente, :cpf_cliente, :rg, :telefone, :dataExped, :orgaoEmis, :nacionalidade)";
            
            // Preparar e executar a query com PDO
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':nome_cliente', $nome_cliente);
            $stmt->bindParam(':cpf_cliente', $cpf_cliente);
            $stmt->bindParam(':rg', $rg);
            $stmt->bindParam(':telefone', $telefone);
            $stmt->bindParam(':dataExped', $dataExped);
            $stmt->bindParam(':orgaoEmis', $orgaoEmis);
            $stmt->bindParam(':nacionalidade', $nacionalidade);

            if ($stmt->execute()) {
                echo "<script>alert('Seus dados foram salvos!'); window.location = '../index.php';</script>";
            } else {
                echo "Erro ao salvar os dados.";
            }
        }
        ?>
    </body>
</html>
