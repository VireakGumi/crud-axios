// relative path or absolute path
function get_products() {
  axios.get("/route.api.php/get.product").then((response) => {
    console.log(response.data);
  });
}
function getProductById(id) {
  axios.get(`/route.api.php/show.product?id=${id}`).then((response) => {
    console.log(response.data);
  })
}
get_products();
// getProductById(1);
