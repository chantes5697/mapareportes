<!DOCTYPE html>
<html>
  <head>
    <title>Crear Puesto</title>
    <!-- Custom fonts for this template -->
   <?php
     $this->load->view('Layout/Head');
   ?>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('./style.css') ?>" />
    <script src="<?php echo base_url('public/js/index.js')?>"></script>

    <style>
    #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
      .controls {
        margin-top: 16px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      }
    </style>

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

                  <?php if (isset($error)):?>
                    <div class="p-3 mb-2 bg-danger text-white">
                      <?php
                        echo($error);
                      ?>

                    </div>
                    <?php if (isset($dias)): ?>

                      <?php echo form_open('Puestos/crearPuesto') ?>
                        <label for="direccion">Direccion:</label><br>
                        <input
                          id="pac-input"
                          class="controls"
                          type="text"
                          placeholder="Direccion"
                          name="direccion"
                        />
                        <br>

                        <label for="dias">Dias:</label><br>
                        <select class="form-control user-select" name="dias">
                          <?php foreach ($dias as $dia ): ?>
                            <option value="<?php echo($dia['iddia']) ?>"><?php echo $dia['dias'] ?></option>
                          <?php endforeach; ?>
                        </select>

                        <label for="periodo">Periodo:</label><br>
                        <select class="form-control user-select" name="periodo">
                          <?php foreach ($periodos as $periodo ): ?>
                            <option value="<?php echo($periodo['idperiodo']) ?>"><?php echo $periodo['periodo'] ?></option>
                          <?php endforeach; ?>
                        </select>

                        <label for="comida">Comida:</label><br>
                        <select class="form-control user-select" name="dias">
                          <?php foreach ($comidas as $comida ): ?>
                            <option value="<?php echo($comida['idcomida']) ?>"><?php echo $comida['comida'] ?></option>
                          <?php endforeach; ?>
                        </select>


                      <div  id="map" style="width:100%; height:500px;"></div>

                      <input type="submit" value="Submit" />
                      <?php   echo form_close(); ?>


                    <?php endif; ?>
                  <?php else: ?>

                    <?php if (isset($dias)): ?>

                      <?php echo form_open('Puestos/crearPuesto') ?>
                        <label for="direccion">Direccion:</label><br>
                        <input
                          id="pac-input"
                          class="controls"
                          type="text"
                          placeholder="Direccion"
                          name="direccion"
                        />
                        <br>

                        <label for="dias">Dias:</label><br>
                        <select class="form-control user-select" name="dias">
                          <?php foreach ($dias as $dia ): ?>
                            <option value="<?php echo($dia['iddia']) ?>"><?php echo $dia['dias'] ?></option>
                          <?php endforeach; ?>
                        </select>

                        <label for="periodo">Periodo:</label><br>
                        <select class="form-control user-select" name="periodo">
                          <?php foreach ($periodos as $periodo ): ?>
                            <option value="<?php echo($periodo['idperiodo']) ?>"><?php echo $periodo['periodo'] ?></option>
                          <?php endforeach; ?>
                        </select>

                        <label for="comida">Comida:</label><br>
                        <select class="form-control user-select" name="dias">
                          <?php foreach ($comidas as $comida ): ?>
                            <option value="<?php echo($comida['idcomida']) ?>"><?php echo $comida['comida'] ?></option>
                          <?php endforeach; ?>
                        </select>


                      <div  id="map" style="width:100%; height:500px;"></div>

                      <input type="submit" value="Submit" />
                      <?php   echo form_close(); ?>


                    <?php endif; ?>

                  <?php endif; ?>

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
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUdz2dvwNbKtWmoBMhIh7D53ifnh9HQGQ&callback=initAutocomplete&libraries=places&v=weekly"
      async
    ></script>
  </body>
</html>
