<?php

require_once 'phpqrcode/qrlib.php';
$dir = 'temp/';
if (!file_exists($dir))
    mkdir($dir);
$filename = $dir . 'text.png';
$tamano = 10;
$level = "M";
$frameSize = 3;
$contenido = "http://" . $_SERVER['HTTP_HOST'] . "/Guia_turisitica";
QRcode::png($contenido, $filename, $level, $tamano, $frameSize);
?>
<div class="container">
    <div class="row">
        <div class="col ms-5">
            <img src="<?php echo $filename ?>" alt="">
        </div>
    </div>
</div>