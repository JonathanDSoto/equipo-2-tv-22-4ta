<script>

</script>

<svelte:head>
    <title>DevEcommerce | Vista Detalle Usuarios</title>
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
                                    <h4 class="mb-sm-0">Vista de Detalle Cliente</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="#!">Cliente</a></li>
                                            <li class="breadcrumb-item active">Vista de Detalle Cliente</li>
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
                            <div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
                                <div class="row g-4">
                                    <div class="col-auto">
                                        <div class="avatar-lg">
                                            <img src="http://localhost:8080/images/users/avatar-1.jpg" alt="user-img" class="img-thumbnail rounded-circle" />
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col">
                                        <div class="p-2">
                                            <h3 class="text-white mb-1">Anna Adame</h3>
                                            <p class="text-white-75">Owner & Founder</p>
                                            <div class="hstack text-white-50 gap-1">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                   
                                    <!--end col-->

                                </div>
                                <!--end row-->
                            </div>

                    
                                
                                        <div class="d-flex">
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
                                                                <h5 class="card-title mb-3">Info</h5>
                                                                <div class="table-responsive">
                                                                    <table class="table table-borderless mb-0">
                                                                        <tbody>
                                                                            <tr>
                                                                                <th class="ps-0" scope="row">Nombre :</th>
                                                                                <td class="text-muted">Anna</td>
                                                                            </tr>
                                                                           
                                                                            <tr>
                                                                                <th class="ps-0" scope="row">Correo:</th>
                                                                                <td class="text-muted">daveadame@velzon.com</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th class="ps-0" scope="row">Teléfono :</th>
                                                                                <td class="text-muted">+(1) 987 6543</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th class="ps-0" scope="row">Widget de Compras</th>
                                                                                <div class="col-xl-3 col-md-6">
                                                                                    <!-- card -->
                                                                                    <div class="card card-animate bg-info">
                                                                                        <div class="card-body">
                                                                                            <div class="d-flex align-items-center">
                                                                                                <div class="flex-grow-1">
                                                                                                    <p class="text-uppercase fw-medium text-white-50 mb-0">Total de Compras</p>
                                                                                                </div>
                                                                                                <div class="flex-shrink-0">
                                                                                                    <h5 class="text-warning fs-14 mb-0">
                                                                                                        <i class="ri-arrow-right-down-line fs-13 align-middle"></i> -3.57 %
                                                                                                    </h5>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                                                                <div>
                                                                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4 text-white"><span class="counter-value" data-target="36894">0</span></h4>
                                                                                                    <a href="#!" class="text-decoration-underline text-white-50">Ver todas las compras</a>
                                                                                                </div>
                                                                                                <div class="avatar-sm flex-shrink-0">
                                                                                                    <span class="avatar-title bg-soft-light rounded fs-3 shadow">
                                                                                                        <i class="bx bx-shopping-bag text-white"></i>
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div><!-- end card body -->
                                                                                    </div><!-- end card -->
                                                                                </div><!-- end col -->

                                                                            </tr>
                                                                            <tr>
                                                                            
                                                                                <th class="ps-0" scope="row">Ordenes:</th>
                                                                                <div class="col-sm-auto">
                                                                                   
                                                                                </div>
                                                                                
                                                                                <div class="table-responsive table-card mt-3 mb-1">
                                                                                    <table class="table align-middle table-nowrap" id="customerTable">
                                                                                        <thead class="table-light">
                                                                                            <tr>
                                                                                                
                                                                                                <th data-sort="folio">Folio</th>
                                                                                                <th data-sort="total">Total</th>
                                                                                                <th data-sort="estado de pago">Estado de Pago</th>
                                                                                            
                                                                                                <th data-sort="action">Acción</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody class="list form-check-all">
                                                                                            <tr>
                                                                                                
                                                                                                
                                                                                                <td class="folio">2101</td>
                                                                                                <td class="total">12333</td>
                                                                                                <td class="status"><span class="badge badge-soft-warning text-uppercase">1</span>
                                                                                                
                                                                                                
                                                                        
                                                                                                <td>
                                                                                                    <div class="d-flex gap-2">
                                                                                                        
                                                                                                        <div class="edit">
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
                                                                            
                                                                                <th class="ps-0" scope="row">Direcciones:</th>
                                                                                <div class="col-sm-auto">
                                                                                    <div>
                                                                                        <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModalAñadirCliente"><i class="ri-add-line align-bottom me-1"></i> Añadir Dirección</button>
                                                
                                                                                    </div>
                                                                                </div>
                                                                                
                                                                                <div class="table-responsive table-card mt-3 mb-1">
                                                                                    <table class="table align-middle table-nowrap" id="customerTable">
                                                                                        <thead class="table-light">
                                                                                            <tr>
                                                                                                <th scope="col" style="width: 50px;">
                                                                                                    <div class="form-check">
                                                                                                        <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                                                                    </div>
                                                                                                </th>
                                                                                                
                                                                                                <th data-sort="street">Calle y número</th>
                                                                                                <th data-sort="code">Código postal</th>
                                                                                                <th data-sort="city">Ciudad</th>
                                                                                                <th data-sort="province">Providencia</th>
                                                                                            
                                                                                                <th data-sort="action">Acción</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody class="list form-check-all">
                                                                                            <tr>
                                                                                                <th scope="row">
                                                                                                    <div class="form-check">
                                                                                                        <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                                                                    </div>
                                                                                                </th>
                                                                                                
                                                                                                
                                                                                                <td class="street">16 de Septiembre</td>
                                                                                                <td class="code">23000</td>
                                                                                                <td class="city">La Paz</td>
                                                                                                <td class="province">BCS</td>
                                                                                                
                                                                                                
                                                                        
                                                                                                <td>
                                                                                                    <div class="d-flex gap-2">
                                                                                                        <div class="edit">
                                                                                                            <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModalVer">Ver Detalles</button>
                                                                                                        </div>
                                                                                                        
                                                                                                        <div class="edit">
                                                                                                            <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModalEditar">Editar</button>
                                                                                                        </div>
                                                                                                        <div class="remove" id="removeItemModal">
                                                                                                            <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">Borrar</button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div> 
                                                                            </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div><!-- end card body -->
                                                        </div><!-- end card -->

                                                        <div class="modal fade" id="showModalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header bg-light p-3">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Editar Dirección</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                                                    </div>
                                                                    <form>
                                                                        <div class="modal-body">
                
                                    
                                                                            <div class="mb-3">
                                                                                <label for="name-field" class="form-label">Nombre</label>
                                                                                <input type="text" id="name-field" class="form-control" placeholder="Ingresar Nombre" required />
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="lastname-field" class="form-label">Apellido</label>
                                                                                <input type="text" id="lastname-field" class="form-control" placeholder="Ingresar Apellido" required />
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="street-field" class="form-label">Calle y número</label>
                                                                                <input type="text" id="street-field" class="form-control" placeholder="Ingresar Calle y número" required />
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="code-field" class="form-label">Código postal</label>
                                                                                <input type="text" id="code-field" class="form-control" placeholder="Ingresar Código Postal" required />
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="city-field" class="form-label">Ciudad</label>
                                                                                <input type="text" id="city-field" class="form-control" placeholder="Ingresar Ciudad" required />
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="province-field" class="form-label">Providencia</label>
                                                                                <input type="text" id="province-field" class="form-control" placeholder="Ingresar Providencia" required />
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="billing-field" class="form-label">Factura</label>
                                                                                <input type="text" id="billing-field" class="form-control" placeholder="Cantidad de Factura" required />
                                                                            </div>
                                                                            
                                                                            
                                                                            
                                    
                                                                  
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <div class="hstack gap-2 justify-content-end">
                                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                                                                                <button type="submit" class="btn btn-success" id="add-btn">Guardar cambios</button>
                                                                               
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                    
                    
                                                        <div class="modal fade" id="showModalAñadirCliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header bg-light p-3">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Añadir Dirección</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                                                    </div>
                                                                    <form>
                                                                        <div class="modal-body">
                                    
                                                                            <div class="mb-3">
                                                                                <label for="name-field" class="form-label">Nombre</label>
                                                                                <input type="text" id="name-field" class="form-control" placeholder="Ingresar Nombre" required />
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="lastname-field" class="form-label">Apellido</label>
                                                                                <input type="text" id="lastname-field" class="form-control" placeholder="Ingresar Apellido" required />
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="street-field" class="form-label">Calle y número</label>
                                                                                <input type="text" id="street-field" class="form-control" placeholder="Ingresar Calle y número" required />
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="code-field" class="form-label">Código postal</label>
                                                                                <input type="text" id="code-field" class="form-control" placeholder="Ingresar Código Postal" required />
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="city-field" class="form-label">Ciudad</label>
                                                                                <input type="text" id="city-field" class="form-control" placeholder="Ingresar Ciudad" required />
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="province-field" class="form-label">Providencia</label>
                                                                                <input type="text" id="province-field" class="form-control" placeholder="Ingresar Providencia" required />
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="phone-field" class="form-label">Teléfono</label>
                                                                                <input type="text" id="phone-field" class="form-control" placeholder="Ingresar Teléfono" required />
                                                                            </div>
                                    
                                                                         
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <div class="hstack gap-2 justify-content-end">
                                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                                                                                <button type="button" class="btn btn-success" id="edit-btn">Añadir Dirección</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                    
                    
                    
                                                        <!-- Modal -->
                                                        <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="mt-2 text-center">
                                                                            <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                                                                            <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                                                                <h4>Estás seguro ?</h4>
                                                                                <p class="text-muted mx-4 mb-0">Estás seguro de eliminar la Dirección?</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                                                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Cerrar</button>
                                                                            <button type="button" class="btn w-sm btn-danger " id="delete-record">Sí, borrar Dirección!</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end modal -->
                                
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


</main>
