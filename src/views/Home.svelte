<script>
    import { fade } from 'svelte/transition';
    import { get } from 'svelte/store';
    import { preferences } from '../store/session';
    import { dataActiveUser } from '../store/session';
    import { onMount } from 'svelte';

    // Components
    import HeaderApp from '../components/HeaderApp.svelte';
    import Sidebar from '../components/Sidebar.svelte';

    // Trae los datos globales ( preference = sessionId -> store/session.js)
    get(preferences);
    get(dataActiveUser);

    // Se guarda en una variable para poder condicionar
    const number = $preferences;


    // Si el numero es igual a 0 significa que no existe ninguna session activa y lo regresa al login
    if (number == 0) {
        location.href = '/';
    }

    var myHeaders = new Headers();
    myHeaders.append('Authorization', `${process.env.BEARER_KEY}`);

    var requestOptions = {
        method: 'GET',
        headers: myHeaders,
        redirect: 'follow',
    };

    async function getDataUserLoggin() {
        const response = await fetch(
            `https://crud.jonathansoto.mx/api/users/${number}`,
            requestOptions
        );
        const dataUser = await response.json();
        dataActiveUser.set(dataUser.data);
        return dataUser.data;
    }
</script>

<svelte:head>
    <title>DevEcommerce | Home</title>
    <!-- ============================================ -->
    <!-- Css template -->
    <!-- ============================================ -->

    <link rel="shortcut icon" href="http://localhost:8080/images/favicon.ico" />

    <!-- nouisliderribute css -->
    <link
        rel="stylesheet"
        href="http://localhost:8080/libs/nouislider/nouislider.min.css"
    />

    <!-- gridjs css -->
    <link
        rel="stylesheet"
        href="http://localhost:8080/libs/gridjs/theme/mermaid.min.css"
    />

    <!-- Layout config Js -->
    <script src="http://localhost:8080/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link
        href="http://localhost:8080/css/bootstrap.min.css"
        rel="stylesheet"
        type="text/css"
    />
    <!-- Icons Css -->
    <link
        href="http://localhost:8080/css/icons.min.css"
        rel="stylesheet"
        type="text/css"
    />
    <!-- App Css-->
    <link
        href="http://localhost:8080/css/app.min.css"
        rel="stylesheet"
        type="text/css"
    />
    <!-- custom Css-->
    <link
        href="http://localhost:8080/css/custom.min.css"
        rel="stylesheet"
        type="text/css"
    />
</svelte:head>

{#await getDataUserLoggin()}
    Loading..
{:then data}
    <main transition:fade>
        <!-- Begin page -->
        <div id="layout-wrapper">
            <!-- Header -->
            <HeaderApp {data} />

            <!-- ========== App Menu ========== -->
            <div class="app-menu navbar-menu">
                <Sidebar />
            </div>
            <!-- Left Sidebar End -->

            <!-- Vertical Overlay-->
            <div class="vertical-overlay" />

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div
                                    class="page-title-box d-sm-flex align-items-center justify-content-between"
                                >
                                    <h4 class="mb-sm-0">Productos</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item">
                                                <a href="#!">Ecommerce</a>
                                            </li>
                                            <li class="breadcrumb-item active">
                                                Productos
                                            </li>
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
                                                    <a
                                                        href="apps-ecommerce-add-product.html"
                                                        class="btn btn-success"
                                                        id="addproduct-btn"
                                                        style="color: #fff !important"
                                                        ><i
                                                            class="ri-add-line align-bottom me-1"
                                                        /> Añadir Productos</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div
                                                    class="d-flex justify-content-sm-end"
                                                >
                                                    <div
                                                        class="search-box ms-2"
                                                    >
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="searchProductList"
                                                            placeholder="Buscar Productos..."
                                                        />
                                                        <i
                                                            class="ri-search-line search-icon"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <ul
                                                    class="nav nav-tabs-custom card-header-tabs border-bottom-0"
                                                    role="tablist"
                                                >
                                                    <li class="nav-item">
                                                        <a
                                                            class="nav-link active fw-semibold"
                                                            data-bs-toggle="tab"
                                                            href="#productnav-all"
                                                            role="tab"
                                                        >
                                                            Todo<span
                                                                class="badge badge-soft-danger align-middle rounded-pill ms-1"
                                                                >12</span
                                                            >
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a
                                                            class="nav-link fw-semibold"
                                                            data-bs-toggle="tab"
                                                            href="#productnav-published"
                                                            role="tab"
                                                        >
                                                            Publicado <span
                                                                class="badge badge-soft-danger align-middle rounded-pill ms-1"
                                                                >5</span
                                                            >
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a
                                                            class="nav-link fw-semibold"
                                                            data-bs-toggle="tab"
                                                            href="#productnav-draft"
                                                            role="tab"
                                                        >
                                                            Borrado
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-auto">
                                                <div id="selection-element">
                                                    <div
                                                        class="my-n1 d-flex align-items-center text-muted"
                                                    >
                                                        Seleccionar <div
                                                            id="select-content"
                                                            class="text-body fw-semibold px-1"
                                                        />
                                                        Resultados<button
                                                            type="button"
                                                            class="btn btn-link link-danger p-0 ms-3 shadow-none"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#removeItemModal"
                                                            >Eliminar</button
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card header -->
                                    <div class="card-body">
                                        <div class="tab-content text-muted">
                                            <div
                                                class="tab-pane active"
                                                id="productnav-all"
                                                role="tabpanel"
                                            >
                                                <div
                                                    id="table-product-list-all"
                                                    class="table-card gridjs-border-none"
                                                />
                                            </div>
                                            <!-- end tab pane -->

                                            <div
                                                class="tab-pane"
                                                id="productnav-published"
                                                role="tabpanel"
                                            >
                                                <div
                                                    id="table-product-list-published"
                                                    class="table-card gridjs-border-none"
                                                />
                                            </div>
                                            <!-- end tab pane -->

                                            <div
                                                class="tab-pane"
                                                id="productnav-draft"
                                                role="tabpanel"
                                            >
                                                <div class="py-4 text-center">
                                                    <lord-icon
                                                        src="https://cdn.lordicon.com/msoeawqm.json"
                                                        trigger="loop"
                                                        colors="primary:#405189,secondary:#0ab39c"
                                                        style="width:72px;height:72px"
                                                    />
                                                    <h5 class="mt-4">
                                                        Lo sentimos! No se
                                                        encontraron resultados
                                                    </h5>
                                                </div>
                                            </div>
                                            <!-- end tab pane -->
                                        </div>
                                        <!-- end tab content -->
                                    </div>

                                    <!-- removeItemModal -->
                                    <div
                                        id="removeItemModal"
                                        class="modal fade zoomIn"
                                        tabindex="-1"
                                        aria-hidden="true"
                                    >
                                        <div
                                            class="modal-dialog modal-dialog-centered"
                                        >
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button
                                                        type="button"
                                                        class="btn-close"
                                                        data-bs-dismiss="modal"
                                                        aria-label="Close"
                                                        id="btn-close"
                                                    />
                                                </div>
                                                <div class="modal-body">
                                                    <div
                                                        class="mt-2 text-center"
                                                    >
                                                        <lord-icon
                                                            src="https://cdn.lordicon.com/gsqxdxog.json"
                                                            trigger="loop"
                                                            colors="primary:#f7b84b,secondary:#f06548"
                                                            style="width:100px;height:100px"
                                                        />
                                                        <div
                                                            class="mt-4 pt-2 fs-15 mx-4 mx-sm-5"
                                                        >
                                                            <h4>
                                                                Estás seguro ?
                                                            </h4>
                                                            <p
                                                                class="text-muted mx-4 mb-0"
                                                            >
                                                                Estás seguro de
                                                                querer eliminar
                                                                este producto ?
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="d-flex gap-2 justify-content-center mt-4 mb-2"
                                                    >
                                                        <button
                                                            type="button"
                                                            class="btn w-sm btn-light"
                                                            data-bs-dismiss="modal"
                                                            >Cerrar</button
                                                        >
                                                        <button
                                                            type="button"
                                                            class="btn w-sm btn-danger "
                                                            id="delete-product"
                                                            >Sí, borralo!
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->

                                    <!--start back-to-top-->
                                    <button
                                        onclick="topFunction()"
                                        class="btn btn-danger btn-icon"
                                        id="back-to-top"
                                    >
                                        <i class="ri-arrow-up-line" />
                                    </button>
                                    <!--end back-to-top-->

                                    <!--preloader-->
                                    <div id="preloader">
                                        <div id="status">
                                            <div
                                                class="spinner-border text-primary avatar-sm"
                                                role="status"
                                            >
                                                <span class="visually-hidden"
                                                    >Cargando...</span
                                                >
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        class="customizer-setting d-none d-md-block"
                                    >
                                        <div
                                            class="btn-info btn-rounded shadow-lg btn btn-icon btn-lg p-2"
                                            data-bs-toggle="offcanvas"
                                            data-bs-target="#theme-settings-offcanvas"
                                            aria-controls="theme-settings-offcanvas"
                                        >
                                            <i
                                                class="mdi mdi-spin mdi-cog-outline fs-22"
                                            />
                                        </div>
                                    </div>

                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- container-fluid -->
            </div>
            <div>
                <!-- ============================================ -->
                <!-- Js tempalte -->
                <!-- ============================================ -->
                <!-- JAVASCRIPT -->
                <script
                    src="http://localhost:8080/libs/bootstrap/js/bootstrap.bundle.min.js"
                ></script>
                <script
                    src="http://localhost:8080/libs/simplebar/simplebar.min.js"
                ></script>
                <script
                    src="http://localhost:8080/libs/node-waves/waves.min.js"
                ></script>
                <script
                    src="http://localhost:8080/libs/feather-icons/feather.min.js"
                ></script>
                <script
                    src="http://localhost:8080/js/pages/plugins/lord-icon-2.1.0.js"
                ></script>
                <script src="http://localhost:8080/js/plugins.js"></script>

                <!-- nouisliderribute js -->
                <script
                    src="http://localhost:8080/libs/nouislider/nouislider.min.js"
                ></script>
                <script
                    src="http://localhost:8080/libs/wnumb/wNumb.min.js"
                ></script>

                <!-- gridjs js -->
                <script
                    src="http://localhost:8080/libs/gridjs/gridjs.umd.js"
                ></script>
                <script
                    src="https://unpkg.com/gridjs/dist/gridjs.umd.js"
                ></script>
                <!-- ecommerce product list -->
                <script
                    src="http://localhost:8080/js/pages/ecommerce-product-list.init.js"
                ></script>

                <!-- App js -->
                <script src="http://localhost:8080/js/app.js"></script>
            </div>
        </div>
    </main>
{:catch error}
    <!-- data was rejected -->
{/await}
