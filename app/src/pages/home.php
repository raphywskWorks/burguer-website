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
    ],
    'header-template' => 'default-header',
];

include __DIR__ . "../../templates/header.php";


?>

<section class="c-content">
    <div class="c-content__banner">

    </div>

    <div class="c-content__info">

    </div>
</section>





<?php include __DIR__ . "../../templates/footer.php"; ?>

