<script>
    import { Router, Route } from 'svelte-routing';
    import Login from './views/Login.svelte';
    import Home from './views/Home.svelte';
    import NotFound from './views/NotFound.svelte';
    // import Products_Detail from './views/Products_Detail.svelte';
</script>

<Router>
    <div>
        <!-- Vistas direccionadas con componentes -->
        <Route path="/" component={Login} />
        <Route path="home" component={Home} />

        <!-- Ruta producto id especifico -->
        <Route path="producto/:id" let:params>
            <!-- <Products_Detail id="{params.id}" /> -->
        </Route>
        
        <!-- 404 -->
        <Route path="*" component={NotFound} />
    </div>
</Router>
