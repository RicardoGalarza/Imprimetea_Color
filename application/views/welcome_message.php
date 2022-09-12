
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>BIENVENIDOS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/imagenes/imprimete.png">

        <!-- Bootstrap Css -->
        <link href="<?php echo base_url() ?>assets-template/assets/css/bootstrap.min.css" id="bootstrap-stylesheet" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?php echo base_url() ?>assets-template/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?php echo base_url() ?>assets-template/assets/css/app.css" id="app-stylesheet" rel="stylesheet" type="text/css" />
        

    </head>


    <body class="authentication-bg">

        <div class="account-pages mt-6 mb-6">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="text-center">
                            <a href="index.html" class="logo">
                                <img src="<?php echo base_url() ?>" alt="" height="22" class="logo-light mx-auto">
                            </a>
                            
                        </div>
                        <div class="card mt-4">

                            <div class="card-body p-4">
                                
                                <div class="text-center mb-4">
                                    <h4 class="text-uppercase mt-0"></h4>
                                    <img src="assets/imagenes/IMPRIMETE-A-COLOR.png" class="img-fluid" alt="">
                                </div>

                                <form action="#">

                                    <div class="form-group mb-2">
                                        <label for="emailaddress">Dirección de correo electrónico</label>
                                        <input class="form-control" type="email" id="emailaddress" required="" placeholder="">
                                    </div>

                                    <div class="form-group mb-2">
                                        <label for="password">Contraseña</label>
                                        <input class="form-control" type="password" required="" id="password" placeholder="">
                                    </div>

                                    <div class="form-group mb-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                            <label class="custom-control-label" for="checkbox-signin">Mantenerme conectado</label>
                                        </div>
                                    </div>

                                    <div class="row justify-content-between">
                                        <div class="form-group col-6 ">
                                            <button class="btn btn-primary btn-block" type="submit">Iniciar Sesión</button>
                                        </div>
                                            
                                        <div class="form-group col-6 ">
                                            <button class="btn  btn-primary btn-block" type="submit">Registrarme</button>
                                        </div>

                                    </div>
                                </form>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->
    

        <!-- Vendor js -->
        <script src="<?php echo base_url() ?>assets-template/assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url() ?>assets-template/assets/js/app.min.js"></script>
        
    </body>
</html>