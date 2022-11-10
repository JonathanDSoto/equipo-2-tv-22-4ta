<script>
   import HeaderApp from "../components/HeaderApp.svelte";
   import Sidebar from "../components/Sidebar.svelte";

   import Swal from "sweetalert2";

   // Transiciones
   import { fly } from "svelte/transition";
   import { fade } from "svelte/transition";

   // Traer la id del usuario loggeado
   import { get } from "svelte/store";
   import { preferences } from "../store/session";
   get(preferences);

   // Se guarda en una variable para poder usar la variable global
   const number = $preferences;

   // Si el numero es igual a 0 significa que no existe ninguna session activa y lo regresa al login
   if (number == 0) {
      location.href = "/";
   }

   let myHeaders = new Headers();
   myHeaders.append("Authorization", `${process.env.BEARER_KEY}`);

   let requestOptions = {
      method: "GET",
      headers: myHeaders,
      redirect: "follow",
   };

   async function getDataUserLoggin() {
      const response = await fetch(
         `https://crud.jonathansoto.mx/api/users/${number}`,
         requestOptions
      );
      const dataUser = await response.json();
      return dataUser.data;
   }

   //    Categorias calls

   async function getCategories() {
      const response = await fetch(
         "https://crud.jonathansoto.mx/api/categories",
         requestOptions
      );
      const data = await response.json();
      return data.data;
   }

   const dataSingleSelected = {
      id: 0,
      name: "",
      description: "",
      slug: "",
   };

   async function getSingleCategorie(id) {
      const response = await fetch(
         `https://crud.jonathansoto.mx/api/categories/${id}`,
         requestOptions
      );
      const data = await response.json();
      dataSingleSelected.id = data.data.id;
      dataSingleSelected.name = data.data.name;
      dataSingleSelected.description = data.data.description;
      dataSingleSelected.slug = data.data.slug;
      console.log(dataSingleSelected);
      return data.data;
   }

   // =================================================

   //   Marcas calls

   async function getBrands() {
      const response = await fetch(
         `https://crud.jonathansoto.mx/api/brands`,
         requestOptions
      );
      const data = await response.json();
      return data.data;
   }

   async function getSingleBrand(id) {
      const response = await fetch(
         `https://crud.jonathansoto.mx/api/brands/${id}`,
         requestOptions
      );
      const data = await response.json();
      dataSingleSelected.id = data.data.id;
      dataSingleSelected.name = data.data.name;
      dataSingleSelected.description = data.data.description;
      dataSingleSelected.slug = data.data.slug;
      return data.data;
   }

   // =================================================

   //  Etiquetas calls

   async function getTags() {
      const response = await fetch(
         `https://crud.jonathansoto.mx/api/tags`,
         requestOptions
      );
      const data = await response.json();
      return data.data;
   }

   async function getSingleTag(id) {
      const response = await fetch(
         `https://crud.jonathansoto.mx/api/tags/${id}`,
         requestOptions
      );
      const data = await response.json();
      dataSingleSelected.id = data.data.id;
      dataSingleSelected.name = data.data.name;
      dataSingleSelected.description = data.data.description;
      dataSingleSelected.slug = data.data.slug;
      return data.data;
   }
</script>

<svelte:head>
   <title>DevEcommerce | Vista Detalle Categoría</title>
   <!-- ============================================ -->
   <!-- Css template -->
   <!-- ============================================ -->
   <!-- App favicon -->
   <link rel="shortcut icon" href="http://localhost:8080/images/favicon.ico" />

   <!-- Sweet Alert css-->
   <link
      href="http://localhost:8080/libs/sweetalert2/sweetalert2.min.css"
      rel="stylesheet"
      type="text/css" />

   <!-- Layout config Js -->
   <script src="http://localhost:8080/js/layout.js"></script>
   <!-- Bootstrap Css -->
   <link
      href="http://localhost:8080/css/bootstrap.min.css"
      rel="stylesheet"
      type="text/css" />
   <!-- Icons Css -->
   <link
      href="http://localhost:8080/css/icons.min.css"
      rel="stylesheet"
      type="text/css" />
   <!-- App Css-->
   <link
      href="http://localhost:8080/css/app.min.css"
      rel="stylesheet"
      type="text/css" />
   <!-- custom Css-->
   <link
      href="http://localhost:8080/css/custom.min.css"
      rel="stylesheet"
      type="text/css" />
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
                           class="page-title-box d-sm-flex align-items-center justify-content-between">
                           <h4 class="mb-sm-0">CATALOGOS</h4>

                           <div class="page-title-right">
                              <ol class="breadcrumb m-0">
                                 <li class="breadcrumb-item">
                                    <a href="/home">Home</a>
                                 </li>
                                 <li class="breadcrumb-item active">
                                    Catalogos
                                 </li>
                              </ol>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- end page title -->

                  <!-- Tabla Categoria -->
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="card">
                           <div class="card-header">
                              <h4 class="card-title mb-0">Categorias</h4>
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
                                                class="ri-add-line align-bottom me-1" />
                                             Añadir Categoria</button>
                                       </div>
                                    </div>
                                 </div>

                                 <div
                                    class="table-responsive table-card mt-3 mb-1"
                                    style="height: 200px;
                                    overflow: scroll;">
                                    <table
                                       class="table align-middle table-nowrap"
                                       id="customerTable">
                                       <thead class="table-light">
                                          <tr>
                                             <th>Nombre</th>
                                             <th>Descripción</th>
                                             <th>Slug</th>
                                             <th>Acciones</th>
                                          </tr>
                                       </thead>
                                       <tbody class="list form-check-all">
                                          {#await getCategories()}
                                             Loading...
                                          {:then data}
                                             {#each data as categorie}
                                                <tr>
                                                   <td>{categorie.name}</td>
                                                   <td width="100px"
                                                      >{categorie.description}</td>
                                                   <td>{categorie.slug}</td>
                                                   <td>
                                                      <div class="d-flex gap-2">
                                                         <div class="edit">
                                                            <button
                                                               class="btn btn-sm btn-success edit-item-btn"
                                                               data-bs-toggle="modal"
                                                               data-bs-target="#showModalEditarCategoria"
                                                               on:click={() =>
                                                                  getSingleCategorie(
                                                                     categorie.id
                                                                  )}
                                                               >Editar</button>
                                                         </div>
                                                         <div
                                                            class="remove"
                                                            id="removeItemModal">
                                                            <button
                                                               class="btn btn-sm btn-danger remove-item-btn"
                                                               >Borrar</button>
                                                         </div>
                                                      </div>
                                                   </td>
                                                </tr>
                                             {/each}
                                          {:catch error}
                                             {error}
                                          {/await}
                                       </tbody>
                                    </table>

                                    <div class="noresult" style="display: none">
                                       <div class="text-center">
                                          <lord-icon
                                             src="https://cdn.lordicon.com/msoeawqm.json"
                                             trigger="loop"
                                             colors="primary:#121331,secondary:#08a88a"
                                             style="width:75px;height:75px" />
                                          <h5 class="mt-2">
                                             Lo sentimos! No se encontraron
                                             resultados
                                          </h5>
                                          <p class="text-muted mb-0">
                                             Hemos buscado en todos los
                                             clientes. No encontramos ningún
                                             cliente para tu busqueda.
                                          </p>
                                       </div>
                                    </div>

                                    <!-- Modal editar categoria -->
                                    <div
                                       class="modal fade"
                                       id="showModalEditarCategoria"
                                       tabindex="-1"
                                       aria-labelledby="exampleModalLabel"
                                       aria-hidden="true">
                                       <div
                                          class="modal-dialog modal-dialog-centered">
                                          <div class="modal-content">
                                             <div
                                                class="modal-header bg-light p-3">
                                                <h5
                                                   class="modal-title"
                                                   id="exampleModalLabel">
                                                   Editar Categoria
                                                </h5>
                                                <button
                                                   type="button"
                                                   class="btn-close"
                                                   data-bs-dismiss="modal"
                                                   aria-label="Close"
                                                   id="close-modal" />
                                             </div>
                                             <form
                                                method="post"
                                                action="http://localhost/app/ClientsController.php">
                                                <div class="modal-body">
                                                   <div class="mb-3">
                                                      <label
                                                         for="name-field"
                                                         class="form-label"
                                                         >Nombre</label>
                                                      <input
                                                         type="text"
                                                         id="name-field"
                                                         class="form-control"
                                                         placeholder="Ingresar Nombre"
                                                         bind:value={dataSingleSelected.name}
                                                         name="name"
                                                         required />
                                                   </div>

                                                   <div class="mb-3">
                                                      <label
                                                         for="description-field"
                                                         class="form-label"
                                                         >Descripcion</label>
                                                      <input
                                                         type="text"
                                                         id="description-field"
                                                         name="description"
                                                         class="form-control"
                                                         bind:value={dataSingleSelected.description}
                                                         placeholder="Ingresar descripcion"
                                                         required />
                                                   </div>

                                                   <div class="mb-3">
                                                      <label
                                                         for="slug-field"
                                                         class="form-label"
                                                         >Slug</label>
                                                      <input
                                                         type="text"
                                                         id="slug-field"
                                                         class="form-control"
                                                         name="slug"
                                                         bind:value={dataSingleSelected.slug}
                                                         placeholder="Ingresar Teléfono"
                                                         required />
                                                   </div>

                                                   <div class="modal-footer">
                                                      <div
                                                         class="hstack gap-2 justify-content-end">
                                                         <button
                                                            type="button"
                                                            class="btn btn-danger"
                                                            data-bs-dismiss="modal"
                                                            >Cerrar</button>
                                                         <button
                                                            type="submit"
                                                            class="btn btn-success"
                                                            id="add-btn"
                                                            >Guardar cambios</button>
                                                      </div>
                                                   </div>
                                                   <input
                                                      name="action"
                                                      value="update"
                                                      hidden />
                                                   <input name="id" hidden />
                                                </div>
                                             </form>
                                          </div>
                                       </div>
                                    </div>

                                    <!-- Modal añadir categoria -->
                                    <div
                                       class="modal fade"
                                       id="showModalAñadirCliente"
                                       tabindex="-1"
                                       aria-labelledby="exampleModalLabel"
                                       aria-hidden="true">
                                       <div
                                          class="modal-dialog modal-dialog-centered">
                                          <div class="modal-content">
                                             <div
                                                class="modal-header bg-light p-3">
                                                <h5
                                                   class="modal-title"
                                                   id="exampleModalLabel">
                                                   Añadir Cliente
                                                </h5>
                                                <button
                                                   type="button"
                                                   class="btn-close"
                                                   data-bs-dismiss="modal"
                                                   aria-label="Close"
                                                   id="close-modal" />
                                             </div>
                                             <form>
                                                <div class="modal-body">
                                                   <div class="mb-3">
                                                      <label
                                                         for="name-field"
                                                         class="form-label"
                                                         >Nombre Completo</label>
                                                      <input
                                                         type="text"
                                                         id="name-field"
                                                         class="form-control"
                                                         placeholder="Ingresar Nombre"
                                                         required />
                                                   </div>

                                                   <div class="mb-3">
                                                      <label
                                                         for="email-field"
                                                         class="form-label"
                                                         >Correo</label>
                                                      <input
                                                         type="email"
                                                         id="email-field"
                                                         class="form-control"
                                                         placeholder="Ingresar Correo"
                                                         required />
                                                   </div>

                                                   <div class="mb-3">
                                                      <label
                                                         for="phone-field"
                                                         class="form-label"
                                                         >Teléfono</label>
                                                      <input
                                                         type="text"
                                                         id="phone-field"
                                                         class="form-control"
                                                         placeholder="Ingresar Teléfono"
                                                         required />
                                                   </div>

                                                   <div class="mb-3">
                                                      <label
                                                         for="password-field"
                                                         class="form-label"
                                                         >Contraseña</label>
                                                      <input
                                                         type="text"
                                                         id="password-field"
                                                         class="form-control"
                                                         placeholder="Ingresar Contraseña"
                                                         required />
                                                   </div>

                                                   <div class="mb-3">
                                                      <label
                                                         for="suscribed-field"
                                                         class="form-label"
                                                         >¿Está suscrito?</label>
                                                      <input
                                                         type="text"
                                                         id="suscribed-field"
                                                         class="form-control"
                                                         placeholder="Cantidad de suscripción"
                                                         required />
                                                   </div>

                                                   <div class="mb-3">
                                                      <label
                                                         for="id-field"
                                                         class="form-label"
                                                         >Nivel ID</label>
                                                      <input
                                                         type="text"
                                                         id="id-field"
                                                         class="form-control"
                                                         placeholder="Cantidad de suscripción"
                                                         required />
                                                   </div>
                                                </div>
                                                <div class="modal-footer">
                                                   <div
                                                      class="hstack gap-2 justify-content-end">
                                                      <button
                                                         type="button"
                                                         class="btn btn-danger"
                                                         data-bs-dismiss="modal"
                                                         >Cerrar</button>
                                                      <button
                                                         type="button"
                                                         class="btn btn-success"
                                                         id="edit-btn"
                                                         >Añadir Cliente</button>
                                                   </div>
                                                </div>
                                             </form>
                                          </div>
                                       </div>
                                    </div>
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

                  <!-- Tabla Marcas -->
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="card">
                           <div class="card-header">
                              <h4 class="card-title mb-0">Marcas</h4>
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
                                                class="ri-add-line align-bottom me-1" />
                                             Añadir Marca</button>
                                       </div>
                                    </div>
                                 </div>

                                 <div
                                    class="table-responsive table-card mt-3 mb-1"
                                    style="height: 200px;
                                   overflow: scroll;">
                                    <table
                                       class="table align-middle table-nowrap"
                                       id="customerTable">
                                       <thead class="table-light">
                                          <tr>
                                             <th>Nombre</th>
                                             <th>Descripción</th>
                                             <th>Slug</th>
                                             <th>Acciones</th>
                                          </tr>
                                       </thead>
                                       <tbody class="list form-check-all">
                                          {#await getBrands()}
                                             Loading...
                                          {:then data}
                                             {#each data as brand}
                                                <tr>
                                                   <td>{brand.name}</td>
                                                   <td width="100px"
                                                      >{brand.description}</td>
                                                   <td>{brand.slug}</td>
                                                   <td>
                                                      <div class="d-flex gap-2">
                                                         <div class="edit">
                                                            <button
                                                               class="btn btn-sm btn-success edit-item-btn"
                                                               data-bs-toggle="modal"
                                                               data-bs-target="#showModalEditarMarca"
                                                               on:click={() =>
                                                                  getSingleBrand(
                                                                     brand.id
                                                                  )}
                                                               >Editar</button>
                                                         </div>
                                                         <div
                                                            class="remove"
                                                            id="removeItemModal">
                                                            <button
                                                               class="btn btn-sm btn-danger remove-item-btn"
                                                               >Borrar</button>
                                                         </div>
                                                      </div>
                                                   </td>
                                                </tr>
                                             {/each}
                                          {:catch error}
                                             {error}
                                          {/await}
                                       </tbody>
                                    </table>

                                    <div class="noresult" style="display: none">
                                       <div class="text-center">
                                          <lord-icon
                                             src="https://cdn.lordicon.com/msoeawqm.json"
                                             trigger="loop"
                                             colors="primary:#121331,secondary:#08a88a"
                                             style="width:75px;height:75px" />
                                          <h5 class="mt-2">
                                             Lo sentimos! No se encontraron
                                             resultados
                                          </h5>
                                          <p class="text-muted mb-0">
                                             Hemos buscado en todos los
                                             clientes. No encontramos ningún
                                             cliente para tu busqueda.
                                          </p>
                                       </div>
                                    </div>

                                    <div
                                       class="modal fade"
                                       id="showModalEditarMarca"
                                       tabindex="-1"
                                       aria-labelledby="exampleModalLabel"
                                       aria-hidden="true">
                                       <div
                                          class="modal-dialog modal-dialog-centered">
                                          <div class="modal-content">
                                             <div
                                                class="modal-header bg-light p-3">
                                                <h5
                                                   class="modal-title"
                                                   id="exampleModalLabel">
                                                   Editar Categoria
                                                </h5>
                                                <button
                                                   type="button"
                                                   class="btn-close"
                                                   data-bs-dismiss="modal"
                                                   aria-label="Close"
                                                   id="close-modal" />
                                             </div>
                                             <form
                                                method="post"
                                                action="http://localhost/app/ClientsController.php">
                                                <div class="modal-body">
                                                   <div class="mb-3">
                                                      <label
                                                         for="name-field"
                                                         class="form-label"
                                                         >Nombre</label>
                                                      <input
                                                         type="text"
                                                         id="name-field"
                                                         class="form-control"
                                                         placeholder="Ingresar Nombre"
                                                         bind:value={dataSingleSelected.name}
                                                         name="name"
                                                         required />
                                                   </div>

                                                   <div class="mb-3">
                                                      <label
                                                         for="description-field"
                                                         class="form-label"
                                                         >Descripcion</label>
                                                      <input
                                                         type="text"
                                                         id="description-field"
                                                         name="description"
                                                         class="form-control"
                                                         bind:value={dataSingleSelected.description}
                                                         placeholder="Ingresar descripcion"
                                                         required />
                                                   </div>

                                                   <div class="mb-3">
                                                      <label
                                                         for="slug-field"
                                                         class="form-label"
                                                         >Slug</label>
                                                      <input
                                                         type="text"
                                                         id="slug-field"
                                                         class="form-control"
                                                         name="slug"
                                                         bind:value={dataSingleSelected.slug}
                                                         placeholder="Ingresar Teléfono"
                                                         required />
                                                   </div>

                                                   <div class="modal-footer">
                                                      <div
                                                         class="hstack gap-2 justify-content-end">
                                                         <button
                                                            type="button"
                                                            class="btn btn-danger"
                                                            data-bs-dismiss="modal"
                                                            >Cerrar</button>
                                                         <button
                                                            type="submit"
                                                            class="btn btn-success"
                                                            id="add-btn"
                                                            >Guardar cambios</button>
                                                      </div>
                                                   </div>
                                                   <input
                                                      name="action"
                                                      value="update"
                                                      hidden />
                                                   <input name="id" hidden />
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
                                       aria-hidden="true">
                                       <div
                                          class="modal-dialog modal-dialog-centered">
                                          <div class="modal-content">
                                             <div
                                                class="modal-header bg-light p-3">
                                                <h5
                                                   class="modal-title"
                                                   id="exampleModalLabel">
                                                   Añadir Cliente
                                                </h5>
                                                <button
                                                   type="button"
                                                   class="btn-close"
                                                   data-bs-dismiss="modal"
                                                   aria-label="Close"
                                                   id="close-modal" />
                                             </div>
                                             <form>
                                                <div class="modal-body">
                                                   <div class="mb-3">
                                                      <label
                                                         for="name-field"
                                                         class="form-label"
                                                         >Nombre Completo</label>
                                                      <input
                                                         type="text"
                                                         id="name-field"
                                                         class="form-control"
                                                         placeholder="Ingresar Nombre"
                                                         required />
                                                   </div>

                                                   <div class="mb-3">
                                                      <label
                                                         for="email-field"
                                                         class="form-label"
                                                         >Correo</label>
                                                      <input
                                                         type="email"
                                                         id="email-field"
                                                         class="form-control"
                                                         placeholder="Ingresar Correo"
                                                         required />
                                                   </div>

                                                   <div class="mb-3">
                                                      <label
                                                         for="phone-field"
                                                         class="form-label"
                                                         >Teléfono</label>
                                                      <input
                                                         type="text"
                                                         id="phone-field"
                                                         class="form-control"
                                                         placeholder="Ingresar Teléfono"
                                                         required />
                                                   </div>

                                                   <div class="mb-3">
                                                      <label
                                                         for="password-field"
                                                         class="form-label"
                                                         >Contraseña</label>
                                                      <input
                                                         type="text"
                                                         id="password-field"
                                                         class="form-control"
                                                         placeholder="Ingresar Contraseña"
                                                         required />
                                                   </div>

                                                   <div class="mb-3">
                                                      <label
                                                         for="suscribed-field"
                                                         class="form-label"
                                                         >¿Está suscrito?</label>
                                                      <input
                                                         type="text"
                                                         id="suscribed-field"
                                                         class="form-control"
                                                         placeholder="Cantidad de suscripción"
                                                         required />
                                                   </div>

                                                   <div class="mb-3">
                                                      <label
                                                         for="id-field"
                                                         class="form-label"
                                                         >Nivel ID</label>
                                                      <input
                                                         type="text"
                                                         id="id-field"
                                                         class="form-control"
                                                         placeholder="Cantidad de suscripción"
                                                         required />
                                                   </div>
                                                </div>
                                                <div class="modal-footer">
                                                   <div
                                                      class="hstack gap-2 justify-content-end">
                                                      <button
                                                         type="button"
                                                         class="btn btn-danger"
                                                         data-bs-dismiss="modal"
                                                         >Cerrar</button>
                                                      <button
                                                         type="button"
                                                         class="btn btn-success"
                                                         id="edit-btn"
                                                         >Añadir Cliente</button>
                                                   </div>
                                                </div>
                                             </form>
                                          </div>
                                       </div>
                                    </div>
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

                  <!-- Tabla Tags -->
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="card">
                           <div class="card-header">
                              <h4 class="card-title mb-0">Etiquetas</h4>
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
                                                class="ri-add-line align-bottom me-1" />
                                             Añadir Etiquetas</button>
                                       </div>
                                    </div>
                                 </div>

                                 <div
                                    class="table-responsive table-card mt-3 mb-1"
                                    style="height: 200px;
                                  overflow: scroll;">
                                    <table
                                       class="table align-middle table-nowrap"
                                       id="customerTable">
                                       <thead class="table-light">
                                          <tr>
                                             <th>Nombre</th>
                                             <th>Descripción</th>
                                             <th>Slug</th>
                                             <th>Acciones</th>
                                          </tr>
                                       </thead>
                                       <tbody class="list form-check-all">
                                          {#await getTags()}
                                             Loading...
                                          {:then data}
                                             {#each data as tag}
                                                <tr>
                                                   <td>{tag.name}</td>
                                                   <td width="100px"
                                                      >{tag.description}</td>
                                                   <td>{tag.slug}</td>
                                                   <td>
                                                      <div class="d-flex gap-2">
                                                         <div class="edit">
                                                            <button
                                                               class="btn btn-sm btn-success edit-item-btn"
                                                               data-bs-toggle="modal"
                                                               data-bs-target="#showModalEditarEtiqueta"
                                                               >Editar</button>
                                                         </div>
                                                         <div
                                                            class="remove"
                                                            id="removeItemModal">
                                                            <button
                                                               class="btn btn-sm btn-danger remove-item-btn"
                                                               >Borrar</button>
                                                         </div>
                                                      </div>
                                                   </td>
                                                </tr>
                                             {/each}
                                          {:catch error}
                                             {error}
                                          {/await}
                                       </tbody>
                                    </table>

                                    <div
                                       class="modal fade"
                                       id="showModalEditarEtiqueta"
                                       tabindex="-1"
                                       aria-labelledby="exampleModalLabel"
                                       aria-hidden="true">
                                       <div
                                          class="modal-dialog modal-dialog-centered">
                                          <div class="modal-content">
                                             <div
                                                class="modal-header bg-light p-3">
                                                <h5
                                                   class="modal-title"
                                                   id="exampleModalLabel">
                                                   Editar Categoria
                                                </h5>
                                                <button
                                                   type="button"
                                                   class="btn-close"
                                                   data-bs-dismiss="modal"
                                                   aria-label="Close"
                                                   id="close-modal" />
                                             </div>
                                             <form
                                                method="post"
                                                action="http://localhost/app/ClientsController.php">
                                                <div class="modal-body">
                                                   <div class="mb-3">
                                                      <label
                                                         for="name-field"
                                                         class="form-label"
                                                         >Nombre</label>
                                                      <input
                                                         type="text"
                                                         id="name-field"
                                                         class="form-control"
                                                         placeholder="Ingresar Nombre"
                                                         bind:value={dataSingleSelected.name}
                                                         name="name"
                                                         required />
                                                   </div>

                                                   <div class="mb-3">
                                                      <label
                                                         for="description-field"
                                                         class="form-label"
                                                         >Descripcion</label>
                                                      <input
                                                         type="text"
                                                         id="description-field"
                                                         name="description"
                                                         class="form-control"
                                                         bind:value={dataSingleSelected.description}
                                                         placeholder="Ingresar descripcion"
                                                         required />
                                                   </div>

                                                   <div class="mb-3">
                                                      <label
                                                         for="slug-field"
                                                         class="form-label"
                                                         >Slug</label>
                                                      <input
                                                         type="text"
                                                         id="slug-field"
                                                         class="form-control"
                                                         name="slug"
                                                         bind:value={dataSingleSelected.slug}
                                                         placeholder="Ingresar Teléfono"
                                                         required />
                                                   </div>

                                                   <div class="modal-footer">
                                                      <div
                                                         class="hstack gap-2 justify-content-end">
                                                         <button
                                                            type="button"
                                                            class="btn btn-danger"
                                                            data-bs-dismiss="modal"
                                                            >Cerrar</button>
                                                         <button
                                                            type="submit"
                                                            class="btn btn-success"
                                                            id="add-btn"
                                                            >Guardar cambios</button>
                                                      </div>
                                                   </div>
                                                   <input
                                                      name="action"
                                                      value="update"
                                                      hidden />
                                                   <input name="id" hidden />
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
                                       aria-hidden="true">
                                       <div
                                          class="modal-dialog modal-dialog-centered">
                                          <div class="modal-content">
                                             <div
                                                class="modal-header bg-light p-3">
                                                <h5
                                                   class="modal-title"
                                                   id="exampleModalLabel">
                                                   Añadir Cliente
                                                </h5>
                                                <button
                                                   type="button"
                                                   class="btn-close"
                                                   data-bs-dismiss="modal"
                                                   aria-label="Close"
                                                   id="close-modal" />
                                             </div>
                                             <form>
                                                <div class="modal-body">
                                                   <div class="mb-3">
                                                      <label
                                                         for="name-field"
                                                         class="form-label"
                                                         >Nombre Completo</label>
                                                      <input
                                                         type="text"
                                                         id="name-field"
                                                         class="form-control"
                                                         placeholder="Ingresar Nombre"
                                                         required />
                                                   </div>

                                                   <div class="mb-3">
                                                      <label
                                                         for="email-field"
                                                         class="form-label"
                                                         >Correo</label>
                                                      <input
                                                         type="email"
                                                         id="email-field"
                                                         class="form-control"
                                                         placeholder="Ingresar Correo"
                                                         required />
                                                   </div>

                                                   <div class="mb-3">
                                                      <label
                                                         for="phone-field"
                                                         class="form-label"
                                                         >Teléfono</label>
                                                      <input
                                                         type="text"
                                                         id="phone-field"
                                                         class="form-control"
                                                         placeholder="Ingresar Teléfono"
                                                         required />
                                                   </div>

                                                   <div class="mb-3">
                                                      <label
                                                         for="password-field"
                                                         class="form-label"
                                                         >Contraseña</label>
                                                      <input
                                                         type="text"
                                                         id="password-field"
                                                         class="form-control"
                                                         placeholder="Ingresar Contraseña"
                                                         required />
                                                   </div>

                                                   <div class="mb-3">
                                                      <label
                                                         for="suscribed-field"
                                                         class="form-label"
                                                         >¿Está suscrito?</label>
                                                      <input
                                                         type="text"
                                                         id="suscribed-field"
                                                         class="form-control"
                                                         placeholder="Cantidad de suscripción"
                                                         required />
                                                   </div>

                                                   <div class="mb-3">
                                                      <label
                                                         for="id-field"
                                                         class="form-label"
                                                         >Nivel ID</label>
                                                      <input
                                                         type="text"
                                                         id="id-field"
                                                         class="form-control"
                                                         placeholder="Cantidad de suscripción"
                                                         required />
                                                   </div>
                                                </div>
                                                <div class="modal-footer">
                                                   <div
                                                      class="hstack gap-2 justify-content-end">
                                                      <button
                                                         type="button"
                                                         class="btn btn-danger"
                                                         data-bs-dismiss="modal"
                                                         >Cerrar</button>
                                                      <button
                                                         type="button"
                                                         class="btn btn-success"
                                                         id="edit-btn"
                                                         >Añadir Cliente</button>
                                                   </div>
                                                </div>
                                             </form>
                                          </div>
                                       </div>
                                    </div>
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
                  src="http://localhost:8080/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
               <script
                  src="http://localhost:8080/libs/simplebar/simplebar.min.js"></script>
               <script
                  src="http://localhost:8080/libs/node-waves/waves.min.js"></script>
               <script
                  src="http://localhost:8080/libs/feather-icons/feather.min.js"></script>
               <script
                  src="http://localhost:8080/js/pages/plugins/lord-icon-2.1.0.js"></script>
               <script src="http://localhost:8080/js/plugins.js"></script>
               <!-- prismjs plugin -->
               <script
                  src="http://localhost:8080/libs/prismjs/prism.js"></script>
               <script
                  src="http://localhost:8080/libs/list.js/list.min.js"></script>
               <script
                  src="http://localhost:8080/libs/list.pagination.js/list.pagination.min.js"></script>

               <!-- listjs init -->
               <script
                  src="http://localhost:8080/js/pages/listjs.init.js"></script>

               <!-- Sweet Alerts js -->
               <script
                  src="http://localhost:8080/libs/sweetalert2/sweetalert2.min.js"></script>

               <!-- App js -->
               <script src="http://localhost:8080/js/app.js"></script>
            </div>
         </div>
      </div>

      <div>
         <!-- ============================================ -->
         <!-- Js tempalte -->
         <!-- ============================================ -->
         <!-- JAVASCRIPT -->
         <script
            src="http://localhost:8080/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
         <script
            src="http://localhost:8080/libs/simplebar/simplebar.min.js"></script>
         <script
            src="http://localhost:8080/libs/node-waves/waves.min.js"></script>
         <script
            src="http://localhost:8080/libs/feather-icons/feather.min.js"></script>
         <script
            src="http://localhost:8080/js/pages/plugins/lord-icon-2.1.0.js"></script>
         <script src="http://localhost:8080/js/plugins.js"></script>
         <!-- prismjs plugin -->
         <script src="http://localhost:8080/libs/prismjs/prism.js"></script>
         <script src="http://localhost:8080/libs/list.js/list.min.js"></script>
         <script
            src="http://localhost:8080/libs/list.pagination.js/list.pagination.min.js"></script>

         <!-- listjs init -->
         <script src="http://localhost:8080/js/pages/listjs.init.js"></script>

         <!-- Sweet Alerts js -->
         <script
            src="http://localhost:8080/libs/sweetalert2/sweetalert2.min.js"></script>

         <!-- App js -->
         <script src="http://localhost:8080/js/app.js"></script>
      </div>
   </main>
{:catch error}
   {error}
{/await}
