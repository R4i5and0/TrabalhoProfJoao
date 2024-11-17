<!DOCTYPE html>

<html lang="pt-br">


    <head>
        <!-- Metadados -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="../img/foto7.png"/>
        <!-- CSS -->
        <link rel="stylesheet" href="../css/StyleGerallllllll.css" media="screen">
      

        <title>Editar Reserva</title>
    </head>

    <body>

        <?php
        include("../ConectarBd.php");

        $recid = filter_input(INPUT_GET, 'editarid');

        $selecionar = mysqli_query($conn, "SELECT * FROM tb_reserva WHERE id_reserva=$recid");

        $campo = mysqli_fetch_array($selecionar);
        ?>

        <header id="header" class="fixed-top d-flex align-items-cente">
            <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

                <h1 class="logo me-auto me-lg-0" ><a href="../index.php">SISTEMA TRIBUS</a></h1>
          

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
                                    <li><a href="FormReserva.php">Cadastrar</a></li>
                                    <li><a href="ConsultarReserva.php">Consultar</a></li>
                                </ul>
                        </li>        

                    </ul>
                </nav><!-- .navbar -->



            </div>
        </header><!-- End Header -->


        <div class="formcadcomanda">
            <form method="post" action="CadastrarReserva.php">
                <fieldset class="grupo1">
                    <!-- Cabeçalho com título e subtítulo (ambos com css de id "titulo") -->
                    <div class="cabecalho">
                        <h1 id="titulo">Editar Reserva</h1>
                        <p> <h5 id="titulo">A Reserva Dura no Máximo 15 Minutos </h5> </p>
                        
                        <br>
                    </div>
                </fieldset >
                <fieldset class="grupo">
                    
                    <input type="hidden" name="id" value="<?= $campo["id_reserva"] ?>"> 

                    <input type="hidden" name="id" value="<?= $campo["id_reserva"] ?>"> 
                    

                    <label>Nome do cliente</label><br> 
                    <input type="text" name="nome_cliente" placeholder="nome_cliente" value="<?= $campo["nome_cliente"] ?>"> <br><br>

                    <label>Telefone do cliente</label><br>
                    <input type="text" name="telefone_cliente" placeholder="telefone_cliente" value="<?= $campo["telefone_cliente"] ?>"> <br><br>

                    <label>Email do cliente</label><br>
                    <input type="text" name="email_cliente" placeholder="email_cliente" value="<?= $campo["email_cliente"] ?>"> <br><br>

                    <label>Hora do evento</label><br> 
                    <input type="time" name="hora_evento" placeholder="hora_evento" value="<?= $campo["hora_evento"] ?>"> <br><br>

                    <label>Data do evento</label><br>
                    <input type="date" name="data_evento" placeholder="data_evento" value="<?= $campo["data_evento"] ?>"> <br><br>


                    <div>
                        <!-- Botão para enviar o formulário -->
                        <p><p><button class="botao" type="submit" onsubmit="">Cadastrar</button>
                            <a href="../index.php"><input type="button" class="botao" value="Cancelar"/></a>
                    </div>

                </fieldset >
            </form>
        </div>
        <div class="foto">
          <img src="../img/Foto 2 Grande.png">
          <img src="../img/Sobre 3 1366x769.png">
        </div>
    </body>
</html>
