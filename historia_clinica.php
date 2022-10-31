<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Historia Clinica</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="bootstrap\datepicker\bootstrap-datepicker3.css"/>
        <link rel="stylesheet" href="../assets/bootstrap/node_modules\bootstrap\dist\css\bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="styleLoginReg.css">
        <link rel="stylesheet" href="css/historia_clinica.css">
        
    </head>

    <body class="sb-nav-fixed">
        <!-- Barra superior  -->  
        <?php include 'barraSuperior/barraSuperior.php';?>

        <div id="layoutSidenav">
            <!-- Barra lateral -->          
            <?php include 'barraLateral/barraLateral.php';?>

            <!-- Historia Clinica -->
            <div id="layoutSidenav_content">

                <!-- Información -->
                <div class="Container">
                    <div class="nombrePaciente">
                        <h1>LUCIANA MANETTA</h1>
                        <h3>09/01/92    -     36.603.951</h3>
                    </div>
                    <div class="infoContainer">
                        <div class="datoContainer">
                            <p>Cobertura</p>
                            <p>OS</p>
                        </div>
                        <div class="datoContainer">
                            <p>Número de afiliado</p>
                            <p>004-123456/00</p>
                        </div>
                        <div class="datoContainer">
                            <p>Teléfono</p>
                            <p>3364528836</p>
                        </div>
                        <div class="datoContainer">
                            <p>Teléfono de emergencia</p>
                            <p>3364527070</p>
                        </div>
                        <div class="datoContainer">
                            <p>Grupo sanguineo</p>
                            <p>O+</p>
                        </div>
                    </div>
                </div>

                <!-- Comentarios -->
                <div class="card mb-4">
                    <div class="comContainer">
                        <!-- <div class="card-header">
                            <i class="fas fa-chart-bar me-1"></i>
                            Comentarios
                        </div> -->
                        <fieldset>
                            <legend class="legCom">Comentarios</legend>
                                <div class="box-blue">El paciente del corazón anda bien</div>
                                <div class="box-green">Tuvo presión baja</div>
                                <div class="box-blue">Etc, etc</div>
                                <div class="box-green">Etc, etc</div>
                                <div class="box-blue">Etc, etc</div>
                        </fieldset>
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
        </div>
        
        <script type="text/javascript" src="node_modules\jquery\dist\jquery.min.js"></script> 
        <script type="text/javascript" src="bootstrap\datepicker\bootstrap-datepicker.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../assets/js/modal_datepicker.js"></script>
        <script src="../assets/js/scripts.js"></script>
    </body>
</html>
