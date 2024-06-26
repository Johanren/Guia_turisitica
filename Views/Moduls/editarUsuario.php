<?php
$listarActivo = new ControladorActivo();
$activo = $listarActivo->listarActivo();

$listarRol = new ControladorRol();
$rol = $listarRol->listarRol();

$listarUsuario = new ControladorUsuario();
$usuario = $listarUsuario->listarUsuarioEditar();
if ($_SESSION['rol'] != "Administrado") {
    echo '<script>window.location="inicio"</script>';
}
?>
<h1 style="text-align: center;">Usuario</h1>
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <form method="post">
                <div class="row">
                    <div class="col">
                        <label>Usuario</label>
                        <input type="text" class="form-control" name="usuario" placeholder="Nombre Usuario" required value="<?php echo $usuario[0]['usuario'] ?>">
                    </div>
                    <div class="col">
                        <label>Contraseña</label>
                        <input type="text" class="form-control" name="clave" placeholder="Contrasña Usuario" required value="<?php echo $usuario[0]['clave'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label>Activo</label>
                        <select name="activo" class="form-control" required>
                            <option value="">Seleccionar....</option>
                            <?php
                            foreach ($activo as $key => $value) {
                                ?>
                                <option value="<?php echo $value['id_activo'] ?>" <?php if($value['id_activo'] == $usuario[0]['id_activo']){echo 'selected';} ?> >
                                    <?php echo $value['nombre_activo'] ?>
                                </option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col">
                        <label>Rol</label>
                        <select name="rol" class="form-control" required>
                            <option value="">Seleccionar....</option>
                            <?php
                            foreach ($rol as $key => $value) {
                                ?>
                                <option value="<?php echo $value['id_rol'] ?>" <?php if($value['id_rol'] == $usuario[0]['id_rol']){echo 'selected';} ?>>
                                    <?php echo $value['rol'] ?>
                                </option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <button name="actualizar" class="btn btn-primary mt-5">Actualizar</button>
            </form>
        </div>
    </div>
</div>
<?php
$agregar = new ControladorUsuario();
$agregar->agregarUsuario();
?>