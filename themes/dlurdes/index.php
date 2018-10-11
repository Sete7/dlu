<?php
$receitaControler = new ReceitaController();
$pizzaController = new PizzaController();
$sliderController = new SliderController();
$helper = new Helper();
?>
<!--------------------------------- SLIDE SITE -------------------------------->
<main class="main_content container">

    <section class="slider">
        <h1 class="font-zero">Últimas do site:</h1>
        <div class="slider_controll">
            <div class="slide_nav back"><i class="fa fa-chevron-left"></i></div>
            <div class="slide_nav go"><i class="fa fa-chevron-right"></i></div>
        </div>            
        <?php
        $controle_active = 2;
        $tamMobile = "g";
        $sliderMobile = $sliderController->ListarTamanhoSlider($tamMobile);
        foreach ($sliderMobile as $sli):
            if ($controle_active == 2):
                ?>
                <article class="slider_item first">
                    <h1 class="font-zero">Banner</h1>
                    <a href="#"  title="" class="box-slider">
                        <picture alt="Restaurante Mineiro D'Lurdes">
                            <source media="(min-width: 1280px)" srcset="tim.php?src=uploads/01.jpg&w=1366&h=400" />
                        </picture> 
                        <img src="<?= HOME; ?>/upload/<?= $sli->getSlider_thumb(); ?>" alt="Banner" title="Restaurante Mineiro D'Lurdes" style="float: left;"/>                 

                    </a>
                </article>
                <?php
                $controle_active = 1;
            else:
                ?>
                <article class="slider_item">
                    <h1 class="font-zero">Banner</h1>
                    <a href="#"  title="" class="box-slider">
                        <picture alt="">
                            <!--<source media="(min-width:1600px)" srcset="tim.php?src=uploads/01.jpg&w=200&h=600">-->
                        </picture>    
                        <img src="<?= HOME; ?>/upload/<?= $sli->getSlider_thumb(); ?>" alt="Banner" title="" style="float: left;"/>                
                    </a>
                </article>
            <?php
            endif;
        endforeach;
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
<main class="container">
    <?php
    $controle_active = 2;
    $tamMobile = "p";
    $sliderMobile = $sliderController->ListarTamanhoSlider($tamMobile);
    foreach ($sliderMobile as $sli):
        if ($controle_active == 2):
            ?>
            <div class="banner-mobile">         
                <img src="<?= REQUIRE_PATH; ?>/img/banner-mob-to-p-a.jpg"  class="mobi-700" alt="Banner" title="Rodizio D'Lurdes"/>
                <img src="<?= HOME; ?>/upload/<?= $sli->getSlider_thumb(); ?>" class="mobi-400"  alt="Banner" title="Rodizio D'Lurdes"/>              
                <div class="mirros-color"></div>
            </div>
            <?php
        endif;
    endforeach;
    ?>        
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
                    <div class="box-controlslide control-one">
                        <!-- Prev/next controls -->
                        <a href="#" class="jcarousel-control-next next next-one"><i class="fa fa-long-arrow-left"></i></a>
                        <a href="#" class="jcarousel-control-prev prev prev-one"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    <!-- Carousel -->
                    <div class="jcarousel">
                        <ul> 
                            <li><img src="<?= REQUIRE_PATH; ?>/img/bf-cv.jpg"  alt="Pratos Típicos" title="Pratos Típicos"/></li>
                            <li><img src="<?= REQUIRE_PATH; ?>/img/pastas.jpg" alt="Pratos Típicos" title="Pratos Típicos"/></li>
                            <li><img src="<?= REQUIRE_PATH; ?>/img/bf-cv.jpg" alt="Pratos Típicos" title="Pratos Típicos"/></li>
                            <li><img src="<?= REQUIRE_PATH; ?>/img/galinhada.jpg" alt="Pratos Típicos" title="Pratos Típicos"/></li>
                            <li><img src="<?= REQUIRE_PATH; ?>/img/bf-cv.jpg" alt="Pratos Típicos" title="Pratos Típicos"/></li>
                            <li><img src="<?= REQUIRE_PATH; ?>/img/galinhada.jpg" alt="Pratos Típicos" title="Pratos Típicos"/></li>
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
                <a href="<?= HOME; ?>/quem-somos" class="btn-reservar-two" >SAIBA MAIS</a>
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
                <!-------------REDIRECIONA PARA GERAL SOBREMESA --------------->
                <a href="<?= HOME; ?>/single-categoria" class="btn-white">
                    Veja Mais
                </a>
            </div>
        </div>
        <div class="box-thumb">
            <img src="<?= REQUIRE_PATH; ?>/img/our-staff-image.jpg" alt=""/>
        </div>
        <div class="clear"></div>
    </section>
    <!---------------------------------------VARIEDADES---------------------------------------->
    <section class="sec-varieti container">          
        <div class="box-varieti">
            <div class="thumb-two">
                <img src="<?= REQUIRE_PATH; ?>/img/photocard-2.jpg" alt="Uma das melhores sobremesas" title="Uma das melhores sobremesas"/>
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
                    <!------------------------------ REDIRECIONA PARA SINGLE CATEGORIA ------------------>
                    <a href="<?= HOME; ?>/single-categoria" class="btn-veja">
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
                    <div class="box-controlslide control-two">
                        <!-- Prev/next controls -->
                        <a href="#" class="jcarousel-control-next next"><i class="fa fa-long-arrow-left"></i></a>
                        <a href="#" class="jcarousel-control-prev prev"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    <!-- Carousel -->
                    <div class="jcarousel">
                        <ul>
                            <?php
                            $listarReceita = $receitaControler->ListarReceita(0, 6);
                            foreach ($listarReceita as $lstReceita):
                            ?>                                    
                            <li class="li-desc-rec"> 
                                <img src="<?= HOME; ?>/tim.php?src=upload/<?= $lstReceita->getThumb(); ?>&w=300&h=200&zc=0" alt="<?= $lstReceita->getTitulo(); ?>" title="<?= $lstReceita->getTitulo(); ?>" style="float: left;"/>                 
                                <div class="box-desc-rec">
                                    <div class="sec-title">
                                        <h2><?php echo  $helper->Words(html_entity_decode($lstReceita->getTitulo()),3); ?></h2>
                                        
                                        
                                        <p class="txt-rec">
                                            <!--                                                    Culinária fácil, aprenda a preparar
                                                                                                pratos básicos da cozinha brasileira-->
                                            Culinária fácil...
                                        </p>
                                    </div>
                                    <div class="box-btn-rec">
                                        <a href="<?= HOME; ?>/receitas" class="btn-rec">
                                            Veja Mais
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <?php
                            endforeach;
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
            <img class="thumb-prato" src="<?= REQUIRE_PATH; ?>/img/logo2.png" alt="" style="width: 100px;"/>

            <div class="lista-pratos">
                <?php
                $listarPizza = $pizzaController->ListarPizza(0, 4);
                foreach ($listarPizza as $listPz):
                    ?>
                    <article class="box-list-prato">
                        <a class="box-thumb-list"  href="<?= HOME; ?>/single-pizza/<?= $listPz->getUrl(); ?>">                                                 
                            <img src="<?= HOME; ?>/tim.php?src=upload/<?= $listPz->getThumb(); ?>&w=400&h=400&zc=0" alt="<?= $listPz->getTitulo(); ?>" title="<?= $listPz->getTitulo(); ?>" style="float: left;"/>                 

                        </a>
                        <div class="box-desc-prato">
                            <h1><a href="<?= HOME; ?>/single-pizza/<?= $listPz->getUrl(); ?>">RECOMENDAÇÃO DO CHEFE</a></h1>
                            <h2 class="text-title-1"> <?= $listPz->getTitulo(); ?><span class="price"><?= $listPz->getValor(); ?></span></h2>
                            <p class="text-title-2">
                               <?= $helper->Words(html_entity_decode($listPz->getDescricao()), 4); ?>
                            </p>
                        </div>                                
                    </article>
                    <?php
                    endforeach;
                ?>
                <div class="box-lt-receitas">
                    <a class="btn-lt-receitas" href="<?= HOME; ?>/all-pizzas"> MENU PIZZA</a>
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
                        <img src="<?= REQUIRE_PATH; ?>/img/food-6.jpg" alt="" title="Imagem" />
                    </div>        

                    <div class="camada-color-plates" title="Sanduíche de bacia">                                   
                        <a href="<?= HOME; ?>/cardapio" class="btn-rec-chef" title="Cardápio da Semana" >Recomendação do Chefe</a>
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
        <?php
            require_once 'page/slyder-restaurante.php';
        ?> 
    </section>
</main>