<script>

</script>

<svelte:head>
    <title>DevEcommerce | Users</title>
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
    <!-- prismjs plugin -->
    <script src="http://localhost:8080/libs/prismjs/prism.js"></script>
    <script src="http://localhost:8080/libs/list.js/list.min.js"></script>
    <script src="http://localhost:8080/libs/list.pagination.js/list.pagination.min.js"></script>

    <!-- listjs init -->
    <script src="http://localhost:8080/js/pages/listjs.init.js"></script>

    <!-- Sweet Alerts js -->
    <script src="http://localhost:8080/libs/sweetalert2/sweetalert2.min.js"></script>

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
                              <h4 class="mb-sm-0">Usuarios</h4>

                              <div class="page-title-right">
                                  <ol class="breadcrumb m-0">
                                      <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                      <li class="breadcrumb-item active">Usuarios</li>
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
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div id="customerList">
                                    <div class="row g-4 mb-3">
                                        <div class="col-sm-auto">
                                            <div>
                                                <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModalAñadir"><i class="ri-add-line align-bottom me-1"></i> Añadir Usuario</button>
                                                <button class="btn btn-soft-danger" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="d-flex justify-content-sm-end">
                                                <div class="search-box ms-2">
                                                    <input type="text" class="form-control search" placeholder="Buscar Usuarios...">
                                                    <i class="ri-search-line search-icon"></i>
                                                </div>
                                            </div>
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
                                                    <th class="sort" data-sort="id">ID</th>
                                                    <th class="sort" data-sort="User_name">Nombre</th>
                                                    <th class="sort" data-sort="lastname">Apellido</th>
                                                    <th class="sort" data-sort="email">Correo</th>
                                                    <th class="sort" data-sort="phone">Teléfono</th>
                                                    <th class="sort" data-sort="password">Password</th>
                                                    <th class="sort" data-sort="photo">Foto</th>
                                                    <th class="sort" data-sort="action">Acción</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                        </div>
                                                    </th>
                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                    <td class="user_name">#VZ2101</td>
                                                    <td class="user_name">Mary</td>
                                                    <td class="lastnmae">Cousar</td>
                                                    <td class="email">daveadame@velzon.com</td>
                                                    <td class="phone">+(1) 987 6543</td>
                                                    <td class="phone">******</td>
                                                    <td class="photo">
                                                        <img class="image avatar-xs rounded-circle shadow" alt="" src="http://localhost:8080/images/users/avatar-1.jpg">
                                                    </td>
                                                   
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <div class="edit">
                                                                <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModalVer">Ver</button>
                                                            </div>
                                                            <div class="edit">
                                                                <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModalEditar">Editar</button>
                                                            </div>
                                                            <div class="remove" id="removeItemModal">
                                                                <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">Eliminar</button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> 
                                    <div class="noresult" style="display: none">
                                            <div class="text-center">
                                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                                                </lord-icon>
                                                <h5 class="mt-2">Lo sentimos! No se encontraron resultados</h5>
                                                <p class="text-muted mb-0">Hemos buscado en todos los Usuarios. No encontramos ningún
                                                    usuario para su búsqueda.</p>
                                            </div>
                                    </div>
                                    

                                    <div class="d-flex justify-content-end">
                                        <div class="pagination-wrap hstack gap-2">
                                            <a class="page-item pagination-prev disabled" href="#">
                                                Anterior
                                            </a>
                                            <ul class="pagination listjs-pagination mb-0"></ul>
                                            <a class="page-item pagination-next" href="#">
                                                Siguiente
                                            </a>
                                        </div>
                                    </div>

                                    
                    <div class="modal fade" id="showModalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-light p-3">
                                    <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                </div>
                                <form>
                                    <div class="modal-body">

                                        <div class="mb-3">
                                            <label for="name-field" class="form-label">Nombre</label>
                                            <input type="text" id="name-field" class="form-control" placeholder="Enter Name" required />
                                        </div>
                                        <div class="mb-3">
                                            <label for="lastname-field" class="form-label">Lastname</label>
                                            <input type="text" id="lastname-field" class="form-control" placeholder="Enter LastName" required />
                                        </div>

                                        <div class="mb-3">
                                            <label for="email-field" class="form-label">Email</label>
                                            <input type="email" id="email-field" class="form-control" placeholder="Enter Email" required />
                                        </div>

                                        <div class="mb-3">
                                            <label for="phone-field" class="form-label">Phone</label>
                                            <input type="text" id="phone-field" class="form-control" placeholder="Enter Phone no." required />
                                        </div>

                                        <div class="mb-3">
                                            <label for="foto-field" class="form-label">Foto</label>
                                            
                                            <div class="card-body p-4">
                                                <div class="text-center">
                                                    <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                                                        <img src="http://localhost:8080/images/users/avatar-1.jpg" class="rounded-circle avatar-xl img-thumbnail user-profile-image  shadow" alt="user-profile-image">
                                                        <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                                            <input id="profile-img-file-input" type="file" class="profile-img-file-input">
                                                            <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                                                <span class="avatar-title rounded-circle bg-light text-body shadow">
                                                                    <i class="ri-camera-fill"></i>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
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
                                    <h5 class="modal-title" id="exampleModalLabel">Añadir Nuevo Usuario</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                </div>
                                <form>
                                    <div class="modal-body">

                                        <div class="mb-3">
                                            <label for="name-field" class="form-label">Nombre</label>
                                            <input type="text" id="name-field" class="form-control" placeholder="Enter Name" required />
                                        </div>
                                        <div class="mb-3">
                                            <label for="lastname-field" class="form-label">Lastname</label>
                                            <input type="text" id="lastname-field" class="form-control" placeholder="Enter LastName" required />
                                        </div>

                                        <div class="mb-3">
                                            <label for="email-field" class="form-label">Email</label>
                                            <input type="email" id="email-field" class="form-control" placeholder="Enter Email" required />
                                        </div>

                                        <div class="mb-3">
                                            <label for="phone-field" class="form-label">Teléfono</label>
                                            <input type="text" id="phone-field" class="form-control" placeholder="Enter Phone no." required />
                                        </div>

                                        <div class="mb-3">
                                            <label for="password-field" class="form-label">Password</label>
                                            <input type="text" id="password-field" class="form-control" placeholder="Enter Password" required />
                                        </div>

                                        <div class="mb-3">
                                            <label for="foto-field" class="form-label">Foto</label>
                                            
                                            <div class="card-body p-4">
                                                <div class="text-center">
                                                    <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                                                        <img src="http://localhost:8080/images/users/avatar-1.jpg" class="rounded-circle avatar-xl img-thumbnail user-profile-image  shadow" alt="user-profile-image">
                                                        <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                                            <input id="profile-img-file-input" type="file" class="profile-img-file-input">
                                                            <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                                                <span class="avatar-title rounded-circle bg-light text-body shadow">
                                                                    <i class="ri-camera-fill"></i>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        
                                    </div>
                                    <div class="modal-footer">
                                        <div class="hstack gap-2 justify-content-end">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                                            <button type="button" class="btn btn-success" id="edit-btn">Añadir Usuario</button>
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
                                    <p class="text-muted mx-4 mb-0">¿Estás seguro de eliminar el usuario?</p>
                                </div>
                            </div>
                            <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn w-sm btn-danger " id="delete-record">Sí, borrar usuario!</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end modal -->

    <!-- removeItemModal -->
        <div id="removeItemNodal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mt-2 text-center">
                            <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                            <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                <h4>¿Estás seguro?</h4>
                                <p class="text-muted mx-4 mb-0">Estás seguro que quieres eliminar este usuario</p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn w-sm btn-danger " id="delete-product">Sí, borrar usuario!</button>
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

          <!-- footer here-->
          
      <!-- end main content-->

  
  <!-- END layout-wrapper -->
  <footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>document.write(new Date().getFullYear())</script> © Velzon.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    Design & Develop by Themesbrand
                </div>
            </div>
        </div>
    </div>
</footer>

</main>
