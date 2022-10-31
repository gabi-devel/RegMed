
<!DOCTYPE html><!-- $conexion = mysqli_connect("212.1.211.100", "u615612272_root", "Instituto_38", "u615612272_proyecto"); -->
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Historia Clinica</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="historia-clinica.css"> 
	<link rel="stylesheet" href="styles.css"> 
    </head>
    <body class="sb-nav-fixed">
        <!-- Barra superior  -->  
        <?php require_once('../componentes/navbar.php'); ?>

        <div id="layoutSidenav">
            <!-- Barra lateral -->          
            <?php require_once('../componentes/sidebar.php'); ?>

            <!-- Historia Clinica -->
            <div id="layoutSidenav_content">
                <div class=" container-fluid px-4">
                    <!-- Falta que aparezca nombre y apellido de Paciente -->
                    <h2 class="mt-4"> Nombre: Paciente
                    <?php
                        // foreach ($datos2 as $datoPorColumna) { o while
                            /* echo '<p><data value="'.$datoPorColumna['identificador'].'">'.$datoPorColumna['nombre']." ".$datoPorColumna['apell'].'</data></p>'; */
                        //}
                    ?>
                    </h2>

                    <!-- 2 columnas: Datos personales -->
                    <div class="row">
                        <!-- Datos personales -->
                        <div class="col-lg-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-bar me-1"></i>
                                            Datos personales<?php 
                                                            /* $variableSinBarra = substr($variable,0,-1);
                                                            echo ' - id '.$variableSinBarra; */
                                                            ?> 
                                </div>
                                <p>Nombre</p>
                                <p>Apellido</p>
                                <p>Etc</p>
                                <p>Etc</p>
                                <p>Etc</p>
                                <p>Etc</p>
                                <p>Etc</p>
                                <p>Etc</p>
                            </div>
                        </div>
                    </div>
                    <!-- Comentarios -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-bar me-1"></i>
                            Comentarios
                        </div>
                            <div class="border">
                                <p>El paciente le pasó tal</p>
                                <p>Y después tal, tal, tal</p>
                            </div>
                    </div>

                    <!-- Footer -->
                    <footer class="py-4 bg-light mt-auto">
                        <div class="container-fluid px-1"><hr>
                            <div class="d-flex align-items-center justify-content-between small">
                                <div class="text-muted">Copyright &copy; Your Website 2021</div>
                                <div>
                                    <a href="#">Privacy Policy</a>
                                    &middot;
                                    <a href="#">Terms &amp; Conditions</a>
                                </div>
                            </div>
                        </div>
                    </footer>

                    </div>
                </main>
            </div>
        </div>
        
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script> -->
    </body>
</html>
