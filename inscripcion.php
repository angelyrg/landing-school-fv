<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscríbete ahora</title>
    <link rel="shortcut icon" href="images/logoFV.png">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
      <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-2.2.2.min.js"></script>
</head>

<script>
  $(document).ready(function(){
      $('#avisoCoar').modal('show');
      console.log("READY")
  });
</script>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">



<!-- Modal -->
<div class="modal fade" id="avisoCoar" role="dialog" >
    <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
              <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <a href="http://www.minedu.gob.pe/coar/index.php#admision" target="_blank">
                    <img src="images/comunicado-01-02-2021-vs2.jpg" alt="" style="width: 100%;">
              </a>
          </div>    
    </div>
</div>



    <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container-fluid" style="margin-left: 5%; margin-right: 5%;">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <!-- <a href="#" class="navbar-brand">Known</a> -->
                    <a class="navbar-brand" href="#"><img src="images/logotipo.png" alt="Logotipo" style="height: 200%; "></a>

               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="index.html#top" class="smoothScroll">Inicio</a></li>
                         <li><a href="index.html#about" class="smoothScroll">Nosotros</a></li>
                         <li><a href="index.html#courses" class="smoothScroll">Ciclos</a></li>
                         <li><a href="index.html#clients" class="smoothScroll">Ingresantes</a></li>
                         <li><a href="index.html#testimonial" class="smoothScroll">Docentes</a></li>
                        <li><a href="index.html#contact" class="smoothScroll">Contacto</a></li>
                        <li><a href="inscripcion.php" class="smoothScroll">Matrícula en línea</a></li>

                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="intranet/"><i class="fa fa-user" style="background-color: #004a99;"></i> INTRANET</a></li>
                    </ul>
               </div>
          </div>
     </section>

    <!-- modal cuentas bancarias-->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h5 class="modal-title" id="exampleModalLabel">CUENTAS BANCARIAS </h5>
          </div>
          <div class="modal-body">
            <label for="">Banco de la Nación: </label>
            <p>04-451-002142</p>
            <br>
            <label for="">Caja Huancayo: </label>
            <p>107036211001125988</p>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>


    <!-- INSCRIPCIÓN -->
    <section id="" style="background-color: #51aeda;">

        <h1 class="text-center" style="color:white;">Inscríbete aquí y empieza tu camino al éxito.</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-12 col-md-offset-1">
                        <form id="formulario" role="form"  method="post" enctype="multipart/form-data">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group"> <!-- First Name -->
                                    <label for="full_name_id" class="control-label">Nombres</label>
                                    <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres" required>
                                </div>
                                <div class="form-group"> <!-- Last Name -->
                                    <label for="street1_id" class="control-label">Apellidos</label>
                                    <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" required>
                                </div>
                                <div class="form-group"> <!-- DNI -->
                                    <label for="street2_id" class="control-label">DNI</label>
                                    <input name="dni" id="dni" class="form-control" placeholder="DNI"
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                    type = "number"
                                    maxlength = "8"
                                    required/>

                                </div>
                                <div class="form-group"> <!-- Celular -->
                                    <label for="street2_id" class="control-label">Celular</label>
                                    <input name="celular" id="celular" class="form-control" placeholder="Celular"
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                    type = "number"
                                    maxlength = "9"
                                    required/>
                                  </div>
                            </div>
                            <div class="col-md-6 col-sm-12 form-row align-items-center">
                                <div class="form-group"> <!-- Correo -->
                                    <label for="street2_id" class="control-label">Correo electrónico</label>
                                    <input type="email" class="form-control" id="correo" name="correo" placeholder="ejemplo@gmail.com" required>
                                </div>
                                <div class="form-group"> <!-- Ciclo  -->
                                    <label for="state_id" class="control-label">Ciclo</label>
                                    <select class="form-control" id="ciclo" name="ciclo" required>
                                      <option value="">-Seleccione-</option>
                                      <?php
                                      include_once("intranet/conexion.php");
                                        $consulta1=mysqli_query($conect,"SELECT * FROM ciclos") or die(mysqli_error($conect));
                                        while($row1=mysqli_fetch_array($consulta1)) {
                                          ?>
                                          <option value="<?php echo $row1['id']; ?>"> <?php echo $row1['descripcion']; ?> </option>
                                          <?php
                                        }
                                        mysqli_close($conect);
                                         ?>
                                    </select>
                                </div>

                                <div class="row">

                                  <div class="col-md-10">
                                    <div class="form-group "> <!-- Costo -->
                                        <label for="street2_id" class="control-label">Costo (S/.)</label>
                                        <input type="number" step=".10" class="form-control" id="precio" name="precio" placeholder="0" disabled>
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <label for="">info</label>
                                    <div class="form-group "> <!-- info -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                          <i class="fa fa-eye"></i>
                                        </button>
                                    </div>

                                  </div>

                                </div>

                                <div class="form-group"> <!-- Voucher -->
                                    <label for="voucher" class="control-label">Voucher de pago</label>
                                    <input type="file" class="form-control" id="voucher" name="voucher" required>
                                </div>
                                <br>

                            </div>
                            <div class="col-md-12">
                              <div class="col-md-2 col-md-offset-5">
                                <div class="form-group"> <!-- Submit Button -->
                                    <input type="submit" id="btnEnviar" name="btnEnviar" class="btn btn-success btn-block" value="Registrar">
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div id="correct" hidden>
                                  <div class="alert alert-success alert-dismissable">
                                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                                      <strong>¡Felicidades!</strong> Te has inscrito correctamente.
                                  </div>
                              </div>
                              <div id="incorrect" hidden >
                                  <div class="alert alert-danger alert-dismissable">
                                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                                      <strong>¡Error!</strong> Ocurrió un problema. Inténtelo de nuevo.
                                  </div>
                              </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </section>




    <!--==========================
    Footer
    ============================-->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 footer-info">
                <h3>FRANCOIS VIETE</h3>
                <p>Mantenemos nuestro Compromiso de estar Contigo y seguir Aprendiendo Juntos <br> <b>#YoMeQuedoEnCasa</b> </p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                <h4>Enlaces útiles</h4>
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Ciclos</a></li>
                </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                <h4>Contáctanos</h4>
                <p style="color: white;">
                    <i class="fa fa-map-marker"></i> Jr. Mariscal Cáceres N° 249 <br>
                    Pampas Tayacaja<br>
                    Huancavelica - Perú <br>
                    <strong><i class="fa fa-phone"></i> </strong> 944812553 <span style="margin-left: 3px;">964269359</span> <span style="margin-left: 3px;">964269359</span> <br>
                    <strong><i class="fa fa-envelope"></i> </strong> <small>eliascastanedagarcia000@gmail.com</small> <br>
                </p>


                </div>

                <div class="col-lg-3 col-md-6 footer-newsletter">
                <h4>Encuéntranos también en</h4>
                <div class="social-links">

                    <a href="https://www.facebook.com/academiafrancoisviete" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a class="youtube" href="https://www.youtube.com/channel/UC93zbeBt7TqziGDXo3C4LCg" target="_blank"><i class="fa fa-youtube"></i></a>
                    <a href="https://api.whatsapp.com/send?phone=944812553" target="_blank" class="whatsapp"><i class="fa fa-whatsapp"></i></a>
                </div>
                </div>

            </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
            &copy; Copyright <strong>Academia Pre Universitaria Francois Viete</strong>. Todos los derechos reservados
            </div>

        </div>
    </footer><!-- #footer -->

    <script src="https://code.jquery.com/jquery-2.2.2.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script> -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){

      $('#ciclo').change(function(){
        costo();
      });
      function costo(){
        $.ajax({
            type: 'POST',
            url: 'costo.php',
            data:$('#ciclo').serialize(),
            success: function(data){
                $("#precio").val(data);
            }
          });
      }

      $("#formulario").submit(function(e){
          e.preventDefault();

          var formData = new FormData($(this)[0])
          
          $.ajax({
              url: "recibir.php",
              method: "post",
              data: formData,
              processData: false,
              contentType: false,
              success: function(res){

                if (res == 1){
                  $("#correct").show(500);
                  setTimeout(function() {
                      $("#correct").hide(500)
                      $("#formulario")[0].reset();
                  }, 4000);
                }else{
                  $("#incorrect").show(500);
                  setTimeout(function() {
                      $("#incorrect").hide(500)
                  }, 5000);
                }
              }
            })              
        });
    });

    



    </script>

</body>

</html>
