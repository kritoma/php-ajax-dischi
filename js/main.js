const app = new Vue({
    el: '#app',
    data: {
        albums: [],
    },
    created() {
        axios.get('http://localhost/php/php-ajax-dischi/serve/api.php')
        .then((response) => {
            this.albums = response.data
        })
        .catch((error) => {
            console.log(error)
        })
    }
})