  <!-- Navigation Bar-->
    <header id="topnav">

    <?php $this->load->view("partes-template/menu-gris"); ?>
    


        <div class="topbar-menu">
            <div class="container-fluid">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu navbar">

                        <li class="has-submenu">
                            <a href="/"><i class="fas fa-map-marker"></i>Dashboard</a>
                        </li>

                        <li class="has-submenu">
                            <a href="#"> <i class="fas fa-shopping-cart"></i>Mantenedores<div class="arrow-down"></div></a>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li>
                                            <a href="categorias">Categorías</a>
                                        </li>
                                        <li>
                                            <a href="clientes">Clientes</a>
                                        </li>
                                        <li>
                                            <a href="emprendimientos">Emprendimientos</a>
                                        </li>
                                        <li>
                                            <a href="direcciones">Direcciones</a>
                                        </li>
                                        <li>
                                            <a href="productos">Productos</a>
                                        </li>
                                        <li>
                                            <a href="ofertas">Ofertas</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="has-submenu">
                            <a href="pedidos">
                                <i class="fas fa-shipping-fast"></i>
                                Pedidos 
                            </a>
                        </li>

                       

                    </ul>
                    <!-- End navigation menu -->

                    <div class="clearfix"></div>    
                </div>
                <!-- end #navigation -->
            </div>
            <!-- end container -->
        </div>
        <!-- end navbar-custom -->

    </header>
    <!-- End Navigation Bar-->