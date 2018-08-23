<div class="banner-fundo-quem">
    <img src="<?= REQUIRE_PATH; ?>/img/fundo-quem2.jpg" alt=""/>
</div>

<main class="main-quem container">
    <div class="content">
        <section class="sec-quem-somos">

            <div class="header-title space-mb-e txt-cente">
                <h1 class="conf-h1 space-mb-a">QUEM SOMOS</h1>
                <p class="tagline space-mb-a">
                    Lorem Ipsum é simplesmente uma simulação de texto.
                </p>

                <p class="conf-p">
                    Lorem Ipsum é simplesmente uma simulação de texto da
                    indústria tipográfica e de impressos, e vem sendo utilizado
                    desde o século XVI, quando um impressor desconhecido pegou
                    uma bandeja de tipos e os embaralhou para fazer um livro
                    de modelos de tipos. 
                </p>
            </div>
            <article class="article-about">                
                <img class="space-mb-b" src="<?= REQUIRE_PATH; ?>/img/slide-4.jpg" alt=""/>                
                <h2 class="conf-h2 space-mb-a">
                    O que é Lorem Ipsum?
                </h2>
                <p class="txt-just conf-p space-mb-d">
                    Lorem Ipsum é simplesmente uma simulação de texto da
                    indústria tipográfica e de impressos, e vem sendo utilizado
                    desde o século XVI, quando um impressor desconhecido pegou
                    uma bandeja de tipos e os embaralhou para fazer um livro
                    de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco
                    séculos, como também ao salto para a editoração eletrônica,
                    permanecendo essencialmente inalterado. Se popularizou na
                    década de 60, quando a Letraset lançou decalques contendo
                    passagens de Lorem Ipsum, e mais recentemente quando passou
                    a ser integrado a softwares de editoração eletrônica como
                    Aldus PageMaker. 
                </p>
            </article>
        </section>

        <aside class="sidebar-right">
            <h1 class="font-zero">Tempo, Fundação da Empresa & Crescimento</h1>
            <ul class="list-Founding">

                <?php
                for ($i = 1; $i <= 5; $i++):
                    ?>
                    <li class="space-mb-b">
                        <div>
                            <span class="cl-cinza fw-c">2018</span>                    
                            <h3 class="conf-h3 space-mb">FOUNDING OF COMPANY</h3>                       
                            <p class="conf-p txt-just">
                                I am so happy, my dear friend, so absorbed in the
                                exquisite sense of mere tranquil existence, that I
                                neglect my talents. I should be incapable of drawing
                                a single stroke at the present moment; and yet I feel
                                that I never was a greater artist than now.
                                2011
                            </p>
                        </div>
                    </li>
                    <?php
                endfor;
                ?>
            </ul>
            <div class="clear"></div>
        </aside>

        <section class="sec-user box">
            <div class="header-user txt-cente space-mb-e">
                <h1 class="conf-h1 space-bottom-a"> Meet the Team</h1>
                <p class="conf-p space-bottom-d">When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees.</p>
            </div>

            <div class="box-thum-about box">
                <?php
                for ($i = 1; $i <= 4; $i++):
                    ?>
                    <div class="box_thumb_quem  txt-cente">
                        <div class="thumb-quem">
                            <img src="<?= REQUIRE_PATH; ?>/img/staff-1-770x770.jpg" alt=""/>
                            <div class="social-about">
                                <a href="#"><i class="fa fa-facebook-square"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                            </div>     
                        </div> 

                        <div class="desc-about txt-cente">
                            <h1 class="ft-sz-one-fv fw-c">Manager</h1>
                            <h2 class="ft-sz-one fw-a">JANE DOE</h1>
                                <p class="conf-p">

                                    At solmen va esser necessi far uniform grammatica, pronunciation e plu sommun
                                </p>    
                        </div>    
                    </div>    
                    <?php
                endfor;
                ?>
            </div>    
        </section>
        <div class="clear"></div>
    </div>
</main>
