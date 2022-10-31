<script>
document.getElementById("clear").onclick = function(){
    document.getElementById("myForm").reset();
};

let add = document.getElementById("agregarPaciente");
function cambiar() {
    document.getElementById("agregarPaciente_Form").setAttribute("method", "POST");
}
add.onclick = cambiar; 
</script>

<script> /* Para q no se envien datos vacios a MySQL */
    document.getElementById("submit").onclick = function() {
        document.getElementById("agregarPaciente_Form").removeAttribute("method");
    }; 
</script>

<nav id="add__container">
                <div class="add__div">
                    <div class="add__item">
                        <p class="add__title" id="home-page">Página principal</p>
                        <div id="add">
                            <form role="form" action="dashboard.php" id="agregarPaciente_Form">
                                <div class="mb-3">
                                    <label class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="" name="name">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Apellido</label>
                                    <input type="text" class="form-control" id="" name="surname">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">DNI</label>
                                    <input type="number" class="form-control" name="newDNI">
                                </div>
                                <div class="mb-3">
                                    <label class="control-label" for="date">Fecha de Nacimiento</label>
                                    <input type="text" class="form-control" id="date" name="date" placeholder="Seleccionar fecha">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Sexo</label>
                                    <input type="text" class="form-control" name="newGender">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Telefono</label>
                                    <input type="text" class="form-control" name="newTel">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Direccion</label>
                                    <input type="text" class="form-control" name="newAddress">
                                </div>
                                <button type="submit" id="submit" class="btn btn-primary" name="submit" value="Submit" onclick="sendPaciente()">Agregar</button>  
                            </form>    
                        </div>
                    </div>
                </div>
            </nav>


            <!-- Javascript para el Modal -->
            <script>
                const botonAgregar = document.querySelector('#agregarPaciente');
                const agregarDiv = document.querySelector('.add__div');
                const modalAparece = () => {
                    agregarDiv.classList.toggle('active');
                }
                botonAgregar.addEventListener('click', modalAparece);
            </script>

            
            <!-- Insertar datos del Form a MySQL -->
            <?php  
            if(isset($_POST['name'])) { 
                $fname = $_POST['name'];
                $nAp = $_POST['surname'];
                $nD = $_POST['newDNI'];
                $ndate = $_POST['date'];
                $nnewGender = $_POST['newGender'];
                $nnewTel = $_POST['newTel'];
                $nnewAddress = $_POST['newAddress'];

                $sql = "INSERT INTO pacientes (nombre, apellido, dni, fecha_nac, sexo, tel, direccion) VALUES ('".$fname."', '".$nAp."', '".$nD."', '".$ndate."', '".$nnewGender."', '".$nnewTel."', '".$nnewAddress."')";

                $results = $conexion->query($sql); 
            } 
            mysqli_close($conexion);   
            ?>      