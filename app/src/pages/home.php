<?php

$args = [
    'page-title' => 'Home',
    'stylesheets' => [
        'header',
        'footer'
    ],
    'scripts' => [
        'header',
        'pages/home'
    ]
];

include __DIR__ . "../../templates/header.php";


?>

<section class="c-content">
    <div class="c-content__banner">
        <div class="c-content__banner__inner">
            <nav class="c-content__banner__inner__menu">
                <ul>
                    <li>
                        <a href="/sobre" >Sobre nós</a>
                    </li>
                    <li>
                        <a href="/cardapio" >Cardápio</a>
                    </li>
                    <li>
                        <a href="contato">Contato</a>
                    </li>


                </ul>
            </nav>
        </div>
    </div>

    <div class="c-content__info">
        <div class="grid-container">
            <div class="grid-item img-1">Imagem 1</div>
            <div class="grid-item">Imagem 2</div>
            <div class="grid-item">Imagem 3</div>
            <div class="grid-item">Imagem 4</div>
            <div class="grid-item">Imagem 5</div>
            <div class="grid-item">Imagem 6</div>
            <div class="grid-item">Imagem 7</div>
            <div class="grid-item">Imagem 8</div>
            <div class="grid-item">Imagem 9</div>
        </div>
    </div>
</section>





<?php include __DIR__ . "../../templates/footer.php"; ?>

