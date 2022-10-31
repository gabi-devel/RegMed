<?php
session_start(); 
require_once('baseDeDatos/config.php');
 
if(isset($_POST['submit']))/**/ {
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
					header('location:dashboard.php');
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
/* header('location:dashboard.php'); */
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Registro electronico de historas clinicas" />
        <meta name="author" content="Gabriela Bustos,Facundo Chiavon, Milagros Ceccoli, Facundo Gardella, Luciana Manetta" />
        <meta name="keywords" content="Historias clinicas, salud, app medica" />
        <title>Registro-Medico</title>
        <!--inserto el favicon--->
        <link rel="icon" href="./logoRegMed1.svg"/>
        <!--Importo fuentes,bootstrap y js--->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/app-dev.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="bootstrap/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <link href="registro-logout/index.css" rel="stylesheet" />
        <link href="css/index.css" rel="stylesheet" />
    </head>

    <body>

        <!--Creo una caja relativa para usar el position absolute e insertar la imagen-->

    <div class="fondorelativo">
        <div class="fondoabsoluto">
        <img src="fondo.jpg" class="img-fluid" alt="Dotora de perfil">
        </div>
    </div>

    <!-- Barra de navegacion --->

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">

            <!--logo minimalista-->

            <img src="logoRegMed.svg" width="40px" alt=""><a class="navbar-brand logo"><span>Reg</span>Med</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <!--La nav bar siempre simple-->

            <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
            <div class="navbar-nav ">
                <a class="nav-link dark" aria-current="page" href="./documentacion.php" target="_blank">Documentacion</a>
                <a class="nav-link dark" href="./about.php" target="_blank">Sobre nosotros</a>
                <div class="navbar-nav action-buttons ml-auto">
                    <button data-toggle="dropdown" class="nav-item nav-link dropdown-toggle mr-3 button ">Login</button>
                    <?php
                        if (isset($errors) && count($errors) > 0) {
                            foreach ($errors as $error_msg) {
                                echo '<div class="alert alert-danger">' . $error_msg . '</div>';
                            }
                        }
                    ?>
                    <div class="dropdown-menu login-form">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <div class="form-group form-floating mb-3">
                                <input class="form-control" name="email" id="inputEmail" type="email" placeholder="name@example.com" value="juan@gmail.com"/>
                                <label for="inputEmail">Email address</label>
                            </div>
                            <div class="form-group form-floating mb-3">
                                <input class="form-control" name="password" id="inputPassword" type="password" placeholder="Password"  value="1"/>
                                <label for="inputPassword">Password</label>          
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <a class="text-dark" href="password.html">Forgot Password?</a>
                                    <button type="submit" name="submit" class="btn btn-primary">Login</button>
                            </div>
                            <div class=""> <br/>
                                <div class="text-dark">Dont have an account? <a href="registro-logout/doctorOpaciente.php"> Sign up</a></div>
                            </div>
                        </form>					
                    </div>			
                </div>
            </div>
        </div>
    </nav>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="">
                        <div class="col-lg-5 textoprincipal">
                            <h6 class="h6 text-start">-App para medicos-</h6>
                            <h1 class="nombre h1 text-start">Tu registro de 
                                <br><span>historias clinicas</span>
                            </h1>
                            <br>
                            <p class="fs-6 text-start" style="max-width: 350px">La informacion de la atencion al paciente en un solo lugar. De manera facil,
                            practica y segura </p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
        
        

      <!-- Ventajas que ofrece la app-->

  <div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h4>Sobre <em>la apllicacion</em></h4>
            <img src="assets/images/heading-line-dec.png" alt="">
            <span><p>ofrece una versión digital de la historia clínica en papel de un paciente. Las HC son registros en tiempo real centrados en el paciente, la información esta disponible de forma instantánea y segura para los usuarios autorizados.</p></span>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="service-item first-service">
            <div class="icon" ></div><img src="./assets/images/info.png" width="50px" >
            <h4>Mejor informacion</h4>
            <p>Proporcionar informacion de manera precisa, actualizada y completa sobre los pacientes.</p>
            <div class="text-button">
              <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item second-service">
            <div class="icon"></div><img src="./assets/images/atencion.png" width="50px" >
            <h4>Mejor atencion</h4>
            <p>Un acceso rápido a los registros de los pacientes para  una atención más coordinada y eficiente.</p>
            <div class="text-button">
              <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item third-service">
            <div class="icon"></div><img src="./assets/images/seguridad.png" width="50px" >
            <h4>Mayor seguridad</h4>
            <p>Permitir  una prescripción más segura y fiable</p>
            <div class="text-button">
              <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item fourth-service">
            <div class="icon"></div><img src="./assets/images/compartir.png" width="50px" >
            <h4>Compartir</h4>
            <p>Compartir de forma segura  información electrónica  con pacientes y otros médicos</p>
            <div class="text-button">
              <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- Footer--->

        <footer>
            <div class="footer-content">
           <h3>RegMed</h3> <img src="logoRegMed.svg" class="logo-footer" width="40px" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Labore dolores earum ratione quibusdam suscipit mollitia maiores itaque consequuntur. 
                    Doloribus animi dignissimos tempore alias omnis magni nam blanditiis consequatur, corporis sit!</p>     
                <ul class="socials">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                </ul>
             </div>
             <div class="footer-bottom">
                        <p>copyright &copy;2022 RegMed diseñado por <span>Chiavon, Ceccoli, Bustos, Gardella y Manetta</span></p>
             </div>
        </footer>
    </body>
</html>
