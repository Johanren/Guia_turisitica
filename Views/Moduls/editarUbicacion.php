<?php
$editar =  new ControladorMapa();
$lis = $editar->consultarUbicacion();
$editar->agregarUbicacionMapa();
?>
<h4 style="text-align: center;">Editar Ubicación</h4>
<br><br>
<div class="form-control">
    <div class="contrainer">
        <form method="post">
            <label for="">Nombre</label>
            <input type="text" id="nombre" placeholder="Nonbre local" name="nombre" class="form-control" required value="<?php echo $lis[0]['persona'] ?>">
            <label for="">Descripcion</label>
            <input type="text" id="desc" placeholder="Descripcion Local" name="desc" class="form-control" required value="<?php echo $lis[0]['descripcion'] ?>">
            <label for="">Telefono</label>
            <input type="text" id="tel" placeholder="Numero local" name="tel" class="form-control" required value="<?php echo $lis[0]['edad'] ?>">
            <label for="">latitud</label>
            <input type="text" id="lat" placeholder="Cordenada latitud" name="lat" class="form-control" required value="<?php echo $lis[0]['lat'] ?>">
            <label for="">Longitud</label>
            <input type="text" id="long" placeholder="Cordenada Longitud" name="long" class="form-control" required value="<?php echo $lis[0]['lng'] ?>">
            <button name="editar" class="btn btn-primary mt-5">Actualizar</button>
            <a href="frmMapa" class="btn btn-primary mt-5">Volver</a>
        </form>
    </div>
</div>