<!DOCTYPE html>
<html lang="pt-BR">
<?php
include('layouts/head.php');
include('layouts/header.php');
?>

<body id="lesson-body">
    <?php include('layouts/others/librasFile.php') ?>
    <div id="all-content">
        <?php
        include('layouts/menu.php');
        ?>
        <main id="main-content" class="audio">
            <!-- Adicionando o conteudo -->
            <div id="caixa_recomendacoes">
                <div class="bubble" id="bubble1"></div>
                <div class="bubble" id="bubble2"></div>
                <h2>Para uma melhor <br> experiência: </h2>
                <ul style="list-style-type:disc;">
                    <li>Deixe o celular no silencioso</li>
                    <li>Ponha os fones de ouvido</li>
                    <li>Feche a porta do quarto</li>
                    <li>Tire as distrações de perto</li>
                    <img src="img/tela_recomendacoes.svg" alt="" id="pessoa_lendo">
                </ul>
            </div>

            <h1 id="subtopico1-1" class="subtopico">01 - Interação Humano-Computador</h1>

                    <p class="lost_text">In vitae feugiat odio. a id <a href="referencias.php#hardware"><strong id="origin_hardware">Hardware</strong></a> diam. Donec
                        gravida,
                        nibh
                        facilisis dapibus bibendum, justo
                        justo euismod nisl, vitae dignissim nibh odio at erat. Vestibulum felis arcu, ullamcorper in
                        tincidunt
                        ut, sodales in dui. Proin semper eu libero at placerat. Donec dictum ex vitae lectus
                        imperdiet,
                        et
                        pellentesque neque pharetra. Nam pretium, mi vitae egestas tempor, ex neque molestie leo,
                        quis
                        faucibus
                        elit odio sit amet nisi. Donec id augue lacus. Suspendisse nec mi a ante lacinia fermentum.
                        Suspendisse
                        tristique ultricies rutrum. Ut vitae dignissim augue. Nullam vel enim ac felis euismod
                        aliquet.
                        Praesent
                        aliquet ut nisi eget tincidunt. Sed eu blandit orci.</p>
                    <div class="two_figures">
                        <div class="first_figure" onclick="openModal('img/Figura02.png', 'BARBOSA, SILVA, 2010')">
                            <p class="titulo_figura">(I) De dentro para fora</p>
                            <img src="img/Figura02.png" alt="">
                            <p class="barbosa_text"><strong>Fonte: </strong>"BARBOSA; SILVA, 2010"</p>
                        </div>
                        <div class="first_figure" onclick="openModal('img/Figura1 (2).png', 'BARBOSA, SILVA, 2010')">
                            <p class="titulo_figura">(II) De fora para dentro</p>
                            <img src="img/Figura1 (2).png" alt="">
                            <p class="barbosa_text"><strong>Fonte: </strong>"BARBOSA; SILVA, 2010"</p>
                        </div>
                    </div>

                    <div id="modal" class="modal" onclick="closeModal()">
                        <span class="close">&times;</span>
                        <img class="modal-content" id="modalImage">
                        <div id="caption"></div>
                    </div>

                    <p class="lost_text">In vitae feugiat odio. Fusce id vulputate diam. Donec gravida, nibh facilisis dapibus
                        bibendum,
                        justo
                        justo euismod nisl, vitae dignissim nibh odio at erat. Vestibulum felis arcu, ullamcorper in
                        tincidunt
                        ut, sodales in dui. Proin semper eu libero at placerat. Donec dictum ex vitae lectus
                        imperdiet,
                        et
                        pellentesque neque pharetra. Nam pretium, mi vitae egestas tempor, ex neque molestie leo,
                        quis
                        faucibus
                        elit odio sit amet nisi. Donec id augue lacus. Suspendisse nec mi a ante lacinia fermentum.
                        Suspendisse
                        tristique ultricies rutrum. Ut vitae dignissim augue. Nullam vel enim ac felis euismod
                        aliquet.
                        Praesent
                        aliquet ut nisi eget tincidunt. Sed eu blandit orci.</p>


                    <p>In vitae feugiat odio. Fusce id vulputate diam. Donec gravida, nibh facilisis dapibus
                        bibendum,
                        justo
                        justo euismod nisl, vitae dignissim nibh odio at erat. Vestibulum felis arcu, ullamcorper in
                        tincidunt
                        ut, sodales in dui. Proin semper eu libero at placerat. Donec dictum ex vitae lectus
                        imperdiet,
                        et
                        pellentesque neque pharetra. Nam pretium, mi vitae egestas tempor, ex neque molestie leo,
                        quis
                        faucibus
                        elit odio sit amet nisi. Donec id augue lacus. Suspendisse nec mi a ante lacinia fermentum.
                        Suspendisse
                        tristique ultricies rutrum. Ut vitae dignissim augue. Nullam vel enim ac felis euismod
                        aliquet.
                        Praesent
                        aliquet ut nisi eget tincidunt. Sed eu blandit orci.</p>

                    <p class="lost_text">In vitae feugiat odio. Fusce id vulputate diam. Donec gravida, nibh facilisis dapibus
                        bibendum,
                        justo
                        justo euismod nisl, vitae dignissim nibh odio at erat. Vestibulum felis arcu, ullamcorper in
                        tincidunt
                        ut, sodales in dui. Proin semper eu libero at placerat. Donec dictum ex vitae lectus
                        imperdiet,
                        et
                        pellentesque neque pharetra. Nam pretium, mi vitae egestas tempor, ex neque molestie leo,
                        quis
                        faucibus
                        elit odio sit amet nisi. Donec id augue lacus. Suspendisse nec mi a ante lacinia fermentum.
                        Suspendisse
                        tristique ultricies rutrum. Ut vitae dignissim augue. Nullam vel enim ac felis euismod
                        aliquet.
                        Praesent
                        aliquet ut nisi eget tincidunt. Sed eu blandit orci.</p>

                    <div id="curiosity">
                <div class="box">
                    <div>
                        <h4>Curiosidade</h4>
                        <img src="img/search.png" alt="">
                    </div>
                    <p> 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Fusce ullamcorper in lacus. Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Fusce ullamcorper in lacus Fusce ullamcorper in lacus Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>
            </div>
                    <p>In vitae feugiat odio. Fusce id vulputate diam. Donec gravida, nibh facilisis dapibus
                        bibendum,
                        justo
                        justo euismod nisl, vitae dignissim nibh odio at erat. Vestibulum felis arcu, ullamcorper in
                        tincidunt
                        ut, sodales in dui. Proin semper eu libero at placerat. Donec dictum ex vitae lectus
                        imperdiet,
                        et
                        pellentesque neque pharetra. Nam pretium, mi vitae egestas tempor, ex neque molestie leo,
                        quis
                        faucibus
                        elit odio sit amet nisi. Donec id augue lacus. Suspendisse nec mi a ante lacinia fermentum.
                        Suspendisse
                        tristique ultricies rutrum. Ut vitae dignissim augue. Nullam vel enim ac felis euismod
                        aliquet.
                        Praesent
                        aliquet ut nisi eget tincidunt. Sed eu blandit orci.</p>

                        <div class="apresentacao">
                            
    <div class="text_center" onclick="openModal('img/figura03.png', 'BARBOSA, SILVA, 2010')">
        <p>
    <strong>Figura3: </strong>Principais Conceitos de IHC
    </p>
        <img src="img/figura03.png" alt="" class="avaliation_design">
        <p class="barbosa_text">
            <strong>Fonte: </strong>"BARBOSA; SILVA, 2010"
        </p>
    </div>
</div>

<div id="modal" class="modal" onclick="closeModal()">
    <span class="close">&times;</span>
    <img class="modal-content" id="modalImage">
    <div id="caption"></div>
</div>

                    <p class="lost_text">In vitae feugiat odio. Fusce id vulputate diam. Donec gravida, nibh facilisis dapibus
                        bibendum,
                        justo
                        justo euismod nisl, vitae dignissim nibh odio at erat. Vestibulum felis arcu, ullamcorper in
                        tincidunt
                        ut, sodales in dui. Proin semper eu libero at placerat. Donec dictum ex vitae lectus
                        imperdiet,
                        et
                        pellentesque neque pharetra. Nam pretium, mi vitae egestas tempor, ex neque molestie leo,
                        quis
                        faucibus
                        elit odio sit amet nisi. Donec id augue lacus. Suspendisse nec mi a ante lacinia fermentum.
                        Suspendisse
                        tristique ultricies rutrum. Ut vitae dignissim augue. Nullam vel enim ac felis euismod
                        aliquet.
                        Praesent
                        aliquet ut nisi eget tincidunt. Sed eu blandit orci.</p>

                    <p>In vitae feugiat odio. Fusce id vulputate diam. Donec gravida, nibh facilisis dapibus
                        bibendum,
                        justo
                        justo euismod nisl, vitae dignissim nibh odio at erat. Vestibulum felis arcu, ullamcorper in
                        tincidunt
                        ut, sodales in dui. Proin semper eu libero at placerat. Donec dictum ex vitae lectus
                        imperdiet,
                        et
                        pellentesque neque pharetra. Nam pretium, mi vitae egestas tempor, ex neque molestie leo,
                        quis
                        faucibus
                        elit odio sit amet nisi. Donec id augue lacus. Suspendisse nec mi a ante lacinia fermentum.
                        Suspendisse
                        tristique ultricies rutrum. Ut vitae dignissim augue. Nullam vel enim ac felis euismod
                        aliquet.
                        Praesent
                        aliquet ut nisi eget tincidunt. Sed eu blandit orci.</p>
                    <div class="great_interactive">
                        <div class="row">
                            <div class="texto_interactive">Primeiro modelo de texto</div>
                            <div class="texto_interactive">Primeiro modelo de texto</div>
                            <div class="texto_interactive">Primeiro modelo de texto</div>
                        </div>
                        <div class="row2">
                            <div class="texto_interactive2">Primeiro modelo de texto</div>
                            <div class="texto_interactive2">Primeiro modelo de texto</div>
                        </div>
                    </div>
                    <p class="lost_text">In vitae feugiat odio. Fusce id vulputate diam. Donec gravida, nibh facilisis dapibus
                        bibendum, justotttt
                        justo euismod nisl, vitae dignissim nibh odio at erat. Vestibulum felis arcu, ullamcorper in
                        tincidunt
                        ut, sodales in dui. Proin semper eu libero at placerat. Donec dictum ex vitae lectus
                        imperdiet, et
                        pellentesque neque pharetra. Nam pretium, mi vitae egestas tempor, ex neque molestie leo,
                        quis faucibus
                        elit odio sit amet nisi. Donec id augue lacus. Suspendisse nec mi a ante lacinia fermentum.
                        Suspendisse
                        tristique ultricies rutrum. Ut vitae dignissim augue. Nullam vel enim ac felis euismod
                        aliquet. Praesent
                        aliquet ut nisi eget tincidunt. Sed eu blandit orci.</p>

                        <div class="image4" onclick="openModal('img/Figura04.png', 'Autor')">
    <p><strong>Figura 04:</strong> Abordagens de desenvolvimento</p>
    <img src="img/Figura04.png" alt="" class="imagem_4">
    <p><strong>Fonte:</strong> Autor</p>
</div>

<div id="modal" class="modal" onclick="closeModal()">
    <span class="close">&times;</span>
    <img class="modal-content" id="modalImage">
    <div id="caption"></div>
</div>
                    <p class="lost_text">In vitae feugiat odio. Fusce id <a href="referencias.php#software"><strong id="software_origin">vulputate</strong></a> diam. Donec gravida, nibh facilisis dapibus
                        bibendum, justo
                        justo euismod nisl, vitae dignissim nibh odio at erat. Vestibulum felis arcu, ullamcorper in
                        tincidunt
                        ut, sodales in dui. Proin semper eu libero at placerat. Donec dictum ex vitae lectus
                        imperdiet, et
                        pellentesque neque pharetra. Nam pretium, mi vitae egestas tempor, ex neque molestie leo,
                        quis faucibus
                        elit odio sit amet nisi. Donec id augue lacus. Suspendisse nec mi a ante lacinia fermentum.
                        Suspendisse
                        tristique ultricies rutrum. Ut vitae dignissim augue. Nullam vel enim ac felis euismod
                        aliquet. Praesent
                        aliquet ut nisi eget tincidunt. Sed eu blandit orci.</p>
<!-- Caixa de vídeo -->
<div id="video">
                <div class="box">
                    <h4>Aprendendo assistindo...</h4>
                    <div id="video_link">
                        <iframe width="360" height="215" src="https://www.youtube.com/embed/LuZUJRDpDu0?si=gmYsgE2IT5rjTIum"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <div id="description">
                        <h3>Interação Humano Computador (IHC)</h3>
                        <p>Em resumo, a Interação Humano-Computador é um campo vasto e dinâmico, moldando a forma como nos relacionamos com a tecnologia. Se você gostou do assunto, clica no vídeo para entender melhor sobre o assunto.</p>
                        <a href="https://youtu.be/NuvN03WzCB4" target="_blank">Assista no YouTube</a>
                    </div>
                </div>

                    <p class="lost_text">In vitae feugiat odio. Fusce id vulputate diam. Donec gravida, nibh facilisis dapibus
                        bibendum, justo
                        justo euismod nisl, vitae dignissim nibh odio at erat. Vestibulum felis arcu, ullamcorper in
                        tincidunt
                        ut, sodales in dui. Proin semper eu libero at placerat. Donec dictum ex vitae lectus
                        imperdiet, et
                        pellentesque neque pharetra. Nam pretium, mi vitae egestas tempor, ex neque molestie leo,
                        quis faucibus
                        elit odio sit amet nisi. Donec id augue lacus. Suspendisse nec mi a ante lacinia fermentum.
                        Suspendisse
                        tristique ultricies rutrum. Ut vitae dignissim augue. Nullam vel enim ac felis euismod
                        aliquet. Praesent
                        aliquet ut nisi eget tincidunt. Sed eu blandit orci.</p>
                    <div class="natural_interatiion">
                        <h3 class="subtopico" id="subtopico1-2">01.2 - Natureza da Interação</h3>
                        <p class="lost_text">In vitae feugiat odio. Fusce id vulputate diam. Donec gravida, nibh facilisis dapibus
                            bibendum, justo
                            justo euismod nisl, vitae dignissim nibh odio at erat. Vestibulum felis arcu,
                            ullamcorper in
                            tincidunt
                            ut, sodales in dui. Proin semper eu libero at placerat. Donec dictum ex vitae lectus
                            imperdiet, et
                            pellentesque neque pharetra. Nam pretium, mi vitae egestas tempor, ex neque molestie
                            leo, quis
                            faucibus
                            elit odio sit amet nisi. Donec id augue lacus. Suspendisse nec mi a ante lacinia
                            fermentum.
                            Suspendisse
                            tristique ultricies rutrum. Ut vitae dignissim augue. Nullam vel enim ac felis euismod
                            aliquet.
                            Praesent
                            aliquet ut nisi eget tincidunt. Sed eu blandit orci.</p>
                            <div id="curiosity">
                <div class="box">
                    <div>
                        <h4>Curiosidade</h4>
                        <img src="img/search.png" alt="">
                    </div>
                    <p class="lost_text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Fusce ullamcorper in lacus. Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Fusce ullamcorper in lacus Fusce ullamcorper in lacus Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
,=======
            <h1 class="interation subtopico" id="subtopico1-1">01 - Interação Humano-Computador</h1>

            <p class="lost_text">In vitae feugiat odio. a id <strong id="origin_hardware">Hardware</strong> diam. Donec
                gravida,
                nibh
                facilisis dapibus bibendum, justo
                justo euismod nisl, vitae dignissim nibh odio at erat. Vestibulum felis arcu, ullamcorper in
                tincidunt
                ut, sodales in dui. Proin semper eu libero at placerat. Donec dictum ex vitae lectus
                imperdiet,
                et
                pellentesque neque pharetra. Nam pretium, mi vitae egestas tempor, ex neque molestie leo,
                quis
                faucibus
                elit odio sit amet nisi. Donec id augue lacus. Suspendisse nec mi a ante lacinia fermentum.
                Suspendisse
                tristique ultricies rutrum. Ut vitae dignissim augue. Nullam vel enim ac felis euismod
                aliquet.
                Praesent
                aliquet ut nisi eget tincidunt. Sed eu blandit orci.</p>
            <div class="two_figures">
                <div class="first_figure" onclick="openModal('img/Figura02.png', 'BARBOSA, SILVA, 2010')">
                    <p class="titulo_figura">(I) De dentro para fora</p>
                    <img class="modal-img" src="img/Figura02.png" alt="">
                    <p class="barbosa_text"><strong>Fonte: </strong>"BARBOSA; SILVA, 2010"</p>
                </div>
                <div class="first_figure" onclick="openModal('img/Figura1 (2).png', 'BARBOSA, SILVA, 2010')">
                    <p class="titulo_figura">(II) De fora para dentro</p>
                    <img class="modal-img" src="img/Figura1 (2).png" alt="">
                    <p class="barbosa_text"><strong>Fonte: </strong>"BARBOSA; SILVA, 2010"</p>
                </div>
            </div>

            <div id="modal" class="modal" onclick="closeModal()">
                <span class="close">&times;</span>
                <img class="modal-content" id="modalImage">
                <div id="caption"></div>
            </div>

            <p class="lost_text">In vitae feugiat odio. Fusce id vulputate diam. Donec gravida, nibh facilisis dapibus
                bibendum,
                justo
                justo euismod nisl, vitae dignissim nibh odio at erat. Vestibulum felis arcu, ullamcorper in
                tincidunt
                ut, sodales in dui. Proin semper eu libero at placerat. Donec dictum ex vitae lectus
                imperdiet,
                et
                pellentesque neque pharetra. Nam pretium, mi vitae egestas tempor, ex neque molestie leo,
                quis
                faucibus
                elit odio sit amet nisi. Donec id augue lacus. Suspendisse nec mi a ante lacinia fermentum.
                Suspendisse
                tristique ultricies rutrum. Ut vitae dignissim augue. Nullam vel enim ac felis euismod
                aliquet.
                Praesent
                aliquet ut nisi eget tincidunt. Sed eu blandit orci.</p>


            <p>In vitae feugiat odio. Fusce id vulputate diam. Donec gravida, nibh facilisis dapibus
                bibendum,
                justo
                justo euismod nisl, vitae dignissim nibh odio at erat. Vestibulum felis arcu, ullamcorper in
                tincidunt
                ut, sodales in dui. Proin semper eu libero at placerat. Donec dictum ex vitae lectus
                imperdiet,
                et
                pellentesque neque pharetra. Nam pretium, mi vitae egestas tempor, ex neque molestie leo,
                quis
                faucibus
                elit odio sit amet nisi. Donec id augue lacus. Suspendisse nec mi a ante lacinia fermentum.
                Suspendisse
                tristique ultricies rutrum. Ut vitae dignissim augue. Nullam vel enim ac felis euismod
                aliquet.
                Praesent
                aliquet ut nisi eget tincidunt. Sed eu blandit orci.</p>

            <p class="lost_text">In vitae feugiat odio. Fusce id vulputate diam. Donec gravida, nibh facilisis dapibus
                bibendum,
                justo
                justo euismod nisl, vitae dignissim nibh odio at erat. Vestibulum felis arcu, ullamcorper in
                tincidunt
                ut, sodales in dui. Proin semper eu libero at placerat. Donec dictum ex vitae lectus
                imperdiet,
                et
                pellentesque neque pharetra. Nam pretium, mi vitae egestas tempor, ex neque molestie leo,
                quis
                faucibus
                elit odio sit amet nisi. Donec id augue lacus. Suspendisse nec mi a ante lacinia fermentum.
                Suspendisse
                tristique ultricies rutrum. Ut vitae dignissim augue. Nullam vel enim ac felis euismod
                aliquet.
                Praesent
                aliquet ut nisi eget tincidunt. Sed eu blandit orci.</p>

            <div id="curiosity">
                <div class="box">
                    <div>
                        <h4>Curiosidade</h4>
                        <img src="img/search.png" alt="">
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Fusce ullamcorper in lacus. Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Fusce ullamcorper in lacus Fusce ullamcorper in lacus Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>
            </div>
            <p>In vitae feugiat odio. Fusce id vulputate diam. Donec gravida, nibh facilisis dapibus
                bibendum,
                justo
                justo euismod nisl, vitae dignissim nibh odio at erat. Vestibulum felis arcu, ullamcorper in
                tincidunt
                ut, sodales in dui. Proin semper eu libero at placerat. Donec dictum ex vitae lectus
                imperdiet,
                et
                pellentesque neque pharetra. Nam pretium, mi vitae egestas tempor, ex neque molestie leo,
                quis
                faucibus
                elit odio sit amet nisi. Donec id augue lacus. Suspendisse nec mi a ante lacinia fermentum.
                Suspendisse
                tristique ultricies rutrum. Ut vitae dignissim augue. Nullam vel enim ac felis euismod
                aliquet.
                Praesent
                aliquet ut nisi eget tincidunt. Sed eu blandit orci.</p>

            <div class="apresentacao">

                <div class=" text_center" onclick="openModal('img/Figura03.png', 'BARBOSA, SILVA, 2010')">
                    <p>
                        <strong>Figura3: </strong>Principais Conceitos de IHC
                    </p>
                    <img class="modal-img" src="img/Figura03.png" alt="" class="avaliation_design">
                    <p class="barbosa_text">
                        <strong>Fonte: </strong>"BARBOSA; SILVA, 2010"
                    </p>
                </div>
            </div>

            <div id="modal" class="modal" onclick="closeModal()">
                <span class="close">&times;</span>
                <img class="modal-content" id="modalImage">
                <div id="caption"></div>
            </div>

            <p class="lost_text">In vitae feugiat odio. Fusce id vulputate diam. Donec gravida, nibh facilisis dapibus
                bibendum,
                justo
                justo euismod nisl, vitae dignissim nibh odio at erat. Vestibulum felis arcu, ullamcorper in
                tincidunt
                ut, sodales in dui. Proin semper eu libero at placerat. Donec dictum ex vitae lectus
                imperdiet,
                et
                pellentesque neque pharetra. Nam pretium, mi vitae egestas tempor, ex neque molestie leo,
                quis
                faucibus
                elit odio sit amet nisi. Donec id augue lacus. Suspendisse nec mi a ante lacinia fermentum.
                Suspendisse
                tristique ultricies rutrum. Ut vitae dignissim augue. Nullam vel enim ac felis euismod
                aliquet.
                Praesent
                aliquet ut nisi eget tincidunt. Sed eu blandit orci.</p>

            <p>In vitae feugiat odio. Fusce id vulputate diam. Donec gravida, nibh facilisis dapibus
                bibendum,
                justo
                justo euismod nisl, vitae dignissim nibh odio at erat. Vestibulum felis arcu, ullamcorper in
                tincidunt
                ut, sodales in dui. Proin semper eu libero at placerat. Donec dictum ex vitae lectus
                imperdiet,
                et
                pellentesque neque pharetra. Nam pretium, mi vitae egestas tempor, ex neque molestie leo,
                quis
                faucibus
                elit odio sit amet nisi. Donec id augue lacus. Suspendisse nec mi a ante lacinia fermentum.
                Suspendisse
                tristique ultricies rutrum. Ut vitae dignissim augue. Nullam vel enim ac felis euismod
                aliquet.
                Praesent
                aliquet ut nisi eget tincidunt. Sed eu blandit orci.</p>
            <div class="great_interactive">
                <div class="row">
                    <div class="texto_interactive">Primeiro modelo de texto</div>
                    <div class="texto_interactive">Primeiro modelo de texto</div>
                    <div class="texto_interactive">Primeiro modelo de texto</div>
                </div>
                <div class="row2">
                    <div class="texto_interactive2">Primeiro modelo de texto</div>
                    <div class="texto_interactive2">Primeiro modelo de texto</div>
                </div>
            </div>
            <p class="lost_text">In vitae feugiat odio. Fusce id vulputate diam. Donec gravida, nibh facilisis dapibus
                bibendum, justotttt
                justo euismod nisl, vitae dignissim nibh odio at erat. Vestibulum felis arcu, ullamcorper in
                tincidunt
                ut, sodales in dui. Proin semper eu libero at placerat. Donec dictum ex vitae lectus
                imperdiet, et
                pellentesque neque pharetra. Nam pretium, mi vitae egestas tempor, ex neque molestie leo,
                quis faucibus
                elit odio sit amet nisi. Donec id augue lacus. Suspendisse nec mi a ante lacinia fermentum.
                Suspendisse
                tristique ultricies rutrum. Ut vitae dignissim augue. Nullam vel enim ac felis euismod
                aliquet. Praesent
                aliquet ut nisi eget tincidunt. Sed eu blandit orci.</p>

            <div class="image4" onclick="openModal('img/Figura04.png', 'Autor')">
                <p><strong>Figura 04:</strong> Abordagens de desenvolvimento</p>
                <img class="modal-img" src="img/Figura04.png" alt="" class="imagem_4">
                <p><strong>Fonte:</strong> Autor</p>
            </div>

            <div id="modal" class="modal" onclick="closeModal()">
                <span class="close">&times;</span>
                <img class=" modal-content" id="modalImage">
                <div id="caption"></div>
            </div>
            <p class="lost_text">In vitae feugiat odio. Fusce id vulputate diam. Donec gravida, nibh facilisis dapibus
                bibendum, justo
                justo euismod nisl, vitae dignissim nibh odio at erat. Vestibulum felis arcu, ullamcorper in
                tincidunt
                ut, sodales in dui. Proin semper eu libero at placerat. Donec dictum ex vitae lectus
                imperdiet, et
                pellentesque neque pharetra. Nam pretium, mi vitae egestas tempor, ex neque molestie leo,
                quis faucibus
                elit odio sit amet nisi. Donec id augue lacus. Suspendisse nec mi a ante lacinia fermentum.
                Suspendisse
                tristique ultricies rutrum. Ut vitae dignissim augue. Nullam vel enim ac felis euismod
                aliquet. Praesent
                aliquet ut nisi eget tincidunt. Sed eu blandit orci.</p>
            <!-- Caixa de vídeo -->
            <div id="video">
                <div class="box">
                    <h4>Aprendendo assistindo...</h4>
                    <div id="video_link">
                        <iframe width="360" height="215" src="https://www.youtube.com/embed/LuZUJRDpDu0?si=gmYsgE2IT5rjTIum"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <div id="description">
                        <h3>Interação Humano Computador (IHC)</h3>
                        <p>Em resumo, a Interação Humano-Computador é um campo vasto e dinâmico, moldando a forma como nos relacionamos com a tecnologia. Se você gostou do assunto, clica no vídeo para entender melhor sobre o assunto.</p>
                        <a href="https://youtu.be/NuvN03WzCB4" target="_blank">Assista no YouTube</a>
                    </div>
                    <div class="scroll-container" id="scroll-container">
                        <div id="section1" class="section">
                            <p id="pp">Olá pessoal no vídeo de hoje vamos falar um pouco sobre esse tema que trata da interface que temos entre máquinas e computadores a interação humano computador e IHC Foca no lado humano da interação com sistemas computacionais para que nós tenhamos a melhor experiência possível ao nos comunicar com máquinas um conceito fundamental no desenvolvimento de HC a usabilidade que diz respeito a todas as características que permitem ao usuário interagir com o computador com satisfação deve ser levada em consideração primeiramente a opinião do usuário além das opiniões dos outros profissionais envolvidos no desenvolvimento do sistema de software
                                é baseada tanto no conhecimento da máquina quanto no lado humano a relação entre esses componentes é extremamente relevante já que os computadores têm utilizações quais infinitas existem inúmeras possibilidades de diálogo entre usuários e computadores o principal objetivo da área da ih ser desenvolver sistemas e interfaces intuitivos eficientes e fáceis de usar o foco é proporcionar uma experiência agradável e satisfatória para usuária em que ela consegue realizar sua tarefa de forma eficiente sem frustrações por isso a ihc está se tornando cada vez mais relevante para garantir a usabilidade e satisfação da pessoa usuária em diversas áreas
                                como saúde educação entretenimento e trabalho até meados dos anos 70 a maioria dos escritórios funcionava a base de arquivos de metal máquinas de escrever e muitos muitos papéis os computadores eram enormes e ficavam trancados em salas graças a Steve Jobs estive Osnir que isso logo mudaria estive osnier que estava aperfeiçoando o Apple primeiro para lançar o que finalmente seria o primeiro computador pessoal de sucesso que abriu o caminho para todas as máquinas que viriam depois o célebre é por segunda em 1980 a primeira onda nessa década que os computadores tiveram sua grande evolução em 1981
                                A IBM lançou seu primeiro computador pessoal a Apple em 83 lança delícia o primeiro computador comercial com uma interface gráfica de usuário Gui Infelizmente o Lisa não teve sucesso um ano depois a Apple mostraria uma kintoshi ele foi considerado o primeiro computador com uma interface gráfica acessível e possuía monitor teclado e mouse com botão com acrescente influência da internet nos anos 90 a segunda onda começa a direcionar o campo de interação para além dos modelos mentais como resultados à sociologia antropologia e a psicologia para estudar os componentes sociais das interações entre usuários e computadores ainda
                                nos anos 90 tivemos um grande Marco a gigante Google fundada no ano de 1998 mudaria para sempre a forma como produzimos e consumimos de computação e nos vimos obrigados a refletir sobre o papel da tecnologia em nossas vidas no geral interação humano computadora é o estudo projeto e implementação de software para ser usado diretamente com usuários esse sistema são chamados de interface do usuário e o e através dela que um humano irá interagir com o computador mas apesar de ser um ponto crítico a interface do usuário não é a única abrangência da HC ela também
                                se concentra nas funcionalidades dos computadores e também em Quais aspectos da vida humana os dispositivos têm influência a interação é multidisciplinar pois trata-se de uma relação entre acessibilidade as máquinas sofisticadas e seus usuários potenciais podendo ser trabalhada nas mais diversas áreas e com pessoas de níveis sociais econômicos intelectuais e culturais distintos por meio do processo ação interpretação aborda o desenvolvimento da tecnologia digital apresentando seus benefícios sociais e destacando preocupações com relação à exclusão digital Este trabalho apresenta a interação humano computador por meio de definições objetivos história evolução justificativas e tendências o nosso grupo agradece a
                                sua atenção um abraço e muito obrigado até mais.</p>
                        </div>
                    </div>
                </div>

                <p class="lost_text">In vitae feugiat odio. Fusce id vulputate diam. Donec gravida, nibh facilisis dapibus
                    bibendum, justo
                    justo euismod nisl, vitae dignissim nibh odio at erat. Vestibulum felis arcu, ullamcorper in
                    tincidunt
                    ut, sodales in dui. Proin semper eu libero at placerat. Donec dictum ex vitae lectus
                    imperdiet, et
                    pellentesque neque pharetra. Nam pretium, mi vitae egestas tempor, ex neque molestie leo,
                    quis faucibus
                    elit odio sit amet nisi. Donec id augue lacus. Suspendisse nec mi a ante lacinia fermentum.
                    Suspendisse
                    tristique ultricies rutrum. Ut vitae dignissim augue. Nullam vel enim ac felis euismod
                    aliquet. Praesent
                    aliquet ut nisi eget tincidunt. Sed eu blandit orci.</p>
                <div class="natural_interatiion">
                    <h3 class="subtopico" id="subtopico1-2">01.2 - Natureza da Interação</h3>
                    <p class="lost_text">In vitae feugiat odio. Fusce id vulputate diam. Donec gravida, nibh facilisis dapibus
                        bibendum, justo
                        justo euismod nisl, vitae dignissim nibh odio at erat. Vestibulum felis arcu,
                        ullamcorper in
                        tincidunt
                        ut, sodales in dui. Proin semper eu libero at placerat. Donec dictum ex vitae lectus
                        imperdiet, et
                        pellentesque neque pharetra. Nam pretium, mi vitae egestas tempor, ex neque molestie
                        leo, quis
                        faucibus
                        elit odio sit amet nisi. Donec id augue lacus. Suspendisse nec mi a ante lacinia
                        fermentum.
                        Suspendisse
                        tristique ultricies rutrum. Ut vitae dignissim augue. Nullam vel enim ac felis euismod
                        aliquet.
                        Praesent
                        aliquet ut nisi eget tincidunt. Sed eu blandit orci.</p>
                    <div id="curiosity">
                        <div class="box">
                            <div>
                                <h4>Curiosidade</h4>
                                <img src="img/search.png" alt="">
                            </div>
                            <p class="lost_text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Fusce ullamcorper in lacus. Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Fusce ullamcorper in lacus Fusce ullamcorper in lacus Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                        </div>
                    </div>

                    <p class="lost_text">In vitae feugiat odio. Fusce id vulputate diam. Donec gravida, nibh facilisis dapibus
                        bibendum, justo
                        justo euismod nisl, vitae dignissim nibh odio at erat. Vestibulum felis arcu,
                        ullamcorper in
                        tincidunt
                        ut, sodales in dui. Proin semper eu libero at placerat. Donec dictum ex vitae lectus
                        imperdiet, et
                        pellentesque neque pharetra. Nam pretium, mi vitae egestas tempor, ex neque molestie
                        leo, quis
                        faucibus
                        elit odio sit amet nisi. Donec id augue lacus. Suspendisse nec mi a ante lacinia
                        fermentum.
                        Suspendisse
                        tristique ultricies rutrum. Ut vitae dignissim augue. Nullam vel enim ac felis euismod
                        aliquet.
                        Praesent
                        aliquet ut nisi eget tincidunt. Sed eu blandit orci.</p>

                        <div id="curiosity">
                <div class="box">
                    <div>
                        <h4>Curiosidade</h4>
                        <img src="img/search.png" alt="">
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Fusce ullamcorper in lacus. Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Fusce ullamcorper in lacus Fusce ullamcorper in lacus Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>
            </div>
                    <p class="lost_text">In vitae feugiat odio. Fusce id vulputate diam. Donec gravida, nibh facilisis dapibus
                        bibendum, justo
                        justo euismod nisl, vitae dignissim nibh odio at erat. Vestibulum felis arcu,
                        ullamcorper in
                        tincidunt
                        ut, sodales in dui. Proin semper eu libero at placerat. Donec dictum ex vitae lectus
                        imperdiet, et
                        pellentesque neque pharetra. Nam pretium, mi vitae egestas tempor, ex neque molestie
                        leo, quis
                        faucibus
                        elit odio sit amet nisi. Donec id augue lacus. Suspendisse nec mi a ante lacinia
                        fermentum.
                        Suspendisse
                        tristique ultricies rutrum. Ut vitae dignissim augue. Nullam vel enim ac felis euismod
                        aliquet.
                        Praesent
                        aliquet ut nisi eget tincidunt. Sed eu blandit orci.</p>
                    <div class="image5" onclick="openModal('img/Figura05.png', 'UNESCO')">
                        <p><strong>Figura 05:</strong> Documento da Unesco</p>
                        <img src="img/Figura05.png" alt="" class="modal-img">
                        <p><strong>Fonte:</strong> UNESCO</p>
                    </div>

                    <div id="modal" class="modal" onclick="closeModal()">
                        <span class="close">&times;</span>
                        <img class=" modal-content" id="modalImage">
                        <div id="caption"></div>
                    </div>
                    <p class="lost_text">In vitae feugiat odio. Fusce id vulputate diam. Donec gravida, nibh facilisis dapibus
                        bibendum, justo
                        justo euismod nisl, vitae dignissim nibh odio at erat. Vestibulum felis arcu,
                        ullamcorper in
                        tincidunt
                        ut, sodales in dui. Proin semper eu libero at placerat. Donec dictum ex vitae lectus
                        imperdiet, et
                        pellentesque neque pharetra. Nam pretium, mi vitae egestas tempor, ex neque molestie
                        leo, quis
                        faucibus
                        elit odio sit amet nisi. Donec id augue lacus. Suspendisse nec mi a ante lacinia
                        fermentum.
                        Suspendisse
                        tristique ultricies rutrum. Ut vitae dignissim augue. Nullam vel enim ac felis euismod
                        aliquet.
                        Praesent
                        aliquet ut nisi eget tincidunt. Sed eu blandit orci.</p>
                    <div class="image6" onclick="openModal('img/Figura06.png', 'VEJA, SP, 2017')">
                        <p><strong>Figura 06:</strong> Documento da Unesco</p>
                        <img src="img/Figura06.png" alt="" class="modal-img">
                        <p><strong>Fonte:</strong> VEJA, SP, 2017</p>
                    </div>

                    <div id="modal" class="modal" onclick="closeModal()">
                        <span class="close">&times;</span>
                        <img class="modal-content " id="modalImage">
                        <div id="caption"></div>
                    </div>

                    <p class="lost_text">In vitae feugiat odio. Fusce id vulputate diam. Donec gravida, nibh facilisis dapibus
                        bibendum, justo
                        justo euismod nisl, vitae dignissim nibh odio at erat. Vestibulum felis arcu,
                        ullamcorper in
                        tincidunt
                        ut, sodales in dui. Proin semper eu libero at placerat. Donec dictum ex vitae lectus
                        imperdiet, et
                        pellentesque neque pharetra. Nam pretium, mi vitae egestas tempor, ex neque molestie
                        leo, quis
                        faucibus
                        elit odio sit amet nisi. Donec id augue lacus. Suspendisse nec mi a ante lacinia
                        fermentum.
                        Suspendisse
                        tristique ultricies rutrum. Ut vitae dignissim augue. Nullam vel enim ac felis euismod
                        aliquet.
                        Praesent
                        aliquet ut nisi eget tincidunt. Sed eu blandit orci.</p>
                    <div class="context_use">
                        <h3 class="subtopico" id="subtopico1-3">01.3- Contexto de Uso</h3>
                        <p class="lost_text">In vitae feugiat odio. Fusce id vulputate diam. Donec gravida, nibh facilisis dapibus
                            bibendum, justo
                            justo euismod nisl, vitae dignissim nibh odio at erat. Vestibulum felis arcu,
                            ullamcorper in
                            tincidunt
                            ut, sodales in dui. Proin semper eu libero at placerat. Donec dictum ex vitae lectus
                            imperdiet, et
                            pellentesque neque pharetra. Nam pretium, mi vitae egestas tempor, ex neque molestie
                            leo, quis
                            faucibus
                            elit odio sit amet nisi. Donec id augue lacus. Suspendisse nec mi a ante lacinia
                            fermentum.
                            Suspendisse
                            tristique ultricies rutrum. Ut vitae dignissim augue. Nullam vel enim ac felis euismod
                            aliquet.
                            Praesent
                            aliquet ut nisi eget tincidunt. Sed eu blandit orci.</p>
                        <div class="double_images">
                            <div class="double_one" onclick="openModal('img/Figura07.png', 'Contexto de Uso')">
                                <p>Figura 07: Contexto de Uso</p>
                                <img src="img/Figura07.png" alt="" class="modal-img">
                            </div>
                            <div class="double_two" onclick="openModal('img/Figura07-1.png', 'Contexto de Uso')">
                                <p>Figura 07.1: Contexto de Uso</p>
                                <img src="img/Figura07-1.png" alt="" class="modal-img">
                            </div>
                        </div>

                        <div id="modal" class="modal" onclick="closeModal()">
                            <span class="close">&times;</span>
                            <img class="modal-content" id="modalImage">
                            <div id="caption"></div>
                        </div>
                        <p class="lost_text">In vitae feugiat odio. Fusce id vulputate diam. Donec gravida, nibh facilisis dapibus
                            bibendum, justo
                            justo euismod nisl, vitae dignissim nibh odio at erat. Vestibulum felis arcu,
                            ullamcorper in
                            tincidunt
                            ut, sodales in dui. Proin semper eu libero at placerat. Donec dictum ex vitae lectus
                            imperdiet, et
                            pellentesque neque pharetra. Nam pretium, mi vitae egestas tempor, ex neque molestie
                            leo, quis
                            faucibus
                            elit odio sit amet nisi. Donec id augue lacus. Suspendisse nec mi a ante lacinia
                            fermentum.
                            Suspendisse
                            tristique ultricies rutrum. Ut vitae dignissim augue. Nullam vel enim ac felis euismod
                            aliquet.
                            Praesent
                            aliquet ut nisi eget tincidunt. Sed eu blandit orci.</p>

                    </div>
                    <div class="process_desenvolviment" id="subtopico1.7">
                        <h3 class="subtopico" id="subtopico1-6">01.6 - Processo de Desenvolvimento</h3>
                        <div class="trius_images">
                            <div class="tri_one" onclick="openModal('img/Figura08.png', 'Contexto de Uso')">
                                <p>Figura 08: Contexto de Uso</p>
                                <img src="img/Figura08.png" alt="" class="modal-img">
                            </div>
                            <div class="tri_two" onclick="openModal('img/Figura08-1.png', 'Contexto de Uso')">
                                <p>Figura 08.1: Contexto de Uso</p>
                                <img src="img/Figura08-1.png" alt="" class="modal-img">
                            </div>
                            <div class="tri_three" onclick="openModal('img/Figura08-2.png', 'Contexto de Uso')">
                                <p>Figura 08.2: Contexto de Uso</p>
                                <img src="img/Figura08-2.png" alt="" class="modal-img">
                            </div>
                        </div>

                        <div id="modal" class="modal" onclick="closeModal()">
                            <span class="close">&times;</span>
                            <img class="modal-content" id="modalImage">
                            <div id="caption"></div>
                        </div>

                        <p class="lost_text"></p>In vitae feugiat odio. Fusce id vulputate diam. Donec gravida, nibh facilisis dapibus
                        bibendum, justo
                        justo euismod nisl, vitae dignissim nibh odio at erat. Vestibulum felis arcu,
                        ullamcorper in
                        tincidunt
                        ut, sodales in dui. Proin semper eu libero at placerat. Donec dictum ex vitae lectus
                        imperdiet, et
                        pellentesque neque pharetra. Nam pretium, mi vitae egestas tempor, ex neque molestie
                        leo, quis
                        faucibus
                        elit odio sit amet nisi. Donec id augue lacus. Suspendisse nec mi a ante lacinia
                        fermentum.
                        Suspendisse
                        tristique ultricies rutrum. Ut vitae dignissim augue. Nullam vel enim ac felis euismod
                        aliquet.
                        Praesent
                        aliquet ut nisi eget tincidunt. Sed eu blandit orci.</p>
                        <div class="human_caracteristic">
                            <h3 class="subtopico" id="subtopico1-4">01.4 - Características Humanas</h3>
                            <p class="lost_text">>In vitae feugiat odio. Fusce id vulputate diam. Donec gravida, nibh facilisis dapibus
                                bibendum, justo
                                justo euismod nisl, vitae dignissim nibh odio at erat. Vestibulum felis arcu,
                                ullamcorper in
                                tincidunt
                                ut, sodales in dui. Proin semper eu libero at placerat. Donec dictum ex vitae lectus
                                imperdiet, et
                                pellentesque neque pharetra. Nam pretium, mi vitae egestas tempor, ex neque molestie
                                leo, quis
                                faucibus
                                elit odio sit amet nisi. Donec id augue lacus. Suspendisse nec mi a ante lacinia
                                fermentum.
                                Suspendisse
                                tristique ultricies rutrum. Ut vitae dignissim augue. Nullam vel enim ac felis euismod
                                aliquet.
                                Praesent
                                aliquet ut nisi eget tincidunt. Sed eu blandit orci.</p>
                            <div class="double_images2">
                                <div class="double_one2" onclick="openModal('img/Figura09.png', 'Contexto de Uso')">
                                    <p>Figura 09: Contexto de Uso</p>
                                    <img src="img/Figura09.png" alt="" class="modal-img">
                                    <p><strong>Fonte:</strong> Google</p>
                                </div>
                                <div class="double_two2" onclick="openModal('img/Figura09-1.png', 'Contexto de Uso')">
                                    <p>Figura 09.1: Contexto de Uso</p>
                                    <img src="img/Figura09-1.png" alt="" class="modal-img">
                                    <p><strong>Fonte:</strong> Google</p>
                                </div>
                            </div>

                            <div id="modal" class="modal" onclick="closeModal()">
                                <span class="close">&times;</span>
                                <img class="modal-content" id="modalImage">
                                <div id="caption"></div>
                            </div>

                            <!-- Caixa de SAIBA MAIS -->
                            <div id="more">
                                <div class="box">
                                    <div>
                                        <h4>Saiba mais</h4>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Fusce ullamcorper in lacus. Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit. Fusce ullamcorper in lacus Fusce ullamcorper in lacus Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </p>
                                </div>
                            </div>

                            <div class="image10" onclick="openModal('img/figura10.png', 'Sistema - Interface - Usuário')">
                                <p><strong>Figura 10:</strong> Sistema - Interface - Usuário</p>
                                <img src="img/figura10.png" alt="" class="modal-img">
                                <p><strong>Fonte:</strong> Blog Thiago Esser</p>
                            </div>

                            <div id="modal" class="modal" onclick="closeModal()">
                                <span class="close">&times;</span>
                                <img class="modal-content" id="modalImage">
                                <div id="caption"></div>
                            </div>
                            <p class="lost_text">In vitae feugiat odio. Fusce id vulputate diam. Donec gravida, nibh facilisis dapibus
                                bibendum, justo
                                justo euismod nisl, vitae dignissim nibh odio at erat. Vestibulum felis arcu,
                                ullamcorper in
                                tincidunt
                                ut, sodales in dui. Proin semper eu libero at placerat. Donec dictum ex vitae lectus
                                imperdiet, et
                                pellentesque neque pharetra. Nam pretium, mi vitae egestas tempor, ex neque molestie
                                leo, quis
                                faucibus
                                elit odio sit amet nisi. Donec id augue lacus. Suspendisse nec mi a ante lacinia
                                fermentum.
                                Suspendisse
                                tristique ultricies rutrum. Ut vitae dignissim augue. Nullam vel enim ac felis euismod
                                aliquet.
                                Praesent
                                aliquet ut nisi eget tincidunt. Sed eu blandit orci.</p>
                            <div id="video">
                                <div class="box">
                                    <h4>Aprendendo assistindo...</h4>
                                    <div id="video_link">
                                        <iframe width="360" height="215" src="https://www.youtube.com/embed/LuZUJRDpDu0?si=gmYsgE2IT5rjTIum"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                    <div id="description">
                                        <h3>Interação Humano Computador (IHC)</h3>
                                        <p>Em resumo, a Interação Humano-Computador é um campo vasto e dinâmico, moldando a forma como nos relacionamos com a tecnologia. Se você gostou do assunto, clica no vídeo para entender melhor sobre o assunto.</p>
                                        <a href="https://youtu.be/NuvN03WzCB4" target="_blank">Assista no YouTube</a>
                                    </div>
                                    <div class="scroll-container" id="scroll-container">
                                        <div id="section1" class="section">
                                            <p id="pp">Olá pessoal no vídeo de hoje vamos falar um pouco sobre esse tema que trata da interface que temos entre máquinas e computadores a interação humano computador e IHC Foca no lado humano da interação com sistemas computacionais para que nós tenhamos a melhor experiência possível ao nos comunicar com máquinas um conceito fundamental no desenvolvimento de HC a usabilidade que diz respeito a todas as características que permitem ao usuário interagir com o computador com satisfação deve ser levada em consideração primeiramente a opinião do usuário além das opiniões dos outros profissionais envolvidos no desenvolvimento do sistema de software
                                                é baseada tanto no conhecimento da máquina quanto no lado humano a relação entre esses componentes é extremamente relevante já que os computadores têm utilizações quais infinitas existem inúmeras possibilidades de diálogo entre usuários e computadores o principal objetivo da área da ih ser desenvolver sistemas e interfaces intuitivos eficientes e fáceis de usar o foco é proporcionar uma experiência agradável e satisfatória para usuária em que ela consegue realizar sua tarefa de forma eficiente sem frustrações por isso a ihc está se tornando cada vez mais relevante para garantir a usabilidade e satisfação da pessoa usuária em diversas áreas
                                                como saúde educação entretenimento e trabalho até meados dos anos 70 a maioria dos escritórios funcionava a base de arquivos de metal máquinas de escrever e muitos muitos papéis os computadores eram enormes e ficavam trancados em salas graças a Steve Jobs estive Osnir que isso logo mudaria estive osnier que estava aperfeiçoando o Apple primeiro para lançar o que finalmente seria o primeiro computador pessoal de sucesso que abriu o caminho para todas as máquinas que viriam depois o célebre é por segunda em 1980 a primeira onda nessa década que os computadores tiveram sua grande evolução em 1981
                                                A IBM lançou seu primeiro computador pessoal a Apple em 83 lança delícia o primeiro computador comercial com uma interface gráfica de usuário Gui Infelizmente o Lisa não teve sucesso um ano depois a Apple mostraria uma kintoshi ele foi considerado o primeiro computador com uma interface gráfica acessível e possuía monitor teclado e mouse com botão com acrescente influência da internet nos anos 90 a segunda onda começa a direcionar o campo de interação para além dos modelos mentais como resultados à sociologia antropologia e a psicologia para estudar os componentes sociais das interações entre usuários e computadores ainda
                                                nos anos 90 tivemos um grande Marco a gigante Google fundada no ano de 1998 mudaria para sempre a forma como produzimos e consumimos de computação e nos vimos obrigados a refletir sobre o papel da tecnologia em nossas vidas no geral interação humano computadora é o estudo projeto e implementação de software para ser usado diretamente com usuários esse sistema são chamados de interface do usuário e o e através dela que um humano irá interagir com o computador mas apesar de ser um ponto crítico a interface do usuário não é a única abrangência da HC ela também
                                                se concentra nas funcionalidades dos computadores e também em Quais aspectos da vida humana os dispositivos têm influência a interação é multidisciplinar pois trata-se de uma relação entre acessibilidade as máquinas sofisticadas e seus usuários potenciais podendo ser trabalhada nas mais diversas áreas e com pessoas de níveis sociais econômicos intelectuais e culturais distintos por meio do processo ação interpretação aborda o desenvolvimento da tecnologia digital apresentando seus benefícios sociais e destacando preocupações com relação à exclusão digital Este trabalho apresenta a interação humano computador por meio de definições objetivos história evolução justificativas e tendências o nosso grupo agradece a
                                                sua atenção um abraço e muito obrigado até mais.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="image11" class="" onclick="openModal('img/Figura11.png', 'VEJA, SP, 2017')">
                                <p><strong>Figura 11:</strong> Documento da Unesco</p>
                                <img class="" src="img/Figura11.png" alt="" class="modal-img">
                                <p><strong>Fonte:</strong> VEJA, SP, 2017</p>
                                <div class="text_intern">
                                    <p class="lost_text">In vitae feugiat odio. Fusce id vulputate diam. Donec gravida, nibh facilisis dapibus bibendum, justo justo euismod nisl, vitae dignissim nibh odio at erat. Vestibulum felis arcu, ullamcorper in tincidunt ut, sodales in dui. Proin semper eu libero at placerat. Donec dictum ex vitae lectus imperdiet, et pellentesque neque pharetra. Nam pretium, mi vitae egestas tempor, ex neque molestie leo, quis faucibus elit odio sit amet nisi. Donec id augue lacus. Suspendisse nec mi a ante lacinia fermentum. Suspendisse tristique ultricies rutrum. Ut vitae dignissim augue. Nullam vel enim ac felis euismod aliquet. Praesent aliquet ut nisi eget tincidunt. Sed eu blandit orci.</p>
                                </div>
                            </div>

                            <div id="modal" class="modal" onclick="closeModal()">
                                <span class="close">&times;</span>
                                <img class="modal-content" id="modalImage">
                                <div id="caption"></div>
                            </div>

                            <!-- Modal -->
                            <div id="modal" class="modal" style="display:none;">
                                <span class="close" onclick="closeModal()">&times;</span>
                                <img class="modal-content" id="modalImage">
                                <div id="caption"></div>
                            </div>


                            <!-- Caixa de SAIBA MAIS -->
                            <div id="more">
                                <div class="box">
                                    <div>
                                        <h4>Saiba mais</h4>
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Fusce ullamcorper in lacus. Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit. Fusce ullamcorper in lacus Fusce ullamcorper in lacus Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </p>
                                </div>
                            </div>
                            <p>In vitae feugiat odio. Fusce id vulputate diam. Donec gravida, nibh facilisis dapibus
                                bibendum, justo
                                justo euismod nisl, vitae dignissim nibh odio at erat. Vestibulum felis arcu,
                                ullamcorper in
                                tincidunt
                                ut, sodales in dui. Proin semper eu libero at placerat. Donec dictum ex vitae lectus
                                imperdiet, et
                                pellentesque neque pharetra. Nam pretium, mi vitae egestas tempor, ex neque molestie
                                leo, quis
                                faucibus
                                elit odio sit amet nisi. Donec id augue lacus. Suspendisse nec mi a ante lacinia
                                fermentum.
                                Suspendisse
                                tristique ultricies rutrum. Ut vitae dignissim augue. Nullam vel enim ac felis euismod
                                aliquet.
                                Praesent
                                aliquet ut nisi eget tincidunt. Sed eu blandit orci.</p>

                            <p class="lost_text">In vitae feugiat odio. Fusce id vulputate diam. Donec gravida, nibh facilisis dapibus
                                bibendum, justo
                                justo euismod nisl, vitae dignissim nibh odio at erat. Vestibulum felis arcu,
                                ullamcorper in
                                tincidunt
                                ut, sodales in dui. Proin semper eu libero at placerat. Donec dictum ex vitae lectus
                                imperdiet, et
                                pellentesque neque pharetra. Nam pretium, mi vitae egestas tempor, ex neque molestie
                                leo, quis
                                faucibus
                                elit odio sit amet nisi. Donec id augue lacus. Suspendisse nec mi a ante lacinia
                                fermentum.
                                Suspendisse
                                tristique ultricies rutrum. Ut vitae dignissim augue. Nullam vel enim ac felis euismod
                                aliquet.
                                Praesent
                                aliquet ut nisi eget tincidunt. Sed eu blandit orci.</p>
                            <div id="video">
                                <div class="box">
                                    <h4>Aprendendo assistindo...</h4>
                                    <div id="video_link">
                                        <iframe width="360" height="215" src="https://www.youtube.com/embed/LuZUJRDpDu0?si=gmYsgE2IT5rjTIum"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                    <div id="description">
                                        <h3>Interação Humano Computador (IHC)</h3>
                                        <p>Em resumo, a Interação Humano-Computador é um campo vasto e dinâmico, moldando a forma como nos relacionamos com a tecnologia. Se você gostou do assunto, clica no vídeo para entender melhor sobre o assunto.</p>
                                        <a href="https://youtu.be/NuvN03WzCB4" target="_blank">Assista no YouTube</a>
                                    </div>
                                    <div class="scroll-container" id="scroll-container">
                                        <div id="section1" class="section">
                                            <p id="pp">Olá pessoal no vídeo de hoje vamos falar um pouco sobre esse tema que trata da interface que temos entre máquinas e computadores a interação humano computador e IHC Foca no lado humano da interação com sistemas computacionais para que nós tenhamos a melhor experiência possível ao nos comunicar com máquinas um conceito fundamental no desenvolvimento de HC a usabilidade que diz respeito a todas as características que permitem ao usuário interagir com o computador com satisfação deve ser levada em consideração primeiramente a opinião do usuário além das opiniões dos outros profissionais envolvidos no desenvolvimento do sistema de software
                                                é baseada tanto no conhecimento da máquina quanto no lado humano a relação entre esses componentes é extremamente relevante já que os computadores têm utilizações quais infinitas existem inúmeras possibilidades de diálogo entre usuários e computadores o principal objetivo da área da ih ser desenvolver sistemas e interfaces intuitivos eficientes e fáceis de usar o foco é proporcionar uma experiência agradável e satisfatória para usuária em que ela consegue realizar sua tarefa de forma eficiente sem frustrações por isso a ihc está se tornando cada vez mais relevante para garantir a usabilidade e satisfação da pessoa usuária em diversas áreas
                                                como saúde educação entretenimento e trabalho até meados dos anos 70 a maioria dos escritórios funcionava a base de arquivos de metal máquinas de escrever e muitos muitos papéis os computadores eram enormes e ficavam trancados em salas graças a Steve Jobs estive Osnir que isso logo mudaria estive osnier que estava aperfeiçoando o Apple primeiro para lançar o que finalmente seria o primeiro computador pessoal de sucesso que abriu o caminho para todas as máquinas que viriam depois o célebre é por segunda em 1980 a primeira onda nessa década que os computadores tiveram sua grande evolução em 1981
                                                A IBM lançou seu primeiro computador pessoal a Apple em 83 lança delícia o primeiro computador comercial com uma interface gráfica de usuário Gui Infelizmente o Lisa não teve sucesso um ano depois a Apple mostraria uma kintoshi ele foi considerado o primeiro computador com uma interface gráfica acessível e possuía monitor teclado e mouse com botão com acrescente influência da internet nos anos 90 a segunda onda começa a direcionar o campo de interação para além dos modelos mentais como resultados à sociologia antropologia e a psicologia para estudar os componentes sociais das interações entre usuários e computadores ainda
                                                nos anos 90 tivemos um grande Marco a gigante Google fundada no ano de 1998 mudaria para sempre a forma como produzimos e consumimos de computação e nos vimos obrigados a refletir sobre o papel da tecnologia em nossas vidas no geral interação humano computadora é o estudo projeto e implementação de software para ser usado diretamente com usuários esse sistema são chamados de interface do usuário e o e através dela que um humano irá interagir com o computador mas apesar de ser um ponto crítico a interface do usuário não é a única abrangência da HC ela também
                                                se concentra nas funcionalidades dos computadores e também em Quais aspectos da vida humana os dispositivos têm influência a interação é multidisciplinar pois trata-se de uma relação entre acessibilidade as máquinas sofisticadas e seus usuários potenciais podendo ser trabalhada nas mais diversas áreas e com pessoas de níveis sociais econômicos intelectuais e culturais distintos por meio do processo ação interpretação aborda o desenvolvimento da tecnologia digital apresentando seus benefícios sociais e destacando preocupações com relação à exclusão digital Este trabalho apresenta a interação humano computador por meio de definições objetivos história evolução justificativas e tendências o nosso grupo agradece a
                                                sua atenção um abraço e muito obrigado até mais.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="computionals_sistem" id="subtopico1-5">
                            <h3 class="subtopico">01.5 - Sistemas Computacionais</h3>

                            <div class="image12" onclick="openModal('img/Figura12.png', 'UNESCO')">
                                <div class="image_glasses">
                                    <p><strong>Figura 12:</strong> Documento da Unesco</p>
                                    <img src="img/Figura12.png" alt="" class="modal-img" id="vitual">
                                    <p><strong>Fonte:</strong> UNESCO</p>
                                </div>
                                <p class="virtual_text">
                                    In vitae feugiat odio. Fusce id vulputate diam. Donec gravida, nibh facilisis dapibus bibendum, justo justo euismod nisl, vitae dignissim nibh odio at erat. Vestibulum felis arcu, ullamcorper in tincidunt ut, sodales in dui. Proin semper eu libero at placerat. Donec dictum ex vitae lectus imperdiet, et pellentesque neque pharetra. Nam pretium, mi vitae egestas tempor, ex neque molestie leo, quis faucibus elit odio sit amet nisi. Donec id augue lacus. Suspendisse nec mi a ante lacinia fermentum. Suspendisse tristique ultricies rutrum. Ut vitae dignissim augue. Nullam vel enim ac felis euismod aliquet. Praesent aliquet ut nisi eget tincidunt. Sed eu blandit orci.
                                </p>
                            </div>

                            <!-- Modal -->
                            <div id="modal" class="modal" style="display:none;">
                                <span class="close" onclick="closeModal()">&times;</span>
                                <img class="modal-content" id="modalImage">
                                <div id="caption"></div>
                            </div>



                            <p class="text_inutil">In vitae feugiat odio. Fusce id vulputate diam. Donec gravida, nibh facilisis dapibus
                                bibendum, justo
                                justo euismod nisl, vitae dignissim nibh odio at erat. Vestibulum felis arcu,
                                ullamcorper in
                                tincidunt
                                ut, sodales in dui. Proin semper eu libero at placerat. Donec dictum ex vitae lectus
                                imperdiet, et
                                pellentesque neque pharetra. Nam pretium, mi vitae egestas tempor, ex neque molestie
                                leo, quis
                                faucibus
                                elit odio sit amet nisi. Donec id augue lacus. Suspendisse nec mi a ante lacinia
                                fermentum.
                                Suspendisse
                                tristique ultricies rutrum. Ut vitae dignissim augue. Nullam vel enim ac felis euismod
                                aliquet.
                                Praesent
                                aliquet ut nisi eget tincidunt. Sed eu blandit orci.</p>


                            <p>In vitae feugiat odio. Fusce id vulputate diam. Donec gravida, nibh facilisis dapibus
                                bibendum, justo
                                justo euismod nisl, vitae dignissim nibh odio at erat. Vestibulum felis arcu,
                                ullamcorper in
                                tincidunt
                                ut, sodales in dui. Proin semper eu libero at placerat. Donec dictum ex vitae lectus
                                imperdiet, et
                                pellentesque neque pharetra. Nam pretium, mi vitae egestas tempor, ex neque molestie
                                leo, quis
                                faucibus
                                elit odio sit amet nisi. Donec id augue lacus. Suspendisse nec mi a ante lacinia
                                fermentum.
                                Suspendisse
                                tristique ultricies rutrum. Ut vitae dignissim augue. Nullam vel enim ac felis euismod
                                aliquet.
                                Praesent
                                aliquet ut nisi eget tincidunt. Sed eu blandit orci.</p>
                        </div>
                        <div class="process_desenvolviment" id="subtopico1.7">
                            <h3 class="subtopico">01.7 - Processo de Desenvolvimento</h3>

                            <div class="image13" onclick="openModal('img/Figura13.png', 'UNESCO')">
                                <div class="image_glasses">
                                    <p><strong>Figura 13:</strong> Documento da Unesco</p>
                                    <img src="img/Figura13.png" alt="" class="modal-img">
                                    <p><strong>Fonte:</strong> UNESCO</p>
                                </div>
                                <p class="virtual_text">
                                    Descrição sobre o documento da Unesco. In vitae feugiat odio. Fusce id vulputate diam. Donec gravida, nibh facilisis dapibus bibendum, justo justo euismod nisl, vitae dignissim nibh odio at erat. Vestibulum felis arcu, ullamcorper in tincidunt ut, sodales in dui. Proin semper eu libero at placerat. Donec dictum ex vitae lectus imperdiet, et pellentesque neque pharetra.
                                </p>
                            </div>

                            <!-- Modal -->
                            <div id="modal" class="modal" style="display:none;" onclick="closeModal()">
                                <span class="close">&times;</span>
                                <img class="modal-content" id="modalImage">
                                <div id="caption"></div>
                            </div>


                            <p>In vitae feugiat odio. Fusce id vulputate diam. Donec gravida, nibh facilisis dapibus
                                bibendum,
                                justo
                                justo euismod nisl, vitae dignissim nibh odio at erat. Vestibulum felis arcu,
                                ullamcorper in
                                tincidunt
                                ut, sodales in dui. Proin semper eu libero at placerat. Donec dictum ex vitae lectus
                                imperdiet,
                                et
                                pellentesque neque pharetra. Nam pretium, mi vitae egestas tempor, ex neque molestie
                                leo, quis
                                faucibus
                                elit odio sit amet nisi. Donec id augue lacus. Suspendisse nec mi a ante lacinia
                                fermentum.
                                Suspendisse
                                tristique ultricies rutrum. Ut vitae dignissim augue. Nullam vel enim ac felis
                                euismod aliquet.
                                Praesent
                                aliquet ut nisi eget tincidunt. Sed eu blandit orci.</p>
                            </p>
                            <div class="great_desenvolviment">
                                <h2 class="subtopico">Os critérios de qualidade de uso são:</h2>
                                <div class="subdiv-container">
                                    <div class="subdiv">
                                        <div class="background-div"></div>
                                        <h3 class="subtext_1">1-Usabilidade</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo consequuntur optio sapiente, eaque atque libero laborum illum maiores dolor aspernatur praesentium maxime ab dicta neque eos repellendus aperiam asperiores veniam.</p>
                                    </div>
                                    <div class="subdiv">
                                        <div class="background-div"></div>
                                        <h3 class="subtext_2">2-Experiência do navegante</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo consequuntur optio sapiente, eaque atque libero laborum illum maiores dolor aspernatur praesentium maxime ab dicta neque eos repellendus aperiam asperiores veniam.</p>
                                    </div>
                                    <div class="subdiv">
                                        <div class="background-div"></div>
                                        <h3 class="subtext_3">3-Acessibilidade</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo consequuntur optio sapiente, eaque atque libero laborum illum maiores dolor aspernatur praesentium maxime ab dicta neque eos repellendus aperiam asperiores veniam.</p>
                                    </div>
                                    <div class="subdiv">
                                        <div class="background-div"></div>
                                        <h3 class="subtext_4">4-Comunicabilidade</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo consequuntur optio sapiente, eaque atque libero laborum illum maiores dolor aspernatur praesentium maxime ab dicta neque eos repellendus aperiam asperiores veniam.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <p>In vitae feugiat odio. Fusce id vulputate diam. Donec gravida, nibh facilisis dapibus
                            bibendum, justo
                            justo euismod nisl, vitae dignissim nibh odio at erat. Vestibulum felis arcu,
                            ullamcorper in
                            tincidunt
                            ut, sodales in dui. Proin semper eu libero at placerat. Donec dictum ex vitae lectus
                            imperdiet, et
                            pellentesque neque pharetra. Nam pretium, mi vitae egestas tempor, ex neque molestie
                            leo, quis
                            faucibus
                            elit odio sit amet nisi. Donec id augue lacus. Suspendisse nec mi a ante lacinia
                            fermentum.
                            Suspendisse
                            tristique ultricies rutrum. Ut vitae dignissim augue. Nullam vel enim ac felis euismod
                            aliquet.
                            Praesent
                            aliquet ut nisi eget tincidunt. Sed eu blandit orci.</p>

                        <p>In vitae feugiat odio. Fusce id vulputate diam. Donec gravida, nibh facilisis dapibus
                            bibendum, justo
                            justo euismod nisl, vitae dignissim nibh odio at erat. Vestibulum felis arcu,
                            ullamcorper in
                            tincidunt
                            ut, sodales in dui. Proin semper eu libero at placerat. Donec dictum ex vitae lectus
                            imperdiet, et
                            pellentesque neque pharetra. Nam pretium, mi vitae egestas tempor, ex neque molestie
                            leo, quis
                            faucibus
                            elit odio sit amet nisi. Donec id augue lacus. Suspendisse nec mi a ante lacinia
                            fermentum.
                            Suspendisse
                            tristique ultricies rutrum. Ut vitae dignissim augue. Nullam vel enim ac felis euismod
                            aliquet.
                            Praesent
                            aliquet ut nisi eget tincidunt. Sed eu blandit orci.</p>
                        </p>

                        <p class="lost_text">In vitae feugiat odio. Fusce id vulputate diam. Donec gravida, nibh facilisis
                            dapibus
                            bibendum,
                            justo
                            justo euismod nisl, vitae dignissim nibh odio at erat. Vestibulum felis arcu, ullamcorper in
                            tincidunt
                            ut, sodales in dui. Proin semper eu libero at placerat. Donec dictum ex vitae lectus
                            imperdiet, et
                            pellentesque neque pharetra. Nam pretium, mi vitae egestas tempor, ex neque molestie leo,
                            quis faucibus
                            elit odio sit amet nisi. Donec id augue lacus. Suspendisse nec mi a ante lacinia fermentum.
                            Suspendisse
                            tristique ultricies rutrum. Ut vitae dignissim augue. Nullam vel enim ac felis euismod
                            aliquet. Praesent
                            aliquet ut nisi eget tincidunt. Sed eu blandit orci.</p>
                        </p>
                        <section class="page-control">
                            <div class="next-box">
                                <a class="next-box" href="topico02.php">
                                    <p class="nextPage">Próximo</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8m-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5" />
                                    </svg>
                                </a>
                            </div>
                        </section>
                        <div id="back_to_top">
                            <div id="btn_back">
                                <i id="icon_up" class="fa-solid fa-arrow-up"></i>
                            </div>
                        </div>
                        <?php
                        include('layouts/footer.php')
                        ?>
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>
    <script src="scripts/main.js" defer></script>
    <?php include('layouts/others/librasScript.php') ?>
</body>

</html>