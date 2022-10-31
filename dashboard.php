<?php 
    session_start();
  
    if(!$_SESSION['id'])   header('location:index.php');
    
    require 'baseDeDatos/config.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Buscador</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="bootstrap/node_modules\bootstrap\dist\css\bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="styleLoginReg.css">
    </head>
    <body class="sb-nav-fixed">

    <!-- Barra superior -->
    <?php include 'barraSuperior/barraSuperior.php';?>
        
    <div id="layoutSidenav">

        <!-- Barra lateral --> 
        <?php include 'barraLateral/barraLateral.php';?>
            
        <!-- Contenido de la página -->  
        <div id="layoutSidenav_content">
            <div class=" container-fluid px-4">
                <h1 class="mt-3">Bienvenido <?php echo ucfirst($_SESSION['nombre']); ?></h1>
                
                <section id="search_clear">    
                    <br>

                    <!-- Tabla Pacientes por DNI -->
                    <?php 
                    if(isset($_POST['dniPaciente'])) {
                        $dni = $_POST['dniPaciente'];
                        $encontrarUser = "SELECT * FROM pacientes WHERE dni ='$dni'";
                        $result1 = mysqli_query($conexion, $encontrarUser) or die("Problemas en el select: ".mysqli_error($conexion));

                        if (isset($dni)){
                            while ($dato=mysqli_fetch_array($result1)) { 
                                echo 
                                    '<table border="0" cellspacing="2" cellpadding="2" class="table table-light"> 
                                        <tr> 
                                            <td> <font face="Arial">Nombre</font> </td> 
                                            <td> <font face="Arial">Apellido</font> </td> 
                                            <td> <font face="Arial">DNI</font> </td> 
                                            <td> <font face="Arial">Fecha de Nacimiento</font> </td> 
                                            <td> <font face="Arial">Sexo</font> </td> 
                                            <td> <font face="Arial">Historia clinica</font> </td> 
                                            <td> <font face="Arial">Cobertura</font> </td> 
                                            <td> <font face="Arial">Telefono</font> </td> 
                                            <td> <font face="Arial">Direccion</font> </td> 
                                        </tr>
                                        <tr>
                                            <td>'.$dato["nombre"].'</td> 
                                            <td>'.$dato["apellido"].'</td> 
                                            <td>'.$dato["dni"].'</td> 
                                            <td>'.$dato["fecha_nac"].'</td> 
                                            <td>'.$dato["sexo"].'</td> 
                                            <td><form action="./fichaPaciente.php" method="post">
                                                <input type="hidden" name="id" value='.$dato["id"].'/>
                                                <input type="submit" value="Info"/>
                                                </form></td>                         
                                            <td>Cobertura</td> 
                                            <td>'.$dato["tel"].'</td> 
                                            <td>'.$dato["direccion"].'</td>
                                        </tr>
                                        </table>';
                                        
                                    }   
                        $result1->free();
                        } 
                    } 
                    ?>
                </section>

            <!-- Formulario Modal: Agregar Paciente -->
            <?php include('formularioPaciente.php');?>

            <br/><br/>

            <!-- Footer  -->              
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
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

            <!-- Etiquetas finales -->
            </div>
        </div>


        <!-- date picker -->
        <script type="text/javascript" src="node_modules\jquery\dist\jquery.min.js"></script> 
        <script type="text/javascript" src="bootstrap\datepicker\bootstrap-datepicker.min.js"></script>
        <link rel="stylesheet" href="bootstrap\datepicker\bootstrap-datepicker3.css"/>
        <script>
            $(document).ready(function(){
                var date_input=$('input[name="date"]'); //our date input has the name "date"
                var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
                date_input.datepicker({
                    format: 'yyyy-mm-dd',
                    container: container,
                    todayHighlight: true,
                    autoclose: true,
                })
            })
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
