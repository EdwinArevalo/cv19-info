<?php include('db.php');?>
<?php include('includes/header.php');?>
    
<div class="container p-4">
    <div class="row">
        <div class="col-md-4">

        <?php
            if(isset($_SESSION['message'])){ ?>

                <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message']?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

            <?php session_destroy(); } ?>


                <div class="card">
            <div class="card-header">
                        <h4>Añadir un artículo</h4>
                    </div>
            <div class="card card-body">
                <form action="save.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre" required autofocus>
                    </div>
                    <div class="form-group">
                        <input type="number" name="precio" class="form-control" placeholder="Precio" required autofocus>
                    </div>
                    <div class="form-group">
                        <input type="number" name="stock" class="form-control" placeholder="Stock" required autofocus>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="guardar_articulo" value="Guardar articulo">
                </form>
            
                </div>
            </div>

        </div>


        <div class="col-md-8">
        <div class="card my-4" id="articulo-resultado">
        <div class="card-body">
                <ul id="container"></ul>
        </div>
        <div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                
                <tbody>
                <?php
                        $query = "SELECT * FROM articulos";
                        $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_array($result)){ ?>
                    <tr>
                        <td><?= $row['nombre'] ?></td>
                        <td><?= $row['precio'] ?></td>
                        <td><?= $row['stock'] ?></td>
                        <td>
                            <a href="edit.php?id=<?= $row['id']?>" class="btn btn-secondary"> <i class="fas fa-marker"></i> </a>
                            <a href="remove.php?id=<?= $row['id']?>" class="btn btn-danger"> <i class="fas fa-calendar-times"></i> </a>
                        </td>
                    </tr>

                <?php } ?>
            
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include('includes/footer.php');?>


   