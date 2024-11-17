<?php include_once "../ConectarBd.php"; ?>
<html>
    <body>
        <?php
        // Obtendo dados do formulário
        $nome_cliente = $_POST["nome_cliente"];
        $telefone_cliente = $_POST["telefone_cliente"];
        $email_cliente = $_POST["email_cliente"];
        $data_evento = $_POST["data_evento"];
        $hora_evento = $_POST["hora_evento"];

        try {
            // Preparar a instrução SQL com placeholders
            $sql = "INSERT INTO tb_reserva (nome_cliente, telefone_cliente, email_cliente, data_evento, hora_evento) 
                    VALUES (:nome_cliente, :telefone_cliente, :email_cliente, :data_evento, :hora_evento)";
            
            // Preparar a query
            $stmt = $pdo->prepare($sql);
            
            // Executar a query com os valores fornecidos
            $stmt->execute([
                ':nome_cliente' => $nome_cliente,
                ':telefone_cliente' => $telefone_cliente,
                ':email_cliente' => $email_cliente,
                ':data_evento' => $data_evento,
                ':hora_evento' => $hora_evento,
            ]);

            echo "<script>alert('Seus dados foram salvos!'); window.location = '../index.php';</script>";
        } catch (PDOException $e) {
            echo "Erro ao salvar os dados: " . $e->getMessage();
        }
        ?>
    </body>
</html>
