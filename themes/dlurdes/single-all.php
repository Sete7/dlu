<div class="bg-single-top container">

</div>
<main class="main-single-cardapio container">
    <section class="sec-single-cardapio">
        <h1 class="font-zero">CARDÁPIO PARA O ALMOÇO</h1>
        <article class="art-lunch content">            
            <h1 class="conf-h2 txt-left">Relacionados</h1>
            <div class="relation-lunch box">
                <?php
                for ($i = 1; $i <= 16; $i++):
                    ?>
                    <a href="<?= HOME; ?>/single-categoria" class="a-thumb-lunch" title="Carne de Bife">
                        <div class="thumb-lunch">
                            <img  class="radios-a" src="<?= REQUIRE_PATH; ?>/img/img-cad-a.jpg" alt=""/>
                            <center>
                                <div class="desc-thumb-lunch">
                                    <h1 class="space-mb-a">Carne de Bife</h1>
                                    <button class="btn-lunch">
                                        VEJA MAIS
                                    </button>
                                </div>
                            </center>
                            <h2>Almoço</h2>
                        </div>
                    </a>
                    <?php
                endfor;
                ?>
            </div>
            <div class="clear"></div>
        </article>

        <div class="content space-mb-a">
            <hr class="box">
            <div class="clear"></div>
        </div>
        
        <article class="art-lunch content">            
            <h1 class="conf-h2 txt-left">Relacionados</h1>
            <div class="relation-lunch box">
                <?php
                for ($i = 1; $i <= 6; $i++):
                    ?>
                    <a href="<?= HOME; ?>/single-categoria" class="a-thumb-lunch" title="Carne de Bife">
                        <div class="thumb-lunch">                            
                            <img class="radios-a" src="<?= REQUIRE_PATH; ?>/img/sobremesa.jpg" alt="Uma das melhores sobremesas" title="Uma das melhores sobremesas"/>
                            <center>
                                <div class="desc-thumb-lunch">
                                    <h1 class="space-mb-a">Carne de Bife</h1>
                                    <button class="btn-lunch">
                                        VEJA MAIS
                                    </button>
                                </div>
                            </center>
                            <h2>Sobremesa</h2>
                        </div>
                    </a>
                    <?php
                endfor;
                ?>
            </div>
            <div class="clear"></div>
        </article>
    </section>
</main>
