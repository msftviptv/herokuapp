const axios = require('axios');

axios.get('https://config.e-droid.net/srv/config.php?v=197&vname=10.0.1&idapp=2792810&idusu=0&cod_g=&gp=1&am=0&idl=en&pa_env=1&pa=US&pn=app.arnewapp525.con&fus=010100000000&aid=952e48ba83e7e60b', {
  headers: {
    'User-Agent': 'Android Vinebre Software'
  }
})
.then(response => {
  console.log(response.data);
})
.catch(error => {
  console.error(error);
});
