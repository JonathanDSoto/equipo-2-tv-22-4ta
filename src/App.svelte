<script>
    import { Router, Route } from 'svelte-routing';
    import Login from './views/Login.svelte';
    import Home from './views/Home.svelte';
    import NotFound from './views/NotFound.svelte';
    import Logout from './views/Logout.svelte';
    import Profile from './views/Profile.svelte';
    import RegisterUser from './views/RegisterUser.svelte';
    import Test from './views/Test.svelte';
    import RessetPassword from './views/RessetPassword.svelte';
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
        <Route path="/ressetPassword" component={RessetPassword} />
        
        <Route path="/test/:id" let:params>
            <Test id="{params.id}" />
        </Route>
        
        <!-- 404 -->
        <Route path="/*" component={NotFound} />
    </div>
</Router>