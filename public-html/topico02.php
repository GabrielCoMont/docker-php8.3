<!DOCTYPE html>
<html lang="pt-br">

<?php
include('layouts/head.php');
include('layouts/header.php');
?>

<body id="lesson-body">
    <div id="all-content">
        <?php
        include('layouts/menu.php');
        ?>

        <main id="main-content" class="audio">
            <div vw class="enabled">
                <div vw-access-button class="active"></div>
                <div vw-plugin-wrapper>
                    <div class="vw-plugin-top-wrapper"></div>
                </div>
            </div>
            <!-- CAIXA DE TEXTO LINKS -->
            <div class="display_links_questions" id="display_links">
                <div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Fusce ullamcorper in lacus. Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Fusce ullamcorper in lacus Fusce ullamcorper in lacus Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                        ullamcorper in lacus Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ullamcorper
                        in lacus Fusce ullamcorper in lacus
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
                    <div class="question_answer" data-answer="Brasília">
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
                            <div class="answer" id="correct">Brasília</div>
                            <div class="answer">Salvador</div>
                            <p id="explanation">A capital do Brasil é Brasilia.</p>
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

            <!-- QUIZ FINAL -->
            <div class="quiz">
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
                    <div class="display_links_questions" id="display_questions2">
                        <div class="question_answer">
                            <div class="content_links_questions" id="questions">
                                <img src="img/Vector1.png" alt="">
                                <div class="question" id="question"></div>
                            </div>
                            <div class="content_links_questions" id="answers">
                                <img src="img/Vector2.png" alt="">
                                <div class="options-container">
                                </div>
                            </div>
                        </div>
                        <div class="container_questions">
                            <div class="container_balls">
                                <div class="ball ball1"></div>
                                <div class="ball ball2"></div>
                                <div class="ball ball3"></div>
                            </div>
                        </div>
                        <div class="questions" data-answer="Brasília">
                            <div class="question" id="question_quiz">
                                Qual a capital do Brasil?
                            </div>
                            <div class="options">
                                <div class="answer">São Paulo</div>
                                <div class="answer">Rio de Janeiro</div>
                                <div class="answer">Brasília</div>
                                <div class="answer">Salvador</div>
                            </div>
                        </div>
                        <div class="questions" data-answer="Machado de Assis">
                            <div class="question" id="question_quiz">
                                Quem escreveu Dom Casmurro?
                            </div>
                            <div class="options">
                                <div class="answer">José de Alencar</div>
                                <div class="answer">Machado de Assis</div>
                                <div class="answer">Clarice Lispector</div>
                                <div class="answer">Robério Alencar</div>
                            </div>
                        </div>
                        <div class="questions" data-answer="Oxigênio">
                            <div class="question" id="question_quiz">
                                Qual o elemento químico representado pela letra "O"?
                            </div>
                            <div class="options">
                                <div class="answer">Ouro</div>
                                <div class="answer">Oxigênio</div>
                                <div class="answer">Ósmio</div>
                                <div class="answer">Oxônio</div>
                            </div>
                        </div>
                    </div>
                    <div class="result"></div>
                    <div class="btn-next">
                        <button class="btn-quiz" role="button" aria-pressed="true"> Próxima pergunta </button>
                    </div>
                </div> 
            </div>

            <!-- ############################# CAIXAS ############################# -->
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

            <!-- Caixa de CURIOSIDADE -->
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
            <!-- Caixa de importante -->
            <div id="important">
                <div class="box">
                    <div>
                        <img src="img/important.png" alt="">
                        <h4>Importante!</h4>
                        <img src="img/important.png" alt="">
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Fusce ullamcorper in lacus. Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Fusce ullamcorper in lacus Fusce ullamcorper in lacus Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>
            </div>
            <!-- Caixa de atenção -->
            <div id="attention">
                <div class="box">
                    <div>
                        <h4>Fique atento!</h4>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Fusce ullamcorper in lacus. Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Fusce ullamcorper in lacus Fusce ullamcorper in lacus Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>
            </div>
            <!-- Caixa de reflita -->
            <div id="reflection">
                <div class="box">
                    <div>
                        <h4>Reflita</h4>
                        <i class="fa-solid fa-brain"></i>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Fusce ullamcorper in lacus. Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Fusce ullamcorper in lacus Fusce ullamcorper in lacus Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>
            </div>
            <!-- Caixa de dúvidas -->
            <div id="doubts">
                <div class="box">
                    <div>
                        <h4>Dúvida</h4>
                        <i class="bi bi-question-circle-fill"></i>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Fusce ullamcorper in lacus. Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Fusce ullamcorper in lacus Fusce ullamcorper in lacus Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>
            </div>
            <!-- Caixa de exemplos -->
            <div id="examples">
                <div class="box">
                    <div>
                        <h4>Exemplos</h4>
                        <i class="fa-solid fa-book-open"></i>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Fusce ullamcorper in lacus. Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Fusce ullamcorper in lacus Fusce ullamcorper in lacus Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>
            </div>
            <!-- Caixa de resumo -->
            <div id="summary">
                <div class="box">
                    <div>
                        <h4>Resumo</h4>
                        <i class="fa-solid fa-book"></i>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Fusce ullamcorper in lacus. Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Fusce ullamcorper in lacus Fusce ullamcorper in lacus Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>
            </div>
            <!-- Caixa de practice -->
            <div id="practice">
                <div class="box">
                    <div>
                        <h4>Pratique!</h4>
                        <i class="fa-solid fa-square-pen"></i>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Fusce ullamcorper in lacus. Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Fusce ullamcorper in lacus Fusce ullamcorper in lacus Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>
            </div>
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
                    <div id="resume">
                        <h3>Interação Humano Computador (IHC)</h3>
                        <p>Em resumo, a Interação Humano-Computador é um campo vasto e dinâmico, moldando a forma como nos relacionamos com a tecnologia. Se você gostou do assunto, clica no vídeo para entender melhor sobre o assunto.</p>
                    </div>
                    <h3>Audio descrição do vídeo <img src="img/arrow1.png" class="open_description"></h3>

                    <div class="scroll-description" id="scroll-description" style="display:none;">
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
                <section>
                    <div class="process-wrapper">
                        <div id="progress-bar-container">
                            <ul>
                                <li class="step step01 active">
                                    <div class="step-inner"></div>
                                    <h3 class>Anos 1857</h3>

                                </li>
                                <li class="step step02">
                                    <div class="step-inner"></div>
                                    <h3>Anos 1885 </h23>
                                </li>
                                <li class="step step03">
                                    <div class="step-inner"></div>
                                    <h3>Anos 1879 </h3>
                                </li>
                                <li class="step step04">
                                    <div class="step-inner"></div>
                                    <h3>Anos 1918 </h23>
                                </li>
                                <li class="step step05">
                                    <div class="step-inner"></div>
                                    <h3>Anos 1990 </h23>
                                </li>
                                <li class="step step06">
                                    <div class="step-inner"></div>
                                    <h3>Anos 1994 </h3>
                                </li>
                                <li class="step step07">
                                    <div class="step-inner"></div>
                                    <h3>Anos 2000 </h3>
                                </li>
                            </ul>
                            <div id="line">
                                <div id="line-progress"></div>
                            </div>
                        </div>


                        <div id="progress-content-section">
                            <div class="section-content discovery active">
                                <h2>1857 - Ergonomia
                                </h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec neque justo, consequat non fermentum ac,
                                    tempor eu turpis. Proin nulla eros, placerat non ipsum ut, dapibus ullamcorper ex. Nulla in dapibus
                                    lorem. Suspendisse vitae velit ac ante consequat placerat ut sed eros. Nullam porttitor mattis mi, id
                                    fringilla ex consequat eu. Praesent pulvinar tincidunt leo et condimentum. Maecenas volutpat turpis at
                                    felis egestas malesuada. Phasellus sem odio, venenatis at ex a, lacinia suscipit orci.</p>
                            </div>

                            <div class="section-content strategy">
                                <h2>1885 - Pós-Revolução Industrial
                                </h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec neque justo, consequat non fermentum ac,
                                    tempor eu turpis. Proin nulla eros, placerat non ipsum ut, dapibus ullamcorper ex. Nulla in dapibus
                                    lorem. Suspendisse vitae velit ac ante consequat placerat ut sed eros. Nullam porttitor mattis mi, id
                                    fringilla ex consequat eu. Praesent pulvinar tincidunt leo et condimentum. Maecenas volutpat turpis at
                                    felis egestas malesuada. Phasellus sem odio, venenatis at ex a, lacinia suscipit orci.</p>
                            </div>

                            <div class="section-content creative">
                                <h2>1879 - Psicologia aplicada
                                </h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec neque justo, consequat non fermentum ac,
                                    tempor eu turpis. Proin nulla eros, placerat non ipsum ut, dapibus ullamcorper ex. Nulla in dapibus
                                    lorem. Suspendisse vitae velit ac ante consequat placerat ut sed eros. Nullam porttitor mattis mi, id
                                    fringilla ex consequat eu. Praesent pulvinar tincidunt leo et condimentum. Maecenas volutpat turpis at
                                    felis egestas malesuada. Phasellus sem odio, venenatis at ex a, lacinia suscipit orci.</p>
                            </div>

                            <div class="section-content production">
                                <h2>1918 - Primeira Guerra Mundial
                                </h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec neque justo, consequat non fermentum ac,
                                    tempor eu turpis. Proin nulla eros, placerat non ipsum ut, dapibus ullamcorper ex. Nulla in dapibus
                                    lorem. Suspendisse vitae velit ac ante consequat placerat ut sed eros. Nullam porttitor mattis mi, id
                                    fringilla ex consequat eu. Praesent pulvinar tincidunt leo et condimentum. Maecenas volutpat turpis at
                                    felis egestas malesuada. Phasellus sem odio, venenatis at ex a, lacinia suscipit orci.</p>
                            </div>


                            <div class="section-content analysis">
                                <h2>1990 - UX
                                </h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec neque justo, consequat non fermentum ac,
                                    tempor eu turpis. Proin nulla eros, placerat non ipsum ut, dapibus ullamcorper ex. Nulla in dapibus
                                    lorem. Suspendisse vitae velit ac ante consequat placerat ut sed eros. Nullam porttitor mattis mi, id
                                    fringilla ex consequat eu. Praesent pulvinar tincidunt leo et condimentum. Maecenas volutpat turpis at
                                    felis egestas malesuada. Phasellus sem odio, venenatis at ex a, lacinia suscipit orci.</p>
                            </div>
                            <div class="section-content lorem">
                                <h2>1994 - Heurísticas de Nielsen
                                </h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec neque justo, consequat non fermentum ac,
                                    tempor eu turpis. Proin nulla eros, placerat non ipsum ut, dapibus ullamcorper ex. Nulla in dapibus
                                    lorem. Suspendisse vitae velit ac ante consequat placerat ut sed eros. Nullam porttitor mattis mi, id
                                    fringilla ex consequat eu. Praesent pulvinar tincidunt leo et condimentum. Maecenas volutpat turpis at
                                    felis egestas malesuada. Phasellus sem odio, venenatis at ex a, lacinia suscipit orci.</p>
                            </div>

                            <div class="section-content 2000">
                                <h2>2000 - A era dos dispositivos portáteis</h2>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam maiores reprehenderit, animi quod nihil facere aspernatur rem vero dicta, voluptates iure? At ex sint aut aperiam aliquid reiciendis dolor voluptatibus?</p>
                            </div>
                        </div>
                    </div>
                </section>
                        
            <section class="page-control">
                <div class="prev-box">
                    <a class="prev-box" href="topico01.php">

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5M10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5" />
                        </svg>
                        <p class="prevPage">Anterior</p>
                    </a>
                </div>
                <div class="next-box">
                    <a class="next-box" href="topico03.php">
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
        </main>
    </div>
    <?php
    include('layouts/others/librasScript.php');

    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>
    <script src="scripts/main.js" defer>

    </script>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget("https://vlibras.gov.br/app");
    </script>
</body>

</html>