Vue.config.devtools = true;

const app = new Vue (
    {
        el: "#root",
        data: {
            dischi: ''
        },
        created() {
            axios
                .get ('http://localhost/68%20(PHP-Include)%2012-10-21/php-ajax-dischi/server.php')
                .then ((result) => {
                    this.dischi = result.data;
                    console.log(this.dischi);
                });
        }
    }
)