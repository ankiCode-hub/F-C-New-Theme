const app = new Vue({
    el: '#app',
    data: {users: []},
    mounted() {this.loaddata();},
    methods: {
    loaddata() {
      const form = new FormData();
      form.append("action", "listings_display");
      form.append("type", "0");

      const settings = {
          "async": true,
          "crossDomain": true,
          "url": "API/manager.php",
          "method": "POST",
          "headers": {},
          "processData": false,
          "contentType": false,
          "mimeType": "multipart/form-data",
          "data": form
      };


      axios(settings).then(response => {
        console.log(response.data.data)
        if (response.data.status) {
            this.users = response.data.data;
        }
    }).catch(error => {
        console.log(error);
    });
    
    }
    }
});