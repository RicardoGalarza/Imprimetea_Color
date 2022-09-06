
    <?php $this->load->view("partes-template/header"); ?>

    <body data-layout="horizontal" data-topbar="dark">

        <!-- Begin page -->
        <div id="wrapper">
        <?php $this->load->view("partes-template/menu"); ?>

            <!-- Navigation Bar-->
            <header id="topnav">

                <!-- Topbar Start -->
                <div class="navbar-custom">
                    <div class="container-fluid">
                        <ul class="list-unstyled topnav-menu float-right mb-0">

                            <li class="dropdown notification-list">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>

                            <li class="d-none d-sm-block">
                                <form class="app-search">
                                    <div class="app-search-box">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search...">
                                            <div class="input-group-append">
                                                <button class="btn" type="submit">
                                                    <i class="fe-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </li>
    
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="fe-bell noti-icon"></i>
                                    <span class="badge badge-danger rounded-circle noti-icon-badge">9</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="m-0">
                                            <span class="float-right">
                                                <a href="" class="text-dark">
                                                    <small>Clear All</small>
                                                </a>
                                            </span>Notification
                                        </h5>
                                    </div>

                                    <div class="slimscroll noti-scroll">

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                            <div class="notify-icon">
                                                <img src="assets-template/assets/images/users/user-1.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Cristina Pride</p>
                                            <p class="text-muted mb-0 user-msg">
                                                <small>Hi, How are you? What about our next meeting</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary">
                                                <i class="mdi mdi-comment-account-outline"></i>
                                            </div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin
                                                <small class="text-muted">1 min ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon">
                                                <img src="assets-template/assets/images/users/user-4.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Karen Robinson</p>
                                            <p class="text-muted mb-0 user-msg">
                                                <small>Wow ! this admin looks good and awesome design</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-warning">
                                                <i class="mdi mdi-account-plus"></i>
                                            </div>
                                            <p class="notify-details">New user registered.
                                                <small class="text-muted">5 hours ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info">
                                                <i class="mdi mdi-comment-account-outline"></i>
                                            </div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin
                                                <small class="text-muted">4 days ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-secondary">
                                                <i class="mdi mdi-heart"></i>
                                            </div>
                                            <p class="notify-details">Carlos Crouch liked
                                                <b>Admin</b>
                                                <small class="text-muted">13 days ago</small>
                                            </p>
                                        </a>
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        View all
                                        <i class="fi-arrow-right"></i>
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="assets-template/assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle">
                                    <span class="pro-user-name ml-1">
                                        Nowak <i class="mdi mdi-chevron-down"></i> 
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-user"></i>
                                        <span>My Account</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-settings"></i>
                                        <span>Settings</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-lock"></i>
                                        <span>Lock Screen</span>
                                    </a>

                                    <div class="dropdown-divider"></div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-log-out"></i>
                                        <span>Logout</span>
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect">
                                    <i class="fe-settings noti-icon"></i>
                                </a>
                            </li>

                        </ul>

                        <!-- LOGO -->
                        <div class="logo-box">
                            <a href="index.html" class="logo logo-light">
                                <span class="logo-lg">
                                    <img src="assets-template/assets/images/logo-light.png" alt="" height="16">
                                </span>
                                <span class="logo-sm">
                                    <img src="assets-template/assets/images/logo-sm.png" alt="" height="24">
                                </span>
                            </a>
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-lg">
                                    <img src="assets-template/assets/images/logo-dark.png" alt="" height="16">
                                </span>
                                <span class="logo-sm">
                                    <img src="assets-template/assets/images/logo-sm.png" alt="" height="24">
                                </span>
                            </a>
                        </div>

                        <div class="clearfix"></div>
                    </div> <!-- end container-fluid-->
                </div>
                <!-- end Topbar -->

                <div class="topbar-menu">
                    <div class="container-fluid">
                        <div id="navigation">
                            <!-- Navigation Menu-->
                            <ul class="navigation-menu">

                                <li class="has-submenu">
                                    <a href="index.html"><i class="mdi mdi-view-dashboard"></i>Dashboard</a>
                                </li>

                                <li class="has-submenu">
                                    <a href="#"> <i class="mdi mdi-invert-colors"></i>User Interface  <div class="arrow-down"></div></a>
                                    <ul class="submenu megamenu">
                                        <li>
                                            <ul>
                                                <li>
                                                    <a href="ui-buttons.html">Buttons</a>
                                                </li>
                                                <li>
                                                    <a href="ui-cards.html">Cards</a>
                                                </li>
                                                <li>
                                                    <a href="ui-draggable-cards.html">Draggable Cards</a>
                                                </li>
                                                <li>
                                                    <a href="ui-checkbox-radio.html">Checkboxs-Radios</a>
                                                </li>
                                                <li>
                                                    <a href="ui-material-icons.html">Material Design</a>
                                                </li>
                                                <li>
                                                    <a href="ui-font-awesome-icons.html">Font Awesome 5</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li>
                                                    <a href="ui-dripicons.html">Dripicons</a>
                                                </li>
                                                <li>
                                                    <a href="ui-themify-icons.html">Themify Icons</a>
                                                </li>
                                                <li>
                                                    <a href="ui-feather-icons.html">Feather Icons</a>
                                                </li>
                                                <li>
                                                    <a href="ui-modals.html">Modals</a>
                                                </li>
                                                <li>
                                                    <a href="ui-notification.html">Notification</a>
                                                </li>
                                                <li>
                                                    <a href="ui-range-slider.html">Range Slider</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li>
                                                    <a href="ui-components.html">Components</a>
                                                </li>
                                                <li>
                                                    <a href="ui-sweetalert.html">Sweet Alert</a>
                                                </li>
                                                <li>
                                                    <a href="ui-treeview.html">Tree view</a>
                                                </li>
                                                <li>
                                                    <a href="ui-widgets.html">Widgets</a>
                                                </li>
                                                <li>
                                                    <a href="ui-typography.html">Typography</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="has-submenu">
                                    <a href="#">
                                        <i class="mdi mdi-lifebuoy"></i>Components <div class="arrow-down"></div></a>
                                    <ul class="submenu">
                                        <li class="has-submenu">
                                            <a href="#">Forms <div class="arrow-down"></div></a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="form-elements.html">General Elements</a>
                                                </li>
                                                <li>
                                                    <a href="form-advanced.html">Advanced Form</a>
                                                </li>
                                                <li>
                                                    <a href="form-validation.html">Form Validation</a>
                                                </li>
                                                <li>
                                                    <a href="form-wizard.html">Form Wizard</a>
                                                </li>
                                                <li>
                                                    <a href="form-fileupload.html">Form Uploads</a>
                                                </li>
                                                <li>
                                                    <a href="form-quilljs.html">Quilljs Editor</a>
                                                </li>
                                                <li>
                                                    <a href="form-xeditable.html">X-editable</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-submenu">
                                            <a href="#">Tables <div class="arrow-down"></div></a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="tables-basic.html">Basic Tables</a>
                                                </li>
                                                <li>
                                                    <a href="tables-datatable.html">Data Tables</a>
                                                </li>
                                                <li>
                                                    <a href="tables-responsive.html">Responsive Table</a>
                                                </li>
                                                <li>
                                                    <a href="tables-editable.html">Editable Table</a>
                                                </li>
                                                <li>
                                                    <a href="tables-tablesaw.html">Tablesaw Table</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="apps-chat.html">Chat</a>
                                        </li>
                                        <li>
                                            <a href="calendar.html">Calendar</a>
                                        </li>
                                        <li>
                                            <a href="inbox.html">Mail</a>
                                        </li>
                
                                    </ul>
                                </li>

                                <li class="has-submenu">
                                    <a href="#"> <i class="mdi mdi-chart-donut-variant"></i>Charts <div class="arrow-down"></div></a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="charts-flot.html">Flot Charts</a>
                                        </li>
                                        <li>
                                            <a href="charts-morris.html">Morris Charts</a>
                                        </li>
                                        <li>
                                            <a href="charts-chartist.html">Chartist Charts</a>
                                        </li>
                                        <li>
                                            <a href="charts-chartjs.html">Chartjs Charts</a>
                                        </li>
                                        <li>
                                            <a href="charts-other.html">Other Charts</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="has-submenu">
                                    <a href="#"> <i class="mdi mdi-cards-outline"></i>Pages <div class="arrow-down"></div></a>
                                    <ul class="submenu megamenu">
                                        <li>
                                            <ul>
                                                <li>
                                                    <a href="pages-starter.html">Starter Page</a>
                                                </li>
                                                <li>
                                                    <a href="pages-login.html">Login</a>
                                                </li>
                                                <li>
                                                    <a href="pages-register.html">Register</a>
                                                </li>
                                                <li>
                                                    <a href="pages-recoverpw.html">Recover Password</a>
                                                </li>
                                                <li>
                                                    <a href="pages-lock-screen.html">Lock Screen</a>
                                                </li>
                                                <li>
                                                    <a href="pages-confirm-mail.html">Confirm Mail</a>
                                                </li>
                                                <li>
                                                    <a href="pages-404.html">Error 404</a>
                                                </li>
                                                <li>
                                                    <a href="pages-500.html">Error 500</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li>
                                                    <a href="extras-projects.html">Projects</a>
                                                </li>
                                                <li>
                                                    <a href="extras-tour.html">Tour</a>
                                                </li>
                                                <li>
                                                    <a href="extras-taskboard.html">Taskboard</a>
                                                </li>
                                                <li>
                                                    <a href="extras-taskdetail.html">Task Detail</a>
                                                </li>
                                                <li>
                                                    <a href="extras-profile.html">Profile</a>
                                                </li>
                                                <li>
                                                    <a href="extras-maps.html">Maps</a>
                                                </li>
                                                <li>
                                                    <a href="extras-contact.html">Contact list</a>
                                                </li>
                                                <li>
                                                    <a href="extras-pricing.html">Pricing</a>
                                                </li>
                        
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li>
                                                    <a href="extras-timeline.html">Timeline</a>
                                                </li>
                                                <li>
                                                    <a href="extras-invoice.html">Invoice</a>
                                                </li>
                                                <li>
                                                    <a href="extras-faq.html">FAQs</a>
                                                </li>
                                                <li>
                                                    <a href="extras-gallery.html">Gallery</a>
                                                </li>
                                                <li>
                                                    <a href="extras-email-templates.html">Email Templates</a>
                                                </li>
                                                <li>
                                                    <a href="extras-maintenance.html">Maintenance</a>
                                                </li>
                                                <li>
                                                    <a href="extras-comingsoon.html">Coming Soon</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="has-submenu">
                                    <a href="#"> <i class="mdi mdi-card-bulleted-settings-outline"></i>Layouts <div class="arrow-down"></div></a>
                                    <ul class="submenu">
                                        <li><a href="layouts-vertical.html">Vertical</a></li>
                                        <li>
                                            <a href="layouts-menubar-dark.html">Menubar Dark</a>
                                        </li>
                                        <li>
                                            <a href="layouts-center-menu.html">Center Menu</a>
                                        </li>
                                        <li>
                                            <a href="layouts-menu-drop-dark.html">Menu Drop Dark</a>
                                        </li>
                                        <li>
                                            <a href="layouts-preloader.html">Preloader</a>
                                        </li>
                                        <li>
                                            <a href="layouts-normal-header.html">Unsticky Header</a>
                                        </li>
                                        <li>
                                            <a href="layouts-boxed.html">Boxed</a>
                                        </li>
                                    </ul>
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
                                    <h4 class="page-title">Gallery</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                            <li class="breadcrumb-item active">Gallery</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="portfolioFilter">
                                    <a href="#" data-filter="*" class="current waves-effect waves-primary">All</a>
                                    <a href="#" data-filter=".natural" class="waves-effect waves-primary">Natural</a>
                                    <a href="#" data-filter=".creative" class="waves-effect waves-primary">Creative</a>
                                    <a href="#" data-filter=".personal" class="waves-effect waves-primary">Personal</a>
                                    <a href="#" data-filter=".photography" class="waves-effect waves-primary">Photography</a>
                                </div>
                            </div>
                        </div>

                        <div class="port mb-2">
                            <div class="portfolioContainer">
                                <div class="col-md-6 col-xl-3 col-lg-4 natural personal">
                                    <div class="gal-detail thumb">
                                        <a href="assets-template/assets/images/gallery/1.jpg" class="image-popup" title="Screenshot-1">
                                            <img src="assets-template/assets/images/gallery/1.jpg" class="thumb-img img-fluid" alt="work-thumbnail">
                                        </a>
                                    
                                        <div class="text-center">
                                            <h4>Nature Image</h4>
                                            <p class="font-13 text-muted mb-2">Natural, Personal</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xl-3 col-lg-4 creative personal photography">
                                    <div class="gal-detail thumb">
                                        <a href="assets-template/assets/images/gallery/2.jpg" class="image-popup" title="Screenshot-2">
                                            <img src="assets-template/assets/images/gallery/2.jpg" class="thumb-img img-fluid" alt="work-thumbnail">
                                        </a>
                                        <div class="text-center">
                                            <h4>Gallary Image</h4>
                                            <p class="font-13 text-muted mb-2">Creative, Personal, Photography</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xl-3 col-lg-4 natural creative">
                                    <div class="gal-detail thumb">
                                        <a href="assets-template/assets/images/gallery/3.jpg" class="image-popup" title="Screenshot-3">
                                            <img src="assets-template/assets/images/gallery/3.jpg" class="thumb-img img-fluid" alt="work-thumbnail">
                                        </a>
                                        <div class="text-center">
                                            <h4>Gallary Image</h4>
                                            <p class="font-13 text-muted mb-2">Natural, Creative</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xl-3 col-lg-4 personal photography">
                                    <div class="gal-detail thumb">
                                        <a href="assets-template/assets/images/gallery/4.jpg" class="image-popup" title="Screenshot-4">
                                            <img src="assets-template/assets/images/gallery/4.jpg" class="thumb-img img-fluid" alt="work-thumbnail">
                                        </a>
                                        <div class="text-center">
                                            <h4>Gallary Image</h4>
                                            <p class="font-13 text-muted mb-2">Personal, Photography</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xl-3 col-lg-4 creative photography">
                                    <div class="gal-detail thumb">
                                        <a href="assets-template/assets/images/gallery/5.jpg" class="image-popup" title="Screenshot-5">
                                            <img src="assets-template/assets/images/gallery/5.jpg" class="thumb-img img-fluid" alt="work-thumbnail">
                                        </a>
                                        <div class="text-center">
                                            <h4>Gallary Image</h4>
                                            <p class="font-13 text-muted mb-2">Creative, Photography</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xl-3 col-lg-4 natural photography">
                                    <div class="gal-detail thumb">
                                        <a href="assets-template/assets/images/gallery/6.jpg" class="image-popup" title="Screenshot-6">
                                            <img src="assets-template/assets/images/gallery/6.jpg" class="thumb-img img-fluid" alt="work-thumbnail">
                                        </a>
                                        <div class="text-center">
                                            <h4>Gallary Image</h4>
                                            <p class="font-13 text-muted mb-2">Natural, Photography</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xl-3 col-lg-4 personal photography creative">
                                    <div class="gal-detail thumb">
                                        <a href="assets/images/gallery/7.jpg" class="image-popup" title="Screenshot-7">
                                            <img src="assets-template/assets/images/gallery/7.jpg" class="thumb-img img-fluid" alt="work-thumbnail">
                                        </a>
                                        <div class="text-center">
                                            <h4>Gallary Image</h4>
                                            <p class="font-13 text-muted mb-2">Personal, Photography, Creative</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xl-3 col-lg-4 creative photography natural">
                                    <div class="gal-detail thumb">
                                        <a href="assets/images/gallery/8.jpg" class="image-popup" title="Screenshot-8">
                                            <img src="assets-template/assets/images/gallery/8.jpg" class="thumb-img img-fluid" alt="work-thumbnail">
                                        </a>
                                        <div class="text-center">
                                            <h4>Gallary Image</h4>
                                            <p class="text-muted mb-2">Creative, Photography, Natural</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xl-3 col-lg-4 natural personal">
                                    <div class="gal-detail thumb">
                                        <a href="/assets/images/gallery/9.jpg" class="image-popup" title="Screenshot-9">
                                            <img src="assets-template/assets/images/gallery/9.jpg" class="thumb-img img-fluid" alt="work-thumbnail">
                                        </a>
                                        <div class="text-center">
                                            <h4>Gallary Image</h4>
                                            <p class="font-13 text-muted mb-2">Natural, Personal</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xl-3 col-lg-4 photography creative">
                                    <div class="gal-detail thumb">
                                        <a href="assets/images/gallery/10.jpg" class="image-popup" title="Screenshot-10">
                                            <img src="assets-template/assets/images/gallery/10.jpg" class="thumb-img img-fluid" alt="work-thumbnail">
                                        </a>
                                        <div class="text-center">
                                            <h4>Gallary Image</h4>
                                            <p class="font-13 text-muted mb-2">Photography, Creative</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xl-3 col-lg-4 creative photography">
                                    <div class="gal-detail thumb">
                                        <a href="assets/images/gallery/11.jpg" class="image-popup" title="Screenshot-11">
                                            <img src="assets-template/assets/images/gallery/11.jpg" class="thumb-img img-fluid" alt="work-thumbnail">
                                        </a>
                                        <div class="text-center">
                                            <h4>Gallary Image</h4>
                                            <p class="font-13 text-muted mb-2">Creative, Photography</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xl-3 col-lg-4 natural creative personal">
                                    <div class="gal-detail thumb">
                                        <a href="assets/images/gallery/12.jpg" class="image-popup" title="Screenshot-12">
                                            <img src="assets-template/assets/images/gallery/12.jpg" class="thumb-img img-fluid" alt="work-thumbnail">
                                        </a>
                                        <div class="text-center">
                                            <h4>Gallary Image</h4>
                                            <p class="font-13 text-muted mb-2">Natural, Creative, Personal</p>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- end portfoliocontainer-->
                        </div> <!-- End row -->
        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->

                
                <?php $this->load->view("partes-template/footer"); ?>

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        

       

        <!-- Vendor js -->
        <script src="assets-template/assets/js/vendor.min.js"></script>

        <!-- isotope filter plugin -->
        <script src="assets-template/assets/libs/isotope/isotope.pkgd.min.js"></script>

        <!--venobox lightbox-->
        <script src="assets-template/assets/libs/magnific-popup/jquery.magnific-popup.min.js"></script>

        <!-- Gallery Init-->
        <script src="assets-template/assets/js/pages/gallery.init.js"></script>

        <!-- App js -->
        <script src="assets-template/assets/js/app.min.js"></script>
        
        











    </body>
</html>