<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signos - Fale conosco</title>
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
        <section class="corpo-secao-form">
            <div class="corpo-form">
                <form class="corpo-div-form" action="https://formspree.io/f/mnqldgew" method="POST">
				    <h3>
					    Nome:
                        <br>
					    <input class="caixa-resp" type="text" name="nome" placeholder="Digite seu nome">
					    <br><br>
					    E-mail:
                        <br>
					    <input class="caixa-resp" type="email" name="email" placeholder="Digite seu e-mail">
					    <br><br>
					    Mensagem:
                        <br>
					    <textarea class="caixa-resp" name="mensagem" rows="5" cols="40" placeholder="Por favor deixe seu comentário!"></textarea>
					    <br><br>
					    <button class="botao-enviar">Enviar!</button>
				    </h3>
			    </form>	
            </div>   
        </section>      
    </main>
    <footer class="rodape">
        <?php include "imgfooter.inc"; ?>
    </footer>
</body>
</html>