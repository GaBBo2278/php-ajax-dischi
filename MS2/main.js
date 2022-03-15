const app = new Vue({
    el: '#app',
    data: {
        /* definisco un array vuoto */
        discs: [],
    },
    created() {
        /* tramite richiesta axios al server recupero le informazioni e le salvo nel array */
        axios.get('http://localhost/php-ajax-dischi/MS2/server.php').then(response => {
            this.discs = response.data;
        });
    }
})