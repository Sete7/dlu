<?php
$receita = new Receita();
$receitaController = new ReceitaController();
$helper = new Helper();

$listarReceita = $receitaController->ListarReceita(0, 20);
?>
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
            foreach ($listarReceita as $lstReceita) :
                ?>
                <div class="box-thum-blog">
                    <a href="<?= HOME; ?>/single-receita">
                        <div class="thumb-blog">  
                            <img src="<?= HOME; ?>/tim.php?src=upload/<?= $lstReceita->getThumb(); ?>&w=600&h=400&zc=0" alt="<?= $lstReceita->getTitulo(); ?>" title="<?= $lstReceita->getTitulo(); ?>" style="float: left;"/>
                            <div class="layer-blog" title="Artigo do Blog">
                                <i class="fa fa-cutlery"></i>
                            </div>
                        </div>   
                    </a>      
                    <div class="desc-thumb-blog">
                        <span><i class="fa fa-clock-o"></i> <?= $helper->converteData($lstReceita->getData()); ?> <a href="#" class="next-coments" title="Comentários"><i class="fa fa-comments"></i></a></span>
                        <h2><?= $lstReceita->getTitulo(); ?></h2>
                        <p class="space-mb-b">
                            <?= $helper->Words(html_entity_decode($lstReceita->getDescricao()), 3); ?>
                        </p>
                        <a href="<?= HOME; ?>/single-receita" class="next-article" title="Continuar lendo" >Continue lendo <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>

                </div>
                <?php
            endforeach;
            ?>
        </div>
    </section>

</main>