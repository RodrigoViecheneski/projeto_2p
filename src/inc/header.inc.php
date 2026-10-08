<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro Exemplo</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://jsdelivr.net" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!--<link href="https://jsdelivr.net" rel="stylesheet">-->

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <header class="cabecalho">
        <div class="logo">
            <img src="../img/logo2.png" alt="MeuSite">
        </div>
        <button class="menu-toggle" aria-label="Abrir menu">&#9776;</button>
        <nav class="menu">
            <a href="#">Início</a>
            <a href="#">Cadastre-se</a>
            <a href="#">Produtos</a>
            <a href="#">Sobre</a>
            <a href="#">Contato</a>
            <a href="#">ajuda</a>
        </nav>
        <div class="carrinho">
            <div class="carrinho-icone-wrapper">
                <a href="carrinho.php"><img src="img/carrinho2.png" alt="carrinho de compras"></a>
                <span class="carrinho-badge">730</span>
            </div>
        </div>
    </header>
    <script>
        const toggleBtn = document.querySelector('.menu-toggle');
        const menu = document.querySelector('.menu');

        toggleBtn.addEventListener('click', () => {
            menu.classList.toggle('ativo');
        });
    </script>