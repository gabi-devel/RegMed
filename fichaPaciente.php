<?php 
    session_start();
  
    if(!$_SESSION['id']) header('location:index.php');
    
    require 'baseDeDatos/config.php';

$variable = $_POST['id'];


if (isset($_POST['especialidad'])) {
    header('Location: alertComentario.php');
}

$consulta = "SELECT * FROM pacientes WHERE id = '$variable'";
$resultado = $conexion->query($consulta);
$datos = [];
if($resultado->num_rows) {
    while($row = $resultado->fetch_assoc()) {
        $datos[] = [
            /* 'identificador' => $row['id'], */
            'nombre' => $row['nombre'],
            'apell' => $row['apellido'],
            'nombre' => $row['nombre'],
            'dni' => $row['dni'],
            'nac' => $row['fecha_nac'],
            's' => $row['sexo'],
            'tel' => $row['tel'],
            'dir' => $row['direccion'],
        ];
    }
}

$consulta2 = "SELECT * FROM comentarios WHERE paciente_id = '$variable' ORDER BY id DESC";
$resultado2 = $conexion->query($consulta2);
$datos2 = [];
if($resultado2->num_rows) {
    while($row = $resultado2->fetch_assoc()) {
        $datos2[] = [/* 
            'idComent' => $row['id'],
            'pacienteID' => $row['paciente_id'],
            'nombre' => $row['nombre'], */
            'esp' => $row['especialidad'],
            'com' => $row['comentario'],
            'fecha' => $row['date'],
        ];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Historia Clinica</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="bootstrap/node_modules\bootstrap\dist\css\bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="styleLoginReg.css">
        <link rel="stylesheet" href="css/historia_clinica_2.css">
        
        
    </head>
    <body class="sb-nav-fixed overflowX bg-secondary">

    <!-- Barra superior  -->
    <?php include 'barraSuperior/barraSuperior.php';?>

    <div id="layoutSidenav">
            
        <!-- Barra lateral -->          
        <?php include 'barraLateral/barraLateral.php';?>

        <!-- Página: Ficha Paciente -->
        <div id="layoutSidenav_content">
            <div class=" container-fluid px-4">

            <!-- Información -->
            <div class="pacienteContainer mt-3">
                <div class="infoHeader">
                    <div class="tituloContainer">Información Personal</div>
                </div>
                <div class="bodyContainer">
                <?php
                    foreach ($datos as $datoPorColumna) {
                    echo '<div class="groupDatoContainer">
                            <div class="pedidoContainer">Nombre y Apellido</div>
                            <div class="datoContainer">'.$datoPorColumna['nombre'].
                            ' '.$datoPorColumna['apell'].'</div></div>
                    <div class="groupDatoContainer">
                        <div class="pedidoContainer">Dni</div>
                        <div class="datoContainer">'.$datoPorColumna['dni'].'</div>
                    </div>
                    <div class="groupDatoContainer">
                        <div class="pedidoContainer">Teléfono</div>
                        <div class="datoContSSainer">'.$datoPorColumna['tel'].'</div>
                    </div>
                    <div class="groupDatoContainer">
                        <div class="pedidoContainer">Dirección</div>
                        <div class="datoContainer">'.$datoPorColumna['dir'].'</div>
                    </div>
                    <div class="groupDatoContainer">
                        <div class="pedidoContainer">Mutual y N°</div>
                        <div class="datoContainer">Tal 113</div>
                    </div>
                    <div class="groupDatoContainer">
                        <div class="pedidoContainer">Grupo y Factor Sang.</div>
                        <div class="datoContainer">0+</div>
                    </div>';
                    }
                ?>
                </div>
            </div>

<?php /* $variableSinBarra = substr($variable,0,-1);
echo 'id '.$variableSinBarra; */?> 

                <!-- Formulario Agregar Comentarios -->
                <div class="d-flex justify-content-center">
                    <div class="pacienteContainer my-3 infoHeader col-lg-6">
                        <h5 class="">Agregar comentario:</h5> 
                        <form action="<?php echo 'alertComentario.php'?>" class="my-3 border p-4 mb-2" method="post" autocomplete="off">
                            <div>
                                <label class="form-label">Especialidad</label>
                                <input type="text" name="especialidad">
                            </div>
                            <div>
                                <label class="form-label">Comentario</label>
                                <textarea name="comentario" class="cuerpoComentario" id="" cols=""></textarea>
                            </div>
                            <input type="hidden" name='id' value="<?php echo $variable;?>"/>
                            <button type="submit" class="addComButtom">Agregar</button>
                        </form>
                    </div>
                </div>

                <div class="pacienteContainer">
                            <div class="infoHeader">
                                <div class="tituloContainer">Comentarios</div> 
                            </div>
                                    <?php require 'baseDeDatos/config.php';
                                    foreach ($datos2 as $datoPorColumna) { echo 
                            '<div class="comBodyContainer">
                                <div class="commentContainer">
                                        <div class="comCabeza">
                                            <div class="comGrupo">
                                                <div class="comPedido">Fecha:</div>
                                                <div class="comDato">'.$datoPorColumna['fecha'].'
                                            </div>
                                            </div>
                                            <div class="comGrupo">
                                                <div class="comPedido">Médico:</div>
                                                <div class="comDato">'.$_SESSION['nombre'].'</div>
                                            </div>
                                            <div class="comGrupo">
                                                <div class="comPedido">Especialidad:</div>
                                                <div class="comDato">'.$datoPorColumna['esp'].'</div>
                                            </div>
                                        </div>
                                        <div class="comCuerpo">
                                            <div class="comGrupo">
                                                    <div class="comPedido">Comentario:</div>
                                                    <div class="comDato">'.$datoPorColumna['com'].'</div>
                                            </div>
                                        </div>
                                </div>
                            </div>';
                                    }
                                    ?> 
                        </div>

                <!-- Formulario Modal: Agregar Paciente -->
                <?php include_once('formularioPaciente.php');?>


            </div>
                <!-- Footer -->
                <footer class="py-4 bg-dark mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; RegMed 2022</div>
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
