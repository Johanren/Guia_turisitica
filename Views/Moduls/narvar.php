<?php
session_start();
?>
<header class="header" id="header">
    <div class="header_toggle"><i class='bx bx-menu' id="header-toggle"></i></div>
    <div style="text-align: center; font-family: cursive; text-decoration: underline;"><h4>Guia-Turistica</h4></div>
    <div class="header_img"><!--<img src="Views/img/icon.jpg" alt="">--></div>
</header>
<div class="l-navbar" id="nav-bar" style="background-color: #2981cf;">
    <nav class="nav">
        <div> <a href="inicio" class="nav_logo"><box-icon name='map-alt' animation='tada' ></box-icon><span class="nav_logo-name">Guia-Turistica</span></a>
            <div class="nav_list"><?php if(!$_SESSION){}else{?><a href="frmMapa" class="nav_link <?php if($_GET['action']=='frmMapa'){print'active';}?>"><box-icon name='map' type='solid' animation='tada' ></box-icon><span class="nav_name">Ubicacion</span></a><?php } ?><a href="frmIngresar" class="nav_link <?php if($_GET['action']=='frmIngresar'){print'active';}?>"><box-icon name='log-in-circle' animation='tada' ></box-icon><span class="nav_name">Iniciar Sesión</span></a> <?php if(!$_SESSION){}else{?><a href="index.php?action=usuario&pagina=1" class="nav_link <?php if($_GET['action']=='usuario'){print'active';}?>"><box-icon name='user-pin' type='solid' animation='tada' ></box-icon><span class="nav_name">Usuarios</span> </a><?php } ?> <!--<a href="index.php?action=frmUsuario&pagina=1" class="nav_link <?php if($_GET['action']=='frmUsuario'){print'active';}?>"> <iconify-icon icon="bx:user" width="23" height="23"></iconify-icon> <span class="nav_name">Usuario</span> </a>--> <!--<a href="#" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Files</span> </a>--><!--<a href="index.php?action=frmMedicamento&pagina=1" class="nav_link <?php if($_GET['action']=='frmMedicamento'){print'active';}?>"><iconify-icon icon="game-icons:medicines" width="23" height="23"></iconify-icon><span class="nav_name">Medicamentos</span></a><a href="index.php?action=frmInsumo&pagina=1" class="nav_link <?php if($_GET['action']=='frmInsumo'){print'active';}?>"><iconify-icon icon="material-symbols:pet-supplies-outline" width="23" height="23"></iconify-icon><span class="nav_name">Insumos</span></a><a href="frmReporte" class="nav_link <?php if($_GET['action']=='frmReporte'){print'active';}?>"><i class='bx bx-bar-chart-alt-2 nav_icon'></i><span class="nav_name">Estadisticas</span></a>--></div>
        </div> <?php if(!$_SESSION){}else{?><a href="salir" class="nav_link"> <box-icon name='log-out-circle' animation='tada' ></box-icon> <span class="nav_name">Salir</span> </a><?php } ?>
    </nav>
</div>