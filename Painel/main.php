<?php
    if(isset($_GET['loggout'])){
        Painel::loggout();
        
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Painel de controle</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo INCLUDE_PATH; ?>fontawesome/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH_PAINEL ?>css/style.css" rel="stylesheet" />

</head>
<body>
    <div class="menu">
        <div class="box-usuario">
            <?php 
                if($_SESSION['img'] == ''){
            ?>
            <div class="avatar-usuario">
                <i class="fa fa-user"></i>
            </div>
            <?php }else{ ?>
                <div class="imagem-usuario">
                <img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $_SESSION['img']; ?>">
                </div>
            <?php } ?>
                <div class="nome-usuario">
                    <p><?php echo $_SESSION['nome'];?></p>
                    <p><?php echo pegaCargo($_SESSION['cargo']);?></p>
                </div>
        </div>
    </div>

    <header>
        <div class="center">
            <div class="menu-btn">
                <i class="fa fa-bars"></i>
            </div>
            <div class="loggout">
                <a href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout"><i class="fa fa-window-close"></i> <span>Sair</span></a>
            </div>

            <div class="clear"></div>
        </div>
    </header>
</body>
<html>