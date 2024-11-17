<!doctype html>
<!-- https://www.youtube.com/watch?v=wwqOJ2o84S4&ab_channel=RafaellaBallerini -->
<html>

    <head>
        <!-- Metadados -->
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
        <title>Cadastrar Comanda</title>
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
        <!-- Início do formulário --> 
        <div class="formcadcomanda">
            <form method="post" action="CadastrarComanda.php">
                <!-- Cabeçalho com título e subtítulo (ambos com css de id "titulo") -->
                <fieldset class="grupo1">
                    <div class="cabecalho">
                        <h1 id="titulo">Cadastrar Comanda</h1>
                        <!--<p id="subtitulo">COMPLETE AS INFORMAÇÕES</p>-->
                        <br>
                    </div>
                </fieldset>
                <!-- Campo do nome com legenda "nome" e css de classe "campo" -->
                <fieldset class="grupo">

                    <div class="campo">
                        <label for="num_mesa"><strong>N° mesa</strong></label>
                        <input type="text" name="num_mesa" id="num_mesa" size="10" required>
                    </div>

                    <div class="campo">
                        <label for="nome_garcom"><strong>Garçom</strong></label>
                        <input type="text" name="nome_garcom" id="nome_garcom" size="10" required>
                    </div>

                    
                    <div class="campo">
                        <label for="item_produto"><strong>Item</strong></label>
                        <input type="text" name="item_produto" id="item_produto" size="10" required>
                    </div>
              

                    <div class="campo">
                        <label for="qtde_produto"><strong>Quantidade</strong></label>
                        <input type="text" name="qtde_produto" id="qtde_produto" size="10" required onblur="calcular();">
                    </div>
                </fieldset>
                    <fieldset class="grupo">

                    <div class="campo">
                        <label for="valor_unit"><strong>Valor unitário</strong></label>
                        <input type="text" name="valor_unit" id="valor_unit" size="10" required onblur="calcular();">
                    </div>

                    <div class="campo">
                        <label for="subtotal"><strong>Subtotal</strong></label>
                        <input type="text" name="subtotal" id="subtotal" size="10" required onblur="calcularsoma_valores();">
                    </div>

                </fieldset>

                <fieldset class="grupo">
                    <div class="campo">
                        <label for="tx_servico"><strong>Taxa de serviço</strong></label>
                        <input type="text" name="tx_servico" id="tx_servico" size="10" required onblur="calcularsoma_valores();">
                    </div>

                    <div class="campo">
                        <label for="soma_valores"><strong>Soma de valores</strong></label>
                        <input type="text" name="soma_valores" id="soma_valores" size="10" required onblur="calculartx_servico();">
                    </div>

                    <div class="campo">
                        <label for="total"><strong>Total</strong></label>
                        <input type="text" name="total" id="total" size="10" required onblur="calculartotal();">
                    </div>


                </fieldset>

                <fieldset class="grupo">                 

                    <!-- Botão para enviar o formulário -->
                    <p><p><button class="botao" type="submit" onsubmit="">Cadastrar</button>
                        <a href="../index.php"><input type="button" class="botao" value="Cancelar"/></a>
                </fieldset>
        </div>

       <div class="foto">
          <img src="../img/Foto 2 Grande.png">
          <img src="../img/Sobre 3 1366x769.png">
        </div>

        <script type="text/javascript">

            function calcular() {
                var qtde_produto = Number(document.getElementById("qtde_produto").value);
                var valor_unit = Number(document.getElementById("valor_unit").value);

                document.getElementById("subtotal").value = String(qtde_produto * valor_unit);
            }

            function calculartx_servico() {
                var subtotal = Number(document.getElementById("subtotal").value);

                document.getElementById("tx_servico").value = String(subtotal * 0.1);
            }

            function calcularsoma_valores() {
                var tx_servico = Number(document.getElementById("tx_servico").value);
                var subtotal = Number(document.getElementById("subtotal").value);

                document.getElementById("soma_valores").value = String(subtotal + tx_servico);
            }

            function calculartotal() {
                var tx_servico = Number(document.getElementById("tx_servico").value);
                var soma_valores = Number(document.getElementById("soma_valores").value);

                document.getElementById("total").value = String(tx_servico + soma_valores);
            }

        </script>
    </body>
</html>