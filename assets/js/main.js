// relative path or absolute path
function get_products() {
  axios.get("/route.api.php/get.product").then((response) => {
    console.log(response.data);
  });
}
get_products();
