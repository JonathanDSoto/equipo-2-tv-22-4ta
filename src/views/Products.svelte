<script>

</script>

<svelte:head>
    <title>DevEcommerce | Products</title>
    <!-- ============================================ -->
    <!-- Css template -->
    <!-- ============================================ -->
    <!-- App favicon -->
    <link rel="shortcut icon" href="http://localhost:8080/images/favicon.ico">

    <!--datatable css-->
    <link rel="stylesheet" href="http://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="http://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="http://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">


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

    <!-- prismjs plugin -->
    <script src="http://localhost:8080/libs/prismjs/prism.js"></script>

    <!-- gridjs js -->
    <script src="http://localhost:8080/libs/gridjs/gridjs.umd.js"></script>
    <!-- gridjs init -->
    <script src="http://localhost:8080/js/pages/gridjs.init.js"></script>

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
                      <h6 class="dropdown-header">Bienvenido Anna!</h6>
                      <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                    
                      <div class="dropdown-divider"></div>
                      
                      <a class="dropdown-item" href="auth-logout-basic.html"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
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
                          
                      </li> <!-- end Dashboard Menu -->
                      <li class="nav-item">
                          <a class="nav-link menu-link" href="#sidebarApps" >
                              <i class="mdi mdi-view-grid-plus-outline"></i> <span data-key="t-apps">Clientes</span>
                          </a>
                         
                       </li>            
                                  
                                  

                      <li class="nav-item">
                          <a class="nav-link menu-link" href="#sidebarLayouts">
                              <i class="mdi mdi-view-carousel-outline"></i> <span data-key="t-layouts">Productos</span>
                          </a>
                          
                      </li> <!-- end Dashboard Menu -->

                      

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
                              <h4 class="mb-sm-0">Productos</h4>

                              <div class="page-title-right">
                                  <ol class="breadcrumb m-0">
                                      <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                      <li class="breadcrumb-item active">Productos</li>
                                  </ol>
                              </div>

                          </div>
                      </div>
                  </div>
                  <!-- end page title -->

                     
                  <div class="col-xl-9 col-lg-8">
                    <div>
                        <div class="card">
                            <div class="card-header border-0">
                                <div class="row g-4">
                                    <div class="col-sm-auto">
                                        <div>
                                            <a href="apps-ecommerce-add-product.html" class="btn btn-success" id="addproduct-btn"><i class="ri-add-line align-bottom me-1"></i> Añadir Producto</a>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div class="d-flex justify-content-sm-end">
                                            <div class="search-box ms-2">
                                                <input type="text" class="form-control" id="searchProductList" placeholder="Buscar Productos...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <ul class="nav nav-tabs-custom card-header-tabs border-bottom-0" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active fw-semibold" data-bs-toggle="tab" href="#productnav-all" role="tab">
                                                    Todo<span class="badge badge-soft-danger align-middle rounded-pill ms-1">12</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#productnav-published" role="tab">
                                                    Publicado <span class="badge badge-soft-danger align-middle rounded-pill ms-1">5</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#productnav-draft" role="tab">
                                                    Borrado
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-auto">
                                        <div id="selection-element">
                                            <div class="my-n1 d-flex align-items-center text-muted">
                                                Seleccionar <div id="select-content" class="text-body fw-semibold px-1"></div> Resultado <button type="button" class="btn btn-link link-danger p-0 ms-3 shadow-none" data-bs-toggle="modal" data-bs-target="#removeItemModal">Eliminar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card header -->
                            <div class="card-body">

                                <div class="tab-content text-muted">
                                    <div class="tab-pane active" id="productnav-all" role="tabpanel">
                                        <div id="table-product-list-all" class="table-card gridjs-border-none"></div>
                                    </div>
                                    <!-- end tab pane -->

                                    <div class="tab-pane" id="productnav-published" role="tabpanel">
                                        <div id="table-product-list-published" class="table-card gridjs-border-none"></div>
                                    </div>
                                    <!-- end tab pane -->

                                    <div class="tab-pane" id="productnav-draft" role="tabpanel">
                                        <div class="py-4 text-center">
                                            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#405189,secondary:#0ab39c" style="width:72px;height:72px">
                                            </lord-icon>
                                            <h5 class="mt-4">Lo sentimos! No se encontraron resultados</h5>
                                        </div>
                                    </div>
                                    <!-- end tab pane -->
                                </div>
                                <!-- end tab content -->

                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                </div>
                <!-- end col -->





                  
                      <!-- end col -->
              </div>
                  <!-- end row -->

          </div>
              <!-- container-fluid -->
      </div>
          <!-- End Page-content -->

          <!-- footer here-->
      <!-- end main content-->

  
  <!-- END layout-wrapper -->

  <!-- removeItemModal -->
  <div id="removeItemModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
              </div>
              <div class="modal-body">
                  <div class="mt-2 text-center">
                      <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                      <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                          <h4>Estás seguro?</h4>
                          <p class="text-muted mx-4 mb-0">Estás seguro de que quieres eliminar este producto?</p>
                      </div>
                  </div>
                  <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                      <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Cerrar</button>
                      <button type="button" class="btn w-sm btn-danger " id="delete-product">Sí, borralo!</button>
                  </div>
              </div>

          </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->



  <!--start back-to-top-->
  <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
      <i class="ri-arrow-up-line"></i>
  </button>
  <!--end back-to-top-->

  <!--preloader-->
  <div id="preloader">
      <div id="status">
          <div class="spinner-border text-primary avatar-sm" role="status">
              <span class="visually-hidden">Cargando...</span>
          </div>
      </div>
  </div>

  <div class="customizer-setting d-none d-md-block">
      <div class="btn-info btn-rounded shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
          <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
      </div>
  </div>

  

</main>
