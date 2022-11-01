<script>
    import App from "../App.svelte";


</script>

<svelte:head>
    <title>DevEcommerce | Vista Detalle Ordenes</title>
    <!-- ============================================ -->
    <!-- Css template -->
    <!-- ============================================ -->
   <!-- ============================================ -->
    <!-- Css template -->
    <!-- ============================================ -->
    <!-- App favicon -->
    <link rel="shortcut icon" href="http://localhost:8080/images/favicon.ico">

    <!-- Sweet Alert css-->
    <link href="http://localhost:8080/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="http://localhost:8080/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="http://localhost:8080/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="http://localhost:8080/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="http://localhost:8080/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="http://localhost:8080/css/custom.min.css" rel="stylesheet" type="text/css" />

</svelte:head>

<main> 
            <!-- Begin page -->
<div id="layout-wrapper">

    <header id="page-topbar">
        <div class="layout-width">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box horizontal-logo">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="http://localhost:8080/public/images/logo-sm.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="http://localhost:8080/public/images/logo-dark.png" alt="" height="17">
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="http://localhost:8080/images/logo-sm.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="http://localhost:8080/images/logo-light.png" alt="" height="17">
                            </span>
                        </a>
                    </div>
                </div>

                <div class="d-flex align-items-center">
                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle shadow-none" data-toggle="fullscreen">
                        <i class='bx bx-fullscreen fs-22'></i>
                    </button>
                </div>

                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode shadow-none">
                        <i class='bx bx-moon fs-22'></i>
                    </button>
                </div>

                    <div class="dropdown ms-sm-3 header-item topbar-user">
                        <button type="button" class="btn shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="d-flex align-items-center">
                                <img class="rounded-circle header-profile-user" src="http://localhost:8080/images/users/avatar-1.jpg" alt="Header Avatar">
                                <span class="text-start ms-xl-2">
                                    <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Anna Adame</span>
                                    <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">Founder</span>
                                </span>
                            </span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <h6 class="dropdown-header">Bienvenida Anna!</h6>
                            <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Perfil</span></a>
                        
                            <div class="dropdown-divider"></div>
                            
                            <a class="dropdown-item" href="auth-logout-basic.html"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Salir</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

            <!-- ========== App Menu ========== -->
            <div class="app-menu navbar-menu">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <!-- Dark Logo-->
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="http://localhost:8080/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="http://localhost:8080/images/logo-dark.png" alt="" height="17">
                        </span>
                    </a>
                    <!-- Light Logo-->
                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="http://localhost:8080/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="http://localhost:8080/images/logo-light.png" alt="" height="17">
                        </span>
                    </a>
                    <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                        <i class="ri-record-circle-line"></i>
                    </button>
                </div>

                <div id="scrollbar">
                    <div class="container-fluid">

                        <div id="two-column-menu">
                        </div>
                        <ul class="navbar-nav" id="navbar-nav">
                            <li class="menu-title"><span data-key="t-menu">Menú</span></li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarDashboards">
                                    <i class="mdi mdi-speedometer"></i> <span data-key="t-dashboards">Usuarios</span>
                                </a>
                                
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarApps" >
                                    <i class="mdi mdi-view-grid-plus-outline"></i> <span data-key="t-apps">Clientes</span>
                                </a>
                            
                            </li>            
                                        
                                        

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarLayouts">
                                    <i class="mdi mdi-view-carousel-outline"></i> <span data-key="t-layouts">Productos</span>
                                </a>
                                
                            </li> 

                            

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarAuth">
                                    <i class="mdi mdi-account-circle-outline"></i> <span data-key="t-authentication">Catálogos</span>
                                </a>
                                
                            </li>



                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarPages">
                                    <i class="mdi mdi-sticker-text-outline"></i> <span data-key="t-pages">Cupones</span>
                                </a>
                                
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarLanding">
                                    <i class="ri-rocket-line"></i> <span data-key="t-landing">Ordenes</span>
                                </a>
                                
                            </li>


                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>

                <div class="sidebar-background"></div>
            </div>
            <!-- Left Sidebar End -->
            <!-- Vertical Overlay-->
            <div class="vertical-overlay"></div>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Vista de Detalle Ordenes</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="#!">Clientes</a></li>
                                            <li class="breadcrumb-item active">Vista de Detalle Ordenes</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="container-fluid">
                            <div class="profile-foreground position-relative mx-n4 mt-n4">
                                <div class="profile-wid-bg">
                                    <img src="http://localhost:8080/images/profile-bg.jpg" alt="" class="profile-wid-img" />
                                </div>
                            </div>
                            
                    
                    
                            <div class="d-flex pt-3">
                                <!-- Nav tabs -->
                                <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link fs-14 active" data-bs-toggle="tab" href="#overview-tab" role="tab">
                                            <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Vista de Detalle</span>
                                        </a>
                                    </li>
                                    
                            </div>
                                        <!-- Tab panes -->
                                        <div class="tab-content pt-4 text-muted">
                                            <div class="tab-pane active" id="overview-tab" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-xxl-3">
                                                        

                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="card-title mb-3">Detalles Orden</h5>
                                                                <div class="table-responsive">
                                                                    <table class="table table-borderless mb-0">
                                                                        <tbody>
                                                                            <tr>
                                                                            
                                                                                <th class="ps-0" scope="row">Orden:</th>
                                                                                <div class="col-sm-auto">
                                                                                   
                                                                               
                                                                                
                                                                                <div class="table-responsive table-card mt-3 mb-1">
                                                                                    <table class="table align-middle table-nowrap" id="customerTable">
                                                                                        <thead class="table-light">
                                                                                            <tr>
                                                                                                <th data-sort="folio">Foto</th>
                                                                                                <th data-sort="descripcion">Descripción</th>
                                                                                                <th data-sort="codigo">Código</th>

                                                                                                <th data-sort="peso en gramos">Peso en gramos</th>
                                                                                                <th data-sort="estatus">Estatus</th>
                                                                                                
                                                                                            
                                                                                                <th data-sort="action">Acción</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody class="list form-check-all">
                                                                                            <tr>
                                                                                                
                                                                                                <td class="Avatar">
                                                                                                    <img class="image avatar-xs rounded-circle shadow" alt="" src="http://localhost:8080/images/users/avatar-1.jpg">
                                                                                                </td>
                                                                                                <td class="descripcion">Descripcion detallada del producto</td>
                                                                                                <td class="codigo">Código del producto</td>
                                                                                                <td class="peso">Peso en gramos del producto</td>
                                                                                                <td class="status"><span class="badge badge-soft-warning text-uppercase">1</span>
                                                                                                
                                                                                                
                                                                        
                                                                                                <td>
                                                                                                    <div class="d-flex gap-2">
                                                                                                        
                                                                                                        <div class="ver">
                                                                                                            <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModalVer">Ver Detalles</button>
                                                                                                        </div>
                                                                                                        
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div> 
                                                                            </div>
                                                                                 <!-- tabla para direccion de envio -->
                                                                                <div class="table-responsive table-card mt-3 mb-1">
                                                                                    <th class="ps-0" scope="row">Dirección de envío:</th>
                                                                                
                                                                                    <table class="table align-middle table-nowrap" id="customerTable">
                                                                                        <thead class="table-light">
                                                                                            <tr>
                                                                                                <th data-sort="street">Calle y número</th>
                                                                                                <th data-sort="code">Código Postal</th>
                                                                                                <th data-sort="city">Ciudad</th>

                                                                                                <th data-sort="province">Provincia</th>
                                                                                                <th data-sort="telefono">Teléfono</th>
                                                                                                
                                                                                            
                                                                                                <th data-sort="action">Acción</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody class="list form-check-all">
                                                                                            <tr>
                                                                                                
                                                                                                <td class="street">16 de septiembre</td>
                                                                                                <td class="code">2101</td>
                                                                                                <td class="city">La Paz</td>
                                                                                                <td class="province">BCS</td>
                                                                                                <td class="telefono">6121200000</td>
                                                                                                
                                                                                                
                                                                        
                                                                                                <td>
                                                                                                    <div class="d-flex gap-2">
                                                                                                        
                                                                                                        <div class="ver">
                                                                                                            <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModalVer">Ver Detalles</button>
                                                                                                        </div>
                                                                                                        
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div> 
                                                                            </tr>

                                                                            <tr>
                                                                                <th class="ps-0" scope="row">Subtotal :</th>
                                                                                <td class="text-muted">Sub-Total de la orden</td>
                                                                            </tr>
                                                                           
                                                                            <tr>
                                                                                <th class="ps-0" scope="row">Descuento:</th>
                                                                                <td class="text-muted">#Codigo del cupón - $Monto de descuento</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th class="ps-0" scope="row">Total :</th>
                                                                                <td class="text-muted">Total de la orden </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>            
                                                            </div>                
                                                        </div> 
                                                        

                                                        


                                                                         
                                                                             
                                                                           

                                
                                                    </div>



                                                    
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-xxl-3">
                                                    

                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title mb-3">Detalles Cliente</h5>
                                                            <div class="table-responsive">
                                                                <table class="table table-borderless mb-0">
                                                                   
                                                                        
                                                                    
                                                                            <div class="col-sm-auto">
                                                                               
                                                                                <div class="card cliente">
                                                                                    <div class="card-body">
                                                                                        <div class="row gy-3">
                                                                                            <div class="col-sm-auto">
                                                                                                <div class="avatar-lg bg-light rounded p-1">
                                                                                                    <img src="http://localhost:8080/images/products/img-8.png" alt="" class="img-fluid d-block">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm">
                                                                                                <h5 class="fs-14 text-truncate"><a href="#!" class="text-dark">Nombre del cliente</a></h5>
                                                                                                <ul class="list-inline text-muted">
                                                                                                    <p class="text-muted mb-1">Cliente X</p>
                                                                                                </ul>

                                                                                                <h5 class="fs-14 text-truncate"><a href="#!" class="text-dark">Número del teléfono</a></h5>
                                                                                                <ul class="list-inline text-muted">
                                                                                                    <p class="text-muted mb-1">6121200000</p>
                                                                                                </ul>

                                                                                                <h5 class="fs-14 text-truncate"><a href="#!" class="text-dark">Correo del cliente</a></h5>
                                                                                                <ul class="list-inline text-muted">
                                                                                                    <p class="text-muted mb-1">cliente@App.com</p>
                                                                                                </ul>
                                                                                                <div class="text-end mb-4">
                                                                                                    <a href="apps-ecommerce-checkout.html" class="btn btn-success btn-label right ms-auto"><i class="ri-arrow-right-line label-icon align-bottom fs-16 ms-2"></i>Ver perfil de Cliente</a>
                                                                                                </div>
                                                    
                                                                                                
                                                                                            </div>
                                                                                            
                                                                                        </div>
                                                                                    </div>
                                                                       

                                                                        
                                                                        
                                                                        
                                                                       

                            
                                                </div>
                                            </div>

                                            

                                            


                                            





                                        </div>
                                    </div>


                                    

                        </div>
                        <!-- end row -->
                    </div>
                </div>
                    <!-- container-fluid -->
            </div>
                <!-- End Page-content -->
</div>

<!-- end main content-->

<div>
    <!-- ============================================ -->
    <!-- Js tempalte -->
    <!-- ============================================ -->
     <!-- JAVASCRIPT -->
     <script src="http://localhost:8080/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
     <script src="http://localhost:8080/libs/simplebar/simplebar.min.js"></script>
     <script src="http://localhost:8080/libs/node-waves/waves.min.js"></script>
     <script src="http://localhost:8080/libs/feather-icons/feather.min.js"></script>
     <script src="http://localhost:8080/js/pages/plugins/lord-icon-2.1.0.js"></script>
     <script src="http://localhost:8080/js/plugins.js"></script>
 
     <!-- swiper js -->
     <script src="http://localhost:8080/libs/swiper/swiper-bundle.min.js"></script>
 
     <!-- profile init js -->
     <script src="http://localhost:8080/js/pages/profile.init.js"></script>
 
     <!-- App js -->
     <script src="http://localhost:8080/js/app.js"></script>
    
</div>

</main>
