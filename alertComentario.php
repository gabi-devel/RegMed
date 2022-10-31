<?php 
    session_start();
  
    if(!$_SESSION['id'])   header('location:index.php');
    
    require 'baseDeDatos/config.php';

    $variable = $_POST['id'];
    $variableSinBarra = substr($variable,0,-1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bootstrap/node_modules\bootstrap\dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleLoginReg.css">
</head>
<body>
    <!-- Barra superior -->
    <?php include 'barraSuperior/barraSuperior.php';?>
        
    <div id="layoutSidenav">
    
        <!-- Barra lateral --> 
        <?php include 'barraLateral/barraLateral.php';?>
    <div class=" container-fluid px-4 mt-5">        
        <!-- Contenido de la página -->  
        <h2>Su comentario ha sido guardado con éxito</h2>
        <br>


<!-- SQL Agregar comentarios -->
<?php
if (isset($_POST['especialidad']) && isset($_POST['comentario'])) {
    $espe = $_POST['especialidad'];
    $come = $_POST['comentario'];
    $agregarCom = "INSERT into comentarios (medico_id, paciente_id, especialidad, comentario) values ('".$_SESSION['id']."', '".$variableSinBarra."', '".$espe."', '".$come."')";
    $resultadoComent = $conexion->query($agregarCom);
    mysqli_close($conexion); 
}
?>



        <!-- Botón: Ver último comentario agregado -->
        <form action="<?php echo 'fichaPaciente.php';?>" method="post" class="my-1">
            <input type="hidden" name='id' value="<?php echo $variable;?>"/>
            <button type="submit" class="btn btn-primary">Aceptar</button>
        </form>


    </div>


            </div></div>
</body>
</html>



