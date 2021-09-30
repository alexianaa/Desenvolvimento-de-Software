<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <title>Belchior</title>
        <link rel="shortcut icon" href="../img/LogoFavicon.ico" type="image/x-icon">
        <meta charset="utf-8">
        <!-- Bootstrap 5.1 -->
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <!-- Normalize CSS -->
        <link rel="stylesheet" type="text/css" href="../css/normalize.css">
        <!-- Estilização da página -->
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <!-- Fonte da página -->
        <link href="https://fonts.googleapis.com/css2?family=Trocchi&display=swap" rel="stylesheet">
    </head>

    <body>
        <!-- Topo da página (padrão em todo o site) -->
        <div>
            <!-- Barra de navegação com menu responsivo --> 
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
                <!-- Logo -->
                <a class="d-inline" href="index.html"><img src="../img/logo.png"></a>
                <!-- Menu compactado (aparece em telas pequenas) -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <!-- Navegação (páginas e seus links) -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item me-2">
                            <a class="nav-link text-white" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item me-2">
                            <a class="nav-link text-white" href="sobre.html">Sobre</a>
                        </li>
                        <li class="nav-item me-2">
                            <a class="nav-link text-white" href="cupons.html">Cupons</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="cadastro.php">Cadastro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="contato.html">Contato</a>
                        </li>
                    </ul>
                </div>
            </nav>     
        </div><!-- Fim do topo da página! -->

        <div id="conteudo" class="pt-3">
            <h1>Cadastro de lojas</h1>
            <p style="margin-right: 20%;">Preencha o formulário abaixo com as informações da loja e do proprietário para adiciona-la ao site, antes de tudo não se esqueça de ler os nossos termos de uso.</p>
            <br>
            <!-- Mensagens de resultado -->
            <?php
                if(isset($_SESSION['msg']))
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
            ?>
            <form id="formulario-cadastro" method="post" action="../php/registrar_form_cadastro.php">
                <div id="inf-pessoais">
                    <h4>Informações Pessoais</h4>
                    <div class="campo">
                        <label for="nome">Nome completo:</label>
                        <input type="text" name="nome" id="nome" required>
                    </div>

                    <div class="campo">
                        <label for="email">E-mail:</label>
                        <input type="email" name="email" id="email" required>
                    </div>

                    <div class="campo">
                        <label for="telefone">Telefone:</label>
                        <input type="tel" name="telefone" id="telefone" required> 
                    </div>
                </div>

                <div id="inf-lojas">
                    <h4>Informações da loja</h4>

                    <div class="campo">
                        <label for="nome">Nome da loja</label>
                        <input type="text" name="nome_loja" id="nome_loja" required>
                    </div>

                    <div class="campo">
                        <label>Selecione o tipo de loja:</label>
                        <label> <input type="radio" name="tipo" value="fisica" checked>Física </label>
                        <label> <input type="radio" name="tipo" value="online">Digital </label>
                        <label> <input type="radio" name="tipo" value="hibrida">Hibrída </label>
                    </div>
                    
                    <div class="campo">
                        <label for="estado">Em qual estado a loja está localizada?</label>
                        <select id="estado"  required>
                            <option selected disabled value="">Selecione</option>
                            <option>Acre</option>
                            <option>Alagoas</option>
                            <option>Amapá</option>
                            <option>Amazonas</option>
                            <option>Bahia</option>
                            <option>Ceará</option>
                            <option>Distrito Federal</option>
                            <option>Espírito Santo</option>
                            <option>Goiás</option>
                            <option>Maranhão</option>
                            <option>Mato Grosso do Sul</option>
                            <option>Minas Gerais</option>
                            <option>Pará</option>
                            <option>Paraíba</option>
                            <option>Paraná</option>
                            <option>Pernambuco</option>
                            <option>Piauí</option>
                            <option>Rio de Janeiro</option>
                            <option>Rio Grande do Norte</option>
                            <option>Rio Grande do Sul</option>
                            <option>Rondônia</option>
                            <option>Roraima</option>
                            <option>Santa Catarina</option>
                            <option>São Paulo</option>
                            <option>Sergipe</option>
                            <option>Tocantins</option>
                        </select>
                    </div>

                    <div class="campo">
                        <label for="nome">Complemento da localização</label>
                        <input type="text" name="localizacao" id="localizacao" required>
                    </div>

                    <div class="campo">
                        <label for="nome">Link para site</label>
                        <input type="text" name="link" id="link" required>
                    </div>

                    <div id="check">
                        <label>Selecione o tipo de produto que a loja vende:</label> <br><br>
                        <input type="checkbox" id="produto1" name="produto1" value="Roupas">
                        <label for="produto1">Roupas</label>
                        <br>
                        <input type="checkbox" id="produto2" name="produto2" value="Acessorios">
                        <label for="produto2">Acessórios</label>
                        <br>
                        <input type="checkbox" id="produto3" name="produto3" value="Sapatos">
                        <label for="produto3">Sapatos</label>
                        <br>
                        <input type="checkbox" id="produto4" name="produto4" value="Moveis">
                        <label for="produto4">Móveis</label>
                    </div>
                </div>

                <div style="margin-bottom: 2em; font-size: 0.5cm;">
                    <input type="checkbox" id="termosdeuso" name="termos-de-uso" value="termos-de-uso" required>
                    <label>Aceito os termos de uso</label>
                </div>

                <button type="submit" class="botao">Concluído</button>
            </form>
        </div>

        <!-- Rodape -->
        <div id="rodape">
            <div class="d-flex">

                <!-- Link para os termos de uso -->
                <div class="me-auto">
                    <h5><a class="nav-link active text-white pt-4" aria-current="page" href="termos_de_uso.html">Termos de uso</a></h5>
                    <!-- Copyright -->
                    <h6 class="text-white ms-3">Todos os direitos reservados aos criadores ©</h6>
                </div>

                <!-- Logo da UnB -->
                <div>
                    <img class="img-fluid" src="../img/logo-unb.png">
                </div>
                <a href="adm_page.php">PÁGINA DOS ADM</a>
            </div>
        </div> <!-- Fim do rodape! -->
    
        <!-- JavaScript Bundle with Popper (coisa pro bootstrap) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </body>
</html>