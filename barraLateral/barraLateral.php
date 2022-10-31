<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">                           
                            <form action="<?php echo "dashboard.php"?>" method="post" id="myForm" class="mx-3">
                
                                <div>
                                    <input class="form-control form-control-sidebar inputBuscar" placeholder="Ingrese DNI" type="number" name="dniPaciente">

                                </div>
                                <div class="d-grid gap-3 d-md-block mt-3">
                                    <button class="BuscarBorrar" type="submit" name="submit" value="Buscar">Buscar</button>
                                    <button class="BuscarBorrar" type="submit" name="clear" value="clear" onclick="myFunction()" id="clear">Borrar</button>
                                </div>
                                <div class="sb-sidenav-menu-heading">Acciones</div>
                            </form>                            
                            <button class="addPaciente" type="button" name="agregar" value="agregar" id="agregarPaciente">Agregar Paciente</button>
                        </div>
                    </div>
                </nav>
            </div>