
<!doctype html>
<!-- https://www.youtube.com/watch?v=wwqOJ2o84S4&ab_channel=RafaellaBallerini -->
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="../img/foto7.png"/>
        <link rel="stylesheet"  href="../css/StyleGerallllllll.css" media="screen">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type='text/javascript' src='cep.js'></script>
        <title>Consultar Clientes</title>
    </head>

    <body>
      <header id="header" class="fixed-top d-flex align-items-cente">
            <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

                <h1 class="logo me-auto me-lg-0"><a href="../index.php">SISTEMA TRIBUS</a></h1>
        

                <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>
                      <!--  <li><a class="nav-link scrollto active" href="../index.php">Home</a></li>-->

                        <li <a class="dropdown"><a href="#"><span>Cliente</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="FormClientes.php">Cadastrar</a></li>
                                <li><a href="ConsultarClientes.php">Consultar</a></li>
                            </ul>
                        </li>

                        <li <a class="dropdown"><a href="#"><span>Comanda</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="../Comanda/FormComanda.php">Cadastrar</a></li>
                                <li><a href="../Comanda/ConsultarComanda.php">Consultar</a></li>
                            </ul>
                        </li>

                       <li <a class="dropdown"><a href="#"><span>Cardápio</span> <i class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a href="../Cardapio/FormCardapio.php">Consultar</a></li>
                                    
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
                <h1>Consultar Cliente</h1>
            </div>
            
            <table
                width="100%"
                border="1" 
                bordercolor="silver"
                cellspacing="2" 	
                cellpadding="5"
                

                <tr>
                    <td align="center"> <strong>ID</strong></td>	
                    <td align="center"> <strong>Nome Cliente</strong></td>		
                    <td align="center"> <strong>CPF Cliente</strong></td>
                    <td align="center"> <strong>RG</strong></td>
                    <td align="center"> <strong>Telefone</strong></td>
                    <td align="center"> <strong>Data Expedição</strong></td>
                    <td align="center"> <strong>Orgão Emissor</strong></td>
                    <td align="center"> <strong>Nacionalidade</strong></td>
                    <td width="10"> <strong>Editar</strong></td>
                    <td width="10"> <strong>Deletar</strong></td>
                </tr>

                <?php
                include("../ConectarBd.php");
                $selecionar = mysqli_query($conn, "SELECT * FROM tb_cliente");
                while ($campo = mysqli_fetch_array($selecionar)) {
                    ?>
                    <tr>
                        <td align="center"><?= $campo["id_cliente"] ?></td>
                        <td align="center"><?= $campo["nome_cliente"] ?></td>
                        <td align="center"><?= $campo["cpf_cliente"] ?></td>
                        <td align="center"><?= $campo["rg"] ?></td>
                        <td align="center"><?= $campo["telefone"] ?></td>
                        <td align="center"><?= $campo["dataExped"] ?></td>
                        <td align="center"><?= $campo["orgaoEmis"] ?></td>
                        <td align="center"><?= $campo["nacionalidade"] ?></td>
                        <td align="center"><a href="FormEditarClientes.php?editarid=<?php echo $campo ['id_cliente']; ?>"><img src="../img/caderno10.png" width="40" height="40" /></a></td>
                        <td align="center"><i><a href="ExcluirClientes.php?p=excluir&cliente=<?php echo $campo['id_cliente']; ?>"><img src="../img/lixeira12.png" width="37" height="37" /></i></a></td>
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
