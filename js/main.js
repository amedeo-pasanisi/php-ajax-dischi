Vue.config.devtools = true;

const app = new Vue (
    {
        el: "#root",
        data: {
            dischi: [],
            generi: []
        },
        created() {
            axios 
                .get ('http://localhost/68%20(PHP-Include)%2012-10-21/php-ajax-dischi/api/server.php')
                .then ((result) => {
                    this.dischi = result.data;
                    console.log(this.dischi);
                    this.dischi.forEach(disco => {
                        if (!this.generi.includes(disco.genre)) {
                            this.generi.push(disco.genre);
                        }
                    });
                    console.log(this.generi);
                });
        }
    }
)