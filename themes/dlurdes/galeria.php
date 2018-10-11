<div class="bg-single-top">

</div>
<main class="main_galeria container">
    <div class="content">
        <section class="sec-galery">
            <div class="header-title space-mb-e txt-cente">
                <h1 class="conf-h1 space-mb-a">GALERIA</h1>
                <p class="tagline space-mb-a">
                    Lorem Ipsum é simplesmente uma simulação de texto.
                </p>
            </div>            
            <div class="box-galery">
                <?php
                for ($i = 1; $i <= 16; $i++):
                    ?>
                    <div class="box-thumb-galery txt-cente">
                        <div class="desc-galery">
                            <h2>Titulo da imagem</h2>
                            <span>04/09/2018</span>
                        </div>
                        <div class="thumb-galery">
                            <img  class="" src="<?= REQUIRE_PATH; ?>/img/img-cad-a.jpg" alt=""/>
                        </div>                        
                    </div>
                    <?php
                endfor;
                ?>
            </div>
        </section>


        <aside class="aside-galery">
            <h1 class="conf-h3 space-mb-a">Ultimas do Site</h1>

            <article class="box-asd-thumb">
                <?php
                for ($i = 1; $i <= 5; $i++):
                    ?>
                    <a class="box-asd-alm" href="#" >
                        <div class="thumb-asd-alm">
                            <img  class="" src="<?= REQUIRE_PATH; ?>/img/img-cad-a.jpg" alt=""/>
                        </div>
                        <div class="desc-asd-alm">
                            <h2>
                                Titulo Almoço
                            </h2>
                            <p>
                                Descricão almoço...
                            </p>
                        </div>
                    </a>
                    <?php
                endfor;
                ?>
            </article>
            <article class="">
                <h1>Social</h1>
                <div class="box-asd-social" >
                    <a href="https://www.facebook.com/dlurdesguara/?ref=page_internal"  target="_blank">
                        <span>
                            <i class="fa fa-facebook-f"></i>                            
                        </span>
                    </a>
                    <a href="https://www.instagram.com/explore/locations/227506531050754/dlurdes-guara/?hl=pt" target="_blank">
                        <span>                        
                            <i class="fa fa-instagram"></i>
                        </span>
                    </a>
                </div>
            </article>
        </aside>
    </div>
</main>
