<?php

?>












<form action="./controller/update.php" method="POST">
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label">Actualizar</label>
        </div>
        <div class="field-body">


            <input type="hidden" name="id" value="<?php echo $sqlAlumnos['id']  ?>">
            <div class="field">
                <p class="control is-expanded has-icons-left">
                    <input type="text" class="input is-success" name=" alumno" placeholder="alumno" value="<?php echo $sqlAlumnos['alumno']  ?>">
                    <span class="icon is-small is-left">
                        <i class="fas fa-list-ol"></i>
                    </span>
                </p>
            </div>
            <div class="field">
                <p class="control is-expanded has-icons-left has-icons-right">
                    <input type="text" class="input is-success " name="nombre" placeholder="nombre" value="<?php echo $sqlAlumnos['nombre']  ?>">
                    <span class="icon is-small is-left">
                        <i class="fas fa-user"></i>
                    </span>

                </p>
            </div>
            <div class="field">
                <p class="control is-expanded has-icons-left has-icons-right">
                    <input type="text" class="input is-success" name="sexo" placeholder="sexo" value="<?php echo $sqlAlumnos['sexo']  ?>">
                    <span class="icon is-small is-left">
                        <i class="fas fa-genderless"></i>
                    </span>

                </p>
            </div>
            <input type="submit" class="button is-primary is-rounded" value="Actualizar">


        </div>
    </div>
</form>
<br>
<br>