<!doctype html>

<html>

     <head>
        <!-- Metadados -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="../img/foto7.png"/>
        <!-- CSS -->


        <link rel="stylesheet" type="text/css" href="../css/StyleGerallllllll.css" media="screen">

        <script src="validar.js"></script>
        <!-- Script com o cep -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type='text/javascript' src='http://files.rafaelwendel.com/jquery.js'></script>
        <script type='text/javascript' src='cep.js'></script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    
        <!-- Título da página (aparece na aba) -->
        <title>Cadastro de Reserva</title>
    </head>

    <body>


        <!-- ======= Header ======= -->
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
                        </li>                
                </nav><!-- .navbar -->


            </div>
        </header><!-- End Header -->

        <!-- Início do formulário -->
        <div class="formcadcomanda">
            <form method="post" action="CadastrarReserva.php">
                <fieldset class="grupo1">
                    <!-- Cabeçalho com título e subtítulo (ambos com css de id "titulo") -->
                    <div class="cabecalho">
                        <h1 id="titulo">Cadastrar Reserva</h1>
                        <p> <h5 id="titulo">A Reserva Dura no Máximo 15 Minutos </h5> </p>
                      
                        <br>
                    </div>

                    <fieldset class="grupo">

                        <!-- Campo do nome com legenda "nome" e css de classe "campo" -->
                        <div class="campo">
                            <label for="nome_cliente"><strong>Nome do cliente</strong></label>
                            <input type="text" name="nome_cliente" id="nome" required>
                        </div>

                        <!-- Campo de email com-->
                        <div class="campo">
                            <label for="telefone_cliente"><strong>Telefone do cliente</strong></label>
                            <input type="text" name="telefone_cliente" id="nome" required>
                        </div>	

                        <div class="campo">
                            <label for="email_cliente"><strong>Email do cliente</strong></label>
                            <input type="text" name="email_cliente" id="nome" required>
                        </div>

                        <!-- Campo de email com-->
                        <div class="campo">
                            <label for="hora_evento"><strong>Horário do cliente</strong></label>
                            <input type="time" name="hora_evento" id="nome" required>
                        </div>	

                        <div class="campo">
                            <label for="data_evento"><strong>Data</strong></label>
                            <input type="date" name="data_evento" id="nome" required>
                        </div>


                    </fieldset>
                    <div>
                            <!-- Botão para enviar o formulário -->
                            <p><p><button class="botao" type="submit" onsubmit="">Cadastrar</button>
                                <a href="../index.php"><input type="button" class="botao" value="Cancelar"/></a>
                        </div>
            </form>
        </div>
        <div class="foto">
          <img src="../img/Foto 2 Grande.png">
          <img src="../img/Sobre 3 1366x769.png">
        </div>
    </body>
</html>