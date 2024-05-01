<?php
session_start();
    include 'koneksi.php';
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Frogetor - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by themesbrand" name="description" />
        <meta content="Mannatthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="assets/plugins/filter/magnific-popup.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Top Bar Start -->
        <div class="topbar">
             <!-- Navbar -->
             <nav class="navbar-custom">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo">
                        <span>
                            <img src="assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
                        </span>
                        <span>
                            <img src="assets/images/logo-dark.png" alt="logo-large" class="logo-lg">
                        </span>
                    </a>
                </div>
    
                <ul class="list-unstyled topbar-nav float-right mb-0">

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <i class="mdi mdi-bell-outline nav-icon"></i>
                            <span class="badge badge-danger badge-pill noti-icon-badge">2</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">
                            <!-- item-->
                            <h6 class="dropdown-item-text">
                                Notifications (258)
                            </h6>
                            <div class="slimscroll notification-list">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                    <p class="notify-details">New Message received<small class="text-muted">You have 87 unread messages</small></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="mdi mdi-glass-cocktail"></i></div>
                                    <p class="notify-details">Your item is shipped<small class="text-muted">It is a long established fact that a reader will</small></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="mdi mdi-message"></i></div>
                                    <p class="notify-details">New Message received<small class="text-muted">You have 87 unread messages</small></p>
                                </a>
                            </div>
                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                View all <i class="fi-arrow-right"></i>
                            </a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/users/user-1.jpg" alt="profile-user" class="rounded-circle" /> 
                            <span class="ml-1 nav-user-name hidden-sm"> <i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="dripicons-user text-muted mr-2"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted mr-2"></i> My Wallet</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-gear text-muted mr-2"></i> Settings</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted mr-2"></i> Lock screen</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted mr-2"></i> Logout</a>
                        </div>
                    </li>
                </ul>
    
                <ul class="list-unstyled topbar-nav mb-0">
                        
                    <li>
                        <button class="button-menu-mobile nav-link waves-effect waves-light">
                            <i class="mdi mdi-menu nav-icon"></i>
                        </button>
                    </li>

                    <li class="hide-phone app-search">
                        <form role="search" class="">
                            <input type="text" placeholder="Search..." class="form-control">
                            <a href=""><i class="fas fa-search"></i></a>
                        </form>
                    </li>
                    
                </ul>

            </nav>
            <!-- end navbar-->
        </div>
        <!-- Top Bar End -->
        <div class="page-wrapper-img">
            <div class="page-wrapper-img-inner">
                <div class="sidebar-user media">                    
                    <img src="assets/images/users/user-1.jpg" alt="user" class="rounded-circle img-thumbnail mb-1">
                    <span class="online-icon"><i class="mdi mdi-record text-success"></i></span>
                    <div class="media-body">
                        <h5 class="text-light">Mr. Michael Hill </h5>
                        <ul class="list-unstyled list-inline mb-0 mt-2">
                            <li class="list-inline-item">
                                <a href="#" class=""><i class="mdi mdi-account text-light"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class=""><i class="mdi mdi-settings text-light"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class=""><i class="mdi mdi-power text-danger"></i></a>
                            </li>
                        </ul>
                    </div>                    
                </div>
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="float-right align-item-center mt-2">
                                <button class="btn btn-info px-4 align-self-center report-btn">Create Report</button>
                            </div>
                            <h4 class="page-title mb-2"><i class="mdi mdi-folder-multiple-image mr-2"></i>Gallery</h4>  
                            <div class="">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Frogetor</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active">Gallery</li>
                                </ol>
                            </div>                                      
                        </div><!--end page title box-->
                    </div><!--end col-->
                </div><!--end row-->
                <!-- end page title end breadcrumb -->
            </div><!--end page-wrapper-img-inner-->
        </div><!--end page-wrapper-img-->
        
        <div class="page-wrapper">
            <div class="page-wrapper-inner">

                <!-- Left Sidenav -->
                <div class="left-sidenav">
                    
                    <ul class="metismenu left-sidenav-menu" id="side-nav">

                        <li class="menu-title">Main</li>

                        <li>
                            <a href="javascript: void(0);"><i class="mdi mdi-monitor"></i><span>Dashboards</span><span class="badge badge-danger badge-pill float-right">9+</span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="index.html">Dashboard 1</a></li>
                                <li><a href="index-2.html">Dashboard 2</a></li>
                                <li><a href="index-3.html">Dashboard 3</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);"><i class="mdi mdi-apps"></i><span>App</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="app-chat.html"><span>Chat</span></a></li>
                                <li><a href="app-calendar.html"><span>Calendar</span></a></li> 

                                <li>
                                    <a href="javascript: void(0);">ECommerce <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="app-ecommerce-product.html">Product</a></li>
                                        <li><a href="app-ecommerce-product-list.html">Product List</a></li>
                                        <li><a href="app-ecommerce-product-detail.html">Product Detail</a></li>
                                        <li><a href="app-ecommerce-cart.html">Cart</a></li>
                                        <li><a href="app-ecommerce-checkout.html">Checkout</a></li>
                                    </ul>
                                </li>                                
                                <li><a href="app-contact-list.html"><span>Contact List</span></a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);"><i class="mdi mdi-email-variant"></i><span>Email</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="email-inbox.html">Inbox</a></li>
                                <li><a href="email-read.html">Read Email</a></li>
                            </ul>
                        </li>

                        <li class="menu-title">Components</li>

                        <li>
                            <a href="javascript: void(0);"><i class="mdi mdi-cards-playing-outline"></i><span>UI Elements</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                
                                <li><a href="ui-alerts.html">Alerts</a></li>                                
                                <li><a href="ui-buttons.html">Buttons</a></li>
                                <li><a href="ui-cards.html">Cards</a></li>                                
                                <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                                <li><a href="ui-modals.html">Modals</a></li>
                                <li><a href="ui-typography.html">Typography</a></li>
                                <li><a href="ui-progress.html">Progress</a></li>
                                <li><a href="ui-tabs-accordions.html">Tabs & Accordions</a></li>
                                <li><a href="ui-tooltips-popovers.html">Tooltips & Popover</a></li>
                                <li><a href="ui-carousel.html">Carousel</a></li>
                                <li><a href="ui-pagination.html">Pagination</a></li>
                                <li><a href="ui-grid.html">Grid System</a></li>
                                <li><a href="ui-scrollspy.html">Scrollspy</a></li>
                                <li><a href="ui-spinners.html">Spinners</a></li>
                                <li><a href="ui-toasts.html">Toasts</a></li>
                                
                                
                                <li>
                                    <a href="javascript: void(0);">Oter Components <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="ui-other-animation.html">Animation</a></li>
                                        <li><a href="ui-other-avatar.html">Avatar</a></li>
                                        <li><a href="ui-other-clipboard.html">Clip Board</a></li>
                                        <li><a href="ui-other-files.html">File Meneger</a></li>
                                        <li><a href="ui-other-ribbons.html">Ribbons</a></li>
                                        <li><a href="ui-other-dragula.html"><span>Dragula</span></a></li>
                                        <li><a href="ui-other-check-radio.html"><span>Check & Radio Buttons</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        
                        <li>
                            <a href="javascript: void(0);"><i class="mdi mdi-buffer"></i><span>Advanced UI</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="advanced-rangeslider.html">Range Slider</a></li>
                                <li><a href="advanced-sweetalerts.html">Sweet Alerts</a></li>
                                <li><a href="advanced-nestable.html">Nestable List</a></li>
                                <li><a href="advanced-ratings.html">Ratings</a></li>
                                <li><a href="advanced-highlight.html">Highlight</a></li>
                                <li><a href="advanced-session.html">Session Timeout</a></li>
                                <li><a href="advanced-idle-timer.html">Idle Timer</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);"><i class="mdi mdi-clipboard-outline"></i><span class="badge badge-info float-right">8</span><span>Forms</span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="forms-elements.html">Basic Elements</a></li>
                                <li><a href="forms-advanced.html">Advance Elements</a></li>
                                <li><a href="forms-validation.html">Validation</a></li>
                                <li><a href="forms-wizard.html">Wizard</a></li>
                                <li><a href="forms-editors.html">Editors</a></li>
                                <li><a href="forms-repeater.html">Repeater</a></li>
                                <li><a href="forms-x-editable.html">X Editable</a></li>
                                <li><a href="forms-uploads.html">File Upload</a></li>
                                <li><a href="forms-img-crop.html">Image Crop</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);"><i class="mdi mdi-poll"></i><span>Charts</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="charts-apex.html">Apex</a></li>
                                <li><a href="charts-morris.html">Morris</a></li>
                                <li><a href="charts-chartist.html">Chartist</a></li>
                                <li><a href="charts-flot.html">Flot</a></li>
                                <li><a href="charts-peity.html">Peity</a></li>
                                <li><a href="charts-chartjs.html">Chartjs</a></li>
                                <li><a href="charts-sparkline.html">Sparkline</a></li>
                                <li><a href="charts-knob.html">Jquery Knob</a></li>
                                <li><a href="charts-justgage.html">JustGage</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);"><i class="mdi mdi-format-list-bulleted-type"></i><span>Tables</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="tables-basic.html">Basic</a></li>
                                <li><a href="tables-datatable.html">Datatables</a></li>
                                <li><a href="tables-responsive.html">Responsive</a></li>
                                <li><a href="tables-footable.html">Footable</a></li>
                                <li><a href="tables-jsgrid.html">Jsgrid</a></li>
                                <li><a href="tables-editable.html">Editable</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);"><i class="mdi mdi-diamond-stone"></i><span>Icons</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="icons-materialdesign.html">Material Design</a></li>
                                <li><a href="icons-dripicons.html">Dripicons</a></li>
                                <li><a href="icons-fontawesome.html">Font awesome</a></li>
                                <li><a href="icons-themify.html">Themify</a></li>
                                <li><a href="icons-typicons.html">Typicons</a></li>
                            </ul>
                        </li>

                        <li class="menu-title">More</li>

                        <li>
                            <a href="javascript: void(0);"><i class="mdi mdi-map"></i><span>Maps</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="maps-google.html">Google Maps</a></li>
                                <li><a href="maps-vector.html">Vector Maps</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);"><i class="mdi mdi-lock-outline"></i><span>Authentication</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="auth-login.html">Login</a></li>
                                <li><a href="auth-register.html">Register</a></li>
                                <li><a href="auth-recoverpw.html">Recover Password</a></li>
                                <li><a href="auth-lock-screen.html">Lock Screen</a></li>
                                <li><a href="auth-404.html">Error 404</a></li>
                                <li><a href="auth-500.html">Error 500</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);"><i class="mdi mdi-book-open-page-variant"></i><span>Pages</span><span class="badge badge-success float-right">Hot</span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="page-tour.html">Tour</a></li>
                                <li><a href="page-timeline.html">Timeline</a></li>
                                <li><a href="page-invoice.html">Invoice</a></li>
                                <li><a href="page-treeview.html">Treeview</a></li>
                                <li><a href="page-profile.html">Profile</a></li>
                                <li><a href="page-starter.html">Starter Page</a></li>
                                <li><a href="page-pricing.html">Pricing</a></li>
                                <li><a href="page-blogs.html"><span>Blogs</span></a></li>
                                <li><a href="page-faq.html">FAQs</a></li>
                                <li><a href="page-gallery.html">Gallery</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:void(0);"><i class="mdi mdi-contact-mail"></i><span>Email Templates</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="email-templates-basic.html">Basic Action Email</a></li>
                                <li><a href="email-templates-alert.html">Alert Email</a></li>
                                <li><a href="email-templates-billing.html">Billing Email</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <!-- end left-sidenav-->

                <!-- Page Content-->
                <div class="page-content">
                    <div class="container-fluid"> 
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <ul class="col container-filter categories-filter mb-0" id="filter">
                                                <li><a class="categories active" data-filter="*">All</a></li>
                                                <li><a class="categories" data-filter=".branding">Branding</a></li>
                                                <li><a class="categories" data-filter=".design">Design</a></li>
                                                <li><a class="categories" data-filter=".photo">Photo</a></li>
                                                <li><a class="categories" data-filter=".coffee">coffee</a></li>
                                            </ul>
                                        </div><!-- End portfolio  -->
                                    </div><!--end card-body-->
                                </div><!--end card-->
                                
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row container-grid nf-col-3  projects-wrapper">
                                            <div class="col-lg-4 col-md-6 p-0 nf-item branding design coffee spacing">
                                                <div class="item-box">
                                                    <a class="cbox-gallary1 mfp-image" href="assets/images/small/img-1.jpg" title="Consequat massa quis">
                                                        <img class="item-container " src="assets/images/small/img-1.jpg" alt="7" />
                                                        <div class="item-mask">
                                                            <div class="item-caption">
                                                                <h5 class="text-light">Consequat massa quis</h5>
                                                                <p class="text-light">Branding, Design, Coffee</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div><!--end item-box-->
                                            </div><!--end col-->
                            
                                            <div class="col-lg-4 col-md-6 p-0 nf-item photo spacing">
                                                <div class="item-box">
                                                    <a class="cbox-gallary1 mfp-image" href="assets/images/small/img-2.jpg" title="Vivamus elementum semper">
                                                        <img class="item-container mfp-fade" src="assets/images/small/img-2.jpg" alt="2" />
                                                        <div class="item-mask">
                                                            <div class="item-caption">
                                                                <h5 class="text-light">Vivamus elementum semper</h5>
                                                                <p class="text-light">Photo</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div><!--end item-box-->
                                            </div><!--end col-->
                            
                                            <div class="col-lg-4 col-md-6 p-0 nf-item branding coffee spacing">
                                                <div class="item-box">
                                                    <a class="cbox-gallary1 mfp-image" href="assets/images/small/img-3.jpg" title="Quisque rutrum">
                                                        <img class="item-container" src="assets/images/small/img-3.jpg" alt="4" />
                                                        <div class="item-mask">
                                                            <div class="item-caption">
                                                                <h5 class="text-light">Quisque rutrum</h5>
                                                                <p class="text-light">Branding, Design, Coffee</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div><!--end item-box-->
                                            </div><!--end col-->
                            
                                            <div class="col-lg-4 col-md-6 p-0 nf-item branding design spacing">
                                                <div class="item-box">
                                                    <a class="cbox-gallary1 mfp-image" href="assets/images/small/img-4.jpg" title="Tellus eget condimentum">
                                                        <img class="item-container" src="assets/images/small/img-4.jpg" alt="5" />
                                                        <div class="item-mask">
                                                            <div class="item-caption">
                                                                <h5 class="text-light">Tellus eget condimentum</h5>
                                                                <p class="text-light">Design</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div><!--end item-box-->
                                            </div><!--end col-->
                            
                                            <div class="col-lg-4 col-md-6 p-0 nf-item branding design spacing">
                                                <div class="item-box">
                                                    <a class="cbox-gallary1 mfp-image" href="assets/images/small/img-5.jpg" title="Nullam quis ant">
                                                        <img class="item-container" src="assets/images/small/img-5.jpg" alt="6" />
                                                        <div class="item-mask">
                                                            <div class="item-caption">
                                                                <h5 class="text-light">Nullam quis ant</h5>
                                                                <p class="text-light">Branding, Design</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div><!--end item-box-->
                                            </div><!--end col-->
                            
                                            <div class="col-lg-4 col-md-6 p-0 nf-item photo spacing">
                                                <div class="item-box">
                                                    <a class="cbox-gallary1 mfp-image" href="assets/images/small/img-6.jpg" title="Sed fringilla mauris">
                                                        <img class="item-container" src="assets/images/small/img-6.jpg" alt="1" />
                                                        <div class="item-mask">
                                                            <div class="item-caption">
                                                                <h5 class="text-light">Sed fringilla mauris</h5>
                                                                <p class="text-light">Photo</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div><!--end item-box-->
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                        </div><!--end row-->          
            
                    </div><!-- container -->

                    <footer class="footer text-center text-sm-left">
                        &copy; 2019 Frogetor <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
                    </footer>
                </div>
                <!-- end page content -->
            </div>
            <!--end page-wrapper-inner -->
        </div>
        <!-- end page-wrapper -->

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <script src="assets/plugins/filter/isotope.pkgd.min.js"></script>
        <script src="assets/plugins/filter/masonry.pkgd.min.js"></script>
        <script src="assets/plugins/filter/jquery.magnific-popup.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
        <script>
             $(window).on('load', function() {
                // Filter 
                //PORTFOLIO FILTER 
                var $container = $('.projects-wrapper');
                var $filter = $('#filter');
                // Initialize isotope 
                $container.isotope({
                    filter: '*',
                    layoutMode: 'masonry',
                    animationOptions: {
                        duration: 750,
                        easing: 'linear'
                    }
                });
                // Filter items when filter link is clicked
                $filter.find('a').click(function() {
                    var selector = $(this).attr('data-filter');
                    $filter.find('a').removeClass('active');
                    $(this).addClass('active');
                    $container.isotope({
                        filter: selector,
                        animationOptions: {
                            animationDuration: 750,
                            easing: 'linear',
                            queue: false,
                        }
                    });
                    return false;
                });
                /*END*/
            });
            $('.mfp-image').magnificPopup({
                type: 'image',
                closeOnContentClick: true,
                mainClass: 'mfp-fade',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0, 1]
                        // Will preload 0 - before current, and 1 after the current image 
                }
            });
        </script>

    </body>
</html>