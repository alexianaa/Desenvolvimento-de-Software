<?php
require('conexao.php');
 

$id = (isset($_GET['id'])) ? intval($_GET['id']) : 0;

if($id == 0){
    header('location:index.html');
}
$sql = "SELECT * FROM lojas WHERE id = '$id";
 

$qr  = mysql_query($sql) or die(mysql_error());
 

$ln = mysql_fetch_assoc($qr);
 

$titulo = $ln['nome_brecho'];
 
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <title><?php echo $nome ?> | Belchior Localizador de Brechós</title>
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
        <!-- js das estrelas -->
        <script src="../js/scripts.js"></script>
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
                            <a class="nav-link text-white" href="cadastro.html">Cadastro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="contato.html">Contato</a>
                        </li>
                    </ul>
                </div>
            </nav>     
        </div><!-- Fim do topo da página! -->

        <div id="conteudo" class="mt-5 mb-5">
        
        
            <!-- Imagem e rating -->
            <div class="container">
                <div class="">
                    <h1 class="nome-loja"><?php echo $nome_brecho ?></h1>
                </div>
                    <!-- Foto principal da loja -->
                <div class="row">
                    <div class="col-7">
                        <img src="../img/foto.png" class="img-fluid">
                    </div>
                    <div class="col-5">
                        <h2>Localização:</h2>
                        <div style="border: 2px solid rgba(127, 209, 185, 1);">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d30719.66597683526!2d-47.84938210932007!3d-15.75334788103361!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zYnJlY2jDsw!5e0!3m2!1spt-BR!2sbr!4v1628535576889!5m2!1spt-BR!2sbr" width="100%" height="240px" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
                <!-- Avaliação brechó -->
                <div class="row">
                    <div class="col-7 espaço-colunas">
                        <h2 id="rating">Avaliação: 0</h2>
                        
                        <a href="javascript:void(0)" onclick="Avaliar(1)">
                        <img class="estrelas" src="../img/star0.png" id="s1"></a>
                                
                        <a href="javascript:void(0)" onclick="Avaliar(2)">
                        <img class="estrelas" src="../img/star0.png" id="s2"></a>
                                
                        <a href="javascript:void(0)" onclick="Avaliar(3)">
                        <img class="estrelas" src="../img/star0.png" id="s3"></a>
                                
                        <a href="javascript:void(0)" onclick="Avaliar(4)">
                        <img class="estrelas" src="../img/star0.png" id="s4"></a>
                                
                        <a href="javascript:void(0)" onclick="Avaliar(5)">
                        <img class="estrelas" src="../img/star0.png" id="s5"></a>
                        
                    </span>
                    <p></p>

                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>

                        <div class="row">
                            <!-- Avaliação nota 5 -->
                            <div class="side">
                                <div><h3>5</h3></div>
                            </div>
                            <div class="middle">
                                <div class="bar-container">
                                <div class="bar-5"></div>
                                </div>
                            </div>
                            <div class="side right">
                                <div>150</div>
                            </div>

                            <!-- Avaliação nota 4 -->
                            <div class="side">
                                <div><h3>4</h3></div>
                            </div>
                            <div class="middle">
                                <div class="bar-container">
                                <div class="bar-4"></div>
                                </div>
                            </div>
                            <div class="side right">
                                <div>63</div>
                            </div>
                            
                            <!-- Avaliação nota 3 -->
                            <div class="side">
                                <div><h3>3</h3></div>
                            </div>
                            <div class="middle">
                                <div class="bar-container">
                                <div class="bar-3"></div>
                                </div>
                            </div>
                            <div class="side right">
                                <div>15</div>
                            </div>

                            <!-- Avaliação nota 2 -->
                            <div class="side">
                                <div><h3>2</h3></div>
                            </div>
                            <div class="middle">
                                <div class="bar-container">
                                <div class="bar-2"></div>
                                </div>
                            </div>
                            <div class="side right">
                                <div>6</div>
                            </div>

                            <!-- Avaliação nota 1 -->
                            <div class="side">
                                <div><h3>1</h3></div>
                            </div>
                            <div class="middle">
                                <div class="bar-container">
                                <div class="bar-1"></div>
                                </div>
                            </div>
                            <div class="side right">
                                <div>20</div>
                            </div>
                        </div>
                        <span><h2 class="mt-5">Fotos:</h2></span>
                    </div>
                    <div class="col-5"><br>
                        <h3 class="funcionamento">Contato:</h3>
                        <h3>(99) 99999-9999</h3>
                        <h3 class="funcionamento">Horário de funcionamento:</h3>
                        <br>
                        <ul>
                            <li><h5>segunda à sexta</h5></li>
                            <li><h5>9:00 - 17:00</h5></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Mais imagens da loja -->
            <div>
                <div id="carouselPagLoja" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselPagLoja" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselPagLoja" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselPagLoja" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="../img/Sonho-Brecho/Sonho-Brecho-img2.jpeg" class="d-inline-block img-paginaloja" alt="...">
                        <img src="../img/Sonho-Brecho/Sonho-Brecho-img4.jpeg" class="d-none d-md-inline-block img-paginaloja" alt="...">
                        <img src="../img/Sonho-Brecho/Sonho-Brecho-img3.jpeg" class="d-none d-lg-inline-block img-paginaloja" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="../img/Sonho-Brecho/Sonho-Brecho-img2.jpeg" class="d-inline-block img-paginaloja" alt="...">
                        <img src="../img/Sonho-Brecho/Sonho-Brecho-img4.jpeg" class="d-none d-md-inline-block img-paginaloja" alt="...">
                        <img src="../img/Sonho-Brecho/Sonho-Brecho-img3.jpeg" class="d-none d-lg-inline-block img-paginaloja" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="../img/Sonho-Brecho/Sonho-Brecho-img2.jpeg" class="d-inline-block img-paginaloja" alt="...">
                        <img src="../img/Sonho-Brecho/Sonho-Brecho-img4.jpeg" class="d-none d-md-inline-block img-paginaloja" alt="...">
                        <img src="../img/Sonho-Brecho/Sonho-Brecho-img3.jpeg" class="d-none d-lg-inline-block img-paginaloja" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev d-none d-md-block" type="button" data-bs-target="#carouselPagLoja" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next d-none d-md-block" type="button" data-bs-target="#carouselPagLoja" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
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

            </div>
        </div> <!-- Fim do rodape! -->
    
        <!-- JavaScript Bundle with Popper (coisa pro bootstrap) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </body>
</html>


<!--- < /php 
    
    echo "<h1>$titulo</h1>";
    echo $conteudo;
?/> em todo lugar que for pegar algo do banco ---> 