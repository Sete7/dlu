<?php
$categoria = new CategoriaController();
$pizzaController = new PizzaController();
$helper = new Helper();
?>
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
                    <h2 class="txt-left">TRADICIONAIS</h2>                   
                    <?php
                    $listarPizza = $pizzaController->listarPizzaCat(3, 0, 12);
                    foreach ($listarPizza as $list):
                        ?>                      
                        <div class="thumb-cad">            
                            <strong>Publ.:<?= $helper->converteData($list->getData()); ?></strong>  
                            <a  href="<?= HOME; ?>/single-pizza/<?= $list->getUrl(); ?>">                                                                 
                                <img src="<?= HOME; ?>/tim.php?src=upload/<?= $list->getThumb(); ?>&w=350&h=350&zc=0" alt="<?= $list->getTitulo(); ?>" title="<?= $list->getTitulo(); ?>" style="float: left;"/>
                                <div class="desc-card box txt-cente font-bolder pd-topxbottom">                                    
                                    <h2 class="ft-sz-one-fv fw-c"><?= $list->getTitulo(); ?></h2>
                                    <p class="ft-sz-one fw-a"><?= $helper->Words(html_entity_decode($list->getDescricao()), 2); ?></p>
                                    <p class="ft-sz-one-fv">
                                        <span> R$ </span> <?= $list->getValor(); ?>
                                    </p> 
                                </div>
                            </a>
                        </div>
                        <?php
                    endforeach;
                    ?>

                    <div class="box-btn-black">
                        <a href="<?= HOME; ?>/single-all" class="btn-black ft-sz-two">Veja Mais...</a>
                    </div>
                </article>

                <hr> 

                <article class="art-cardapio txt-cente">                                 
                    <h2 class="txt-left">ESPECIAIS</h2>                   
                    <?php
                    $listarPizza = $pizzaController->listarPizzaCat(6, 0, 12);
                    foreach ($listarPizza as $list):
                        ?>                      
                        <div class="thumb-cad">            
                            <strong>Publ.:<?= $helper->converteData($list->getData()); ?></strong>  
                            <a  href="<?= HOME; ?>/single-pizza/<?= $list->getUrl(); ?>">                                                              
                                <img src="<?= HOME; ?>/tim.php?src=upload/<?= $list->getThumb(); ?>&w=350&h=350&zc=0" alt="<?= $list->getTitulo(); ?>" title="<?= $list->getTitulo(); ?>" style="float: left;"/>
                                <div class="desc-card box txt-cente font-bolder pd-topxbottom">                                    
                                    <h2 class="ft-sz-one-fv fw-c"><?= $list->getTitulo(); ?></h2>
                                    <p class="ft-sz-one fw-a"><?= $helper->Words(html_entity_decode($list->getDescricao()), 2); ?></p>
                                    <p class="ft-sz-one-fv">
                                        <span> R$ </span>  <?= $list->getValor(); ?>
                                    </p> 
                                </div>
                            </a>
                        </div>  
                        <?php
                    endforeach;
                    ?>
                    <div class="box-btn-black">
                        <a href="<?= HOME; ?>/single-all" class="btn-black ft-sz-two">Veja Mais...</a>
                    </div>
                </article>

                <hr> 

                <article class="art-cardapio txt-cente">                                 
                    <h2 class="txt-left">EXCLUSIVAS</h2>                   
                    <?php
                    $listarPizza = $pizzaController->listarPizzaCat(2, 0, 12);
                    foreach ($listarPizza as $list):
                        ?>                      
                        <div class="thumb-cad">            
                            <strong>Publ.:<?= $helper->converteData($list->getData()); ?></strong>  
                            <a  href="<?= HOME; ?>/single-pizza/<?= $list->getUrl(); ?>">                                                                
                                <img src="<?= HOME; ?>/tim.php?src=upload/<?= $list->getThumb(); ?>&w=350&h=350&zc=0" alt="<?= $list->getTitulo(); ?>" title="<?= $list->getTitulo(); ?>" style="float: left;"/>
                                <div class="desc-card box txt-cente font-bolder pd-topxbottom">                                    
                                    <h2 class="ft-sz-one-fv fw-c"><?= $list->getTitulo(); ?></h2>
                                    <p class="ft-sz-one fw-a"><?= $helper->Words(html_entity_decode($list->getDescricao()), 2); ?></p>
                                    <p class="ft-sz-one-fv">
                                        <span> R$ </span> <?= $list->getValor(); ?>
                                    </p> 
                                </div>
                            </a>
                        </div>  
                        <?php
                    endforeach;
                    ?>
                    <div class="box-btn-black">
                        <a href="<?= HOME; ?>/single-all" class="btn-black ft-sz-two">Veja Mais...</a>
                    </div>
                </article>
            </div>
            <!--=================================================================================ASIDE ==========================================================-->
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
                    $listPzSidebar = $pizzaController->ListarPizza(0, 7);
                    foreach ($listPzSidebar as $lisAside):
                        ?>
                        <div class="thumb-sg space-mb">
                            <a href="<?= HOME; ?>/single-pizza/<?= $lisAside->getUrl(); ?>" class="thumb-sg-img" >
                                <img src="<?= HOME; ?>/tim.php?src=upload/<?= $lisAside->getThumb(); ?>&w=350&h=350&zc=0" alt="<?= $lisAside->getTitulo(); ?>" title="<?= $lisAside->getTitulo(); ?>" style="float: left;"/>
                            </a>
                            <div class="desc-sg">
                                <h3><a href="#" ><?= $lisAside->getTitulo(); ?></a></h3>
                                <p class="ft-sz-one fw-a"><?= $helper->Words(html_entity_decode($lisAside->getDescricao()), 1); ?></p>
                            </div>
                        </div>
                        <?php
                    endforeach;
                    ?>
                </div>
            </aside>

            <div class="clear"></div>  
        </div>




    </section>

</main>