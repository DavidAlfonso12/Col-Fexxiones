<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center mb-5">Mis Productos</h1>
    <section class="container row m-auto">
      <!-- Formulario para el registro de productos -->
      
        <div class="col-lg-4 mt-5">
            <form  action="php/productos/AgregarProducto.php" method="POST">
                <div class="mb-3 mt-5">
                  <label for="exampleInputEmail1" class="form-label">Nombre producto</label>
                  <input type="text" class="form-control" name="nombreProducto" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Cantidad disponible</label>
                  <input type="number" class="form-control" name="cantidadDisponible">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Precio</label>
                    <input type="number" class="form-control" name="precio">
                  </div>
                  <div class="mb-3">
                      <label for="" class="mb-2">Seleccione una categoria</label>
                      <select class="form-select mb-3" aria-label="Default select example" name="categoria">
                        <option selected >Categoria</option>
                        <?php
                          include("php/login/conexion.php");

                          $sql = $link -> query("SELECT * FROM categorias");
                          while ($resultado = $sql->fetch_assoc()){
                            echo "<option value='".$resultado['categoria_id']."'>".$resultado['cat_nombre']."</option>";
                          }
                        ?>
                      </select>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Carge una foto del producto</label>
                    <input type="file" class="form-control" name="fotoProducto">
                  </div>
                  <div class="mb-3">
                    <label for="" class="mb-2">Seleccione el estado de su producto</label>
                    <select class="form-select mb-3" aria-label="Default select example" name="estadoProducto">
                      <option selected >Estado</option>
                      <option value="1">Disponible</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Descripcion</label>
                    <textarea class="form-control" name="descripcionProd"></textarea>
                  </div>  
                <button type="submit" class="btn btn-primary mt-3">Registrar</button>
              </form>
        </div>



        <!-- Tabla de productos en la base de datos -->
        <div class="col-lg-8 mt-5">
            <table class="table table-striped mt-5">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre Producto</th>
                    <th scope="col">Precio</th>
                    <th scope="col">cantidad disponible</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
        </div>
    </section>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>