<!DOCTYPE html>
<html>
  <head>
    <title>Crear Puesto</title>
    <!-- Custom fonts for this template -->
   <?php
     $this->load->view('Layout/Head');
   ?>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="stylesheet" type="text/css" href="./style.css" />
    <script src="./index.js"></script>
  </head>
  <body>
    <div id="wrapper">

      <!-- Sidebar -->
        <?php
         $this->load->view('Layout/Sidebar')
        ?>
        <!-- End of Sidebar -->

        <div id="content-wrapper" class="d-flex flex-column">
          <!-- Main content-->
          <div id="content" class="">

            <!-- Topbar -->
                <?php $this->load->view('Layout/Navbar') ?>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

              <h1>Crear Puesto</h1>

              <div class="card shadow mb-4">

                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                          <tr>
                              <th style="text-align: center;">Direccion</th>
                              <th style="text-align: center;">Comida</th>
                              <th style="text-align: center;">Dias</th>
                              <th style="text-align: center;">Periodo</th>
                              <th style="text-align: center;">Calificacion</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php if(isset($data)): ?>
                          <?php foreach ($variable as $key => $value):?>
                            <!-- code -->
                            <tr>
                                <td style="text-align: center;"><?php echo($key['direccion']) ?></th>
                                <td style="text-align: center;"><?php echo($key['comida']) ?></th>
                                <td style="text-align: center;"><?php echo($key['dias']) ?></th>
                                <td style="text-align: center;"><?php echo($key['periodo']) ?></th>
                                <td style="text-align: center;"><?php echo($key['calificacion']) ?></th>
                            </tr>
                          <?php endforeach; ?>
                        <?php endif; ?>

                      </tbody>
                    </table>

                  </div>
                </div>

              </div>


            </div>
            <!-- End of Page Content  -->
          </div>
          <!-- End of main content -->

          <!-- Footer -->
            <?php $this->load->view('Layout/footer') ?>
          <!-- End of Footer -->

        </div>

    </div>



    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initAutocomplete&libraries=places&v=weekly"
      async
    ></script>
  </body>
</html>
