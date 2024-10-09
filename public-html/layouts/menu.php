<?php
include('layouts/controlModules.php');
?>

<body>

    <main>
        <dialog id="myModal" class="remove">
            <div class="modal-div">
                <div class="close-div">
                    <span class="close"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-x" viewBox="0 0 16 16">
                            <path
                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                        </svg>
                    </span>
                </div>
                <h2>Modo Pomodoro</h2>
                <p class="text-modal">Aqui iremos te exemplificar em passos como funciona a <span
                        class="enhance-txt-modal">Técnica de Estudo
                        Pomodoro</span> :</p>
                <ol class="pomodoro-steps">
                    <li class="steps">Escolha uma tarefa que você deseja realizar.</li>
                    <li class="steps">Ajuste o cronômetro para <strong>25 minutos (1 Pomodoro)</strong>.</li>
                    <li class="steps">Trabalhe na tarefa até que o cronômetro toque.</li>
                    <li class="steps">Quando o cronômetro tocar, <strong>faça uma pausa curta de 5 minutos.</strong>
                    </li>
                    <li class="steps">Repita o processo por mais três Pomodoros.</li>
                    <li class="steps">Após completar quatro Pomodoros, <strong>faça uma pausa longa de 15 a 30
                            minutos.</strong>
                    <li class="steps">Reinicie o ciclo se necessário.</li>
                </ol>
                <p class="text-modal">Esses passos ajudam a manter<span class="enhance-txt-modal"> foco e
                        produtividade</span> em intervalos regulares para descansar.</p>
                <p class="text-modal attention">Não tem obrigatoriedade, então não afetará na realização do seu curso.  </p>
                <button class="modal-button" id="modal-button">Ativar mesmo assim</button>
            </div>
        </dialog>
    </main>
</body>

    <div class="popup" id="audio-popup">
        <div class="popup-content">
            <h3 id="titulo-audio">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247m2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z" />
                </svg>
                Áudio aula
            </h3>
            <p>Este recurso permite que você estude o conteúdo através de um áudio, para iniciar a áudio aula, basta apertar no
                play. " <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                        d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM188.3 147.1c-7.6 4.2-12.3 12.3-12.3 20.9l0 176c0 8.7 4.7 16.7 12.3 20.9s16.8 4.1 24.3-.5l144-88c7.1-4.4 11.5-12.1 11.5-20.5s-4.4-16.1-11.5-20.5l-144-88c-7.4-4.5-16.7-4.7-24.3-.5z" />
                </svg> "</p>
            <button type="button" id="close-popup2" aria-label="Fechar caixa de áudio">Entendido</button>
        </div>
        <!-- Caixa de Áudio End -->
    </div>
<nav id="navbar">
    <div class="buttons-minie" id="buttons-mini">
        <div class="btn-menu-box">
        <button id="btn-menu-close">
            <img src="img/chevron-right.svg" id="img-close-nav">
        </button>
        </div>
        <div class="buttons-line" id="buttons-line">
            <a href="topico01.php">
                <button class="circle circle-line remove">1</button>
            </a>
            <a href="topico02.php">
                <button class="circle circle-line remove">2</button>
            </a>
            <a href="topico03.php">
                <button class="circle circle-line remove">3</button>
            </a>
            <button class="audio-box__play-button playButton remove circle-line" id="playButton" onclick="lerTexto('audio')">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-play-circle-fill" viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814z" />
                </svg>
            </button>
            <button class="audio-box__play-button stopButton remove circle-line" id="stopButton" style="display: none;">
                <svg id="pauseIcon" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-pause" viewBox="0 0 24 24">
                    <path d="M6 19h4V5H6zm8-14v14h4V5h-4z"></path>
                </svg>
            </button>
            <button id="resetButton" class="audio-box__play-button resetButton remove circle-line">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                    <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41m-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9" />
                    <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5 5 0 0 0 8 3M3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9z" />
                </svg>
            </button>
        </div>
    </div>
    <div id="sidebar" class="show">
        <button id="select-btn">
            <img src="img/arrow1.png" alt="Imagem de uma seta azul apontando para a direita" id="arrow" class="rotate"> Meus tópicos
        </button>

        <ul>
            <li>
                <button id="topic01" class="topic-btn items-menu">
                    <div class="circle circle-black">1</div><a href="topico01.php">Tópico 1</a>
                    <img src="img/arrow1.png" class="svgup">
                </button>
                <div class="subtopic remove">
                    <ul>
                        <a href="topico01.php#subtopico1-1"> 
                            <li><button class="subtopic-btn items-menu">1.1</button></li>
                        </a>
                        <a href="topico01.php#subtopico1-2">
                            <li><button class="subtopic-btn items-menu">1.2</button></li>
                        </a>
                        <a href="topico01.php#subtopico1-3">
                            <li><button class="subtopic-btn items-menu">1.3</button></li>
                        </a>
                        <a href="topico01.php#subtopico1-4">
                            <li><button class="subtopic-btn items-menu">1.4</button></li>
                        </a>
                        <a href="topico01.php#subtopico1-5">
                            <li><button class="subtopic-btn items-menu">1.5</button></li>
                        </a>
                        <a href="topico01.php#subtopico1-6">
                            <li><button class="subtopic-btn items-menu">1.6</button></li>
                        </a>
                    </ul>
                </div>
            </li>
            <li>
                <button id="topic02" class="topic-btn items-menu">
                    <div class="circle circle-black">2</div><a href="topico02.php">Tópico 2</a>
                    <img src="img/arrow1.png" class="svgup">
                </button>
                <div class="subtopic remove">
                    <ul>
                        <a href="#subtopico2.1">
                            <li><button class="subtopic-btn items-menu">2.1</button></li>
                        </a>
                        <a href="#subtopico2.2">
                            <li><button class="subtopic-btn items-menu">2.2</button></li>
                        </a>
                        <a href="#subtopico2.3">
                            <li><button class="subtopic-btn items-menu">2.3</button></li>
                        </a>
                        <a href="#subtopico2.4">
                            <li><button class="subtopic-btn items-menu">2.4</button></li>
                        </a>
                    </ul>
                </div>
            </li>
            <li>
                <button id="topic03" class="topic-btn items-menu">
                    <div class="circle circle-black">3</div><a href="topico03.php">Tópico 3</a>
                    <img src="img/arrow1.png" class="svgup">
                </button>
                <div class="subtopic remove">
                    <ul>
                        <a href="topico03.php#subtopico3-1">
                            <li><button class="subtopic-btn items-menu">3.1</button></li>
                        </a>
                    </ul>
                </div>
            </li>
            <li>
                <button id="topic03" class="topic-btn items-menu">
                    <div class="circle circle-black">4</div><a href="topico04.php">Tópico 4</a>
                    <img src="img/arrow1.png" class="svgup">
                </button>
                <div class="subtopic remove">
                    <ul>
                        <a href="#subtopico4.1">
                            <li><button class="subtopic-btn items-menu">4.1</button></li>
                        </a>
                        <a href="#subtopico4.2">
                            <li><button class="subtopic-btn items-menu">4.2</button></li>
                        </a>
                        <a href="#subtopico4.3">
                            <li><button class="subtopic-btn items-menu">4.3</button></li>
                        </a>
                        <a href="#subtopico4.4">
                            <li><button class="subtopic-btn items-menu">4.4</button></li>
                        </a>
                    </ul>
                </div>
            </li>
            <li>
                <button id="topic03" class="topic-btn items-menu">
                    <div class="circle circle-black">5</div><a href="topico05.php">Tópico 5</a>
                    <img src="img/arrow1.png" class="svgup">
                </button>
                <div class="subtopic remove">
                    <ul>
                        <a href="#subtopico5.1">
                            <li><button class="subtopic-btn items-menu">5.1</button></li>
                        </a>
                        <a href="#subtopico5.2">
                            <li><button class="subtopic-btn items-menu">5.2</button></li>
                        </a>
                        <a href="#subtopico5.3">
                            <li><button class="subtopic-btn items-menu">5.3</button></li>
                        </a>
                        <a href="#subtopico5.4">
                            <li><button class="subtopic-btn items-menu">5.4</button></li>
                        </a>
                    </ul>
                </div>
            </li>



            <li>
                <a href="referencias.php">
                    <button id="referencias" class="items-menu">Referências</button>
                </a>
            </li>
        </ul>

    </div>
    <!-- Alteração para a criação da branch lateralAside -->
    <!-- Botão de Acessibilidade -->


    <!-- Caixa de Áudio Start -->

    <div class="audio-box">
        <div class="btn-info">
            <button id="audio-info">
                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" fill="currentColor"
                    class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247m2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z" />
                </svg>
            </button>
        </div>
        <div id="audio-img-div">
            <img src="./img/audio_img.png" alt="dsadsafgfafda" id="audio-img">
        </div>
        <div class="audio-box__details">
            <h2 class="audio-box__title"><?php getMessage($path)?></h2>
            <!-- <div class="progress">
        <input type="range" id="progress-bar-audio" min="0" value="0.5" max="100" step="0.1"
          onchange="document.getElementById('demo').volume=this.value">
        <progress id="progress-bar" value="60" max="100" style="color: #56A7B2;"></progress>
    </div> -->

        </div>

        <div class="audio-buttons">

            <!-- <button class="btn-controls"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
          class="bi bi-caret-left-fill" viewBox="0 0 16 16">
          <path
            d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
        </svg></button> -->

            <button class="audio-box__play-button playButton" id="playButton" onclick="lerTexto('audio')">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-play-circle-fill" viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814z" />
                </svg>
            </button>
            <button class="audio-box__play-button stopButton" id="stopButton" style="display: none;">
                <svg id="pauseIcon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pause-fill" viewBox="0 0 16 16">
                    <path d="M5.5 3.5A1.5 1.5 0 0 1 7 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5m5 0A1.5 1.5 0 0 1 12 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5" />
                </svg>
                </svg>
            </button>
            <button id="resetButton" class="audio-box__play-button resetButton">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                    <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41m-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9" />
                    <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5 5 0 0 0 8 3M3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9z" />
                </svg>
            </button>
            <!-- <button class="btn-controls"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
            class="bi bi-caret-right-fill" viewBox="0 0 16 16">
            <path
              d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
          </svg></button> -->
        </div>

    </div>
    

</nav>