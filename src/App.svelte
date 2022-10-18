<script>
    import { Router, Route } from 'svelte-routing';
    import Login from './views/Login.svelte';
    import Home from './views/Home.svelte';
    import NotFound from './views/NotFound.svelte';
</script>

<Router>
    <div>
        <!-- Vistas direccionadas con componentes -->
        <Route path="/" component={Login} />
        <Route path="/home" component={Home} />
        
        <!-- 404 -->
        <Route path="*" component={NotFound} />
    </div>
</Router>
