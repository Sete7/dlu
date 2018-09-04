<main class="main_content container">
    <div class="thumb-cardapio">
        <img src="<?= REQUIRE_PATH; ?>/img/fundo-cardapio.jpg" alt=""/>
        <img src="<?= REQUIRE_PATH; ?>/img/" alt=""/>
        <div class="clear"></div>
    </div>
</main>
<main class="container">
    <div class="banner-mobile">         
        <img src="<?= REQUIRE_PATH; ?>/img/banner-mob-card-1.jpg"  class="mobi-700" alt="Banner" title="Cardápio D'Lurdes"/>
        <img src="<?= REQUIRE_PATH; ?>/img/banner-mob-top-320-1.jpg" class="mobi-400"  alt="Banner" title="Cardápio D'Lurdes"/>
        <div class="mirros-color"></div>
    </div>
</main>

<main class="main-cardapio container">
    <section class="sec-cardapio">
        <div class="header-title txt-cente content">
            <h1 class="conf-h1 space-mb-a">Cardápio</h1>
            <p class="tagline cl-rgba-cinza space-bottom-d">
                Cardápio semanal só encontra na D'Lurdes aqui você planeja suas refeições todos os dias.
            </p>
            <div class="clear"></div>
        </div> 

        <div class="content">  
            <div class="box-cardapio">
                <h1 class="font-zero">Os melhores pratos só na D'Lurdes</h1>

                <article class="art-cardapio container txt-cente">
                    <h2 class="txt-left">CARDÁPIO PARA O ALMOÇO</h2>
                    <?php
                    for ($i = 1; $i <= 7; $i++):
                        ?>
                        <div class="thumb-cad">            
                            <a href="<?= HOME; ?>/single-cardapio">            
                                <img  class="radios-a" src="<?= REQUIRE_PATH; ?>/img/img-cad-a.jpg" alt=""/>

                                <div class="desc-card box txt-cente font-bolder pd-topxbottom">
                                    <span>Segunda-feira, <?= date("d/m/Y, H:s"); ?> </span>
                                    <h2 class="ft-sz-one-fv fw-c">Prato Tradicional</h2>
                                    <p class="ft-sz-one fw-a">Carne de Bife</p>
                                    <p class="ft-sz-one-fv">
                                        <span> R$ </span> 12.00
                                    </p> 
                                </div>
                            </a>
                        </div>  
                        <?php
                    endfor;
                    ?>
                    <div class="box-btn-black">
                        <a href="<?= HOME; ?>/single-categoria" class="btn-black ft-sz-two">Veja Mais</a>
                    </div>
                </article>

                <article class="art-cardapio container txt-cente"> 
                    <h2 class="txt-left">CARDÁPIO PARA O JANTAR</h2>
                    <?php
                    for ($i = 1; $i <= 7; $i++):
                        ?>
                        <div class="thumb-cad">            
                            <a href="<?= HOME; ?>/single-cardapio"> 
                                <img  class="radios-a"  src="<?= REQUIRE_PATH; ?>/img/food-6.jpg" alt="" title="Imagem" />
                                <div class="desc-card box txt-cente font-bolder pd-topxbottom">
                                    <span>Segunda-feira, <?= date("d/m/Y, H:s"); ?></span>
                                    <h2 class="ft-sz-one-fv fw-c">Prato Tradicional</h2>
                                    <p class="ft-sz-one fw-a">Carne de Bife</p>
                                    <p class="ft-sz-one-fv">
                                        <span> R$ </span> 12.00
                                    </p> 
                                </div>
                            </a>
                        </div>  
                        <?php
                    endfor;
                    ?>
                    <div class="box-btn-black">
                        <a href="<?= HOME; ?>/single-categoria" class="btn-black ft-sz-two">Veja Mais</a>
                    </div> 
                </article>

                <article class="art-cardapio container txt-cente"> 
                    <h2 class="txt-left">RODÍZIO DE PIZZA</h2>
                    <?php
                    for ($i = 1; $i <= 8; $i++):
                        ?>
                        <div class="thumb-cad">            
                            <a href="<?= HOME; ?>/single-cardapio">            
                                <img  class="radios-a" src="<?= REQUIRE_PATH; ?>/img/pizza.jpg"  alt="RECOMENDAÇÃO DO CHEFE" title="PIZZA PORTUGUESA "/>

                                <div class="desc-card box txt-cente font-bolder pd-topxbottom">
                                    <span><?= date("d/m/Y, H:s"); ?></span>
                                    <h2 class="ft-sz-one-fv fw-c">Prato Tradicional</h2>
                                    <p class="ft-sz-one fw-a">Carne de Bife</p>
                                    <p class="ft-sz-one-fv">
                                        <span> R$ </span> 12.00
                                    </p> 
                                </div>
                            </a>
                        </div>  
                        <?php
                    endfor;
                    ?>
                    <div class="box-btn-black">
                        <a href="<?= HOME; ?>/single-categoria" class="btn-black ft-sz-two">Veja Mais</a>
                    </div> 
                </article>
                <div class="clear"></div>
            </div> 

            <aside class="aside-cad">
                <div class="box-search space-mb-b">
                    <form class="form-search">
                        <input type="search" name="search" placeholder="Search Site">
                        <button class="btnSingleSearch"> 
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>

                <div class="box-news-single space-mb-b">
                    <h2>Receba Novidades</h2>
                    <form class="form-news-single" method="POST">
                        <input type="email" class="mail" name="email" placeholder="Email"/>
                        <input type="submit" class="btn-news-sg" value="Enviar">
                    </form>
                </div>

                <div class="box-thumb-sg">
                    <h2>Relacionados</h2>
                    <?php
                    for ($i = 1; $i <= 5; $i++):
                        ?>
                        <div class="thumb-sg space-mb">
                            <a href="#" class="thumb-sg-img" >
                                <img  class="" src="<?= REQUIRE_PATH; ?>/img/img-cad-a.jpg" alt=""/>
                            </a>
                            <div class="desc-sg">
                                <h3><a href="#" >PRATOS TÍPICOS DA CULINÁRIA MINEIRA</a></h3>
                            </div>
                        </div>
                        <?php
                    endfor;
                    ?>
                </div>
            </aside>
            
        </div>
        
    
        
        <article class="our-services container">
            <div class="header-title txt-cente space-mb-d">
                <h1 class="conf-h1">Outros Serviços</h1>
                <p class="tagline">RELIABLE</p>
                <p class="text-title-1">
                    A wonderful serenity has taken possession of my entire soul,
                    like these sweet mornings of spring which I enjoy with my whole heart.
                </p>
            </div>

            <div class="box-our-services content">
                <?php
                for ($i = 1; $i <= 8; $i++):
                    ?>
                    <div class="box-our-serv">
                        <div class="thumb-icon-serv">
                            <i>
                                <img src="<?= REQUIRE_PATH; ?>/img/wine-glass.png" alt=""/>
                            </i>
                        </div>     
                        <div class="desc-our-serv txt-cente pd-topxbottom">
                            <h2 class="space-mb">JANTAR</h2>
                            <p class="txt-just space-mb-d">
                                Integer posuere erat a ante venenatis dapibus
                                posuere velit aliquet. Cras mattis consectetur purus sit amet fermentum.                            
                            </p>
                            <a href="#">Leia mais <i class="fa fa-arrow-circle-o-right"></i></a>
                        </div>
                    </div>
                    <?php
                endfor;
                ?>
                <div class="clear"></div>
            </div>
        </article>

        <!-------------------------------------PACKAGES OF THE DAY ------------------------------------->    
        <article class="packages container">
            <div class="content">
                <div class="header-title txt-cente">
                    <h1 class="conf-h1 space-mb-a">PRATOS DA SEMANA</h1>
                    <p class="tagline">
                        Our photography packages provide hours of coverage,
                        capturing all the essential elements of your event
                        professionally & creatively.
                    </p>
                </div>
                <div class="card-plates">
                    <div class="box-card-plates box txt-cente">
                        <div class="box-plates">
                            <div class="box-pizza cl-branca">
                                <h2 class="fw-a"> RODIZIO DE PIZZA</h2>
                                <p>  <sup class="ft-sz-zr-nine"> R$</sup> <strong class="ft-sz-three-fv fw-b">50,00</strong> </p>
                                <p class="ft-sz-zr-nine">ATÉ A 00:00 Horas</p>
                            </div>
                            <div class="box-desc-plates">
                                <h3>Pizzaria</h3>
                                <p class="space-mb-c">
                                    Aqui você participa e degusta
                                    da melhor pizza de Brasília a
                                    semana toda.
                                </p>
                                <a href="<?= HOME; ?>/single-categoria" class="btn-black">VEJA MAIS</a>
                            </div>
                        </div>

                        <div class="box-plates">
                            <div class="box-lunch cl-branca">
                                <h2 class="fw-a"> ALMOÇO</h2>
                                <p>  <sup class="ft-sz-zr-nine"> R$</sup> <strong class="ft-sz-three-fv fw-b">50,00</strong> </p>
                                <p class="ft-sz-zr-nine">ATÉ A 00:00 Horas</p>
                            </div>
                            <div class="box-desc-plates ft-sz-one">
                                <h3>Almoço</h3>
                                <p class="space-mb-c">
                                    Integer posuere erat a ante venenatis
                                    dapibus posuere velit aliquet. Cras mattis
                                    consectetur purus sit amet fermentum.
                                </p>
                                <a href="<?= HOME; ?>/single-categoria" class="btn-black">VEJA MAIS</a>
                            </div>
                        </div>

                        <div class="box-plates">
                            <div class="box-dine cl-branca">
                                <h2 class="fw-a"> JANTAR</h2>
                                <p>  <sup class="ft-sz-zr-nine"> R$</sup> <strong class="ft-sz-three-fv fw-b">50,00</strong> </p>
                                <p class="ft-sz-zr-nine">ATÉ A 00:00 Horas</p>
                            </div>
                            <div class="box-desc-plates">
                                <h3>JANTAR</h3>
                                <p class="space-mb-c">
                                    Integer posuere erat a ante venenatis
                                    dapibus posuere velit aliquet. Cras mattis
                                    consectetur purus sit amet fermentum.
                                </p>
                                <a href="<?= HOME; ?>/single-categoria" class="btn-black">VEJA MAIS</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </article>
    </section>
</main>
