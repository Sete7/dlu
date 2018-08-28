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

<main class="main-blog container">
    <section class="sec-blog">
        <div class="header-title txt-cente content">
            <h1 class="conf-h1 space-mb-a">Blog</h1>
            <p class="tagline cl-rgba-cinza space-bottom-d">
                Blog D'Lurdes com as melhores informações e dicas.
            </p>
            <div class="clear"></div>
        </div> 

        <div class="content">
            <?php
            for ($i = 1; $i <= 12; $i++):
                ?>
                <div class="box-thum-blog">
                    <a href="<?= HOME; ?>/single-blog">
                        <div class="thumb-blog">
                            <img src="<?= REQUIRE_PATH; ?>/img/our-staff-image.jpg" alt=""/>
                            <div class="layer-blog" title="Artigo do Blog">
                                <i class="fa fa-camera-retro"></i>
                            </div>
                        </div>   
                    </a>      
                    <div class="desc-thumb-blog">
                        <span><i class="fa fa-clock-o"></i> AGOSTO 27/2018 <a href="#" class="next-coments" title="Comentários"><i class="fa fa-comments"></i></a></span>
                        <h2>Dicas de um boa Alimentação</h2>
                        <p class="space-mb-b">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam semper leo eget sapien ultrices...
                        </p>
                        <a href="<?= HOME; ?>/single-blog" class="next-article" title="Continuar lendo" >Continue lendo <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>

                </div>
                <?php
            endfor;
            ?>
        </div>
    </section>

</main>