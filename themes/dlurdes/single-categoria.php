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

        <div class="content"> 
            <div class="box-more-menu">
                <article class="art-cardapio txt-cente">
                    <h1 class="space-mb-b">Os melhores pratos só na D'Lurdes</h1>

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
                </article>
            </div>

            <aside class="more-menu">
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
                    <h2>Relacionandos</h2>
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

            <div class="clear"></div>  
        </div>




    </section>

</main>