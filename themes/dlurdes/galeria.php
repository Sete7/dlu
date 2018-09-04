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
            <h1 class="conf-h1 space-mb-a">ASIDE</h1>
        </aside>
    </div>
</main>
