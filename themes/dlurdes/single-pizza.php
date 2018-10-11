<?php
//verificando a url e esta voltando url[0] = single, url[1] = exemplo-do-post
$url = strip_tags(trim(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)));
$url = ($url ? $url : 'index');
$url = explode('/', $url);
$urlCod = $url[1];

$pizza = new Pizza();
$pizzaController = new PizzaController();
$helper = new Helper();
$categoriaController = new CategoriaController();
$listarPizza = $pizzaController->retornaUrlPizza($urlCod);
if ($listarPizza == null):
    echo 'Não existe post cadastrado';

else:
    $cod_pizza = $listarPizza->getCod_pizza();
    $codCategoria = $listarPizza->getCategoria()->getCod();
    $nomeCategoria = $listarPizza->getCategoria()->getTitulo();
    $thumb = $listarPizza->getThumb();
    $titulo = $listarPizza->getTitulo();
    $data = $listarPizza->getData();
    $descricao = html_entity_decode($listarPizza->getDescricao());
    $valor = $listarPizza->getValor();
    ?>
    <div class="bg-single-top container">

    </div>
    <main class="main-single-cardapio container">
        <section class="sec-single-cardapio">
            <h1 class="font-zero">CARDÁPIO PARA ...</h1>
            <article class="art-single-cad content">
                <h1 class="conf-h1 txt-cente space-mb-c"><?= $nomeCategoria; ?></h1>
                <div class="thumb-singlo-cad">
                    <div class="box">
                        <!--<img  id="0"  class="radios-a" src="<?= REQUIRE_PATH; ?>/img/00.jpg" alt=""/>-->
                        <img id="0" src="<?= HOME; ?>/tim.php?src=upload/<?= $thumb; ?>&w=350&h=350&zc=0" alt="<?= $titulo; ?>" title="<?= $titulo; ?>" style="float: left;"/>
                    </div>
                    <div class="box-thumb-on hidder-thumb">
    <!--                        <img  id="1" class="normal" src="<?= REQUIRE_PATH; ?>/img/01.jpg" onclick="preview(this)" width="100px"/>                    
                        <img  id="2" class="normal" src="<?= REQUIRE_PATH; ?>/img/02.jpg" onclick="preview(this)" width="100px"/>
                        <img  id="3" class="normal" src="<?= REQUIRE_PATH; ?>/img/03.jpg" onclick="preview(this)" width="100px"/>
                        <img  id="4" class="normal" src="<?= REQUIRE_PATH; ?>/img/04.jpg" onclick="preview(this)" width="100px"/>
                        <img  id="5" class="normal" src="<?= REQUIRE_PATH; ?>/img/05.jpg" onclick="preview(this)" width="100px"/>
                        <img  id="6" class="normal" src="<?= REQUIRE_PATH; ?>/img/06.jpg" onclick="preview(this)" width="100px"/>-->
                    </div>
                </div>
                <div class="desc-singlo-cad">                                
                    <h2 class="space-mb-a"><?= $titulo; ?></h2>
                    <p class="space-mb-a txt-just">
                        <?= $descricao; ?>
                    </p>
                    <p> <span class="cifrao"> R$ </span> <strong class="ft-sz-three-fv fw-b"><?= $valor; ?></strong></p>
                </div>
                <div class="clear"></div>
            </article>   
        <?php
        endif;
        ?>
        <div class="content space-mb-a">
            <hr class="box">
            <div class="clear"></div>
        </div>

        <article class="art-lunch content">            
            <h1 class="conf-h2 txt-left">Relacionadas</h1>
            <div class="relation-lunch box">
                <?php
                $listPizzaTr = $pizzaController->ListarPizza(0, 6);
                foreach ($listPizzaTr as $listTr):
                    ?>
                    <a href="<?= HOME; ?>/single-pizza/<?= $listTr->getUrl(); ?>" class="a-thumb-lunch" title="Carne de Bife">
                        <div class="thumb-lunch">  
                            <h2 class="tl-single-top"><?= $listTr->getCategoria()->getTitulo(); ?></h2>
                            <img src="<?= HOME; ?>/tim.php?src=upload/<?= $listTr->getThumb(); ?>&w=400&h=400&zc=0" alt="<?= $listTr->getTitulo(); ?>" title="<?= $listTr->getTitulo(); ?>" style="float: left;"/>                                                                    
                            <div class="desc-thumb-lunch">
                                <h3 class="tl-single"><?= $listTr->getTitulo(); ?></h3>                                
                                <p><?= $helper->Words(html_entity_decode($listTr->getDescricao()), 3); ?></p>
                                <button class="btn-lunch">
                                    VEJA MAIS
                                </button>
                            </div>
                        </div>
                    </a>
                    <?php
                endforeach;
                ?>
            </div>
            <div class="clear"></div>
        </article>


    </section>
</main>
