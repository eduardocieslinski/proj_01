<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Eduardo Cieslinski</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descrição do meu WebSite">
    <meta name="keywords" content="palavra chave do meu site">
    <link href="<?php echo INCLUDE_PATH; ?>fontawesome/css/all.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet" />
    <meta charset="UTF-8">

</head>

<body>

    <?php
    $url = isset($_GET['url']) ? $_GET['url'] : 'home';
    switch ($url) {
        case 'depoimentos':
            echo '<target target="depoimentos" />';
            break;

        case 'servicos':
            echo '<target target="servicos" />';
            break;

    }
    ?>



    <header>
        <div class=" center">
            <div class="logo left"><a href="<?php echo INCLUDE_PATH; ?>">Logomarca</div><!--logo-->
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contact">Contato</a></li>
                </ul>
            </nav>
        </div>
        <nav class="mobile right">
            <div class="botao-menu-mobile">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
            <ul>
                <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
            </ul>
        </nav>
        <div class="clear"></div><!--clear-->
        </div> <!--center-->
    </header>

    <?php

    if (file_exists('pages/' . $url . '.php')) {
        include('pages/' . $url . '.php');
    } else {
        //podemos fazer o que quiser pois a pagina nao existe
        if ($url != 'depoimentos' && $url != 'servicos') {
            $pagina404 = true;
            include('pages/404.php');
        } else {
            include('pages/home.php');
        }
    }

    ?>


    <footer <?php if (isset($pagina404) && $pagina404 == true)
        echo 'class="fixed"'; ?>>
        <div class="center direitos-footer">
            <p>© 2023 Eduardo Cieslinski. Todos os direitos reservados.</p>
        </div><!--center-->
    </footer>


    <script src="<?php echo INCLUDE_PATH; ?>js/node_modules/jquery/dist/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/script.js"></script>
    <?php
    if ($url == 'contact') {
        ?>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBssZtRiFwlLdtoAd7K03lNnCOKRKVZ4eA">
        </script>
        <script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>
    <?php } ?>
</body>