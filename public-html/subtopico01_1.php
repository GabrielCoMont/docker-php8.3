<!DOCTYPE html>
<html lang="pt-br">

<?php
include('layouts/head.php');
include('layouts/header.php');
?>

<body>
    <div id="all-content">
        <?php
        include('layouts/menu.php');
        ?>
        <main id="main-content">

            <!-- CAIXA DE TEXTO LINKS -->

            <div class="display_links_questions" id="display_links">                
                <div>
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ullamcorper in lacus 
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ullamcorper in lacus 
                    Fusce ullamcorper in lacus Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ullamcorper in lacus Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ullamcorper in lacus Fusce ullamcorper in lacus
                    </p>
                </div>

                <label class="flip-container">
                    <div class="flipper">
                        <div class="front">
                            <div class="title_links_questions" id="title_links1">
                                <div class="main_links" id="main_links1">
                                    <div class="sliders_links" id="sliders_links1">
                                        <i class="bi bi-sliders"></i>
                                    </div>
                                    <span> Links </span>
                                    <div class="star_links" id="star_links1">
                                        <i class="bi bi-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="content_links_questions" id="content_links1">
                                <i class="fa-solid fa-link"></i>                
                            </div>
                        </div>
                            <div class="back">
                            <div class="title_links_questions" id="title_links2">
                                <div class="main_links" id="main_links2">
                                    <div class="sliders_links" id="sliders_links2">
                                        <i class="bi bi-sliders"></i>
                                    </div>
                                    <span><i class="fa-solid fa-link"></i>Links</span>
                                    <div class="star_links" id="star_links2">
                                        <i class="bi bi-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="content_links_questions" id="content_links2">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>
                                Donec facilisis libero in turpis mollis, porttitor aliquam ligula tempus. <br>
                                Donec sed nulla eu velit varius vestibulum. <br>                          
                            </div>
                        </div>
                    </div>
                </label>

            </div>

            <!-- CAIXA DE PERGUNTAS -->
            <div class="title_links_questions" id="title_questions">
                <img src="img/knowledge.png" alt="" id="knowledge">
                <span>Testando conhecimentos</span>
                <i class="bi bi-x"></i>
            </div>
            <div class="content_links_questions" id="content_questions">
                <div class="questions_decoration">
                    <i class="bi bi-dash-lg"></i>
                    <i class="bi bi-window-stack"></i>
                    <i class="bi bi-x-lg"></i>
                </div>
                <div class="display_links_questions" id="display_questions">
                    <div class="question_answer">
                        <div class="content_links_questions" id="questions">
                            <img src="img/Vector1.png" alt="">
                            <div class="question">
                                Qual é a capital do Brasil?
                            </div>
                        </div>
                        <div class="content_links_questions" id="answers">
                            <img src="img/Vector2.png" alt="">
                            <div class="answer">São Paulo</div>
                            <div class="answer">Rio de Janeiro</div>
                            <div class="answer">Brasília</div>
                            <div class="answer">Salvador</div>
                        </div>
                    </div>
                    <div class="container_questions">
                        
                        <div class="container_balls">
                            <div class="ball ball1"></div>
                            <div class="ball ball2"></div>
                            <div class="ball ball3"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center">
                <button class="btn-congratulations" role="button" aria-pressed="true"> <img src="img/medal.png" alt="" id="medal">FINALIZAR O MÓDULO <img src="img/confetti.png" alt="" id="confetti"> </button>
            </div>

        </main>
    </div>

    <script src="scripts/main.js"></script>

</body>

</html>