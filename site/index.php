<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site desenvolvido para estudos com o tema: signos.">
    <title>Signos - Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon/1.ico">
</head>
<body>
    <header class="cabecalho">
        <?php include "imgheader.inc"; ?>    
        <nav class="cabecalho-menu">
            <?php include "menuheader.inc"; ?>
        </nav>
    </header>
    <main class="corpo">     
        <nav class="corpo-menu">
            <?php include "menumain.inc"; ?>
        </nav>           
        <section class="corpo-div">
            <div class="corpo-div-home">
                <h1 class="corpo-div-titulo">Sejam bem-vindxs ao Signos!</h1>
                <h3 class="corpo-div-subtitulo">Site criado e desenvolvido por Fernanda Ruaro com o objetivo de estudar e aplicar meus conhecimentos em HTML e CSS. Este site com o tema -signos- foi desenvolvido para o <a class="link-repo" href="https://github.com/Feruaro/site-disciplina-html" target="_blank">projeto final</a> da disciplina de "HTML" e aprofundando meus conhecimentos resolvi dar um upgrade <a class="link-repo" href="https://github.com/Feruaro/Site-Signos-Upgrade" target="_blank">neste projeto</a> para exercitar e portfólio! </h3>
                <h4 class="corpo-div-subtitulo">** Fiquem a vontade em deixar sua opinião, dica ou conselho através da aba <a class="link-repo" href="faleconosco.php">"Fale conosco"</a> **</h4>           
            </div>
        </section>
    </main>
    <footer class="rodape">
        <?php include "imgfooter.inc"; ?>
    </footer>
</body>
</html>