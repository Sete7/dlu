<div class="thumb-cardapio container">
    <img src="<?= REQUIRE_PATH; ?>/img/fundo-cardapio.jpg" alt=""/>
    <div class="clear"></div>
</div>

<main class="main-cardapio container pd-forxfor">
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
                <?php
                for ($i = 1; $i <= 12; $i++):
                    ?>
                    <div class="thumb-cad">            
                        <a href="#">            
                            <img  class="radios-a" src="<?= REQUIRE_PATH; ?>/img/img-cad-a.jpg" alt=""/>

                            <div class="desc-card box txt-cente font-bolder pd-topxbottom">
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
                    <a href="#" class="btn-black ft-sz-two">Veja Mais</a>
                </div>     
            </div>
              <div class="clear"></div>  
        </article>

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
                for($i=1;$i<=8;$i++):
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
    </section>

</main>
