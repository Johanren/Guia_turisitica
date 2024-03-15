<?php
$mapa = new ModeloMapa();
$lis = $mapa->listarMapa();
$eliminar = new ControladorMapa();
$eliminar->eliminarUbicacion();

if (isset($_GET['action'])) {
    if ($_GET['action'] == "okAgregar") {
        print '
    <div class="alert alert-success d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
    <div>
      Ubicación Agregada
    </div>
  </div>';
    }
    if ($_GET['action'] == "okEditar") {
        print '
    <div class="alert alert-success d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
    <div>
      Ubicación Actualizada
    </div>
  </div>';
    }
    if ($_GET['action'] == "okEliminar") {
        print '
    <div class="alert alert-danger d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
    <div>
      Ubicación Eliminada
    </div>
  </div>';
    }
}
?>
<div class="container">
    <div class="row">
        <div class="col">
            <a href="agregarUbicacion" class="btn btn-primary">Agregar Ubicación</a>
            <br><br>
            <table class="table">
                <thead>
                    <tr>
                        <th>Local</th>
                        <th>Descripcion</th>
                        <th>Telefono</th>
                        <th>Latitud</th>
                        <th>Longitud</th>
                        <th>Condicion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($lis as $key => $value) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $value['persona'] ?>
                            </td>
                            <td>
                                <?php echo $value['descripcion'] ?>
                            </td>
                            <td>
                                <?php echo $value['edad'] ?>
                            </td>
                            <td>
                                <?php echo $value['lat'] ?>
                            </td>
                            <td>
                                <?php echo $value['lng'] ?>
                            </td>
                            <td>
                                <?php echo $value['condicion'] ?>
                            </td>
                            <td><a href="index.php?action=editarUbicacion&idMapa=<?php echo $value['idmapa'] ?>"
                                    class="btn btn-primary"><img src="Views/img/editar.png" alt="" width="20"></a>
                                <p> </p><a href="index.php?action=frmMapa&idMapa=<?php echo $value['idmapa'] ?>"
                                    class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path
                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                        <path
                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                    </svg></a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>