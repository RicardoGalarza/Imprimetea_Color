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
                            <h4 class="page-title">Productos</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Mantenedores</a></li>
                                    <li class="breadcrumb-item active">Productos</li>
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
                                                    <label class="col-md-2 col-form-label" for="precio">Precio</label>
                                                    <div class="col-md-10">
                                                        <input type="" id="precio" name="precio" class="form-control" value="">
                                                    </div>
                                                    <br>
                                                </div>

                                                <div class="form-group row col-md-12">
                                                    <label class="col-md-2 col-form-label" for="stock/Cantidad">Stock/Cantidad</label>
                                                    <div class="col-md-10">
                                                        <input type="" id="stock/Cantidad" name="stock/Cantidad" class="form-control" value="">
                                                    </div>
                                                 </div>

                                                 <div class="form-group row col-md-12">
                                                    <label class="col-md-2 col-form-label" for="costo">Costo</label>
                                                    <div class="col-md-10">
                                                        <input type="" id="costo" name="costo" class="form-control" value="">
                                                    </div>
                                                 </div>

                                                 <div class="form-group row col-md-12">
                                                    <label class="col-md-2 col-form-label" for="descripción">Descripción</label>
                                                    <div class="col-md-10">
                                                        <input type="" id="descripción" name="descripción" class="form-control" value="">
                                                    </div>
                                                 </div>

                                                 <div class="form-group row col-md-12">
                                                    <label class="col-md-2 col-form-label" for="foto">Foto</label>
                                                    <div class="col-md-10">
                                                        <input type="file" id="foto" name="foto" class="form-control" value="">
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
                                               
                                                <th>Productos</th>
                                                <th>Nombre</th>
                                                <th>Precio</th>
                                                <th>Stock/Cantidad</th>
                                                <th>Costo</th>
                                                <th>Descripción</th>
                                                <th>Foto</th>
                                                <th>created_at</th>
                                                <th>updated_at</th>
                                                <th>Acción</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">Stikers</th>
                                                <td>Stikers</td>
                                                <td>cl 5.000</td>
                                                <td>50</td>
                                                <td>cl 1.500</td>
                                                <td>Stiker 5x5</td>
                                                <td></td>
                                                <td>2022-08-30</td>
                                                <td>16:28:00 2022-08-30</td>
                                                <td>

                                                <button  type="button" class="btn btn-success btn-sm   waves-effect "><i class="fas fa-pencil-alt"></i></button>

                                                <button  type="button" class="btn btn-danger btn-sm  waves-effect "><i class="fe-trash-2"></i></button> 

                                                <button  type="button" class="btn btn-primary btn-sm waves-effect "><i class=" dripicons-preview"></i></button>
                                                
                                                 </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Stikers</th>
                                                <td>Stikers</td>
                                                <td>cl 5.000</td>
                                                <td>50</td>
                                                <td>cl 1.500</td>
                                                <td>Stiker 5x5</td>
                                                <td></td>
                                                <td>2022-08-30</td>
                                                <td>16:28:00 2022-08-30</td>
                                                <td>
                                                <button  type="button" class="btn btn-success btn-sm   waves-effect "><i class="fas fa-pencil-alt"></i></button>

                                                <button  type="button" class="btn btn-danger btn-sm  waves-effect "><i class="fe-trash-2"></i></button> 

                                                <button  type="button" class="btn btn-primary btn-sm waves-effect "><i class=" dripicons-preview"></i></button>
                                                
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