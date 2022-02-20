<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- JavaScript Alertify-->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <!-- CSS Alertify-->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Bootstrap theme Alertify-->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <title>Borrar Product</title>
</head>
<body>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="#" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link align-middle px-0"><span class="ms-1 d-none d-sm-inline">Home</span></a>
                    </li>
                    <li>
                        <a href="product.php" class="nav-link px-0 align-middle"><span class="ms-1 d-none d-sm-inline">Productos</span> </a>
                    </li>
                    <li>
                        <a href="add_product.php" class="nav-link px-0 align-middle"><span class="ms-1 d-none d-sm-inline">Agregar Producto</span></a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle"><span class="ms-1 d-none d-sm-inline">Eliminar producto</span> </a>
                    </li>
                </ul>
                <hr>
            </div>
        </div>
        <div class="col py-3">
            
        

        
        <div style="background-color:lightblue;padding:20px;">
            <h1 class="display-5">Eliminar Productos</h1>
        </div>
        <table class="table table-bordered table-striped" style="">
                <thead>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Existencias</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    <?php
                        $productos=simplexml_load_file('../productos.xml');
                        foreach($productos->producto as $row){
                     ?>
                    <tr>
                        <td><?=$row->codigo?></td>
                        <td><?=$row->nombre?></td>
                        <td><?=$row->existencias?></td>
                        <td>
                            <a href="#delete_<?=$row->codigo?>" class="btn btn-danger" data-toggle="modal">Borrar</a>    
                        </td>
                    </tr>
                    <?php  
                        include('borrar_modal.php');//modal para borrar xd
                        }//fin for each
                    ?>
                </tbody>
            </table>

        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</div>
</body>
</html>