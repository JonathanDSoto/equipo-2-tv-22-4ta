<script>
    import { onMount } from 'svelte';

    var myHeaders = new Headers();
    myHeaders.append(
        'Authorization',
        'Bearer 1652|z3WkoTqsJHB5Mm5KM7kKtzpDPNzpamfptMyPKXFf'
    );

    var requestOptions = {
        method: 'GET',
        headers: myHeaders,
        redirect: 'follow',
    };

    onMount(async () => {
        const res = await fetch(
            'https://crud.jonathansoto.mx/api/products',
            requestOptions
        );
        const resjson = await res.json();
        console.log(resjson.data);

        new gridjs.Grid({
            sort: true,
            pagination: {
                enabled: true,
                limit: 10,
                summary: false,
            },
            search: {
                server: {
                    url: (prev, keyword) => `${prev}?search=${keyword}`,
                },
            },
            columns: [
                {
                    id: 'id',
                    name: 'id',
                },
                {
                    id: 'name',
                    name: 'Name',
                },
                {
                    id: 'slug',
                    name: 'slug',
                },
                {
                    id: 'description',
                    name: 'description',
                },
            ],
            data: [
                {
                    name: 'Adrian'
                },
                resjson.data.forEach((data) => {
                    {name: data.name}
                }),
            ],
            language: {
                search: {
                    placeholder: '🔍 Search...',
                },
                pagination: {
                    previous: '⬅️',
                    next: '➡️',
                    showing: '😃 Displaying',
                    results: () => 'Records',
                },
            },
        }).render(document.getElementById('table'));
    });
</script>

<main>
    <div id="table" />
</main>
