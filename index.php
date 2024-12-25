<!-- CRUD = Create(function in laravel store), Read(index), Update, Delete, show (get by id) -->
<!-- Form submit with js -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form>
        <!-- $_GET AND $_POST -->
        <div class="">
            <label for="name">name:</label>
            <input type="text" name="name" id="name">
        </div>
        <div class="">
            <label for="price">price:</label>
            <input type="number" name="price" id="price">
        </div>
        <button type="button" onclick="store(event)">Submit</button>
    </form>

    <script src="./assets/js/axios.min.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>