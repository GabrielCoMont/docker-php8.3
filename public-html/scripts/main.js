// ################# NAVBAR #################

const closeButton = document.getElementById("btn-menu-close");
const navbar = document.getElementById("navbar");
const mainContent = document.getElementById("main-content");
const circles_line = document.querySelectorAll("button.circle-line");
const div_line = document.querySelector("div#buttons-line");
const img_nav = document.querySelector("img#img-close-nav");
// Função para configurar o estado inicial
function initializePage() {
  // Verifica se a navbar está em um estado específico, ajusta o estado inicial conforme necessário
  if (navbar.classList.contains("left")) {
    img_nav.style.transform = "rotate(180deg)";
    closeButton.style.filter = "none";
    closeButton.style.left = "-223px";
    navbar.style.width = "0rem";
    navbar.classList.remove("left");
    mainContent.style.paddingLeft = "10rem";
    div_line.classList.add("add");
    div_line.classList.remove("remove");
    circles_line.forEach((circle) => {
      circle.style.right = "223px";
      circle.classList.add("add");
      circle.classList.remove("remove");
    });
  } else {
    img_nav.style.transform = "rotate(-180deg)";
    closeButton.style.filter =
      "brightness(0) saturate(100%) invert(100%) sepia(0%) saturate(7500%) hue-rotate(226deg) brightness(102%) contrast(103%)";
    closeButton.style.left = "0px";
    navbar.style.width = "16.5rem";
    navbar.classList.add("left");
    mainContent.style.paddingLeft = "18rem";
    div_line.classList.remove("add");
    div_line.classList.add("remove");
    circles_line.forEach((circle) => {
      circle.style.right = "0px";
      circle.classList.remove("add");
      circle.classList.add("remove");
    });
  }
}
function initializePage() {
  if (navbar.classList.contains("left")) {
    img_nav.style.transform = "rotate(180deg)";
    closeButton.style.filter = "none";
    closeButton.style.left = "-223px";
    navbar.style.width = "0rem";
    navbar.classList.remove("left");
    mainContent.style.paddingLeft = "10rem";
    div_line.classList.add("add");
    div_line.classList.remove("remove");
    circles_line.forEach((circle) => {
      circle.style.right = "223px";
      circle.classList.add("add");
      circle.classList.remove("remove");
    });
  } else {
    img_nav.style.transform = "rotate(-180deg)";
    closeButton.style.filter =
      "brightness(0) saturate(100%) invert(100%) sepia(0%) saturate(7500%) hue-rotate(226deg) brightness(102%) contrast(103%)";
    closeButton.style.left = "0px";
    navbar.style.width = "16.5rem";
    navbar.classList.add("left");
    mainContent.style.paddingLeft = "18rem";
    div_line.classList.remove("add");
    div_line.classList.add("remove");
    circles_line.forEach((circle) => {
      circle.style.right = "0px";
      circle.classList.remove("add");
      circle.classList.add("remove");
    });
  }
}

// Configura o estado inicial quando a página é carregada
document.addEventListener("DOMContentLoaded", initializePage);

// Adiciona o listener de clique para o botão
closeButton.addEventListener("click", function () {
  if (navbar.classList.contains("left")) {
    img_nav.src = "img/chevron-left.svg";
    closeButton.style.filter = "none";
    closeButton.style.left = "-223px";
    navbar.style.width = "0rem";
    navbar.classList.remove("left");
    mainContent.style.paddingLeft = "10rem";
    div_line.classList.add("add");
    div_line.classList.remove("remove");
    circles_line.forEach((circle) => {
      circle.style.right = "223px";
      circle.classList.add("add");
      circle.classList.remove("remove");
    });
  } else {
    img_nav.src = "img/chevron-right.svg";
    closeButton.style.filter =
      "brightness(0) saturate(100%) invert(100%) sepia(0%) saturate(7500%) hue-rotate(226deg) brightness(102%) contrast(103%)";
    closeButton.style.left = "0px";
    navbar.style.width = "16.5rem";
    navbar.style.transition = "0.5s all ease";
    navbar.classList.add("left");
    mainContent.style.paddingLeft = "18rem";
    div_line.classList.remove("add");
    div_line.classList.add("remove");
    circles_line.forEach((circle) => {
      circle.style.right = "0px";
      circle.classList.remove("add");
      circle.classList.add("remove");
    });
  }
});

//Back to top
let calcScrollValue = () => {
  let scrollProgress = document.getElementById("back_to_top");
  let calcHeight = mainContent.scrollHeight - mainContent.clientHeight;
  let pos = mainContent.scrollTop; // Posição de rolagem do elemento principal
  let scrollValue = Math.round((pos * 100) / calcHeight);

  // Exibir ou ocultar o botão de rolagem
  if (pos > 100) {
    scrollProgress.style.display = "grid"; // Use flex para centralizar o conteúdo
  } else {
    scrollProgress.style.display = "none";
  }

  // Atualizar o estilo de fundo com o progresso da rolagem
  scrollProgress.style.background = `conic-gradient(#56a7b2 ${scrollValue}%, #87d1e6 ${scrollValue}%)`;
};

// Adicionar evento de rolagem ao mainContent
mainContent.onscroll = calcScrollValue;

// Adicionar evento de clique para rolar para o topo
document.getElementById("back_to_top").addEventListener("click", () => {
  mainContent.scrollTo({ top: 0, behavior: "smooth" });
});
//MODO ESCURO
const btnDarkModeToggle = document.getElementById("btn_tema");
const logo = document.querySelector("img#logo1");
const icon = document.getElementById("icone");
const themeSystem = localStorage.getItem("themeSystem") || "light";

// Aplica o tema salvo ao carregar a página
defineCurrentTheme(themeSystem);

// Alterna o tema ao clicar no botão
btnDarkModeToggle.addEventListener("click", () => {
  let currentTheme = localStorage.getItem("themeSystem") || "light";
  let newTheme = currentTheme === "light" ? "dark" : "light";
  localStorage.setItem("themeSystem", newTheme);
  defineCurrentTheme(newTheme);
  applyCurrentTheme(); // Aplica o novo tema

});

function defineCurrentTheme(theme) {
  // Define o atributo no HTML para alterar o tema
  document.documentElement.setAttribute("data-theme", theme);

  // Muda o ícone de acordo com o tema
  if (theme === "light") {
    logo.src = "img/logo.png";
    icon.src = "img/moon.svg"; // Ícone de lua para o modo claro
  } else {
    logo.src = "img/logoEGP1.png";
    icon.src = "img/sun.svg"; // Ícone de sol para o modo escuro
  }
}

// MENU FLUTUANTE

const menuButton = document.getElementById("select-btn");
const menuList = document.getElementById("sidebar");
const arrow = document.getElementById("arrow");

menuButton.addEventListener("click", function () {
  if (menuList.classList.contains("show")) {
    menuList.classList.remove("show");
    arrow.classList.remove("rotate");
  } else {
    menuList.classList.add("show");
    arrow.classList.add("rotate");
  }
});

// RESPONSIVIDADE MAIN CONTENT

// Seleciona todos os botões de tópicos e subtópicos
const topicButtons = document.querySelectorAll(".topic-btn");

topicButtons.forEach((button) => {
  const arrow = button.querySelector(".svgup");
  const subtopic = button.nextElementSibling;

  button.addEventListener("click", function () {
    // Alterna a visibilidade dos subtópicos
    subtopic.classList.toggle("add");
    // Rotaciona a seta
    arrow.classList.toggle("rotate");
  });
});

// MARCAR O TÓPICO ATUAL BASEADO NA PÁGINA ATUAL
const currentPath = window.location.pathname;
const currentPage = currentPath.substring(currentPath.lastIndexOf("/") + 1);

// Mapeamento das páginas e IDs dos tópicos
const topics = {
  "index.php": "topic01",
  "topico02.php": "topic02",
  "topico03.php": "topic03",
  // Adicione mais páginas se necessário
};

const activeTopicId = topics[currentPage];

if (activeTopicId) {
  const activeTopic = document.getElementById(activeTopicId);

  if (activeTopic) {
    activeTopic.classList.add("current-topic");
  } else {
    console.error(`Elemento com id ${activeTopicId} não encontrado.`);
  }
}

// ################# HEADER #################

//BARRA DE PESQUISA

let currentIndex = -1;
let matches = [];

document.getElementById("searchInput").addEventListener("input", function () {
  const searchValue = this.value.toLowerCase();
  const contentDiv = document.getElementById("main-content");
  const paragraphs = contentDiv.querySelectorAll("p");

  // Limpa qualquer destaque anterior
  paragraphs.forEach((paragraph) => {
    // Usar innerHTML para garantir que o HTML seja preservado
    paragraph.innerHTML = paragraph.innerHTML.replace(
      /<span class="highlight">(.*?)<\/span>/g,
      "$1"
    );
  });

  // Limpa o estado de navegação
  matches = [];
  currentIndex = -1;
  document.getElementById("prevBtn").disabled = true;
  document.getElementById("nextBtn").disabled = true;

  if (searchValue === "") {
    return;
  }

  // Destaca as palavras encontradas e armazena as correspondências
  paragraphs.forEach((paragraph) => {
    const regex = new RegExp(`(${searchValue})`, "gi");
    // Destaca as palavras encontradas
    paragraph.innerHTML = paragraph.textContent.replace(
      regex,
      '<span class="highlight">$1</span>'
    );
  });

  matches = document.querySelectorAll(".highlight");
  if (matches.length > 0) {
    currentIndex = 0;
    matches[currentIndex].classList.add("current");
    matches[currentIndex].scrollIntoView({
      behavior: "smooth",
      block: "center",
    });
    document.getElementById("prevBtn").disabled = false;
    document.getElementById("nextBtn").disabled = false;
  }
});

document.getElementById("nextBtn").addEventListener("click", function () {
  if (matches.length > 0) {
    // Remove o destaque atual antes de atualizar o índice
    if (currentIndex >= 0 && matches[currentIndex]) {
      matches[currentIndex].classList.remove("current");
    }
    // Atualiza o índice para o próximo
    currentIndex = (currentIndex + 1) % matches.length;
    matches[currentIndex].classList.add("current");
    matches[currentIndex].scrollIntoView({
      behavior: "smooth",
      block: "center",
    });
  }
});

document.getElementById("prevBtn").addEventListener("click", function () {
  if (matches.length > 0) {
    // Remove o destaque atual antes de atualizar o índice
    if (currentIndex >= 0 && matches[currentIndex]) {
      matches[currentIndex].classList.remove("current");
    }
    // Atualiza o índice para o anterior
    currentIndex = (currentIndex - 1 + matches.length) % matches.length;
    matches[currentIndex].classList.add("current");
    matches[currentIndex].scrollIntoView({
      behavior: "smooth",
      block: "center",
    });
  }
});

// MODO LEITURA
const btnReader = document.getElementById("btn_reader");
const body = document.body;
const readerBar = document.getElementById("reader-bar");

btnReader.addEventListener("click", function () {
  const isActive = body.classList.contains("mascara-ativa");
  const opacityValue = readerBar.value / 100;

  if (isActive) {
    body.classList.remove("mascara-ativa");
    readerBar.style.display = "none";
    localStorage.setItem("maskActive", "false"); // Salva o estado inativo
  } else {
    body.classList.add("mascara-ativa");
    readerBar.style.display = "block";
    body.style.setProperty("--mask-opacity", opacityValue);
    localStorage.setItem("maskActive", "true"); // Salva o estado ativo
    localStorage.setItem("maskOpacity", opacityValue); // Salva o valor de opacidade
  }
});

// Ao carregar a página, restaura o estado da máscara e a opacidade
window.addEventListener("load", function () {
  const maskActive = localStorage.getItem("maskActive");
  const savedOpacity = localStorage.getItem("maskOpacity");

  if (maskActive === "true") {
    body.classList.add("mascara-ativa");
    readerBar.style.display = "block";
    if (savedOpacity !== null) {
      body.style.setProperty("--mask-opacity", savedOpacity);
      readerBar.value = savedOpacity * 100; // Atualiza o valor do slider
    }
  } else {
    body.classList.remove("mascara-ativa");
    readerBar.style.display = "none";
  }
});
readerBar.addEventListener("input", function () {
  const opacityValue = readerBar.value / 100;
  body.style.setProperty("--mask-opacity", opacityValue);
  localStorage.setItem("maskOpacity", opacityValue); // Salva o valor no localStorage
});

// Ao carregar a página, verifica se há um valor salvo e aplica
window.addEventListener("load", function () {
  const savedOpacity = localStorage.getItem("maskOpacity");
  if (savedOpacity !== null) {
    readerBar.value = savedOpacity * 100; // Atualiza o valor do slider
    body.style.setProperty("--mask-opacity", savedOpacity); // Aplica a opacidade salva
  }
});
// Alterando a font
const changeFont = document.querySelector("input#font-change");

changeFont.addEventListener("change", function () {
  // Selecione todos os elementos da página, exceto as tags <i>
  const allElements = document.querySelectorAll("*:not(i)");

  // Verifique se o checkbox está checado
  if (changeFont.checked) {
    allElements.forEach((element) => {
      element.style.fontFamily = "oda, 'comic sans ms', clfallback, Verdana"; // Troca para Poppins
    });
  } else {
    allElements.forEach((element) => {
      element.style.fontFamily = "'Kanit', sans-serif"; // Troca para Kanit
    });
  }
});

// REGULAÇÃO DO BRILHO
const brightBar = document.getElementById("brightness-bar");
const overlay = document.getElementById("overlay-brightness");

brightBar.addEventListener("input", function () {
  const brightness = brightBar.value;
  overlay.style.backgroundColor = `rgba(0, 0, 0, ${(100 - brightness) / 100})`;
  localStorage.setItem("brightness", brightness); // Salva o valor no localStorage
});

// Ao carregar a página, verifica se há um valor salvo e aplica
window.addEventListener("load", function () {
  const savedBrightness = localStorage.getItem("brightness");
  if (savedBrightness !== null) {
    brightBar.value = savedBrightness;
    overlay.style.backgroundColor = `rgba(0, 0, 0, ${
      (100 - savedBrightness) / 100
    })`;
  }
});
// BOTÃO AUMENTAR E DIMINUIR FONTE

// Define o tamanho inicial da fonte e o incremento
// Define o tamanho inicial da fonte e o incremento
const baseFontSize = 16; // Tamanho da fonte base em pixels
const increment = 4; // Incremento/decremento do tamanho da fonte em pixels

// Seleciona o elemento body

// Função para salvar o tamanho da fonte no localStorage
function saveFontSize(size) {
  localStorage.setItem("fontSize", size);
}

// Função para carregar o tamanho da fonte salvo no localStorage
function loadFontSize() {
  const savedSize = localStorage.getItem("fontSize");
  if (savedSize) {
    body.style.fontSize = `${savedSize}px`;
  } else {
    body.style.fontSize = `${baseFontSize}px`; // Se não houver valor salvo, usa o tamanho base
  }
}

// Função para aumentar o tamanho da fonte
function increaseFontSize() {
  const currentSize = parseFloat(window.getComputedStyle(body).fontSize);
  if (currentSize <= 24) {
    const newSize = currentSize + increment;
    body.style.fontSize = `${newSize}px`;
    mainContent.style.fontSize = `${newSize}px`;
    saveFontSize(newSize); // Salva o novo tamanho no localStorage
  }
}

// Função para diminuir o tamanho da fonte
function decreaseFontSize() {
  const currentSize = parseFloat(window.getComputedStyle(body).fontSize);
  if (currentSize >= 14) {
    const newSize = currentSize - increment;
    body.style.fontSize = `${newSize}px`;
    mainContent.style.fontSize = `${newSize}px`;
    saveFontSize(newSize); // Salva o novo tamanho no localStorage
  }
}

// Carrega o tamanho da fonte salvo ao carregar a página
window.addEventListener("load", loadFontSize);

// Adiciona os ouvintes de eventos para os botões
document
  .getElementById("increase-font")
  .addEventListener("click", increaseFontSize);
document
  .getElementById("decrease-font")
  .addEventListener("click", decreaseFontSize);

//Botão de visor
const visorButton = document.querySelector("button#btn_visor");
const visorPopup = document.querySelector("div#visor-popup");
const closeVisorPopup = document.querySelector("button#close-visor");
visorButton.addEventListener("click", function () {
  hideAllPopups();

  visorPopup.style.display = "flex";
});
closeVisorPopup.addEventListener("click", function () {
  visorPopup.style.display = "none";
});
// BOTÃO ACESSIBILIDADE
const defaultReaderValue = 0;
const defaultBrightnessValue = 100;

const accessibilityButton = document.getElementById("btn_acessibilidade");
const accessibilityPopup = document.getElementById("accessibility-popup");
const resetButton = document.getElementById("reset-settings");
const closePopupButton = document.getElementById("close-popup");

// BOTÃO ÁUDIO INFO

const audioButton = document.getElementById("audio-info");
const audioPopup = document.getElementById("audio-popup");
const closePopupAudio = document.getElementById("close-popup2");

// Mostrar a caixa flutuante
audioButton.addEventListener("click", () => {
  hideAllPopups();
  audioPopup.style.display = "block";
});

// Fechar a caixa flutuante
closePopupAudio.addEventListener("click", () => {
  audioPopup.style.display = "none";
});

// Fechar a caixa flutuante clicando fora dela
window.addEventListener("click", (event) => {
  if (event.target == audioPopup) {
    audioPopup.style.display = "none";
  }
});
// Esconder todas as caixas flutuantes
function hideAllPopups() {
  accessibilityPopup.style.display = "none";
  audioPopup.style.display = "none";
  visorPopup.style.display = "none";
}

// Mostrar a caixa flutuante
accessibilityButton.addEventListener("click", () => {
  hideAllPopups();
  accessibilityPopup.style.display = "block";
});

// Fechar a caixa flutuante
closePopupButton.addEventListener("click", () => {
  accessibilityPopup.style.display = "none";
});

// Fechar a caixa flutuante clicando fora dela
window.addEventListener("click", (event) => {
  if (event.target === accessibilityPopup) {
    accessibilityPopup.style.display = "none";
  }
});

// Função para resetar os valores
function resetSettings() {
  // Remove a classe 'mascara-ativa' e esconde a barra de leitura
  body.classList.remove("mascara-ativa");
  readerBar.style.display = "none";

  // Restaura a opacidade da máscara
  body.style.setProperty("--mask-opacity", defaultReaderValue / 100);

  // Restaura a cor de fundo do overlay
  overlay.style.backgroundColor = `rgba(0, 0, 0, ${
    (100 - defaultBrightnessValue) / 100
  })`;

  // Restaura os valores dos controles
  brightBar.value = defaultBrightnessValue;
  readerBar.value = defaultReaderValue;

  // Restaura o tamanho da fonte
  body.style.fontSize = `${baseFontSize}px`;
  mainContent.style.fontSize = `${baseFontSize}px`;

  // Limpa as configurações do localStorage
  localStorage.removeItem("readerValue");
  localStorage.removeItem("brightnessValue");
  localStorage.removeItem("fontSize");
}

// Adiciona evento ao botão de resetar
resetButton.addEventListener("click", resetSettings);

// FUNÇÃO PARA A FALA DO TEXTO
let utterance;
let speechRate = 1.5; // Velocidade inicial da fala
let currentText = ""; // Texto atual que está sendo falado

// Selecionar todos os botões play, stop e reset
let playButtons = document.querySelectorAll("button.playButton");
let stopButtons = document.querySelectorAll("button.stopButton");
let resetButtons = document.querySelectorAll("button.resetButton");
let audio_img = document.querySelector("img#audio-img");
speechSynthesis.cancel(); // Para e reseta a fala

// Função para esconder todos os botões play e mostrar os stop
function esconderTodosPlayMostrarStop() {
  playButtons.forEach((button) => {
    button.style.display = "none";
  });
  stopButtons.forEach((button) => {
    button.style.display = "flex";
  });
}

// Função para mostrar todos os botões play e esconder os stop
function mostrarTodosPlayEsconderStop() {
  playButtons.forEach((button) => {
    button.style.display = "flex";
  });
  stopButtons.forEach((button) => {
    button.style.display = "none";
  });
}

// Função para configurar eventos para cada botão play
playButtons.forEach((audio_play) => {
  audio_play.addEventListener("click", function () {
    if (speechSynthesis.paused) {
      audio_img.src = "./img/audio_gif.gif";
      speechSynthesis.resume(); // Retoma a reprodução se estiver pausado
    } else {
      // Preparar o utterance para a leitura do texto
      if (currentText === "") {
        alert("Nenhum texto foi iniciado para leitura.");
        return;
      }
      utterance = new SpeechSynthesisUtterance(currentText);
      utterance.lang = "pt-BR";
      utterance.rate = speechRate;
      utterance.pitch = 1;
      utterance.volume = 1;

      speechSynthesis.speak(utterance); // Inicia a leitura do áudio
      audio_img.src = "./img/audio_gif.gif";
    }
    // Esconder todos os botões play e mostrar todos os stop
    esconderTodosPlayMostrarStop();
  });
});

// Função para configurar eventos para cada botão stop
stopButtons.forEach((audio_stop) => {
  audio_stop.addEventListener("click", function () {
    // Alterar a imagem quando o botão de pausa for clicado, independentemente do estado
    audio_img.src = "./img/audio_img.png";

    if (speechSynthesis.speaking && !speechSynthesis.paused) {
      speechSynthesis.pause(); // Pausa a reprodução do áudio
    }

    // Mostrar todos os botões play e esconder todos os stop
    mostrarTodosPlayEsconderStop();
  });
});

// Função para configurar eventos para cada botão reset
resetButtons.forEach((audio_reset) => {
  audio_reset.addEventListener("click", function () {
    // Mostrar todos os botões play e esconder todos os stop
    audio_img.src = "./img/audio_img.png";
    mostrarTodosPlayEsconderStop();
    speechSynthesis.cancel(); // Para e reseta a fala
    currentText = ""; // Limpa o texto atual
  });
});

// Função para ler o texto de uma classe
function lerTexto(className) {
  const elementosTexto = document.querySelectorAll(`.${className}`);
  let textoCompleto = "";

  // Iterar sobre todos os elementos da classe fornecida
  elementosTexto.forEach((elemento) => {
    // Adicionar o texto do elemento à variável 'textoCompleto'
    textoCompleto += elemento.innerText + " ";

    // Procurar por imagens dentro desse elemento
    const imagens = elemento.querySelectorAll("img");
    imagens.forEach((imagem) => {
      const descricaoAlt = imagem.alt;
      if (descricaoAlt) {
        // Adicionar o texto do 'alt' ao conteúdo a ser lido
        textoCompleto += descricaoAlt + " ";
      }
    });
  });

  if (textoCompleto.trim() !== "") {
    currentText = textoCompleto.trim(); // Armazena o texto atual para ser lido
  } else {
    alert("Nenhum conteúdo para ser lido");
    console.error(`Nenhum texto encontrado para a classe ${className}.`);
  }
}

// MODAL DO POMODORO
document.addEventListener("DOMContentLoaded", () => {
  let modal = document.getElementById("myModal"); // Modal do Pomodoro
  let ActiveModalButton = document.querySelector("button#modal-button"); // Botão para fechar o modal e ativar Pomodoro
  let closeBtn = document.querySelector(".close"); // Botão X para fechar o modal
  let modalOpened = false; // Controle para verificar se o modal já foi aberto
  let containerPomodoro = document.querySelector("div#pomodoro-container"); // Container do Pomodoro
  let openModalBtns = document.querySelectorAll("button#btn-pomodoro"); // Seleciona todos os botões com o ID btn-pomodoro

  // Função para abrir o modal
  function openModal() {
    modal.style.display = "block";
    modalOpened = true;
  }

  // Função para fechar o modal
  function closeModal() {
    modal.style.display = "none";
    modalOpened = false;
  }

  // Exibir o modal apenas na primeira visita
  if (!localStorage.getItem("modalShown")) {
    openModal();
    localStorage.setItem("modalShown", "true"); // Marca que o modal foi mostrado
  }

  // Abrir modal ao clicar no botão do Pomodoro
  openModalBtns.forEach((openModalBtn) => {
    openModalBtn.addEventListener("click", function () {
      if (containerPomodoro.classList.contains("required")) {
        openModal(); // Abre o modal se ainda não estiver aberto
        containerPomodoro.classList.remove("active");
      }
      if (
        containerPomodoro.classList.contains("active") &&
        containerPomodoro.classList.contains("remove")
      ) {
        containerPomodoro.classList.add("oneTimeIf");
        // Alterna o estado do Pomodoro
        containerPomodoro.classList.add("add");
        containerPomodoro.classList.remove("remove");
        // Salva no localStorage o estado do Pomodoro (ativo ou não)
        containerPomodoro.classList.remove("active");

        let isActive = containerPomodoro.classList.contains("active");
        localStorage.setItem("pomodoroAtivado", isActive);
      } else {
        containerPomodoro.classList.add("remove");
        containerPomodoro.classList.remove("add");
        containerPomodoro.classList.add("active");
      }
    });
  });

  // Fechar o modal ao clicar no botão "modal-button" e ativar o Pomodoro
  ActiveModalButton.addEventListener("click", function () {
    containerPomodoro.classList.add("active"); // Ativa o Pomodoro
    containerPomodoro.classList.remove("remove");
    if (containerPomodoro.classList.contains("required")) {
      closeModal(); // Fecha o modal
      containerPomodoro.classList.add("add");

      localStorage.setItem("pomodoroAtivado", "true"); // Salva que o Pomodoro está ativo
      containerPomodoro.classList.remove("required");
    }
  });

  closeBtn.addEventListener("click", function () {
    closeModal(); // Fecha o modal
  });

  // Fechar o modal ao clicar fora dele
  window.addEventListener("click", (event) => {
    if (event.target === modal) {
      closeModal();
    }
  });

  // Verificar se o Pomodoro estava ativo ao carregar a página
  if (localStorage.getItem("pomodoroAtivado") === "true") {
    containerPomodoro.classList.add("active"); // Mantém o Pomodoro ativo se estava ativo antes
  }
});

let isRunning = false;
let timeLeft;
let timer;

// Cores do tema
const colors = {
  light: {
    container: "#56a7b2", // Cor original no tema claro
    expired: "#cf2525", // Cor quando o tempo esgotar
  },
  dark: {
    container: "#424242", // Cor original no tema escuro
    expired: "#cf2525", // Cor quando o tempo esgotar
  },
};

// Função para salvar o estado atual no localStorage
function saveState() {
  localStorage.setItem("isRunning", isRunning);
  localStorage.setItem("timeLeft", timeLeft);
}

// Função para carregar o estado salvo do localStorage
function loadState() {
  isRunning = localStorage.getItem("isRunning") === "true";
  timeLeft = parseInt(localStorage.getItem("timeLeft")) || 0;

  applyCurrentTheme(); // Aplica a cor do tema ao carregar
  displayTime(); // Exibe o tempo ao carregar

  if (isRunning) {
    timer = setInterval(updateTimer, 1000);
  }
}

// Função para aplicar a cor do tema ao contêiner
function applyCurrentTheme() {
  const currentTheme = localStorage.getItem("themeSystem") || "light";
  document.getElementById("pomodoro-container").style.backgroundColor =
    colors[currentTheme].container;
}

// Função para exibir o tempo
function displayTime() {
  const minutes = Math.floor(timeLeft / 60);
  const seconds = timeLeft % 60;

  document.getElementById("timer").innerHTML = `${
    minutes < 10 ? "0" : ""
  }${minutes}:${seconds < 10 ? "0" : ""}${seconds}`;

  applyCurrentTheme(); // Aplica a cor do tema ao exibir o tempo
}

// Função para iniciar o timer
function startTimer() {
  if (!isRunning) {
    isRunning = true;

    applyCurrentTheme(); // Aplica a cor do tema ao iniciar

    const selectedTime = document.getElementById("time-select").value;

    if (!selectedTime || isNaN(selectedTime) || selectedTime <= 0) {
      alert("Por favor, insira um número válido de minutos.");
      isRunning = false;
      return;
    }

    timeLeft = parseInt(selectedTime) * 60;
    displayTime();
    timer = setInterval(updateTimer, 1000);
    saveState(); // Salva o estado ao iniciar o cronômetro
  }
}

// Função para atualizar o timer
function updateTimer() {
  if (timeLeft > 0) {
    timeLeft--;
    displayTime();
    saveState(); // Salva o estado a cada segundo
  } else {
    clearInterval(timer);
    alert("Tempo esgotado!");
    isRunning = false;

    // Muda a cor do contêiner para vermelho
    const currentTheme = localStorage.getItem("themeSystem") || "light";
    document.getElementById("pomodoro-container").style.backgroundColor =
      colors[currentTheme].expired;

    localStorage.removeItem("isRunning");
    localStorage.removeItem("timeLeft");
  }
}

// Função para redefinir o timer
function resetTimer() {
  clearInterval(timer);
  isRunning = false;

  // Aplica a cor do tema ao redefinir
  applyCurrentTheme();

  const selectedTime = document.getElementById("time-select").value;

  if (!selectedTime || isNaN(selectedTime) || selectedTime <= 0) {
    timeLeft = 0; // Se não há tempo selecionado, setar para 0
    displayTime();
    localStorage.removeItem("isRunning");
    localStorage.removeItem("timeLeft");
    return;
  }

  timeLeft = parseInt(selectedTime) * 60; // Reseta o tempo para o valor selecionado
  displayTime();
  saveState(); // Salva o estado após o reset
}

// Função para inicializar o timer
function initializeTimer() {
  applyCurrentTheme(); // Aplica o novo tema

  loadState(); // Carrega o estado ao inicializar a página
  if (timeLeft === undefined || timeLeft === null) {
    const selectedTime = document.getElementById("time-select").value;
    if (selectedTime && !isNaN(selectedTime) && selectedTime > 0) {
      timeLeft = parseInt(selectedTime) * 60;
    } else {
      timeLeft = 0;
    }
    displayTime(); // Exibe 00:00 se timeLeft for 0
  }
}

// Listener para o seletor de tempo
document.getElementById("time-select").addEventListener("input", function () {
  const value = this.value;
  applyCurrentTheme(); // Aplica o novo tema

  if (value.length > 2) {
    this.value = value.slice(0, 2);
  }

  if (parseInt(value) > 90) {
    this.value = 90;
  }
});

// Função para alternar o tema
function toggleTheme() {
  const currentTheme = localStorage.getItem("themeSystem") || "light";
  const newTheme = currentTheme === "light" ? "dark" : "light";

  localStorage.setItem("themeSystem", newTheme);
  applyCurrentTheme(); // Aplica o novo tema
}

// Função para inicializar o timer
function initializeTimer() {
  applyCurrentTheme(); // Aplica o novo tema
  loadState(); // Carrega o estado ao inicializar a página
  if (timeLeft === undefined || timeLeft === null) {
    const selectedTime = document.getElementById("time-select").value;
    if (selectedTime && !isNaN(selectedTime) && selectedTime > 0) {
      timeLeft = parseInt(selectedTime) * 60;
    } else {
      timeLeft = 0;
    }
    displayTime(); // Exibe 00:00 se timeLeft for 0
  }
}

// Listener para os botões
document.getElementById("start-btn").addEventListener("click", startTimer);
document.getElementById("reset-btn").addEventListener("click", resetTimer);

// Listener para o seletor de tempo
document.getElementById("time-select").addEventListener("input", function () {
  const value = this.value;
  applyCurrentTheme(); // Aplica o novo tema

  if (value.length > 2) {
    this.value = value.slice(0, 2);
  }

  if (parseInt(value) > 90) {
    this.value = 90;
  }
});

// Inicializa o cronômetro ao carregar a página
initializeTimer();
applyCurrentTheme(); // Aplica o novo tema

//########## CAIXA DE PERGUNTAS ##########//
document.addEventListener('DOMContentLoaded', () => {
    const answers = document.querySelectorAll('.answer');
    const correct = document.getElementById('correct');
    const explanation = document.getElementById('explanation');

    answers.forEach(answer => {
        answer.addEventListener('click', (event) => {
            // Previne que o clique na opção feche o balão
            event.stopPropagation();

            // Remove feedback de todas as opções
            answers.forEach(r => {
                const existingFeedback = r.querySelector('.feedback');
                if (existingFeedback) {
                    existingFeedback.remove();
                }
                // Remove as classes de cor das opções
                r.classList.remove('correct', 'incorrect');
            });

      // Cria a nova caixa de feedback
      const feedback = document.createElement("div");
      feedback.classList.add("feedback");

      // Cria o ícone de feedback
      const feedbackIcon = document.createElement("span");
      feedbackIcon.classList.add("feedback-icon");

      // Cria o texto da explicação
      const feedbackText = document.createElement("span");
      feedbackText.classList.add("feedback-text");

            // Verifica a opção
            if (answer.textContent.trim() === correct.textContent.trim()) {
                feedbackIcon.textContent = '✔️'; // Símbolo de correto
                feedbackText.textContent = 'Correto! ' + explanation.textContent;
                feedback.classList.add('correct');
                answer.classList.add('correct'); // Adiciona a classe de correto
            } else {
                feedbackIcon.textContent = '❌'; // Símbolo de incorreto
                feedbackText.textContent = 'Incorreto. ' + explanation.textContent;
                feedback.classList.add('incorrect');
                answer.classList.add('incorrect'); // Adiciona a classe de incorreto
                
                // Marca a opção correta
                const answerCorreta = Array.from(answers).find(r => r.textContent.trim() === correct.textContent.trim());
                if (answerCorreta) {
                    answerCorreta.classList.add('correct'); // Adiciona a classe de correto à answer correta
                }
            }

      // Adiciona o ícone e o texto à caixa de feedback
      feedback.appendChild(feedbackIcon); // Adiciona o ícone no topo
      feedback.appendChild(feedbackText); // Adiciona o texto abaixo do ícone
      answer.appendChild(feedback);

            // Exibe a caixa de feedback
            feedback.style.display = 'block'; // Exibe a caixa de feedback

            // Desabilita a interação com as opções
            answers.forEach(r => {
                r.style.pointerEvents = 'none'; // Desabilita eventos de ponteiro
            });
        });
    });

//########## QUIZ FINAL ##########//
const questions = document.querySelectorAll('.questions'); // Todas as perguntas
let currentQuestionIndex = 0; // Índice da pergunta atual
let score = 0; // Pontuação do usuário

function loadQuestion() {
    const currentQuestion = questions[currentQuestionIndex];
    
    if(currentQuestion) {
      // Define o texto da pergunta
    document.getElementById('question').textContent = currentQuestion.querySelector('.question').textContent;

    const optionsContainer = document.querySelector('.options-container');
    optionsContainer.innerHTML = ''; // Limpa as opções anteriores

    // Adiciona as opções de resposta
    currentQuestion.querySelectorAll('.answer').forEach(div => {
        const answerDiv = div.cloneNode(true); // Clona a div da resposta
        answerDiv.onclick = () => checkAnswer(answerDiv, currentQuestion.dataset.answer);
        optionsContainer.appendChild(answerDiv); // Adiciona a opção ao contêiner
    });
    }
}

function checkAnswer(selectedOption, correctAnswer) {
    const optionsContainer = document.querySelector('.options-container');

    // Remove qualquer feedback existente antes de adicionar novo
    optionsContainer.querySelectorAll('.feedback').forEach(feedback => {
        feedback.remove();
    });

    if (selectedOption.textContent.trim() === correctAnswer.trim()) {
        score++;
        selectedOption.classList.add('correct');
        showFeedback(selectedOption, true);  // Chama a função para mostrar o feedback correto
        answeredCurrentQuestion = true;  // Marca como respondida
    } else {
        selectedOption.classList.add('incorrect');
        showFeedback(selectedOption, false);  // Chama a função para mostrar o feedback incorreto
        answeredCurrentQuestion = true;

        const answerCorreta = Array.from(optionsContainer.children).find(r => r.textContent.trim() === correctAnswer.trim());
        if (answerCorreta) {
            answerCorreta.classList.add('correct'); // Adiciona a classe de correto à resposta correta
        }
    }

    // Desabilita todas as opções após responder
    optionsContainer.querySelectorAll('.answer').forEach(div => {
        div.style.pointerEvents = 'none';  // Desabilita eventos de ponteiro
    });

}

function showFeedback(selectedOption, isCorrect) {
    const feedback = document.createElement('div');
    feedback.classList.add('feedback');

    const feedbackIcon = document.createElement('span');
    feedbackIcon.classList.add('feedback-icon');

    const feedbackText = document.createElement('span');
    feedbackText.classList.add('feedback-text');

    if (isCorrect) {
        feedbackIcon.textContent = '✔️'; 
        feedback.classList.add('correct');
    } else {
        feedbackIcon.textContent = '❌';
        feedback.classList.add('incorrect');
    }

    selectedOption.appendChild(feedback);
    feedback.appendChild(feedbackIcon);
    feedback.appendChild(feedbackText);
    
    // Exibe a caixa de feedback
    feedback.style.display = 'block';
}

const btnQuiz = document.querySelector('.btn-quiz');

if (btnQuiz) {
  btnQuiz.addEventListener('click', () => {
  

    if (!answeredCurrentQuestion) return; // Impede que avance se não tiver respondido
  
    currentQuestionIndex++;
    
    if (currentQuestionIndex < questions.length) {
      loadQuestion();
      answeredCurrentQuestion = false;
    } else {
      showResult();
    }
  
    if (currentQuestionIndex === questions.length - 1) {
      btnQuiz.textContent = ' Mostrar resultado ';
    }
  
  });
}

function showResult() {
  const btnQuiz = document.querySelector('.btn-quiz');
  btnQuiz.style.display = 'none';

  const resultContainer = document.querySelector('.result');
  resultContainer.style.display = 'block';

  const displayQuestions = document.getElementById('display_questions2');
  displayQuestions.style.display = 'none';

  resultContainer.innerHTML = `<h1>VOCÊ ACERTOU<br> ${score}/${questions.length}</h1>`;
}

loadQuestion(); // Carrega a primeira pergunta

//########## CAIXA DE PARABÉNS ##########//

  const btnCongratulations = document.querySelectorAll('.btn-congratulations');
  const overlayCongratulations = document.getElementById('overlay');

    btnCongratulations.forEach(btn => {
        btn.addEventListener('click', (event) => {
            event.stopPropagation();

            btn.disabled = true;
            document.body.style.overflow = 'hidden';

            if(overlayCongratulations) {
              overlayCongratulations.style.display = 'flex'; // Mostra a caixa

              const closeOverlay = (event) => {
                  if (!overlayCongratulations.contains(event.target) || event.target.closest('.bi-x') || event.target.closest('.bi-x-lg')) {
                      overlayCongratulations.style.display = 'none'; // Oculta a caixa
                      btn.disabled = false; // Habilita o botão novamente
                      document.body.style.overflow = ''; // Restaura o overflow
                      document.removeEventListener('click', closeOverlay);
                  }
              };
  
             
            document.addEventListener('click', closeOverlay);
            }
        });
    });
  });
// timeline criada pelo Vini e adicionado pelo Renato junto da estilização
$(document).ready(function () {
  $(".step").click(function () {
    // Remove a classe 'active' de todas as etapas e conteúdos
    $(".step").removeClass("active");
    $(".section-content").removeClass("active");

    // Adiciona 'active' à etapa clicada e suas anteriores
    $(this).addClass("active").prevAll().addClass("active");

    // Obtém o índice da etapa clicada
    const index = $(this).index();
    const widthPercentage = (index * 100) / 6;

    // Atualiza a largura da barra de progresso
    $("#line-progress").css("width", `${widthPercentage}%`);

    // Ativa o conteúdo correspondente
    $(".section-content").eq(index).addClass("active");
  });
});

//Open da audio descrição
const open_descricao = document.querySelector("img.open_description");
const container_descricao = document.querySelector("div#scroll-description");

if(open_descricao) {
  open_descricao.addEventListener("click", function () {
    if (
      container_descricao.style.display === "none" ||
      container_descricao.style.display === ""
    ) {
      container_descricao.style.display = "flex";
      open_descricao.style.transform = "rotate(90deg)";
      open_descricao.style.transition = "0.5s";
    } else {
      container_descricao.style.display = "none";
      open_descricao.style.transform = "rotate(0deg)";
      open_descricao.style.transition = "0.5s";
    }
  });
}

//abrindo modal de image//
function openModal(imageSrc, captionText) {
  const modal = document.getElementById("modal");
  const modalImage = document.getElementById("modalImage");
  const caption = document.getElementById("caption");

  modal.style.display = "block";
  modalImage.src = imageSrc;
  caption.innerHTML = `<strong>Fonte:</strong> "${captionText}"`;
}

function closeModal() {
  const modal = document.getElementById("modal");
  modal.style.display = "none";
}