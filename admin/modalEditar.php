<div class="modal fade" id="editarDatos<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editarModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="background-color: rgba(44, 3, 65, .8)
 !important;">
            <div class="modal-header">

                <h5 class="modal-title" id="editarModalLabel">Editar Registro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="operaciones/editar.php">
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <label for="nombre">Llabe Global</label>
                        <input type="text" readonly class="form-control" id="" name="llabeglobal" value="<?php echo $row['llabeglobal'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre de Óptica</label>
                        <input type="text" class="form-control" id="" name="nombrecliente" value="<?php echo $row['nombrecliente'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Email de óptica</label>
                        <input type="email" class="form-control" id="" name="email_optica" value="<?php echo $row['email'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Recepcionista</label>
                        <input type="text" class="form-control" id="" name="antencion" value="<?php echo $row['antencion'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre usuario</label>
                        <input type="text" class="form-control" id="" name="nombreusaurio" value="<?php echo $row['nombreusaurio'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Documento usuario</label>
                        <input type="text" readonly class="form-control" id="" name="documento" value="<?php echo $row['documento'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Estado del usuario</label>
                        <select name="estado" class="form-control">
                            <option value="0" <?php if ($row['estado'] == 0) echo "selected" ?>> Inactivo </option>
                            <option value="1" <?php if ($row['estado'] == 1) echo "selected" ?>>Activo
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Tipo de juador</label>
                        <select name="tipo" class="form-control">
                            <option value="0" <?php if ($row['tipo'] == 0) echo "selected"; ?>>Normal</option>
                            <option value="1" <?php if ($row['tipo'] == 1) echo "selected"; ?>>Expert</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nivel de jugador</label>
                        <select class="form-control" name="nivel">
                            <option value="0" <?php if ($row['nivel'] == 0) echo "selected"; ?>>Inciertos </option>
                            <option value="1" <?php if ($row['nivel'] == 1) echo "selected"; ?>>Frecuentes</option>
                            <option value="2" <?php if ($row['nivel'] == 2) echo "selected"; ?>>Alto Stock</option>
                            <option value="3" <?php if ($row['nivel'] == 3) echo "selected"; ?>>Mejores</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </form>
            </div>
        </div>
    </div>
</div>