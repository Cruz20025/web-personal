
<!doctype html>
<html lang="en">
  <head>
    <title>INFORMATIVO 2025</title>
  </head>

  <body>
      </header>
      <?php
        include("secciones/alumno.php");
      ?>
      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-12 px-0">
          <h1 class="display-4 font-italic">
            <?php
              echo $alumno["nombres"];
            ?>
          </h1>
          <p class="lead my-3">
            <?php
              echo $alumno["apellidos"];
            ?>
          </p>

             <p class="lead my-3">
            <?php
              echo $alumno["edad"];
            ?>
          </p>

             <p class="lead my-3">
            <?php
              echo $alumno["telefono"];
            ?>
          </p>

             <p class="lead my-3">
            <?php
              echo $alumno["correo"];
            ?>
          </p>
            
        </div>
      </div>

  </body>
</html>
