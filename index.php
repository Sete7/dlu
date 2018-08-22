<?php
require_once './app/config.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>D'Lurdes Delícias de Minas, Restaurante Mineiro, Brasília, Guará.</title>        
        <link href="<?= REQUIRE_PATH; ?>/img/favicon.fw.png" rel="shortcut icon"> 
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
        <link href="<?= REQUIRE_PATH; ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= REQUIRE_PATH; ?>/css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="<?= REQUIRE_PATH; ?>/css/jcarousel.skeleton.css" rel="stylesheet" type="text/css"/>
        <link href="<?= REQUIRE_PATH; ?>/css/media.css" rel="stylesheet" type="text/css"/>        
        <script type="text/javascript" src="<?= REQUIRE_PATH; ?>/jcarousel.basic.js"></script>
    </head>
    <body>
        <!--http://tamarind.imaginem.co-->
        <!--------------------------------------------------------CABECALHO-------------------------->
    <center>
        <header class="main-header container">
            <!-----------------SOCIAL TOPO ------------------>
            <div class="box-social-topo">  
                <center>
                    <div class="social-header">                    
                        <div class="logo-topo-mob">
                            <img class="lg-topo" src="<?= REQUIRE_PATH; ?>/img/logo3.png" alt="" style="width: 100px;"/>
                        </div>

                        <div class="box-reserva-topo">
                            <a href="#" class="btn-rezerva-topo">FAZER RESERVA</a>
                        </div>                  

                        <div class="from-city">
                            <a class="enderece" href="https://goo.gl/maps/Mv8kujtnm7S2" target="_blanck">            
                                <i class="fa fa-map"></i>ENDEREÇO: Guará II 30 Cj K 9, Brasília - DF
                            </a>
                            <a class="phone" href="#">                    
                                <i class="fa fa-phone-square"></i>   Telefone: (61) 3382-6625
                            </a>
                        </div>

                        <div class="div-social">
                            <a href="https://www.facebook.com/dlurdesguara/?ref=page_internal" class="face" target="_blank" title="Facebook">
                                <i class="fa fa-facebook"></i>
                            </a>                   
                            <a  class="tripad"  href="https://www.tripadvisor.com.br/Restaurant_Review-g2572086-d4784343-Reviews-D_Lurdes-Guara_Federal_District.html"  target="_blanck"  title="TripadVisor">                                    
                                <i class="fa fa-tripadvisor"></i>
                            </a>

                            <a  class="instam"  href="https://www.instagram.com/explore/locations/227506531050754/dlurdes-guara/?hl=pt"  target="_blanck" title="Instagram">            
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>     
                    </div> 
                </center>
            </div>

            <!-----------------LOGO & MENU ------------------>

            <div class="content">

                <div class="sidebar">
                    <ul class="menu-mob">
                        <li>
                            <div class="box-logo-mob">
                                <a href="<?= HOME; ?>/">                                
                                    <img src="<?= REQUIRE_PATH; ?>/img/logo.png" alt="D'Lurdes" title="D'Lurdes Delícias de Minas, Restaurante Mineiro, Brasília, Guará." width="200px"/>
                                </a>
                            </div>
                        </li>                            
                        <li>
                            <a href="<?= HOME; ?>" title="Início">Início</a>
                        </li>                            
                        <li>
                            <a href="<?= HOME; ?>/quem-somos" title="Quem Somos">Quem Somos</a>
                        </li>
                        <li>
                            <a href="<?= HOME; ?>/cardapio" title="Cardápio">Cardápio</a>
                        </li>
                        <li>
                            <a href="<?= HOME; ?>/blog" title="Blog">Blog</a>
                        </li>
                        <li>
                            <a href="<?= HOME; ?>/contato" title="Contato">Contato</a>
                        </li>
                        <li>
                            <a href="<?= HOME; ?>/eventos" title="Eventos">Eventos</a>
                        </li>
                        <li>
                            <a href="<?= HOME; ?>/reserva" title="Reserva">
                                Fazer Reserva
                            </a>
                        </li>
                    </ul>

                    <button class="sidebarBtn">
                        <span></span>
                    </button>
                </div>

                <div class="box-menu">
                    <div class="box-logo">
                        <a href="<?= HOME; ?>">
                            <h1 class="font-zero">D'Lurdes</h1>
                            <img src="<?= INCLUDE_PATH; ?>/img/logo.png" alt="D'Lurdes" title="D'Lurdes Delícias de Minas, Restaurante Mineiro, Brasília, Guará." width="300px;"/>
                        </a>
                    </div>

                    <div class="navbar">
                        <ul class="menu">
                            <li>
                                <a href="<?= HOME; ?>" title="Início">Início</a>
                            </li>                            
                            <li>
                                <a href="<?= HOME; ?>/quem-somos" title="Quem Somos">Quem Somos</a>
                            </li>
                            <li>
                                <a href="<?= HOME; ?>/cardapio" title="Cardápio">Cardápio</a>
                            </li>
                        </ul>
                    </div>

                    <div class="navbar-right">
                        <ul class="menu-right">
                            <li class="li-right">
                                <a href="<?= HOME; ?>/blog" title="Blog">Blog</a>
                            </li>
                            <li>
                                <a href="<?= HOME; ?>/contato" title="Contato">Contato</a>
                            </li>
                            <li>
                                <a href="<?= HOME; ?>/eventos" title="Eventos">Eventos</a>
                            </li>
                            <li>
                                <div class="reserva btn">
                                    <a href="<?= HOME; ?>/reserva" class="btn-reservar">Reserva</a>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>                
            </div>

            <i class="ion-bag"></i>

            <div class="clear"></div>
        </header>
    </center>
    
    <!-- --------------------------------- CONTEUDO ---------------------------- -->
            <?php
            $Url[1] = (empty($Url[1]) ? null : $Url[1]);
            if (file_exists(REQUIRE_PATH . '/' . $Url[0] . '.php')):
                require REQUIRE_PATH . '/' . $Url[0] . '.php';
            elseif (file_exists(REQUIRE_PATH . '/' . $Url[0] . '/' . $Url[1] . '.php')):
                require REQUIRE_PATH . '/' . $Url[0] . '/' . $Url[1] . '.php';
            else:
                require REQUIRE_PATH . '/404.php';
            endif;
            ?>
    <!-- --------------------------------- CONTEUDO ---------------------------- -->       

    <!------------------------------------ RODAPÉ ------------------------------ -->    
    <footer class="main-footer container">            
        <center>
            <section class="container">
                <div class="content">
                    <h1 class="font-zero">Mais Sobre D'Lurdes</h1>
                    <div class="social-footer">                     
                        <ul>
                            <li><a href="https://www.facebook.com/dlurdesguara/?ref=page_internal" title="Facebook" > <i class="fa fa-facebook"></i> </a></li> 
                            <li><a href="#" title="Twitter" ><i class="fa fa-twitter"></i></a></li> 
                            <li><a href="https://www.tripadvisor.com.br/Restaurant_Review-g2572086-d4784343-Reviews-D_Lurdes-Guara_Federal_District.html" title="Tripadvisor" ><i class="fa fa-tripadvisor"></i></a></li> 
                            <li><a href="#" title="Pinterest" ><i class="fa fa-pinterest"></i></a></li> 
                            <li><a href="https://www.instagram.com/explore/locations/227506531050754/dlurdes-guara/?hl=pt" title="Instagram" ><i class="fa fa-instagram"></i></a></li> 
                        </ul>               
                    </div>

                    <article class="newsletter-footer">
                        <h1>Newsletter</h1>
                        <div class="div-form-news">
                            <form class="form-newsletter">
                                <input type="text" class="nome" name="nome" placeholder="Nome">
                                <input type="email" class="email" name="email" placeholder="Email">
                                <input type="submit" class="btn-news" name="submit" value="Enviar">
                            </form>
                        </div>
                    </article>

                    <div class="sec-instam">                     
                        <div class="box-grid-instam">
                            <ul  class="ul-grid-instam">
                                <?php
                                for ($i = 1; $i <= 4; $i++) {
                                    ?>
                                    <li>
                                        <a href="https://www.instagram.com/dlurdes" target="_blank" title="instagram" class="instagram-photos-link">
                                            <img src="https://instagram.fbsb4-1.fna.fbcdn.net/vp/72f971a7adebe570a0293ce96d85a12b/5BF2A1F0/t51.2885-15/e35/37880589_1007585576076065_1860741989117460480_n.jpg" alt="instagram" class="displayed-image"/>
                                            <div class="search-instam"><i class="fa fa-search"></i></div>

                                        </a>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>

                    <article class="sec-time">               
                        <div class="time-function">
                            <h1>Horário de Funcionamento</h1>
                            <p class="text-title-time">
                                D'Lurdes Guará
                                Comida Mineira e decoração do interior que
                                lembram a casa da Vovó. A noite Rodízio .
                            </p>

                            <div class="dye">
                                <header>
                                    <h2> Almoço</h2>
                                    <p class="tagline">Segunda. à Sexta</p>
                                </header>
                                <p>11:00 às 14:45</p>
                                <p>18:00 às 23:30</p>
                            </div>

                            <div class="dye">
                                <header>
                                    <h2>Final de Semana</h2>
                                    <p class="tagline">Sabádo & Domingo</p>
                                </header>
                                <p>11:00 às 14:45</p>
                                <p>18:00 às 23:30</p>                        
                            </div>                       


                            <div class="dye">
                                <header>
                                    <h2>Jantar</h2>
                                    <p class="tagline">Segunda à Sexta</p>
                                </header>
                                <p>11:00 às 14:45</p>
                                <p>18:00 às 23:30</p>                       
                            </div>

                            <div class="dye">                                                         
                                <h2>Domingo</h2>
                                <p>11:00 às 14:45</p>
                                <p>18:00 às 23:30</p>
                            </div>

                            <div class="box-logo-footer">
                                <a href="#">                                
                                    <img src="<?= REQUIRE_PATH; ?>/img/logo.png" alt="D'Lurdes" title="D'Lurdes Delícias de Minas, Restaurante Mineiro, Brasília, Guará." width="200px"/>
                                </a>
                            </div>
                        </div>
                    </article>
                    <div class="clear"></div>
                </div>               
            </section>
        </center>

        <div class="copy container">
            <p>&copy <?php echo date('Y'); ?> D'Lurdes - Todos os direitos reservados |
                <a href="https://www.inovepublicidade.com/novo" class="quem-faz" target="_blank" title="Inove Publicidade">
                    QUEM FAZ: INOVE PUBLICIDADE
                </a>
            </p>
        </div>
    </footer>

    <script src="<?= REQUIRE_PATH; ?>/js/jquery.js"></script>
    <script src="<?= REQUIRE_PATH; ?>/js/scriptSite.js"></script>
    <script src="<?= REQUIRE_PATH; ?>/js/jcarousel.skeleton.js"></script>
    <script src="<?= REQUIRE_PATH; ?>/js/jquery.jcarousel.min.js"></script>
    <script src="<?= REQUIRE_PATH; ?>/js/jcarousel.responsive.js"></script>
    <script src="<?= REQUIRE_PATH; ?>/js/slider_show.js"></script>
    <script src="<?= REQUIRE_PATH; ?>/js/jcarousel.basic.js"></script>
    <script src="<?= REQUIRE_PATH; ?>/js/jcarousel.responsive-quem.js"></script>

</body>
</html>