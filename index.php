<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>D'Lurdes Delícias de Minas, Restaurante Mineiro, Brasília, Guará.</title>
        <meta charset="utf-8">
        <link href="img/favicon.fw.png" rel="shortcut icon"> 
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="css/jcarousel.skeleton.css" rel="stylesheet" type="text/css"/>
        <link href="css/media.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <!--http://tamarind.imaginem.co-->
        <!--------------------------------------------------------CABECALHO-------------------------->
    <center>
        <header class="main-header container">
            <!-----------------SOCIAL TOPO ------------------>
            <div class="box-social-topo">                
                <div class="social-header">
                    <div class="from-city">
                        <a class="enderece" href="https://goo.gl/maps/Mv8kujtnm7S2" target="_blanck">            
                            <i class="fa fa-map"></i>ENDEREÇO: Guará II 30 Cj K 9, Brasília - DF
                        </a>
                        <a class="phone" href="#">                    
                            <i class="fa fa-phone-square"></i>   Telefone: (61) 3382-6625
                        </a>
                    </div>

                    <div class="div-social">
                        <a href="https://www.facebook.com/dlurdesguara/?ref=page_internal" class="face" target="_blanck" title="Facebook">
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
            </div>

            <!-----------------LOGO & MENU ------------------>

            <div class="content">
                <div class="box-menu">

                    <div class="box-logo">
                        <a href="#">
                            <h1 class="font-zero">D'Lurdes</h1>
                            <img src="img/logo.png" alt="D'Lurdes" title="D'Lurdes Delícias de Minas, Restaurante Mineiro, Brasília, Guará." width="300px;"/>
                        </a>
                    </div>


                    <div class="navbar">
                        <ul class="menu">
                            <li>
                                <a href="#" title="Início">Início</a>
                            </li>                            
                            <li>
                                <a href="#" title="Quem Somos">Quem Somos</a>
                            </li>
                            <li>
                                <a href="#" title="Cardápio">Cardápio</a>
                            </li>
                        </ul>
                    </div>
                    <div class="navbar-right">
                        <ul class="menu-right">
                            <li class="li-right">
                                <a href="#" title="Blog">Blog</a>
                            </li>
                            <li>
                                <a href="#" title="Contato">Contato</a>
                            </li>
                            <li>
                                <a href="#" title="Eventos">Eventos</a>
                            </li>
                            <li>
                                <div class="reserva btn">
                                    <a href="#" class="btn-reservar">Reserva</a>
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
    <!--------------------------------- SLIDE SITE -------------------------------->
    <main class="main_content container">
        <?php
//        $tamMobile = "Grande";
//        $sliderMobile = $sliderController->ListarTamanhoSlider($tamMobile);
//        if ($sliderMobile == null):
//        else:
        ?>
        <section class="slider">
            <h1 class="font-zero">Últimas do site:</h1>
            <div class="slider_controll">
                <div class="slide_nav back"><i class="fa fa-chevron-left"></i></div>
                <div class="slide_nav go"><i class="fa fa-chevron-right"></i></div>
            </div>            

            <?php
//                $controle_active = 2;
//                foreach ($sliderMobile as $sli):
//                    if ($controle_active == 2):
            ?>
            <article class="slider_item first">
                <h1 class="font-zero">Banner</h1>
                <a href="#"  title="" class="box-slider">
                    <picture alt="Fortaleza">
                        <source media="(min-width: 1280px)" srcset="tim.php?src=uploads/01.jpg&w=1366&h=400" />
                    </picture> 
                    <img src="img/slider-banne1.jpg" alt="Banner" title="Promoções D'Lurdes"/>
                </a>
            </article>
            <?php
//                        $controle_active = 1;
//                    else:
            ?>
            <article class="slider_item">
                <h1 class="font-zero">Banner</h1>
                <a href="#"  title="" class="box-slider">
                    <picture alt="Fortaleza">
                        <source media="(min-width:1600px)" srcset="tim.php?src=uploads/01.jpg&w=200&h=600">
                    </picture>    
                    <img src="img/slider-banne2.jpg"  alt="Banner" title="Rodizio D'Lurdes"/>
                </a>
            </article>
            <?php
//                    endif;
//                endforeach;
            ?>              
        </section>
        <?php
//        endif;
        ?>

        <div class="box-interation">                    
            <a href="#" class="btn-slider">SAIBA MAIS</a>
            <div id="animation" class="anima-pan"></div>
        </div>
    </main>
    <main>
         <div class="banner-mobile">
            <img src="img/img-mobille.jpg"  alt="Banner" title="Rodizio D'Lurdes"/>
        </div>
    </main>
    <!--------------------------------------------------CONTEUDO----------------------------------------->
    <main class="main-home container">
        <section class="sec-post content">
            <h1>O MELHOR DA CULINÁRIA</h1>  
            <div class="desc-sec-post">  
                <p class="tagline">PRATOS TÍPICOS DA CULINÁRIA MINEIRA.</p>
                <p>
                    Conheça iguarias típicas da região que reúne tradição, simplicidade e muito sabor.
                </p>
            </div>            
            <!------------------SLIDER POST SOBREMESA------------------->
            <div class="box-imagedrop">
                <div class="thumb">

                    <div class="jcarousel-wrapper">
                        <div class="box-controlslide">
                            <!-- Prev/next controls -->
                            <a href="#" class="jcarousel-control-next next"><i class="fa fa-long-arrow-left"></i></a>
                            <a href="#" class="jcarousel-control-prev prev"><i class="fa fa-long-arrow-right"></i></a>
                        </div>
                        <!-- Carousel -->
                        <div class="jcarousel">
                            <ul> 
                                <li><img src="img/bf-cv.jpg"  alt="Pratos Típicos" title="Pratos Típicos"/></li>
                                <li><img src="img/pastas.jpg" alt="Pratos Típicos" title="Pratos Típicos"/></li>
                                <li><img src="img/bf-cv.jpg" alt="Pratos Típicos" title="Pratos Típicos"/></li>
                                <li><img src="img/galinhada.jpg" alt="Pratos Típicos" title="Pratos Típicos"/></li>
                                <li><img src="img/bf-cv.jpg" alt="Pratos Típicos" title="Pratos Típicos"/></li>
                                <li><img src="img/galinhada.jpg" alt="Pratos Típicos" title="Pratos Típicos"/></li>
                            </ul>
                        </div>
                        <!-- Pagination -->
<!--                            <p class="jcarousel-pagination">
                             Pagination items will be generated in here 
                        </p>-->

                    </div>
                </div>                    
            </div>    
            <div class="clear"></div>                
        </section>

        <section class="sec-memorable container">
            <div class="box-reserva">
                <header>
                    <h1>QUEM SOMOS</h1>                
                    <p class="tagline">D'Lurdes</p>
                </header>
                <p class="cl-rgba-cinza">
                    A dedicação transborda as panelas da dona Lurdes Cardoso.
                    O apreço pelo o que faz é tão grande que os funcionários do 
                    restaurante não pensaram duas vezes antes de apelida-la 
                    carinhosamente de vovozinha.
                </p>

                <div class="box-btn-reservar">
                    <a href="#" class="btn-reservar-two" >SAIBA MAIS</a>
                </div>  
            </div>           
            <div class="clear"></div>
        </section>

        <!---------------------------------------LISTAGEM DE CARDÁPIO---------------------------------------->
        <section class="sec-menu container">            
            <div class="box-desc-menu">
                <header>
                    <h1> Chocolate Mochas </h1>
                    <p class="tagline">Coffee Menu</p>
                </header>

                <p>
                    Uma das melhores sobremesas da cidade de Brasília, 
                    D'lurdes tem uma ótima sobremesa de acompanhamento
                    para vc se deliciar da nossa culinária.
                </p>
                <div class="box-btn-black">
                    <a href="#" class="btn-white">
                        Veja Mais
                    </a>
                </div>
            </div>
            <div class="box-thumb">
                <img src="img/our-staff-image.jpg" alt=""/>
            </div>
            <div class="clear"></div>
        </section>
        <!---------------------------------------VARIEDADES---------------------------------------->
        <section class="sec-varieti container">          
            <div class="box-varieti">
                <div class="thumb-two">
                    <img src="img/photocard-2.jpg" alt="Uma das melhores sobremesas" title="Uma das melhores sobremesas"/>
                </div>

                <div class="desc-varieti">
                    <header class="sec-title">
                        <h1>Sobremesas</h1>
                        <p class="tagline">VARIEDADES DE COMIDA</p>
                    </header>
                    <p>
                        Uma das melhores sobremesas da cidade de Brasília, 
                        D'lurdes tem uma ótima sobremesa de acompanhamento
                        para vc se deliciar da nossa culinária.
                    </p>

                    <div class="box-btn-veja">
                        <a href="#" class="btn-veja">
                            Veja Mais
                        </a>
                    </div>

                </div>
            </div>
            <div class="clear"></div>
        </section>



        <!--------------------------------------- SOBREMESA ---------------------------------------->
        <section class="sec-scrumptious container">
            <div class="sec-title">
                <h1>Deliciosas</h1>
                <p class="tagline">RECEITAS DELICIOSAS</p>

                <p>
                    Para fazer sobremesas fáceis, bonitas e saborosas,
                    não é preciso gastar muito tempo na cozinha, nem muito dinheiro.
                    Se receitas práticas, rápidas, baratas e com poucos
                    ingredientes são a sua praia, você está no lugar certo. 
                </p>
            </div>


            <!------------------SLIDER POST SOBREMESA------------------->
            <div class="box-slider-rec">
                <div class="receitas">

                    <div class="jcarousel-wrapper">
                        <div class="box-controlslide">
                            <!-- Prev/next controls -->
                            <a href="#" class="jcarousel-control-next next"><i class="fa fa-long-arrow-left"></i></a>
                            <a href="#" class="jcarousel-control-prev prev"><i class="fa fa-long-arrow-right"></i></a>
                        </div>
                        <!-- Carousel -->
                        <div class="jcarousel">
                            <ul>
                                <?php
                                for ($i = 1; $i <= 8; $i++) {
                                    ?>                                    
                                    <li class="li-desc-rec">                                         
                                        <img src="img/bf-cv.jpg" width="600" height="400" alt="BIFE A CAVALO" title="BIFE A CAVALO"/>
                                        <div class="box-desc-rec">
                                            <div class="sec-title">
                                                <h2>Bife a cavalo</h2>
                                                <p class="txt-rec">
                                                    <!--                                                    Culinária fácil, aprenda a preparar
                                                                                                        pratos básicos da cozinha brasileira-->
                                                    Culinária fácil...
                                                </p>
                                            </div>
                                            <div class="box-btn-rec">
                                                <a href="#" class="btn-rec">
                                                    Veja Mais
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <?php
                                }
                                ?> 
                            </ul>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>                    
            </div>

            <div class="clear"></div>
        </section>
        <!---------------------------------------LISTAGEM DE CARDÁPIO---------------------------------------->
        <section class="sec-pratos container">
            <div class="box-pratos">
                <h1>Especial semanal</h1>
                <p>
                    Nosso cardápio apresenta entradas deliciosas,
                    pratos deliciosos, saborosos acompanhamentos e sobremesas deliciosas.
                    Dê uma olhada nos nossos destaques tentadores da semana.
                </p>
                <img class="thumb-prato" src="img/logo2.png" alt="" style="width: 100px;"/>

                <div class="lista-pratos">
                    <?php
                    for ($i = 1; $i <= 7; $i++) {
                        ?>
                        <article class="box-list-prato">
                            <a class="box-thumb-list"  href="#">                                                 
                                <img src="img/pizza.jpg"  alt="RECOMENDAÇÃO DO CHEFE" title="PIZZA PORTUGUESA "/>

                            </a>
                            <div class="box-desc-prato">
                                <h1><a href="#">RECOMENDAÇÃO DO CHEFE</a></h1>
                                <h2 class="text-title-1"> PIZZA PORTUGUESA <span>Segunda-feira, 01/09/2018</span> <span class="price">R$30.95</span></h2>
                                <p class="text-title-2">
                                    Presunto, ovos cozidos, cebola e azeitonas pretas...
                                </p>
                            </div>                                
                        </article>
                        <?php
                    }
                    ?>
                    <div class="box-lt-receitas">
                        <a class="btn-lt-receitas" href=""> VEJA MAIS</a>
                    </div > 
                </div>
                <div class="clear"></div>
            </div>                
        </section>

        <!-- --------------------------------------------------SECTION GRID PRATOS-------------------------------- -->
        <section class="sec-grid-plates container">            
            <h1 class="font-zero">Recomendações do Chefe</h1>
            <div class="box-grid-pratos">

                <?php
                for ($i = 1; $i <= 8; $i++) {
                    ?>
                    <article class="grid-pratos">

                        <div class="thumb-plates">
                            <img src="img/food-6.jpg" alt="" title="Imagem" />
                        </div>        

                        <div class="camada-color-plates" title="Sanduíche de bacia">                                   
                            <a href="#" class="btn-rec-chef" title="Cardápio da Semana" >Recomendação do Chefe</a>
                            <h1>Sanduíche de bacia<br/> no pão ciabatta</h1>
                            <p>R$ <span> 10,00</span></p>
                        </div>

                    </article>                  
                    <?php
                }
                ?>
                <div class="clear"></div>
            </div>
        </section>            

        <!---------------------------------- SECAO RESERVA ------------------------------------>
        <section class="sec-resevation container">             
            <header class="desc-resevation">                
                <h1>Reserva</h1>
                <p class="tagline">Reserve sua mesa</p>
                <p>                        
                    Olá! Primeiramente seja Bem Vindo,
                    a D'Lurdes agradeçe por sua preferência e para que 
                    sua reserva seja excelente e confortável, pedimos que preencha
                    todo o formulário confirmando os dados do campo abaixo. Entraremos 
                    em contato para confirmar sua reserva, desde já a D'Lurdes deseja uma
                    ótima refeição.
                </p>
            </header>

            <div class="box-form-reservation">
                <form class="form-reservation">
                    <label><i class="fa fa-user-circle-o"></i>
                        <input type="text" class="nome" name="nome" required placeholder="Nome*"/>
                    </label>
                    <label><i class="fa fa-envelope-open"></i>
                        <input type="email" class="email" name="email" placeholder="Email*" required/>
                    </label>
                    <label><i class="fa fa-phone"></i>
                        <input type="tel" class="phone" name="phone" placeholder="Phone*" required/>
                    </label>
                    <label><i class="fa fa-calendar"></i>
                        <input type="date" class="calendar" name="date" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}"/>
                    </label>

                    <label>
                        <i class="fa fa-clock-o"></i>
                        <select>
                            <option>horário de funcionamento</option>
                            <option>11:00 às 14:45</option>
                            <option>18:00 às 23:30</option>                           
                        </select>   
                    </label>


                    <label>
                        <i class="fa fa-users" class="user" ></i>
                        <input type="number" class="qtd" min="0" max="100" placeholder="Qtd de pessoas">                
                    </label>
                    <div class="box-btn-reservation">
                        <input type="submit" class="btn-fz-reserva" name="btnReserva" value="RESERVAR"/>
                    </div>

                </form>
            </div>

            <div class="clear"></div>
        </section>

        <section class="gallery-restaurant container">
            <h1 class="font-zero">Galeria</h1>
            <div class="gallery">
                <div class="jcarousel-wrapper">
                    <div class="box-controlslide">
                        <!-- Prev/next controls -->
                        <a href="#" class="jcarousel-control-next next"><i class="fa fa-long-arrow-left"></i></a>
                        <a href="#" class="jcarousel-control-prev prev"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    <!-- Carousel -->
                    <div class="jcarousel">
                        <ul>
                            <?php
                            for ($i = 1; $i <= 8; $i++) {
                                ?>                                    
                                <li class="li-desc-rec">                                           
                                    <img src="img/restaurant.jpg" alt="Restaurante de D'Lurdes" title="Nosso Restaurante"/>
                                    <div class="">

                                    </div>
                                </li>
                                <?php
                            }
                            ?> 
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
            </div> 
        </section>
    </main>

    <!----------------------------------------------------------------RODAPÉ--------------------------------------------->        
    <footer class="main-footer container">            
        <center>
            <section class="container">
                <div class="content">
                    <h1 class="font-zero">Mais Sobre D'Lurdes</h1>
                    <div class="social-footer">                     
                        <ul>
                            <li><a href="#" title="Facebook" > <i class="fa fa-facebook"></i> </a></li> 
                            <li><a href="#" title="Twitter" ><i class="fa fa-twitter"></i></a></li> 
                            <li><a href="#" title="Tripadvisor" ><i class="fa fa-tripadvisor"></i></a></li> 
                            <li><a href="#" title="Pinterest" ><i class="fa fa-pinterest"></i></a></li> 
                            <li><a href="#" title="Instagram" ><i class="fa fa-instagram"></i></a></li> 
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
                                    <img src="img/logo.png" alt="D'Lurdes" title="D'Lurdes Delícias de Minas, Restaurante Mineiro, Brasília, Guará." width="200px"/>
                                </a>
                            </div>
                        </div>
                    </article>
                    <div class="clear"></div>
                </div>
            </section>
        </center>

        <div class="copy container">
            <p>&copy <?php echo date('Y'); ?> D'Lurdes - Todos os direitos reservados | <a href="#">Quem faz: Inove Publicidade</a></p>
        </div>
    </footer>

    <script src="js/jquery.js"></script>
    <script src="js/jcarousel.skeleton.js"></script>
    <script src="js/jquery.jcarousel.min.js"></script>
    <script src="js/jcarousel.responsive.js"></script>
    <script src="js/slider_show.js"></script>

</body>
</html>