<header id="header">
  <div id="overlay-brightness"></div>

  <div id="header">
    <img src="img/logo.png"
      alt="Imagem de um logotipo composto por texto e um elemento gráfico. O texto diz “Escola de Gestão Pública do Estado do Ceará.” O elemento gráfico acima do texto representa três figuras humanas estilizadas em perfil, com a figura do meio ligeiramente maior e à frente das outras duas, sugerindo profundidade. A paleta de cores inclui tons de verde e preto."
      id="logo1" />

    <!-- ###### Barra de pesquisar ###### -->
    <div class="search-box">
      <input type="text" id="searchInput" placeholder="🔍︎ Pesquisar Conteúdo">
      <button id="prevBtn" title="Ir para o texto anterior" disabled><img src="img/arrow-up-short.svg" class="searchButtons"></button>
      <button id="nextBtn" title="Ir para o próximo texto" disabled><img src="img/arrow-down-short.svg" class="searchButtons"></button>
    </div>

    <div class="required pomodoro-container remove" id="pomodoro-container">
      <div class="timer-complete">
        <div id="timer"> </div>
        <p class="minandsec">Min  Seg</p>
      </div>
      <input id="time-select" type="number" min="1" max="90" placeholder="Minutos">
      <button id="start-btn" class="button-pomodoro" onclick="startTimer()"> Iniciar</button>
      <button id="reset-btn" class="button-pomodoro" onclick="resetTimer()">Resetar</button>
    </div>
    <button id="btn-pomodoro">
      <img src="img/stopwatch-fill.svg" alt="Imagem de um relógio branco" id="time-img">
      <p class="button-txt">Pomodoro</p>
    </button>

    <button id="btn_visor">
      <img src="img/eye-fill.svg
      " alt="">
      <p class="button-txt">Visor</p>
    </button>
    <div class="popup" id="visor-popup">
      <h3 id="titulo-acessibilidade">Configurações de Visão</h3>
      <div id="brilho">
        <label for="brightness-bar"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-stars" viewBox="0 0 16 16">
            <path
              d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.73 1.73 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 2.31zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z" />
          </svg>Brilho:</label>
        <input type="range" min="10" max="100" value="100" name="brightness-bar" id="brightness-bar"
          aria-label="Barra de ajuste de brilho">
      </div>
      <div class="darkTheme" id="btn_tema">
        <button id="btn_tema"><img src="img/moon.svg" id="icone" alt="Ícone de tema">
          <p class="button-txt">Mudar Tema</p>
        </button>
      </div>
      <button id="close-visor">Concluido</button>
    </div>
    <!-- Botão de Acessibilidade -->
    <button type="button" id="btn_acessibilidade" aria-label="Configurações de acessibilidade">
      <img src="img/universal-access-circle.svg" alt="Imagem de duas engrenagens brancas, a maior engrenagem fica embaixo e a menor fica em cima da maior" id="gears">
      <p class="button-txt">Acessibilidade</p>
    </button>

    <!-- Caixa Flutuante de Acessibilidade -->
    <div class="popup" id="accessibility-popup">
      <div class="popup-content">
        <h3 id="titulo-acessibilidade">Configurações de Acessibilidade</h3>
        <button type="button" id="btn_reader" aria-label="Ajustar conforto ocular">
          <img src="img/eye.svg" alt="Ícone de olho" id="icone2">
          <div>Conforto Ocular</div>
        </button>
        <input type="range" min="10" max="70" value="10" name="reader-bar" id="reader-bar"
          aria-label="Barra de ajuste de conforto ocular">
      <div class="font">
        <p>Fonte para pessoas com dislexia
            <label class="switch">
                <input type="checkbox" id="font-change">
                <span class="slider"></span>
            </label>
        </p>
    </div>
        <div class="font-size-controls">
          Tamanho da fonte
          <button type="button" id="decrease-font" aria-label="Diminuir tamanho da fonte">
            A -
          </button>
          <button type="button" id="increase-font" aria-label="Aumentar tamanho da fonte">
            A +
          </button>
        </div>

        <div class="button-container">
          <button type="button" id="reset-settings" aria-label="Resetar configurações para o padrão">
            Resetar
          </button>
          <button type="button" id="close-popup" aria-label="Fechar caixa de acessibilidade">Concluído</button>
        </div>
      </div>
    </div>

  </div>
</header>
