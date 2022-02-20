<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Agregar Producto</title>
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
                        <a href="#" class="nav-link px-0 align-middle"><span class="ms-1 d-none d-sm-inline">Agregar Producto</span></a>
                    </li>
                    <li>
                        <a href="delete_product.php" class="nav-link px-0 align-middle"><span class="ms-1 d-none d-sm-inline">Eliminar producto</span> </a>
                    </li>
                </ul>
                <hr>
            </div>
        </div>
        <div class="col py-3">
            
        

        
        <div style="background-color:lightblue;padding:20px;">
            <h1 class="display-5">Agregar Producto</h1>
        </div>



        <div style="margin:30px;">
        <form method="POST" action="agregar.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="codigo">Codigo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="codigo" id="codigo">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="nombre">Nombre:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nombre" id="nombre">
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="categoria">Categoria:</label>
					</div>
					<div class="col-sm-10">
						<select type="text" class="form-control" name="categoria" id="categoria">
                            <option></option>
                            <option>Promocional</option>
                            <option>Textil</option>
                        </select>
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="descripcion">Descripcion:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="descripcion" id="descripcion">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="existencias">Existencias:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" min="0" step="1"  class="form-control" name="existencias" id="existencias">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="precio" >Precio:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" min="0.01" step="0.01" class="form-control" name="precio" id="precio">
					</div>
				</div>
                <div style="margin-top:50px;">
                    <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Agregar</a>
                </div>
            </form>
            
        </div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>


        </div>
    </div>
</div>
</body>
</html>