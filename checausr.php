<html>
<head>
    <title>Envio de informaci&oacute;n</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.css">
</head>
<body>
    <section class="hero is-success">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">Universisdad de Colima</h1>
                <h2 class="subtitle">Facultad de Telemática</h2>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="colums">
            <div class="column has-text-centered">
                <h1 class="title">Bienvenido al sistema</h1><br>
                <div class="box has-text-justified">
                    <?php
                        if(strlen($_POST["nombre"]) > 0 && strlen($_POST["email"]) > 0){
                            echo "<h2 class='subtitle'>Nombre: " . $_POST["nombre"] . "</h2>";
                            echo "<h2 class='subtitle'>Correo: " . $_POST["email"] . "</h2>";
                        }
                        else{
                            echo "<div class='notification is-danger'> Error en el envio de información</div> ";
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
    <div class="content has-text-centered">
        <p>
          <strong>&copy;Desarrollado</strong> por <a href="#">Emiliano Vázquez Banda</a>. 
        </p>
      </div>
    </footer>
</body>
</html>