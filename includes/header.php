<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App</title>
    <link rel="icon" type="image/png" href="https://i.blogs.es/82a22b/fbca226b-3a49-4aa4-9351-31dd115780bb/450_1000.png" />
   
    <!-- CSS CDN Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font awesome-->
    <script src="https://kit.fontawesome.com/49ed8bbad3.js" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a href="index.php" class="navbar-brand">Artículos App - <?php echo $_SESSION['usuario'] ?></a>
    
    <ul class="navbar-nav ml-auto">
        <form class="form-inline my-2 my-lg-0">
        <input type="search" id="search" class="form-control mr-sm-2" placeholder="Buscar un artículo">
        <button class="btn btn-danger my-2 my-sm-0" type="submit"> Buscar</button>
        </form>
    </ul>
    </div>
</nav>