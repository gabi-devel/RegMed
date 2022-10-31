

<?php
session_start();

require_once('registro-logout/config.php');
 
if(isset($_POST['submit'])) {
	if(isset($_POST['email'],$_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
 
		if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$sql = "select * from users where email = :email ";
			$handle = $pdo->prepare($sql);
			$params = ['email'=>$email];
			$handle->execute($params);
			if($handle->rowCount() > 0) {
				$getRow = $handle->fetch(PDO::FETCH_ASSOC);
				if(password_verify($password, $getRow['password'])) {
					unset($getRow['password']);
					$_SESSION = $getRow;
					header('location:main-container/main-container.php');
					exit();
				}
				else {
					$errors[] = "Error en  Email o Password";
				}
			}
			else {
				$errors[] = "Error Email o Password";
			}
			
		}
		else {
			$errors[] = "Email no valido";	
		}
	}
	else {
		$errors[] = "Email y Password son requeridos";	
	}
} 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Iniciar sesion</title>
    <link href="registro-logout/index.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Iniciar sesion</h3>
                                </div>
                                <div class="card-body">
                                    <?php
                                        if (isset($errors) && count($errors) > 0) {
                                            foreach ($errors as $error_msg) {
                                                echo '<div class="alert alert-danger">' . $error_msg . '</div>';
                                            }
                                        }
                                    ?>
                                    <!-- Formulario Login -->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="email" id="inputEmail" type="email"
                                            placeholder="name@example.com" />
                                        <label for="inputEmail">Email </label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="password" id="inputPassword" type="password"
                                            placeholder="Password" />
                                        <label for="inputPassword">Contraseña</label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" id="inputRememberPassword" type="checkbox"
                                            value="" />
                                        <label class="form-check-label" for="inputRememberPassword">Recordar contraseña</label>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <a class="small" href="password.html">Olvido su contraseña?</a>
                                        <a href="main-container/main-container.php"><button type="submit" name="submit"
                                                class="btn btn-primary">Iniciar sesion</button></a>
                                    </div>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a data-toggle="modal" data-target="#dialogo1">Registrese!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <!-- Footer -->
        <div id="layoutAuthentication_footer">
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
        </div>
    </div>

    <!-- INICIA MODAL -->
    <div class="modal fade" id="dialogo1">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- cabecera del diálogo -->
                <div class="modal-header">
                    <h4 class="modal-title">Registrarse</h4>
                    <button type="button" class="close" data-dismiss="modal">X</button>
                </div>

                <!-- cuerpo del diálogo -->
                <!-- <div id="layoutAuthentication">
            <div id="layoutAuthentication_content"> -->
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <!-- <div class="card-header"><h3 class="text-center font-weight-light my-4">Registrese</h3></div> -->
                                    <div class="card-body">
                                    <?php 
                                        if(isset($errors) && count($errors) > 0)
                                        {
                                            foreach($errors as $error_msg)
                                            {
                                                echo '<div class="alert alert-danger">'.$error_msg.'</div>';
                                            }
                                        }
                                        
                                        if(isset($success))
                                        {
                                            
                                            echo '<div class="alert alert-success">'.$success.'</div>';
                                        }
                                    ?>
                                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <!-- <div class="form-floating mb-3 mb-md-0"> -->
                                                    <label for="inputFirstName">Nombre</label>
                                                        <input class="form-control" name="nombre" id="inputFirstName" type="text" placeholder="Inserte su nombre" />
                                                        

                                                    <!-- </div> -->
                                                <!-- </div>
                                                <div class="col-md-6"> -->
                                                    <!-- <div class="form-floating"> -->
                                                    <label for="inputLastName">Apellido</label>
                                                        <input class="form-control" name="apellido" id="inputLastName" type="text" placeholder="Inserte su apellido" />
                                                        

                                                    <!-- </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3"> -->
                                                    <label for="inputEmail">Email</label><br>
                                                    <input class="form-control" name="email" id="inputEmail" type="email" placeholder="nombre@ejemplo.com" />

                                                <!-- </div>
                                                    <div class="form-floating mb-3 mb-md-0"> -->
                                                    <label for="inputmatricula">Matricula</label>
                                                        <input class="form-control" name="matricula" id="inputmatricula" type="password" placeholder="Inserte matricula" />

                                                    <!-- </div>
                                                    <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">  -->
                                                    <label for="inputPassword">Contraseña</label>
                                                        <input class="form-control" name="password" id="inputPassword" type="password" placeholder="Crear contraseña" />
                                                        
                                                    <!-- </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0"> -->
                                                    <label for="inputPasswordConfirm">Confirmar Contraseña</label>    
                                                    <input class="form-control" name="repassword" id="inputPasswordConfirm" type="password" placeholder="Confirmar contraseña" />
                                                      
                                                    
                                                </div>
                                            </div>
                                            

                <!-- pie del diálogo -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Confirmar datos</button>
                </div>
                <!-- FIN MODAL -->
            </div>
        </div>
    </div>
    <script src="./assets/js/modal_datepicker.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>