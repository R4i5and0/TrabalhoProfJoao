<!DOCTYPE html>
<html>
      <head>
        <!-- Metadados -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="../img/foto7.png"/>
        <link rel="stylesheet"  href="../css/StyleGerallllllll.css" media="screen">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type='text/javascript' src='http://files.rafaelwendel.com/jquery.js'></script>
        <script type='text/javascript' src='js.js'></script>

        <title>Consultar Comanda</title>
    </head>
    
    <body>
        
<header id="header" class="fixed-top d-flex align-items-cente">
            <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

                <h1 class="logo me-auto me-lg-0"><a href="../index.php">SISTEMA TRIBUS</a></h1>
        

                <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>
                   

                        <li <a class="dropdown"><a href="#"><span>Cliente</span> <i class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a href="../Clientes/FormClientes.php">Cadastrar</a></li>
                                    <li><a href="../Clientes/ConsultarClientes.php">Consultar</a></li>
                                </ul>
                        </li>


                        <li <a class="dropdown"><a href="#"><span>Comanda</span> <i class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a href="FormComanda.php">Cadastrar</a></li>
                                    <li><a href="ConsultarComanda.php">Consultar</a></li>
                                </ul>
                        </li>

                            <li <a class="dropdown"><a href="#"><span>Cardápio</span> <i class="bi bi-chevron-down"></i></a>
                                <ul>
                                   <li><a href="../Cardapio/FormCardapio.php">Consultrar</a></li>
                                   
                                </ul>
                        </li>
                               

                        <li <a class="dropdown"><a href="#"><span>Reserva</span> <i class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a href="../Reserva/FormReserva.php">Cadastrar</a></li>
                                    <li><a href="../Reserva/ConsultarReserva.php">Consultar</a></li>
                                </ul>
                        </li>
                            
                    </ul>
                </nav>
        </header>
        
        <div class="consulta">
            <div class="consultarserv">
                <h1>Consultar Comanda</h1>
            </div>
        
            
            <table
                width="100%"
                border="1" 
                bordercolor="silver" 
                cellspacing="0"
                cellpadding="5"
                    
                >
                <tr>
                    <td align="center"> <strong>ID</strong></td>	
                    <td align="center"> <strong>Número da mesa</strong></td>		
                    <td align="center"> <strong>Nome do garçom</strong></td>
                    <td align="center"> <strong>Item</strong></td>
                    <td align="center"> <strong>Quantidade</strong></td>
                    <td align="center"> <strong>Valor unitário</strong></td>
                    <td align="center"> <strong>Subtotal</strong></td>		
                    <td align="center"> <strong>Taxa de serviço</strong></td>
                    <td align="center"> <strong>Soma de valores</strong></td>
                    <td align="center"> <strong>Total</strong></td>
                    
                    <td width="10"> <strong>Editar</strong></td>
                    <td width="10"> <strong>Excluir</strong></td>
                </tr>
                
                <?php
                include("../ConectarBd.php");
                $selecionar = mysqli_query($conn, "SELECT * FROM tb_comanda");
                while ($campo = mysqli_fetch_array($selecionar)) {
                    ?>
                    <tr>
                        <td align="center"><?= $campo["id_comanda"] ?></td>
                        <td align="center"><?= $campo["num_mesa"] ?></td>
                        <td align="center"><?= $campo["nome_garcom"] ?></td>
                        <td align="center"><?= $campo["item_produto"] ?></td>
                        <td align="center"><?= $campo["qtde_produto"] ?></td>
                        <td align="center"><?= $campo["valor_unit"] ?></td>
                        <td align="center"><?= $campo["subtotal"] ?></td>
                        <td align="center"><?= $campo["tx_servico"] ?></td>
                        <td align="center"><?= $campo["soma_valores"] ?></td>
                        <td align="center"><?= $campo["total"] ?></td>
                        
                        <td align="center"><a href="FormEditarComanda.php?editarid=<?php echo $campo ['id_comanda']; ?>"><img src="../img/caderno10.png" width="40" height="40" /></a></td>
                        <td align="center"><i><a href="ExcluirComanda.php?p=excluir&comanda=<?php echo $campo['id_comanda']; ?>"><img src="../img/lixeira12.png" width="37" height="37" /></i></a></td>
                    </tr>
                <?php } ?>
            </table><br>
            <a href="../index.php"><input type="button" class="botao" value="Cancelar"/></a>
        </div>

        <div class="foto">
          <img src="../img/Foto 2 Grande.png">
          <img src="../img/Sobre 3 1366x769.png">
        </div> 
        
    </body>
</html>