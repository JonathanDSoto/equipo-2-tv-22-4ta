<script>

</script>

<svelte:head>
    <title>DevEcommerce | Cupones</title>
    <!-- ============================================ -->
    <!-- Css template -->
    <!-- ============================================ -->
    <!-- App favicon -->
    <link rel="shortcut icon" href="http://localhost:8080/images/favicon.ico">

    <!-- Sweet Alert css-->
    <link href="http://localhost:8080/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
     <!-- One of the following themes -->
     <link rel="stylesheet" href="http://localhost:8080/libs/%40simonwep/pickr/themes/classic.min.css" /> <!-- 'classic' theme -->
     <link rel="stylesheet" href="http://localhost:8080/libs/%40simonwep/pickr/themes/monolith.min.css" /> <!-- 'monolith' theme -->
     <link rel="stylesheet" href="http://localhost:8080/libs/%40simonwep/pickr/themes/nano.min.css" /> <!-- 'nano' theme -->

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
                                    <h4 class="mb-sm-0">Cupones</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="#!">Home</a></li>
                                            <li class="breadcrumb-item active">Cupones</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->



                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Lista Cupones</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div id="customerList">
                                            <div class="row g-4 mb-3">
                                                <div class="col-sm-auto">
                                                    <div>
                                                        <button type="button" class="btn btn-info add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModalAñadir"><i class="ri-add-line align-bottom me-1"></i> Añadir Cupón</button>
                                                        
                                                    </div>
                                                </div>
                                                
                                            </div>

                                            <div class="row">
                                                <div class="col-xxl-4 col-lg-6">
                                                    <div class="card bg-info card-height-100">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar-sm flex-shrink-0">
                                                                    <div class="avatar-title bg-soft-sucess text-success fs-17 rounded">
                                                                        <i class="ri-gift-fill"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1 ms-3">
                                                                
                                                                    <h4 class="fs-4 mb-3 text-white">Nombre del cupón</h4>
                                                                    <p class="text-white-50 mb-0">Código del cupón</p>
                                                                    <p class="text-white-50 mb-0">Inicio del Cupón</p>
                                                                    <p class="text-white-50 mb-0">Caducidad del Cupón</p>
                                                                    
                                                                </div>
                                                                <div class="flex-shrink-0 align-self-center">
                                                                    <span class="badge badge-soft-primary fs-20"><i class="ri-arrow-down-s-line fs-20 align-middle me-1"></i>10.35
                                                                        %<span>
                                                                </div>
                                                               
                                                            </div>
                                                            <div class="d-flex gap-2 pt-3">
                                                                <div class="edit">
                                                                    <button class="btn btn-sm btn-success edit-item-btn" href="#!">Ver Detalles</button>
                                                                </div>
                                                                <div class="edit">
                                                                    <button class="btn btn-sm btn-warning edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModalEditar">Editar</button>
                                                                </div>
                                                                <div class="remove">
                                                                    <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">Borrar</button>
                                                                </div>
                                                            </div>
                                                        </div><!-- end card body -->
                                                    </div>
                                                </div> <!-- end col-->
                                            </div>


                                            





                                            <div class="modal fade" id="showModalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-light p-3">
                                                            <h5 class="modal-title" id="exampleModalLabel">Editar Cupón</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                                        </div>
                                                        <form>
                                                            <div class="modal-body">

                                                                
                                                                <div class="mb-3">
                                                                    <label for="name-field" class="form-label">Nombre</label>
                                                                    <input type="text" id="name-field" class="form-control" placeholder="Ingresar Nombre cupón" required />
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="code-field" class="form-label">Código del cupón</label>
                                                                    <input type="text" id="code-field" class="form-control" placeholder="Ingresar Código del cupón" required />
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="desc-field" class="form-label">Porcentaje de descuento</label>
                                                                    <input type="email" id="desc-field" class="form-control" placeholder="Ingresar Porcentaje de descuento" required />
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="monto-field" class="form-label">Monto mínimo solicitado</label>
                                                                    <input type="text" id="monto-field" class="form-control" placeholder="Ingresar Monto mínimo solicitado" required />
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="montoP-field" class="form-label">Monto mínimo de producto solicitado</label>
                                                                    <input type="text" id="montoP-field" class="form-control" placeholder="Ingresar Monto mínimo de producto" required />
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="fecha-field" class="form-label">Fecha de inicio del cupón</label>
                                                                    <input type="text" id="fecha-field" class="form-control" placeholder="Ingresar Fecha inicio del cupón" required />
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="fechaC-field" class="form-label">Fecha caducidad del cupón</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" data-disable-date="15 12,2021">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="fechaC-field" class="form-label">Fecha caducidad del cupón</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" data-disable-date="15 12,2021">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="fecha-field" class="form-label">Cantidad de usos</label>
                                                                    <input type="text" id="fecha-field" class="form-control" placeholder="Ingresar Cantidad de usos" required />
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="fecha-field" class="form-label">Disponible para usar en una sola compra?</label>
                                                                    <input type="text" id="fecha-field" class="form-control" placeholder="Ingresar Número de disponibilidad para usar en compras" required />
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

                                            <div class="modal fade" id="showModalAñadir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-light p-3">
                                                            <h5 class="modal-title" id="exampleModalLabel">Añadir Cupón</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                                        </div>
                                                        <form>
                                                            <div class="modal-body">
                                                               
                                                                <div class="mb-3">
                                                                    <label for="name-field" class="form-label">Nombre</label>
                                                                    <input type="text" id="name-field" class="form-control" placeholder="Ingresar Nombre cupón" required />
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="code-field" class="form-label">Código del cupón</label>
                                                                    <input type="text" id="code-field" class="form-control" placeholder="Ingresar Código del cupón" required />
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="desc-field" class="form-label">Porcentaje de descuento</label>
                                                                    <input type="email" id="desc-field" class="form-control" placeholder="Ingresar Porcentaje de descuento" required />
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="monto-field" class="form-label">Monto mínimo solicitado</label>
                                                                    <input type="text" id="monto-field" class="form-control" placeholder="Ingresar Monto mínimo solicitado" required />
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="montoP-field" class="form-label">Monto mínimo de producto solicitado</label>
                                                                    <input type="text" id="montoP-field" class="form-control" placeholder="Ingresar Monto mínimo de producto" required />
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="fecha-field" class="form-label">Fecha de inicio del cupón</label>
                                                                    <input type="text" id="fecha-field" class="form-control" placeholder="Ingresar Fecha inicio del cupón" required />
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="fechaC-field" class="form-label">Fecha caducidad del cupón</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" data-disable-date="15 12,2021">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="fechaC-field" class="form-label">Fecha caducidad del cupón</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" data-disable-date="15 12,2021">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="fecha-field" class="form-label">Cantidad de usos</label>
                                                                    <input type="text" id="fecha-field" class="form-control" placeholder="Ingresar Cantidad de usos" required />
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="fecha-field" class="form-label">Disponible para usar en una sola compra?</label>
                                                                    <input type="text" id="fecha-field" class="form-control" placeholder="Ingresar Número de disponibilidad para usar en compras" required />
                                                                </div>

                                                                

                                                                
                                                            </div>
                                                            <div class="modal-footer">
                                                                <div class="hstack gap-2 justify-content-end">
                                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                                                                    <button type="button" class="btn btn-success" id="edit-btn">Añadir Cupón</button>
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
                                                                    <p class="text-muted mx-4 mb-0">¿Estás seguro de eliminar este cupón?</p>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                                                <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Cerrar</button>
                                                                <button type="button" class="btn w-sm btn-danger " id="delete-record">Sí, borrar cupón!</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end modal -->

                                        

                                        </div>

                                    </div><!-- end card -->
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

              </div>
                  <!-- end row -->

          </div>
              <!-- container-fluid -->
      </div>
          <!-- End Page-content -->
          
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
    <!-- prismjs plugin -->
    <script src="http://localhost:8080/libs/prismjs/prism.js"></script>
    <script src="http://localhost:8080/libs/list.js/list.min.js"></script>
    <script src="http://localhost:8080/libs/list.pagination.js/list.pagination.min.js"></script>

    <!-- listjs init -->
    <script src="http://localhost:8080/js/pages/listjs.init.js"></script>

    <!-- Sweet Alerts js -->
    <script src="http://localhost:8080/libs/sweetalert2/sweetalert2.min.js"></script>

     <!-- Modern colorpicker bundle -->
     <script src="http://localhost:8080/libs/%40simonwep/pickr/pickr.min.js"></script>

     <!-- init js -->
     <script src="http://localhost:8080/js/pages/form-pickers.init.js"></script>

    <!-- App js -->
    <script src="http://localhost:8080/js/app.js"></script>
</div>



</main>
