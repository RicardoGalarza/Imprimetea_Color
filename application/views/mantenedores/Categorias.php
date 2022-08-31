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
                
                <button type="button" class="btn btn-dark btn-rounded width-md waves-effect waves-light">Nuevo</button>
                <br><br>
          
          
          
          
                    
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
                                            <tbody>
                                            <tr>
                                                <th scope="row">Fiesta</th>
                                                <td>Pack completo</td>
                                                <td>2022-08-30</td>
                                                <td>16:28:00 2022-08-30</td>
                                                <td>

                                                <button type="button" class="btn btn-success  waves-effect "><i class="fas fa-pencil-alt"></i></button>

                                                <button type="button" class="btn btn-danger  waves-effect "><i class="fe-trash-2"></i></button> 

                                                <button type="button" class="btn btn-primary waves-effect "><i class=" dripicons-preview"></i></button>
                                                
                                                 </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Emprendedor</th>
                                                <td>Pack Emprendedor</td>
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