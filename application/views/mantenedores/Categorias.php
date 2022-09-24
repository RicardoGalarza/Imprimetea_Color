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
                            <h4 class="page-title">Categorias</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Mantenedores</a></li>
                                    <li class="breadcrumb-item active">Categoria</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                
                <button type="button" class="btn-red btn btn-pink btn-rounded width-md waves-effect waves-light" data-toggle="modal" data-target="#modal_crear_categoria">Nuevo</button>
                <br><br><br>
          
                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;" id="modal_crear_categoria">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myLargeModalLabel">Categorias</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <br>

                                                <div class="form-group row col-md-12">
                                                    <label class="col-md-2 col-form-label" for="nombre">Nombre</label>
                                                    <div class="col-md-10">
                                                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="">
                                                    </div>
                                                    <br>
                                                </div>
                                                
                                                <div class="form-group row col-md-12">
                                                    <label class="col-md-2 col-form-label" for="descripcion">Descripcion</label>
                                                    <div class="col-md-10">
                                                        <input type="text" id="descripcion" name="descripcion" class="form-control" value="">
                                                    </div>
                                                    <br>
                                                </div>


                                                 <div class="form-group row col-md-12">
                                                     <label class="col-md-2 col-form-label"></label>
                                                     <div class="col-md-10">
                                                         <center>
                                                          <button type="button" id="crear_categoria" class="btn-modern">Guardar</button>
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
                                               
                                                <th>Nombre</th>
                                                <th>Descripción</th>
                                                <th>created_at</th>
                                                <th>updated_at</th>
                                                <th>Acción</th>
                                            </tr>
                                            </thead>
                                            <tbody id="body_tabla_categorias">
                                            
                                           
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

<!-- Categorias -->
<script src="assets/js/categorias.js"></script>

</body>
</html>