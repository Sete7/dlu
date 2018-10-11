<div class="bg-single-top container">

</div>
<main class="main-single-cardapio container">
    <section class="sec-single-cardapio">
        <h1 class="font-zero">CARDÁPIO PARA O ALMOÇO</h1>
        <article class="art-single-cad content">
            <h1 class="conf-h1 txt-cente space-mb-c">Carne de Bife</h1>
            <div class="thumb-singlo-cad">
                <div class="box">
                    <img  id="0"  class="radios-a" src="<?= REQUIRE_PATH; ?>/img/00.jpg" alt=""/>
                </div>
                <div class="box-thumb-on hidder-thumb">
                    <img  id="1" class="normal" src="<?= REQUIRE_PATH; ?>/img/01.jpg" onclick="preview(this)" width="100px"/>                    
                    <img  id="2" class="normal" src="<?= REQUIRE_PATH; ?>/img/02.jpg" onclick="preview(this)" width="100px"/>
                    <img  id="3" class="normal" src="<?= REQUIRE_PATH; ?>/img/03.jpg" onclick="preview(this)" width="100px"/>
                    <img  id="4" class="normal" src="<?= REQUIRE_PATH; ?>/img/04.jpg" onclick="preview(this)" width="100px"/>
                    <img  id="5" class="normal" src="<?= REQUIRE_PATH; ?>/img/05.jpg" onclick="preview(this)" width="100px"/>
                    <img  id="6" class="normal" src="<?= REQUIRE_PATH; ?>/img/06.jpg" onclick="preview(this)" width="100px"/>
                </div>
            </div>
            <div class="desc-singlo-cad">                                
                <h2 class="space-mb-a">Lorem Ipsum é simplesmente</h2>
                <p class="space-mb-a txt-just">
                    É um fato conhecido de todos que um leitor se distrairá com o conteúdo
                    de texto legível de uma página quando estiver examinando sua diagramação.
                    A vantagem de usar Lorem Ipsum é que ele tem uma distribuição normal de letras.
                </p>
                <p> <span class="cifrao"> R$ </span> <strong class="ft-sz-three-fv fw-b">12.00</strong></p>
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
                            <img  class="radios-a" src="<?= REQUIRE_PATH; ?>/img/img-cad-a.jpg" alt=""/>                                                     
                            <div class="desc-thumb-lunch">
                                <h1 class="space-mb-a">Carne de Bife</h1>
                                <button class="btn-lunch">
                                    VEJA MAIS
                                </button>
                            </div>
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
            <h1 class="conf-h2 txt-left">Sobremesas</h1>
            <div class="relation-lunch box">
                <?php
                for ($i = 1; $i <= 6; $i++):
                    ?>
                    <a href="<?= HOME; ?>/single-categoria" class="a-thumb-lunch" title="Carne de Bife">
                        <div class="thumb-lunch">                            
                            <img class="radios-a" src="<?= REQUIRE_PATH; ?>/img/sobremesa.jpg" alt="Uma das melhores sobremesas" title="Uma das melhores sobremesas"/>
                            <div class="desc-thumb-lunch">
                                <h1 class="space-mb-a">Carne de Bife</h1>
                                <button class="btn-lunch">
                                    VEJA MAIS
                                </button>
                            </div>
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
