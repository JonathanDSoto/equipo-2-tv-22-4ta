<script>
    import { Router, Route } from 'svelte-routing';
    import Login from './views/Login.svelte';
    import Home from './views/Home.svelte';
    import NotFound from './views/NotFound.svelte';
    import ForgotPassword from './views/ForgotPassword.svelte';
    import Logout from './views/Logout.svelte';
    import Profile from './views/Profile.svelte';
    import RegisterUser from './views/RegisterUser.svelte';
    import RessetPassword from './views/RessetPassword.svelte';
</script>

<Router>
    <div>
        <!-- Vistas direccionadas con componentes -->
        <Route path="/" component={Login} />
        <Route path="/home" component={Home} />
        <Route path="/forgotPassword" component={ForgotPassword} />
        <Route path="/logout" component={Logout} /> 
        <Route path="/profile" component={Profile} />
        <Route path="/registerUser" component={RegisterUser} />
        <Route path="/ressetPassword" component={RessetPassword} />
        
        <!-- 404 -->
        <Route path="/notFound" component={NotFound} />
    </div>
</Router>