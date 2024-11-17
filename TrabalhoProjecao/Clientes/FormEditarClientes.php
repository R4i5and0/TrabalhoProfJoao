<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="../img/foto7.png"/>
        <link rel="stylesheet" type="text/css" href="../css/StyleGerallllllll.css" media="screen">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <title>Editar Clientes</title>
    </head>

    <body>

        <?php
        include("../conectarbd.php");

        $recid = filter_input(INPUT_GET, 'editarid');

        $selecionar = mysqli_query($conn, "SELECT * FROM tb_cliente WHERE id_cliente=$recid");

        $campo = mysqli_fetch_array($selecionar);
        ?>
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
                                    <li><a href="../Cardapio/FormCardapio.php">Cadastrar</a></li>

                                </ul>
                        </li>


                        <li <a class="dropdown"><a href="#"><span>Reserva</span> <i class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a href="../Reserva/FormReserva.php">Cadastrar</a></li>
                                    <li><a href="../Reserva/ConsultarReserva.php">Consultar</a></li>
                                </ul>
                        </li>        

                    </ul>
                    </li>        

                    </ul>
                </nav>
        </header>

      <div class="foto">
          <img src="../img/Foto 2 Grande.png">
          <img src="../img/Sobre 3 1366x769.png">
        </div>
        <div class="formcadcomanda">
            <form method="post" action="EditarClientes.php">
                <fieldset class="grupo">
                    <div class="cabecalho">
                        <h1 id="titulo">Editar Clientes</h1>
                        <br>
                    </div>
                </fieldset>

                <fieldset class="grupo">
                    <!esta linha cria um campo oculto para passar o id_servicos, pois senão ao clicar em Salvar o código não saberá onde salvar.-->
                    <input type="hidden" name="id" value="<?= $campo["id_cliente"] ?>"> 
                    <div class="campo">
                        <label for="nome_cliente"><strong>Nome Cliente</strong></label>
                        <input type="text" name="nome_cliente" value="<?= $campo["nome_cliente"] ?>" id="produto_venda" size="20" required>
                    </div>

                </fieldset>

                <fieldset class="grupo">
                    <div class="campo">
                        <label for="cpf_cliente"><strong>CPF</strong></label>
                        <input type="text" name="cpf_cliente" value="<?= $campo["cpf_cliente"] ?>" id="produto_venda" size="20" required>
                    </div>

                    <div class="campo">
                        <label for="telefone"><strong>Telefone</strong></label>
                        <input type="text" name="telefone" id="telefone" size="20" required>
                    </div>

                </fieldset>

                <fieldset class="grupo">
                    <div class="campo">
                        <label for="rg"><strong>RG</strong></label>
                        <input type="text" name="rg" value="<?= $campo["rg"] ?>" id="produto_venda" size="20" required>                     
                    </div>

                    <div class="campo">
                        <label for="dataExped"><strong>Data de Exp.</strong></label>
                        <input type="date" name="dataExped" value="<?= $campo["dataExped"] ?>" id="produto_venda" size="20" required>                     
                    </div>
                </fieldset>

                <fieldset class="grupo">

                    <div class="campo">
                        <label for="orgaoEmis"><strong>Orgão Emissor</strong></label>
                        <input type="text" name="orgaoEmis" value="<?= $campo["orgaoEmis"] ?>" id="produto_venda" size="20" required>
                    </div>
                    <div class="campo">
                        <label for="nacionalidade"><strong>Nacionalidade</strong></label>
                        <input type="text" name="nacionalidade" value="<?= $campo["nacionalidade"] ?>" id="produto_venda" size="20" required>
                    </div>
                </fieldset>

                <fieldset class="grupo">
                    <p><p><button class="botao" type="submit" onsubmit="">Cadastrar</button>
                        <a href="../index.php"><input type="button" class="botao" value="Cancelar"/></a>
                </fieldset>
            </form>

        </div>

    </body>

</html>
