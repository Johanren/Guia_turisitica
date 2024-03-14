<?php

require_once "../Models/modeloMapa.php";

function parseToXML($htmlStr)
{
$xmlStr=str_replace('<','&lt;',$htmlStr);
$xmlStr=str_replace('>','&gt;',$xmlStr);
$xmlStr=str_replace('"','&quot;',$xmlStr);
$xmlStr=str_replace("'",'&#39;',$xmlStr);
$xmlStr=str_replace("&",'&amp;',$xmlStr);
return $xmlStr;
}

$listar = new ModeloMapa();
$lis = $listar->listarMapa();

header("Content-type: text/xml");


echo "<?xml version='1.0' ?>";
echo '<markers>';
foreach ($lis as $key => $row) {
    echo '<marker ';
  echo 'idmapa="' . $row['idmapa'] . '" ';
  echo 'persona="' . $row['persona'] . '" ';
  echo 'descripcion="' . parseToXML($row['descripcion']) . '" ';
  echo 'edad="' . $row['edad'] . '" ';
  echo 'lat="' . $row['lat'] . '" ';
  echo 'lng="' . $row['lng'] . '" ';
  echo '/>';
  $ind = $ind + 1;
}

echo '</markers>';