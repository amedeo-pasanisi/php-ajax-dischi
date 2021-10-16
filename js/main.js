Vue.config.devtools = true;

const app = new Vue (
    {
        el: "#root",
        data: {
            dischi: [],
            genres: [],
            value: "",
            dischiFiltered: []
        },
        methods: {
            filter: function filter() {
                axios 
                    .get ('http://localhost/68%20(PHP-Include)%2012-10-21/php-ajax-dischi/api/server.php')
                    .then ((result) => {
                        if (this.value == 'tutti') {
                            this.dischiFiltered = this.dischi;
                        } else {
                            this.dischiFiltered = this.dischi.filter(disco => {
                                return disco.genre == this.value;
                            });
                        }
                    });
            }
        },
        created() {
            axios 
                .get ('http://localhost/68%20(PHP-Include)%2012-10-21/php-ajax-dischi/api/server.php')
                .then ((result) => {
                    this.dischi = result.data;
                    this.dischiFiltered = this.dischi
                    this.dischi.forEach(disco => {
                        if (!this.genres.includes(disco.genre)) {
                            this.genres.push(disco.genre);
                        }
                    });
                });
        }
    }
)