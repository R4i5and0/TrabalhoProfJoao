<!doctype html>
<!-- https://www.youtube.com/watch?v=wwqOJ2o84S4&ab_channel=RafaellaBallerini -->
<html>

    <head>
        <!-- Metadados -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="../img/foto7.png"/>
        <link rel="stylesheet" type="text/css" href="../css/StyleGerallllllll.css" media="screen">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type='text/javascript' src='cep.js'></script>
        <title>Cadastrar Clientes</title>
    </head>

    <body>

        <header id="header" class="fixed-top d-flex align-items-cente">
            <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

                <h1 class="logo me-auto me-lg-0"><a href="../index.php">SISTEMA TRIBUS</a></h1>


                <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>

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
            <form method="post" action="CadastrarClientes.php">

                <!-- Cabeçalho com título e subtítulo (ambos com css de id "titulo") -->
                <fieldset class="grupo">
                    <div class="cabecalho">
                        <h1 id="titulo">Cadastrar Clientes</h1>

                        <br>
                    </div>

                    <!-- Campo do nome com legenda "nome" e css de classe "campo" -->
                    <header class="centro">

                        <div>

                            <br>
                            <!-- Campo do nome com legenda "nome" e css de classe "campo" -->
                            </fieldset> 

                            <fieldset class="grupo">
                                <!-- Campo do nome com legenda "nome" e css de classe "campo" -->
                                <div class="campo">
                                    <label for="nome_cliente"><strong>Nome Cliente</strong></label>
                                    <input type="text" name="nome_cliente" id="nome_cliente" size="20" required>
                                </div>
                            </fieldset> 

                            <!-- Campo do sobrenome com legenda "sobrenome" e css de classe "campo" -->
                            <fieldset class="grupo">
                                <div class="campo">
                                    <label for="cpf_cliente"><strong>CPF</strong></label>
                                    <input type="text" name="cpf_cliente" id="cpf_cliente" size="20" required>
                                </div>

                                <div class="campo">
                                    <label for="telefone"><strong>Telefone</strong></label>
                                    <input type="text" name="telefone" id="telefone" size="20" required>
                                </div>


                            </fieldset>

                            <fieldset class="grupo">
                                <div class="campo">
                                    <label for="rg"><strong>RG</strong></label>
                                    <input type="text" name="rg" id="rg" size="20" required>
                                </div>



                                <div class="campo">
                                    <label for="date"><strong>Data Exp.</strong></label>
                                    <input type="date" name="dataExped" id="dataExped" size="20" required>
                                </div>
                            </fieldset>
                            <!-- type autera a largura da label( valor é diferente de text)-->
                            <fieldset class="grupo">
                                <div class="campo">
                                    <label for="orgaoEmis"><strong>Órgão Emissor</strong></label>
                                    <input type="text" name="orgaoEmis" id="orgaoEmis" size="20" required>
                                </div>

                                <div class="campo">
                                    <label for="nacionalidade"><strong>Nacionalidade</strong></label>
                                    <input type="text" name="nacionalidade" id="nacionalidade" size="20" required>

                                </div>   
                            </fieldset>


                            <fieldset class="grupo">
                                <p><p><button class="botao" type="submit">Cadastrar</button>
                                    <a href="../index.php"><input type="button" class="botao" value="Cancelar"/></a>
                            </fieldset>

                            </form>

                        </div>    


                        <div class="foto">
                            <img src="../img/Foto 2 Grande.png">
                            <img src="../img/Sobre 3 1366x769.png">
                        </div>

                        </body>
                        </html>











