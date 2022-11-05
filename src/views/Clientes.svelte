<script>
    import HeaderApp from '../components/HeaderApp.svelte';
    import Sidebar from '../components/Sidebar.svelte';

    // Transiciones
    import { fly } from 'svelte/transition';
    import { fade } from 'svelte/transition';

    // Traer la id del usuario loggeado
    import { get } from 'svelte/store';
    import { preferences } from '../store/session';
    get(preferences);

    // Se guarda en una variable para poder usar la variable global
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
        return dataUser.data;
    }

    async function getDataClientes() {
        const response = await fetch(
            'https://crud.jonathansoto.mx/api/clients',
            requestOptions
        );
        const dataClientes = await response.json();
        console.log(dataClientes.data);
        return dataClientes.data;
    }

    async function deleteClient(idClient) {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger',
            },
            buttonsStyling: false,
        });
        let requestOptionsDelete = {
            method: 'DELETE',
            headers: myHeaders,
            redirect: 'follow',
        };

        swalWithBootstrapButtons
            .fire({
                title: 'Seguro que quieres eliminar el usuario?',
                text: 'No podras revertir los cambios',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Si, eliminalo!',
                cancelButtonText: 'No, cancelar!',
                reverseButtons: true,
            })
            .then(async (result) => {
                if (result.isConfirmed) {
                    const res = await fetch(
                        `https://crud.jonathansoto.mx/api/clients/${idClient}`,
                        requestOptionsDelete
                    );
                    const data = await res.json();
                    if (data.code > 0) {
                        location.reload();
                        swalWithBootstrapButtons.fire(
                            'Eliminado!',
                            'El usuario ha sido eliminado.',
                            'success'
                        );
                    }
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    swalWithBootstrapButtons.fire(
                        'Cancelado',
                        'Tu usuario esta a salvo :)',
                        'error'
                    );
                }
            });
    }
</script>

<svelte:head>
    <title>DevEcommerce | Clientes</title>
    <!-- ============================================ -->
    <!-- Css template -->
    <!-- ============================================ -->
    <!-- App favicon -->
    <link rel="shortcut icon" href="http://localhost:8080/images/favicon.ico" />

    <!-- Sweet Alert css-->
    <link
        href="http://localhost:8080/libs/sweetalert2/sweetalert2.min.css"
        rel="stylesheet"
        type="text/css"
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
    Loading Header...
{:then data}
    <main>
        <!-- Begin page -->
        <div id="layout-wrapper">
            <HeaderApp {data} />
            <!-- ========== App Menu ========== -->
            <div class="app-menu navbar-menu">
                <!-- LOGO -->
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
                                    <h4 class="mb-sm-0">Clientes</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item">
                                                <a href="/home">Home</a>
                                            </li>
                                            <li class="breadcrumb-item active">
                                                Clientes
                                            </li>
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
                                        <h4 class="card-title mb-0">
                                            Lista Clientes
                                        </h4>
                                    </div>
                                    <!-- end card header -->

                                    <div class="card-body">
                                        <div id="customerList">
                                            <div class="row g-4 mb-3">
                                                <div class="col-sm-auto">
                                                    <div>
                                                        <button
                                                            type="button"
                                                            class="btn btn-success add-btn"
                                                            data-bs-toggle="modal"
                                                            id="create-btn"
                                                            data-bs-target="#showModalAñadirCliente"
                                                            ><i
                                                                class="ri-add-line align-bottom me-1"
                                                            /> Añadir Cliente</button
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
                                                                class="form-control search"
                                                                placeholder="Buscar Clientes..."
                                                            />
                                                            <i
                                                                class="ri-search-line search-icon"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                class="table-responsive table-card mt-3 mb-1"
                                            >
                                                <table
                                                    class="table align-middle table-nowrap"
                                                    id="customerTable"
                                                >
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th>Nombre</th>
                                                            <th>Correo</th>
                                                            <th>Telefono</th>
                                                            <th>Nivel</th>
                                                            <th>Acción</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody
                                                        class="list form-check-all"
                                                    >
                                                        {#await getDataClientes()}
                                                            Loading...
                                                        {:then data}
                                                            {#each data as dataClients}
                                                                <tr>
                                                                    <td
                                                                        class="name"
                                                                        >{dataClients.name}</td
                                                                    >
                                                                    <td
                                                                        class="email"
                                                                        >{dataClients.email}</td
                                                                    >
                                                                    <td
                                                                        class="telefono"
                                                                    >
                                                                        {dataClients.phone_number}
                                                                    </td>
                                                                    <td
                                                                        class="nivel"
                                                                    >
                                                                        {dataClients.level_id}
                                                                    </td>

                                                                    <td>
                                                                        <div
                                                                            class="d-flex gap-2"
                                                                        >
                                                                            <div
                                                                                class="edit"
                                                                            >
                                                                                <a
                                                                                    class="btn btn-sm btn-success edit-item-btn"
                                                                                    href="/client_info/{dataClients.id}"
                                                                                    >Ver
                                                                                    Detalles</a
                                                                                >
                                                                            </div>
                                                                            <div
                                                                                class="edit"
                                                                            >
                                                                                <button
                                                                                    class="btn btn-sm btn-success edit-item-btn"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#showModalEditar"
                                                                                    >Editar</button
                                                                                >
                                                                            </div>
                                                                            <div
                                                                                class="remove"
                                                                            >
                                                                                <button
                                                                                    class="btn btn-sm btn-danger remove-item-btn"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#deleteRecordModal"
                                                                                    on:click|preventDefault={() =>
                                                                                        deleteClient(
                                                                                            dataClients.id
                                                                                        )}
                                                                                    >Borrar</button
                                                                                >
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            {/each}
                                                        {:catch error}
                                                            <!-- promise was rejected -->
                                                        {/await}
                                                    </tbody>
                                                </table>

                                                <div
                                                    class="noresult"
                                                    style="display: none"
                                                >
                                                    <div class="text-center">
                                                        <lord-icon
                                                            src="https://cdn.lordicon.com/msoeawqm.json"
                                                            trigger="loop"
                                                            colors="primary:#121331,secondary:#08a88a"
                                                            style="width:75px;height:75px"
                                                        />
                                                        <h5 class="mt-2">
                                                            Lo sentimos! No se
                                                            encontraron
                                                            resultados
                                                        </h5>
                                                        <p
                                                            class="text-muted mb-0"
                                                        >
                                                            Hemos buscado en
                                                            todos los clientes.
                                                            No encontramos
                                                            ningún cliente para
                                                            tu busqueda.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="modal fade"
                                                    id="showModalEditar"
                                                    tabindex="-1"
                                                    aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true"
                                                >
                                                    <div
                                                        class="modal-dialog modal-dialog-centered"
                                                    >
                                                        <div
                                                            class="modal-content"
                                                        >
                                                            <div
                                                                class="modal-header bg-light p-3"
                                                            >
                                                                <h5
                                                                    class="modal-title"
                                                                    id="exampleModalLabel"
                                                                >
                                                                    Editar
                                                                    Cliente
                                                                </h5>
                                                                <button
                                                                    type="button"
                                                                    class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close"
                                                                    id="close-modal"
                                                                />
                                                            </div>
                                                            <form>
                                                                <div
                                                                    class="modal-body"
                                                                >
                                                                    <div
                                                                        class="mb-3"
                                                                    >
                                                                        <label
                                                                            for="name-field"
                                                                            class="form-label"
                                                                            >Nombre
                                                                            Completo</label
                                                                        >
                                                                        <input
                                                                            type="text"
                                                                            id="name-field"
                                                                            class="form-control"
                                                                            placeholder="Ingresar Nombre"
                                                                            required
                                                                        />
                                                                    </div>

                                                                    <div
                                                                        class="mb-3"
                                                                    >
                                                                        <label
                                                                            for="email-field"
                                                                            class="form-label"
                                                                            >Correo</label
                                                                        >
                                                                        <input
                                                                            type="email"
                                                                            id="email-field"
                                                                            class="form-control"
                                                                            placeholder="Ingresar Correo"
                                                                            required
                                                                        />
                                                                    </div>

                                                                    <div
                                                                        class="mb-3"
                                                                    >
                                                                        <label
                                                                            for="phone-field"
                                                                            class="form-label"
                                                                            >Teléfono</label
                                                                        >
                                                                        <input
                                                                            type="text"
                                                                            id="phone-field"
                                                                            class="form-control"
                                                                            placeholder="Ingresar Teléfono"
                                                                            required
                                                                        />
                                                                    </div>

                                                                    <div
                                                                        class="mb-3"
                                                                    >
                                                                        <label
                                                                            for="password-field"
                                                                            class="form-label"
                                                                            >Contraseña</label
                                                                        >
                                                                        <input
                                                                            type="text"
                                                                            id="password-field"
                                                                            class="form-control"
                                                                            placeholder="Ingresar Contraseña"
                                                                            required
                                                                        />
                                                                    </div>

                                                                    <div
                                                                        class="mb-3"
                                                                    >
                                                                        <label
                                                                            for="suscribed-field"
                                                                            class="form-label"
                                                                            >¿Está
                                                                            suscrito?</label
                                                                        >
                                                                        <input
                                                                            type="text"
                                                                            id="suscribed-field"
                                                                            class="form-control"
                                                                            placeholder="Cantidad de suscripción"
                                                                            required
                                                                        />
                                                                    </div>

                                                                    <div
                                                                        class="mb-3"
                                                                    >
                                                                        <label
                                                                            for="id-field"
                                                                            class="form-label"
                                                                            >Nivel
                                                                            ID</label
                                                                        >
                                                                        <input
                                                                            type="text"
                                                                            id="id-field"
                                                                            class="form-control"
                                                                            placeholder="Cantidad de suscripción"
                                                                            required
                                                                        />
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="modal-footer"
                                                                >
                                                                    <div
                                                                        class="hstack gap-2 justify-content-end"
                                                                    >
                                                                        <button
                                                                            type="button"
                                                                            class="btn btn-light"
                                                                            data-bs-dismiss="modal"
                                                                            >Cerrar</button
                                                                        >
                                                                        <button
                                                                            type="submit"
                                                                            class="btn btn-success"
                                                                            id="add-btn"
                                                                            >Guardar
                                                                            cambios</button
                                                                        >
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div
                                                    class="modal fade"
                                                    id="showModalAñadirCliente"
                                                    tabindex="-1"
                                                    aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true"
                                                >
                                                    <div
                                                        class="modal-dialog modal-dialog-centered"
                                                    >
                                                        <div
                                                            class="modal-content"
                                                        >
                                                            <div
                                                                class="modal-header bg-light p-3"
                                                            >
                                                                <h5
                                                                    class="modal-title"
                                                                    id="exampleModalLabel"
                                                                >
                                                                    Añadir
                                                                    Cliente
                                                                </h5>
                                                                <button
                                                                    type="button"
                                                                    class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close"
                                                                    id="close-modal"
                                                                />
                                                            </div>
                                                            <form>
                                                                <div
                                                                    class="modal-body"
                                                                >
                                                                    <div
                                                                        class="mb-3"
                                                                    >
                                                                        <label
                                                                            for="name-field"
                                                                            class="form-label"
                                                                            >Nombre
                                                                            Completo</label
                                                                        >
                                                                        <input
                                                                            type="text"
                                                                            id="name-field"
                                                                            class="form-control"
                                                                            placeholder="Ingresar Nombre"
                                                                            required
                                                                        />
                                                                    </div>

                                                                    <div
                                                                        class="mb-3"
                                                                    >
                                                                        <label
                                                                            for="email-field"
                                                                            class="form-label"
                                                                            >Correo</label
                                                                        >
                                                                        <input
                                                                            type="email"
                                                                            id="email-field"
                                                                            class="form-control"
                                                                            placeholder="Ingresar Correo"
                                                                            required
                                                                        />
                                                                    </div>

                                                                    <div
                                                                        class="mb-3"
                                                                    >
                                                                        <label
                                                                            for="phone-field"
                                                                            class="form-label"
                                                                            >Teléfono</label
                                                                        >
                                                                        <input
                                                                            type="text"
                                                                            id="phone-field"
                                                                            class="form-control"
                                                                            placeholder="Ingresar Teléfono"
                                                                            required
                                                                        />
                                                                    </div>

                                                                    <div
                                                                        class="mb-3"
                                                                    >
                                                                        <label
                                                                            for="password-field"
                                                                            class="form-label"
                                                                            >Contraseña</label
                                                                        >
                                                                        <input
                                                                            type="text"
                                                                            id="password-field"
                                                                            class="form-control"
                                                                            placeholder="Ingresar Contraseña"
                                                                            required
                                                                        />
                                                                    </div>

                                                                    <div
                                                                        class="mb-3"
                                                                    >
                                                                        <label
                                                                            for="suscribed-field"
                                                                            class="form-label"
                                                                            >¿Está
                                                                            suscrito?</label
                                                                        >
                                                                        <input
                                                                            type="text"
                                                                            id="suscribed-field"
                                                                            class="form-control"
                                                                            placeholder="Cantidad de suscripción"
                                                                            required
                                                                        />
                                                                    </div>

                                                                    <div
                                                                        class="mb-3"
                                                                    >
                                                                        <label
                                                                            for="id-field"
                                                                            class="form-label"
                                                                            >Nivel
                                                                            ID</label
                                                                        >
                                                                        <input
                                                                            type="text"
                                                                            id="id-field"
                                                                            class="form-control"
                                                                            placeholder="Cantidad de suscripción"
                                                                            required
                                                                        />
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="modal-footer"
                                                                >
                                                                    <div
                                                                        class="hstack gap-2 justify-content-end"
                                                                    >
                                                                        <button
                                                                            type="button"
                                                                            class="btn btn-light"
                                                                            data-bs-dismiss="modal"
                                                                            >Cerrar</button
                                                                        >
                                                                        <button
                                                                            type="button"
                                                                            class="btn btn-success"
                                                                            id="edit-btn"
                                                                            >Añadir
                                                                            Cliente</button
                                                                        >
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Modal -->
                                                <!-- <div
                                                    class="modal fade zoomIn"
                                                    id="deleteRecordModal"
                                                    tabindex="-1"
                                                    aria-hidden="true"
                                                >
                                                    <div
                                                        class="modal-dialog modal-dialog-centered"
                                                    >
                                                        <div
                                                            class="modal-content"
                                                        >
                                                            <div
                                                                class="modal-header"
                                                            >
                                                                <button
                                                                    type="button"
                                                                    class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close"
                                                                    id="btn-close"
                                                                />
                                                            </div>
                                                            <div
                                                                class="modal-body"
                                                            >
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
                                                                            Estás
                                                                            seguro
                                                                            ?
                                                                        </h4>
                                                                        <p
                                                                            class="text-muted mx-4 mb-0"
                                                                        >
                                                                            Estás
                                                                            seguro
                                                                            de
                                                                            eliminar
                                                                            el
                                                                            cliente?
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
                                                                        id="delete-record"
                                                                        >Sí,
                                                                        borrar
                                                                        cliente!</button
                                                                    >
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <!--end modal -->
                                            </div>
                                        </div>
                                        <!-- end card -->
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
                    <!-- prismjs plugin -->
                    <script
                        src="http://localhost:8080/libs/prismjs/prism.js"
                    ></script>
                    <script
                        src="http://localhost:8080/libs/list.js/list.min.js"
                    ></script>
                    <script
                        src="http://localhost:8080/libs/list.pagination.js/list.pagination.min.js"
                    ></script>

                    <!-- listjs init -->
                    <script
                        src="http://localhost:8080/js/pages/listjs.init.js"
                    ></script>

                    <!-- Sweet Alerts js -->
                    <script
                        src="http://localhost:8080/libs/sweetalert2/sweetalert2.min.js"
                    ></script>

                    <!-- App js -->
                    <script src="http://localhost:8080/js/app.js"></script>
                </div>
            </div>
        </div>
    </main>
{:catch error}
    {error}
{/await}
