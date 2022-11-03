<script>
    import { Router, Route } from 'svelte-routing';
    import Login from './views/Login.svelte';
    import Home from './views/Home.svelte';
    import NotFound from './views/NotFound.svelte';
    import Logout from './views/Logout.svelte';
    import Profile from './views/Profile.svelte';
    import ProfileSettings from './views/ProfileSettings.svelte';
    import RegisterUser from './views/RegisterUser.svelte';
    import Test from './views/Test.svelte';

    import Users from './views/Users.svelte';
    import UsersView from './views/UserDetails.svelte';

    import Clientes from './views/Clientes.svelte';
    import Products from './views/Products.svelte';
    import ViewUser from './views/ViewUser.svelte';
    import ViewCliente from './views/ViewCliente.svelte';

    import ViewProduct from './views/ViewProduct.svelte';
    import ViewPresentacion from './views/ViewPresentacion.svelte';
    import ViewOrder from './views/ViewOrder.svelte';
    import ViewDireccion from './views/ViewDireccion.svelte';
</script>

<Router>
    <div>
        <!-- Vistas direccionadas con componentes -->
        <Route path="/">
            <Login/>
        </Route>
        <Route path="/home" component={Home} />
        <Route path="/logout" component={Logout} /> 
        <Route path="/profile" component={Profile} />
        <Route path="/registerUser" component={RegisterUser} />
        <Route path="/profileSettings" component={ProfileSettings} />

        <Route path="/users" component={Users} />

        <Route path="/users/:id" let:params>
            <UsersView id="{params.id}" />
        </Route>

        <Route path="/clientes" component={Clientes} />
        <Route path="/products" component={Products} />
        <Route path="/viewUser" component={ViewUser} />
        <Route path="/viewCliente" component={ViewCliente} />

        <Route path="/viewProduct" component={ViewProduct} />
        <Route path="/viewPresentacion" component={ViewPresentacion} />
        <Route path="/viewOrder" component={ViewOrder} />
        <Route path="/viewDireccion" component={ViewDireccion} />

        <Route path="/test/:id" let:params>
            <Test id="{params.id}" />
        </Route>
        
        <!-- 404 -->
        <Route path="/*" component={NotFound} />
    </div>
</Router>