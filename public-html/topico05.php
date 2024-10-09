<!DOCTYPE html>
<html lang="pt-BR">

<?php
include('layouts/head.php');
include('layouts/header.php');
?>

<body id="lesson-body">
    <?php include('layouts/others/librasFile.php') ?>
    <?php
    include('layouts/menu.php');
    ?>
    <main class="audio">
        <section class="page-control">
            <div class="prev-box">
                <a class="prev-box" href="topico04.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5M10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5" />
                    </svg>
                    <p class="prevPage">Anterior</p>
                </a>
            </div>
            <div class="next-box">
                <a class="next-box" href="topico06.php">
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>
    <script src="scripts/main.js" defer></script>
    <?php include('layouts/others/librasScript.php') ?>
</body>

</html>