<?php 
include ("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sobre Nós</title>
    <link rel="shortcut icon" type="imagex/png" href="fotos/Logo Tcc.png">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/pagina_inicial.css">
    <link rel="stylesheet" href="css/sobrenos.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Font Awesome JS -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
     <!-- jQuery CDN - Slim version (=without AJAX) -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <!-- Popper.JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
     <!-- Bootstrap JS -->
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script> 
<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>MINHA HORTA MINHA VIDA</h3>
                <strong>MH</strong>
                <strong>MV</strong>
            </div>

            <ul class="list-unstyled components">
                <li >
                    <a href="pagina_inicial.php">
                        <i class="fas fa-home"></i>
                        Página Inicial
                    </a>
                </li>
                <li >
                    <a href="comecar_horta.php">
                        <i class="fas fa-seedling"></i>
                        Começar Horta
                    </a>
                </li>
                <li>
                    <a href="fale_conosco.php">
                        <i class="fas fa-paper-plane"></i>
                        Fale Conosco
                    </a>
                </li>
                <li class="active" >
                    <a href="sobre_nos.php">
                        <i class="fas fa-briefcase"></i>
                        Sobre Nós
                    </a>
                    
                </li>
            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="botao-menu" class="btn btn-outline-success" >
                        <i class="fas fa-align-left"></i>
                        <span>Menu</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item ">
                                <a class="nav-link" href="pagina_inicial.php">Página Inicial</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="comecar_horta.php">Começar uma Horta</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="fale_conosco.php">Fale Conosco</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="sobre_nos.php">Sobre Nós</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
                <!--Nosso contato-->
                <center>
                <h1>Desenvolvedores</h1>
                </center>
                <br>

                <!--Grid de Histórico-->
  <div class="row no gutters">
        <div class="col py-3 px-lg-5 border bg-light">
                <center>
                    <img src="https://avatars.githubusercontent.com/u/88064068?v=4" width="100px" height="100px" /><br><br>
                        <div class="card border-primary mb-3" style="max-width: 18rem;">
                            <div class="card-header">Isabel Limão</div>
                                 <div class="card-body text-primary">
                                    <h5 class="card-title">O que eu fiz?</h5>
                                         <p class="card-text">
                                         Responsável pelo design específico da página e abastecimento
                                         das informações do site.
                                         </p>
                            <div class="card-footer">
                           <a href="https://github.com/isabelimao"><img src="fotos/github.png" width="30px" height="30px"/> &nbsp;<em></em></a>
                           <a href=""><img src="fotos/linkedin.png.png" width="30px" height="30px"/> &nbsp;<em></em></a>  
                            </div>
                            <!--"https://www.flaticon.com/br/icones-gratis"-->
                        </div>         
                </center>
        </div>
        <div class="col py-3 px-lg-5 border bg-light">
                <center>
                    <img src="https://avatars.githubusercontent.com/u/81269229?v=4" width="100px" height="100px" /><br><br>
                    <div class="card border-primary mb-3" style="max-width: 18rem;">
                            <div class="card-header">Jefferson Lopes</div>
                                 <div class="card-body text-primary">
                                    <h5 class="card-title">O que eu fiz?</h5>
                                         <p class="card-text">
                                             Responsável pelo front end e pelo back end, e gerenciamento
                                             geral do projeto.
                                            </p>
                                            <br>
                                         <div class="card-footer">
                           <a href="https://github.com/JLopes2021"><img src="fotos/github.png" width="30px" height="30px"/> &nbsp;<em></em></a>
                           <a href="https://www.linkedin.com/in/jefferson-lopes-b87605191/"><img src="fotos/linkedin.png.png" width="30px" height="30px"/> &nbsp;<em></em></a>  
                            </div>
                            <!--"https://www.flaticon.com/br/icones-gratis"-->
                        </div>  
                </center>
        </div>

        <div class="col py-3 px-lg-5 border bg-light">
            <center>
                    <img src="https://avatars.githubusercontent.com/u/101489147?v=4" width="100px" height="100px" /><br><br>
                    <div class="card border-primary mb-3" style="max-width: 18rem;">
                            <div class="card-header">Leticia Lima</div>
                                 <div class="card-body text-primary">
                                    <h5 class="card-title">O que eu fiz?</h5>
                                    <p class="card-text">
                                             Responsável pelo esqueleto geral de front end e pelo design geral 
                                             da página.
                                            </p>   
                                            <br>                                      
                                            <div class="card-footer">
                           <a href="https://github.com/LETICIALIMA77"><img src="fotos/github.png" width="30px" height="30px"/> &nbsp;<em></em></a>
                           <a href="https://www.linkedin.com/in/leticia-lima-0b0b6120b/"><img src="fotos/linkedin.png.png" width="30px" height="30px"/> &nbsp;<em></em></a>  
                            </div>
                            <!--"https://www.flaticon.com/br/icones-gratis"-->
                        </div>  
            </center>
        </div>

        <div class="col py-3 px-lg-5 border bg-light">
                <center>
                    <img src="https://avatars.githubusercontent.com/u/88008791?v=4" width="100px" height="100px" /><br><br>
                    <div class="card border-primary mb-3" style="max-width: 18rem;">
                            <div class="card-header">Lucas Maciel</div>
                                 <div class="card-body text-primary">
                                    <h5 class="card-title">O que eu fiz?</h5>
                                    <p class="card-text">
                                             Responsável pela criação do banco de dados MySql e revisão das páginas 
                                             antes da implementação.
                                            </p>                                         <div class="card-footer">
                           <a href="https://github.com/LucasMaciel17"><img src="fotos/github.png" width="30px" height="30px"/> &nbsp;<em></em></a>
                           <a href="">https://www.linkedin.com/in/lucas-maciel-228413204/<img src="fotos/linkedin.png.png" width="30px" height="30px"/> &nbsp;<em></em></a>  
                            </div>
                            <!--"https://www.flaticon.com/br/icones-gratis"-->
                        </div>  
                </center>  
        </div>

        <div class="col py-3 px-lg-5 border bg-light">
                <center>
                    <img src="https://avatars.githubusercontent.com/u/88062904?v=4" width="100px" height="100px" /><br><br>
                    <div class="card border-primary mb-3" style="max-width: 18rem;">
                            <div class="card-header">Taina Ribeiro</div>
                                 <div class="card-body text-primary">
                                    <h5 class="card-title">O que eu fiz?</h5>
                                    <p class="card-text">
                                             Responsável pelo design específico da página e abastecimento
                                             das informações do site.
                                            </p>                                         <div class="card-footer">
                           <a href="https://github.com/Taina245"><img src="fotos/github.png" width="30px" height="30px"/> &nbsp;<em></em></a>
                           <a href=""><img src="fotos/linkedin.png.png" width="30px" height="30px"/> &nbsp;<em></em></a>  
                            </div>
                            <!--"https://www.flaticon.com/br/icones-gratis"-->
                        </div>  
                </center>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#botao-menu').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>
