<!DOCTYPE html>
<html lang="pt-br">
<?php
include('layouts/head.php');
?>
<header>
  <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
 
    <div id="header-apresentacao">
      <img src="img/logo.png"
        alt="Imagem de um logotipo composto por texto e um elemento gráfico. O texto diz “Escola de Gestão Pública do Estado do Ceará.” O elemento gráfico acima do texto representa três figuras humanas estilizadas em perfil, com a figura do meio ligeiramente maior e à frente das outras duas, sugerindo profundidade. A paleta de cores inclui tons de verde e preto."
        id="logo1" />
    </div>
</header>
<body id="apresentacao">
  <main class="audio">
    <!-- teste -->
    <div id="inicio">
      <section id="section1">
        <div id="text">
          <h2>Olá $Nome_Usuario !</h2>
          <h2>Bem-vindo ao curso de</h2>
          <h1>
            Design de Experiência
          </h1>
        </div>
        <img src="img/circles2.png"
          alt="Imagem de três círculos verdes de tamanhos diferentes em um fundo branco. O maior círculo está no canto superior direito, o círculo de tamanho médio está no canto inferior direito e o menor círculo está no canto superior esquerdo."
          id="circles2" />
        <div id="div-informacoes">
          <a href="#informacoes">
            <button id="btn-comecar">Informações</button>
          <a>
        </div>
      </section>
      <aside>
        <picture>
          <source media="(min-width:412px )" srcset="img/copia-removebg-preview.png">
          <source media="(max-width:767px) " srcset="img/copia-removebg-preview.png">
          <source media="(min-width:300px )" srcset="img/copia-removebg-preview.png">
          <source media="(max-width:411px) " srcset="img/copia-removebg-preview.png">
          <img src="img/student.png" class="img-principal"
        alt="Imagem de uma pessoa sentada em uma mesa com um livro aberto à sua frente e um laptop ao lado. Acima da cabeça da pessoa, há um balão de pensamento cheio de vários símbolos e objetos que representam ciência e aprendizado, como fitas de DNA, um modelo de átomo, engrenagens, uma lâmpada, símbolos matemáticos e a famosa equação E=mc²." />
        </picture>
      </aside>
    </div>
    <div id="informacoes">
      <section id="section2">
        <h2>Os objetivos desse curso são:</h2>
        <div id="all-objectives" >
          <div class="objective">
            <img src="img-figma/Vector (1).png" alt="" class="png-all_objectives">
            <h3>Texto Lorem Impsum</h3>
          </div>
          <div class="objective">
            <img src="img-figma/Vector.png" alt="" class="png-all_objectives">
            <h3>Texto Lorem Impsum</h3>
          </div>
          <div class="objective">
            <img src="img-figma/Vector (2).png" alt="" class="png-all_objectives">
            <h3>Texto Lorem Impsum</h3>
          </div>
          <div class="objective">
            <img src="img-figma/house-laptop-solid 1.png" alt="" class="png-all_objectives">
            <h3>Texto Lorem Impsum</h3>
          </div>
          <div class="objective">
            <img src="img-figma/book-open-reader-solid 1.png" alt="" class="png-all_objectives">
            <h3>Texto Lorem Impsum</h3>
          </div>
        </div>
      </section>
      <section id="section3">
        <h2>Atenção</h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
          industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
          scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting
          industry. Lorem Ipsum has been?
          
            
          
        </p>
        <img src="img/teacher.png" alt="" id="teacher" class="png-footer">
      </section>
      <div class="final">
        <a href="topico01.php">
      <button class="button-footer">
              Começar
            </button>
          </a>
</div>
    </div>
  </main>
</body>

</html>