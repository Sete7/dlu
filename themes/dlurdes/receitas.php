<div class="bg-single-top container">

</div>

<main class="main-blog container">
    <section class="sec-blog">
        <div class="header-title txt-cente content">
            <h1 class="conf-h1 space-mb-a">Receitas</h1>
            <p class="tagline cl-rgba-cinza space-bottom-d">
                Com as nossas receitas você faz a diferença todos os dias.
            </p>
            <div class="clear"></div>
        </div> 

        <div class="content">
            <?php
            for ($i = 1; $i <= 12; $i++):
                ?>
                <div class="box-thum-blog">
                    <a href="<?= HOME; ?>/single-receita">
                        <div class="thumb-blog">                            
                            <img src="<?= REQUIRE_PATH; ?>/img/bf-cv.jpg" alt="BIFE A CAVALO" title="BIFE A CAVALO"/>
                            <div class="layer-blog" title="Artigo do Blog">
                                <i class="fa fa-cutlery"></i>
                            </div>
                        </div>   
                    </a>      
                    <div class="desc-thumb-blog">
                        <span><i class="fa fa-clock-o"></i> AGOSTO 27/2018 <a href="#" class="next-coments" title="Comentários"><i class="fa fa-comments"></i></a></span>
                        <h2>Receita Carne de Bife</h2>
                        <p class="space-mb-b">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam semper leo eget sapien ultrices...
                        </p>
                        <a href="<?= HOME; ?>/single-receita" class="next-article" title="Continuar lendo" >Continue lendo <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>

                </div>
                <?php
            endfor;
            ?>
        </div>
    </section>

</main>