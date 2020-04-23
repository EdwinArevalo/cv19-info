<?php 
    include("db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM articulos WHERE id = '$id' ";
        $result = mysqli_query($conn,$query);
        //if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            
        //}
    }

    if(isset($_POST['update'])){
        $id = $_GET['id'];
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];

        $query = "UPDATE articulos set nombre = '$nombre', precio = $precio, stock = $stock WHERE id = $id ";
        mysqli_query($conn, $query);
        $_SESSION['message'] = 'Artículo actualizado satisfactoriamente';
        $_SESSION['message_type'] = 'warning';
        header("Location: index.php");

    }


?>

<?php include('includes/header.php');?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit.php?id=<?= $_GET['id']?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre" value="<?= $row['nombre'] ?>" class="form-control" placeholder="Actualizar nombre">
                    </div>
                    <div class="form-group">
                        <input name="precio" class="form-control" value="<?= $row['precio']?>" placeholder="Actualizar precio">
                    </div>
                    <div class="form-group">
                        <input name="stock" class="form-control" value="<?= $row['stock']?>" placeholder="Actualizar stock">
                    </div>
                    <button class="btn btn-success btn-block" name="update">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
</div>



<?php include('includes/footer.php');?>