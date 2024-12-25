function index() {
    // get, post, put, delete, 
    let url_dummy = "https://dummy-json.mock.beeceptor.com/companies"
    let url = "/route.api.php/products?id=1"
    // fetch(url).then((res) => {
    //     console.log(res.json());
    // })
    axios.get(url).then((res) => {
        console.log(res.data);
    })
}

function store(event) {
    event.preventDefault();
    let name = document.getElementById('name').value;
    let price = document.getElementById('price').value;

    let frmData = new FormData();
    frmData.append('name', name);
    frmData.append('price', price);

    axios.post('/route.api.php/products/store', frmData).then((res) => {
        console.log(res.data);
    });
}



index()