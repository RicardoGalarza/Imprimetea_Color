<?php $this->load->view("partes-template/header"); ?>


<body data-layout="horizontal" data-topbar="dark">

<!-- Begin page -->
<div id="wrapper">
<?php $this->load->view("partes-template/menu"); ?>
  

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="page-title">Direcciones</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Mantenedores</a></li>
                                    <li class="breadcrumb-item active">Direcciones</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                
                <button type="button" id="" class="btn-red btn btn-pink btn-rounded width-md waves-effect waves-light" data-toggle="modal" data-target="#modal_crear_direccion">Nuevo</button>
                <br><br><br>
          
                                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;" id="modal_crear_direccion">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myLargeModalLabel">Dirección</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <br>

                                                <div class="form-group row col-md-12">
                                                    <label class="col-md-2 col-form-label" for="ciudad">Ciudad</label>
                                                    <div class="col-md-10">
                                                        <input type="text" id="ciudad" name="ciudad" class="form-control" placeholder="">
                                                    </div>
                                                    <br>
                                                </div>
                                                
                                                <div class="form-group row col-md-12">
                                                    <label class="col-md-2 col-form-label" for="direccion">Dirección</label>
                                                    <div class="col-md-10">
                                                        <input type="text" id="direccion" name="direccion" class="form-control" value="">
                                                    </div>
                                                    <br>
                                                </div>

                                                <div class="form-group row col-md-12">
                                                    <label class="col-md-2 col-form-label" for="numero_casa">Numero de Casa</label>
                                                    <div class="col-md-10">
                                                        <input type="text" id="numero_casa" name="numero_casa" class="form-control" value="">
                                                    </div>
                                                 </div>

                                                 <div class="form-group row col-md-12">
                                                    <label class="col-md-2 col-form-label" for="departamento">Departamento</label>
                                                    <div class="col-md-10">
                                                        <input type="text" id="departamento" name="departamento" class="form-control" value="">
                                                    </div>
                                                 </div>

                                                 <div class="form-group row col-md-12">
                                                    <label class="col-md-2 col-form-label" for="agencia_preferida">Agencia preferida</label>
                                                    <div class="col-md-10">
                                                        <input type="text" id="agencia_preferida" name="agencia_preferida" class="form-control" value="">
                                                    </div>
                                                 </div>

                                                 <div class="form-group row col-md-12">
                                                     <label class="col-md-2 col-form-label"></label>
                                                     <div class="col-md-10">
                                                         <center>
                                                          <button type="button" id="crear_direccion" class="btn-modern">Guardar</button>
                                                         </center>
                                                         <br>
                                                     </div>
                                                 </div>

                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                
          
          
          
          
                    
                <div class="col-lg-12">
                                <div class="card-box">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            </a>
                                       
                                    </div>
                                    
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-0">
                                            <thead>
                                            <tr>
                                               
                                                <th>Ciudad</th>
                                                <th>Dirección</th>
                                                <th>Numero de casa</th>
                                                <th>Departamento</th>
                                                <th>Agencia preferida</th>
                                                <th>created_at</th>
                                                <th>updated_at</th>
                                                <th>Acción</th>
                                            </tr>
                                            </thead>
                                            <tbody id="body_tabla_direcciones">
                                            
                                            
                                           
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div>

                            </div>

                        </div>

                <?php $this->load->view("partes-template/footer"); ?>
                
            </div> <!-- container-fluid -->

        </div> <!-- content -->

       

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->




<!-- Vendor js -->
<script src="assets-template/assets/js/vendor.min.js"></script>

<!-- App js -->
<script src="assets-template/assets/js/app.min.js"></script>

<!-- direcciones -->
<script src="assets/js/direcciones.js"></script>
</body>
</html>