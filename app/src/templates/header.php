<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="<?= '../../assets/css/pages/' . \App\shared\Helpers::getPageSlug() . '.css' ?>">

    <?php if ( isset($args['stylesheets']) ): ?>


        <?php foreach($args['stylesheets'] as $key => $style): ?>

            <link rel="stylesheet" href="../../assets/css/<?= $style . '.css'  ?>"></link>

        <?php endforeach; ?>

    <?php endif; ?>


    <title><?= $args['page-title'] ?? 'Title' ?></title>
</head>
<body>

<?php
    if ( isset($args['header-template']) ) {
        include __dir__ . "/" . $args['header-template'] . ".php";
    }

?>
