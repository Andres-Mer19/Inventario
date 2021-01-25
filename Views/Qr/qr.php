<?php 
    headerAdmin($data); 
  $conexion=mysqli_connect('localhost','root','','inventario_web');

?>
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Exportación [Dmass]</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    <link rel = "stylesheet" type = "text/css" href = "Dependences/styles/style.css" />
    
  
    <!-- Bootstrap CSS -->
    <link href="/open-iconic/font/css/open-iconic.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    
  </head>
  
  <div id="contentAjax"></div> 
    <main class="app-content">
      <div class="app-title">
        <div>
            <h1><i class="fas fa-user-tag"></i> <?= $data['page_title'] ?>
            </h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="<?= base_url(); ?>/usuarios"><?= $data['page_title'] ?></a></li>
        </ul>
      </div>
  <body>  
        <div class="row">
            <div class="col-md-12">
              <div class="tile">
                <div class="title-body">
                  <div class="table-responsive">
          <br><br>
          
                    <table id="example" class="table table-hover table-bordered" align="center" style="text-align: left; vertical-align:middle; width:100%">
            <thead>
                      <tr>
                        <th style="font-family: Lato, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif;">ID</th>
                        <th style="font-family: Lato, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif;">Producto</th>
                        
                        <th style="font-family: Lato, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif;">Productor</th>
                        
                        <th style="font-family: Lato, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif;">Estado</th>
                        <th style="font-family: Lato, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif;">Cantidad</th>
                        <th style="font-family: Lato, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif;">Destino</th>
                        
                        <th style="font-family: Lato, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif;">Precio</th>
                        <th style="font-family: Lato, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif;">Acciones</th>
                      </tr>
            </thead>
            <tbody>
                        <?php 
                      
                      $sql = "SELECT id,producto,fecha_cosecha,productor,fecha_llegada,estado_producto,cantidad, destino,fecha_embarque,ficha_tecnica, precio FROM exportacion";
                      $res = mysqli_query($conexion, $sql);
                      
                      while ($row = mysqli_fetch_array ($res)){
                    ?>

                      <!--- Mostramos los datos de la tabla, desde de la BD --->

                          
                    <tr>
                            <form target="_blank" action="reporte.php" method="post"><td style="vertical-align: left; text-align: left; width:40px;"><input style=" border: 0; width:35px; color: black; font-size:13.6px; background-color:transparent; text-align: left;" type="text" name="variable1" value="<?php echo $row['id'];?>" readonly /></td>
                             <td style="vertical-align: left; width:90px;"><?php echo $row['producto']; ?></td>
                             
                             <td style="vertical-align: left; width:90px;"><?php echo $row['productor']; ?></td>
                             
                             <td style="vertical-align: left;width:90px;"><?php echo $row['estado_producto']; ?></td>
                             <td style="vertical-align: left;width:90px;"><?php echo $row['cantidad']; ?></td>
                             <td style="vertical-align: left;width:90px;"><?php echo $row['destino']; ?></td>
                             
                             <td style="vertical-align: left;width:70px;"><?php echo '<p>$' .$row['precio']. '</p>'; ?></td>
                             

                             <td style="width:100px; vertical-align: middle; text-align: center; display:inline-text;"><?php echo '<div class="text-center">
                            <a href="Dependences/Reportes PDF/Exportacion_'.$row['producto'].'_'.$row['id'].'.pdf"><button class="btn btn-info btn-sm" type="input" title="Imprimir Reporte" style="box-shadow: none;"><i class="fas fa-print aria-hidden="true"></i></button></a>
                            
                            <a href="Dependences/Ficha Tecnica//'.$row['ficha_tecnica'].'" target="_blank"><button class="btn btn-primary btn-sm" style="box-shadow: none; background-color: #e67e22; border: none; height: 31px; width:31px;" type="button" title="Ficha Tecnica"><i class="far fa-file-pdf aria-hidden="true"></i></button></a>
                            
                            <button class="btn btn-danger btn-sm" type="button" onClick="" title="Eliminar Registro" style="box-shadow: none;"><i class="far fa-trash-alt aria-hidden="true"></i></button>
                            </div>';?></td>
                    </tr>
                            </form> 
                          
                    <?php
                      } 
                    ?>
                      </tbody>
                    </table>
                  </div>
          <br>
          <section>
              
                          <!----- SISTEMA DE GENERACION DE CODIGOS QR ------>

                <!--- Formulario que recibe los datos del QR --->

                <button class="accordion"><h2 align="center">Generador de códigos QR</h2></button>
                <div class="panel">
                  <div class='container'>
                        <br>
                        <form method='post' id="generador">
                         
                          <div class='row'>
                            <div class='col-md-6'>
                              <div class='row'>
                                <br>
                              </div>
                              <div class='row'>
                                <div class='col-md-6'>
                                  <div class="form-group" style="text-align:center;">
                                      <label for="textqr">ID</label>
                                      <input type="hidden" class="form-control" id="loteqr1" value="Lote: " required="">
                                      <input type="text" class="form-control" id="loteqr"  placeholder="Ingresa Lote" required>
                                      <p></p>
                                      <label for="textqr">Reporte de envío</label>
                                      <input type="hidden" class="form-control" id="nutriqr1" value="Reporte de envio:  " required="">
                                      <input type="url" class="form-control" id="nutriqr"  placeholder="Ingresa enlace" required>
                                  </div>
                                </div>
                                <div class='col-md-6'>
                                  <div class="form-group" style="text-align:center;">
                                      <label for="textqr1">Producto</label>
                                      <input type="hidden" class="form-control" id="productoqr1" value="Producto: " required="">
                                      <input type="text" class="form-control" id="productoqr"  placeholder="Ingresar producto" required>
                                      
                                      
                                  </div>
                                </div>
                                <br><br><br><br><br><br><br>
                                <p></p>
                                <div class='col-md-2'>
                                  <button type="submit" class="btn btn-primary" style="background-color: #2A8EAC; border: none; box-shadow: none;">Generar</button>
                                </div>
                                <div class='col-md-2'>
                                  <button type="reset" class="btn btn-success" value="reset" onclick="reset()" style="border: none; box-shadow: none;">Restaurar</button>
                                </div><br><br><br><br><br><br><br><br><br>
                              </div>
                            </div>
                            
                            <div class='col-md-2'>
                              <br>
                              <div class="form-group" style="text-align:center;">
                                <label for="textqr">Tamaño</label>
                                <select class='form-control' id='sizeqr'>
                                  <option value='250'>250 px</option>
                                  <option value='300'>300 px</option>
                                  <option value='350'>350 px</option>
                                </select>
                              </div>
                            </div>
                            <div class='col-md-4' style="padding: 0 0; vertical-align: middle; text-align: center">
                              <div class='result'></div>
                            </div>
                          </div><br><br>
                      
                        </form>
                  </div>
                </div>
              </section>
                </div>
              </div>
            </div>
        </div>
    </main>
  
    <!----- JAVASCRIPT ----->
   
    <!-- Optional JavaScript bootstrap -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Script para la paginacion y busqueda en la tabla principal  -->    
    <script>
      $(document).ready(function() {
        $('#example').DataTable({
          "ordering": false,
           "fixedHeader": true,
          "responsive": false,
          "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
          },
          
          "lengthMenu": [[5, 10, 15, -1], [5, 10, 15, "All"]]
        });
        
      } );
    </script>
    
    <!-- Script para enviar los datos del formulario al QR  -->
    
    <script>
    $( "#generador" ).submit(function( event ) {
      var loteqr=$("#loteqr").val();
      var loteqr1=$("#loteqr1").val();
      var productoqr1=$("#productoqr1").val();
      var productoqr=$("#productoqr").val();

      var nutriqr1=$("#nutriqr1").val();
      var nutriqr=$("#nutriqr").val();
      var sizeqr=$("#sizeqr").val();
      parametros={"loteqr":loteqr,"loteqr1":loteqr1,"productoqr1":productoqr1,"productoqr":productoqr,"nutriqr1":nutriqr1,"nutriqr":nutriqr,"sizeqr":sizeqr};
       $.ajax({
       type: "POST",
      url: "g_qr.php",
      data: parametros,
      success: function(datos){
        $(".result").html(datos);
      }
       
       })
      
      event.preventDefault();
    });
      </script>

    <!-- Script para ocultar y expandir la seccion de QR's  -->

    <script>
      var acc = document.getElementsByClassName("accordion");
      var i;

      for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
          this.classList.toggle("actives");
          var panel = this.nextElementSibling;
          if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
          } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
          } 
        });
      }
    </script>
    
    <!-- Script para la impresion de los codigos QR en pdf  -->
    
    <script type="text/javascript">
    function ImagetoPrint(source) {
         return "<html><head><script>function step1(){\n" +
             "setTimeout('step2()', 10);}\n" +
             "function step2(){window.print();window.close()}\n" +
             "</scri" + "pt></head><body align='center' onload='step1()'>\n" +
             "<img src='" + source + "' /></body></html>";
    }
    function PrintImage(source) {
         Pagelink = "about:blank";
         var pwa = window.open(Pagelink, "_new");
         pwa.document.open();
         pwa.document.write(ImagetoPrint(source));
         pwa.document.close();
    }
    </script>
    
  </body> 
<?php footerAdmin($data); ?>