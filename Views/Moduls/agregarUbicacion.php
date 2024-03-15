<?php
$agregar = new ControladorMapa();
$agregar->agregarUbicacionMapa();
?>
<h4 style="text-align: center;">Agregar Ubicación</h4>
<br><br>
<div class="form-control">
    <div class="contrainer">
        <form method="post">
            <label for="">Nombre</label>
            <input type="text" id="nombre" placeholder="Nonbre local" name="nombre" class="form-control" required>
            <label for="">Descripcion</label>
            <input type="text" id="desc" placeholder="Descripcion Local" name="desc" class="form-control" required>
            <label for="">Telefono</label>
            <input type="text" id="tel" placeholder="Numero local" name="tel" class="form-control" required>
            <label for="">latitud</label>
            <input type="text" id="lat" placeholder="Cordenada latitud" name="lat" class="form-control" required>
            <label for="">Longitud</label>
            <input type="text" id="long" placeholder="Cordenada Longitud" name="long" class="form-control" required>
            <button name="agregar" class="btn btn-primary mt-5">Agregar</button>
            <a href="frmMapa" class="btn btn-primary mt-5">Volver</a>
        </form>
    </div>
</div>