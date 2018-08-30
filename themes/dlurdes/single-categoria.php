<div class="bg-single-top container">

</div>

<main class="main-cardapio container">
    <section class="sec-cardapio">
        <div class="header-title txt-cente content">
            <h1 class="conf-h1 space-mb-a">Cardápio</h1>
            <p class="tagline cl-rgba-cinza space-bottom-d">
                Cardápio semanal só encontra na D'Lurdes aqui você planeja suas refeições todos os dias.
            </p>
            <div class="clear"></div>
        </div> 

        <article class="art-cardapio container txt-cente">
            <h1 class="space-mb-b">Os melhores pratos só na D'Lurdes</h1>
            <div class="content">   
                <h2 class="txt-left">CARDÁPIO PARA O ALMOÇO</h2>
                <?php
                for ($i = 1; $i <= 8; $i++):
                    ?>
                    <div class="thumb-cad">            
                        <a href="<?= HOME; ?>/single-cardapio">            
                            <img  class="radios-a" src="<?= REQUIRE_PATH; ?>/img/img-cad-a.jpg" alt=""/>

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
                    <a href="#" class="btn-black ft-sz-two">Carregar...</a>
                </div>     
            </div>
            <div class="clear"></div>  
        </article>

        

        

        
    </section>

</main>