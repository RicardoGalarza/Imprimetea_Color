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
                            <h4 class="page-title">Clientes</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Mantenedores</a></li>
                                    <li class="breadcrumb-item active">Clientes</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                
                <button type="button" id="btn-red" class="btn btn-pink btn-rounded width-md waves-effect waves-light" data-toggle="modal" data-target="#myModal">Nuevo</button>
                <br><br><br>
          
                                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;" id="myModal">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myLargeModalLabel">Nuevo Cliente</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <br>

                                                <div class="form-group row col-md-12">
                                                    <label class="col-md-2 col-form-label" for="nombre">Nombre</label>
                                                    <div class="col-md-10">
                                                        <input type="email" id="nombre" name="nombre" class="form-control" placeholder="">
                                                    </div>
                                                    <br>
                                                </div>
                                                
                                                <div class="form-group row col-md-12">
                                                    <label class="col-md-2 col-form-label" for="teléfono">Teléfono</label>
                                                    <div class="col-md-10">
                                                        <input type="" id="teléfono" name="teléfono" class="form-control" value="">
                                                    </div>
                                                    <br>
                                                </div>

                                                <div class="form-group row col-md-12">
                                                    <label class="col-md-2 col-form-label" for="teléfono">Email</label>
                                                    <div class="col-md-10">
                                                        <input type="" id="email" name="email" class="form-control" value="">
                                                    </div>
                                                 </div>

                                                 <div class="form-group row col-md-12">
                                                     <label class="col-md-2 col-form-label"></label>
                                                     <div class="col-md-10">
                                                         <center>
                                                          <button type="button" class="btn-modern">Guardar</button>
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
                                               
                                                <th>Cliente</th>
                                                <th>Nombre</th>
                                                <th>Rut</th>
                                                <th>Teléfono</th>
                                                <th>Correo electrónico</th>
                                                <th>created_at</th>
                                                <th>updated_at</th>
                                                <th>Acción</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">Ricardo</th>
                                                <td>Ricardo Galarza</td>
                                                <td>20.456.543-2</td>
                                                <td>998630571</td>
                                                <td>ricardo@gmail.com</td>
                                                <td>2022-08-30</td>
                                                <td>16:28:00 2022-08-30</td>
                                               
                                                <td>

                                                <button type="button" class="btn btn-success  waves-effect "><i class="fas fa-pencil-alt"></i></button>

                                                <button type="button" class="btn btn-danger  waves-effect "><i class="fe-trash-2"></i></button> 

                                                <button type="button" class="btn btn-primary waves-effect "><i class=" dripicons-preview"></i></button>
                                                
                                                 </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Marío</th>
                                                <td>Marío Morales</td>
                                                <td>11.516.359-0</td>
                                                <td>996923494</td>
                                                <td>mario@gmail.com</td>
                                                <td>2022-08-30</td>
                                                <td>16:28:00 2022-08-30</td>
                                                
                                                <td>
                                                <button  type="button" class="btn btn-success   waves-effect "><i class="fas fa-pencil-alt"></i></button>

                                                <button  type="button" class="btn btn-danger  waves-effect "><i class="fe-trash-2"></i></button> 

                                                <button  type="button" class="btn btn-primary waves-effect "><i class=" dripicons-preview"></i></button>
                                                
                                            </td>
                                            </tr>
                                           
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

</body>
</html>