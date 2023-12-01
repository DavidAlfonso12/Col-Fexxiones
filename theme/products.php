<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/2ef78ff00d.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class="text-center mb-5">Mis Productos</h1>
    <section class="container row m-auto">
      <!-- Formulario para el registro de productos -->
      
        <div class="col-lg-4 mt-5" method="POST">
            <form method="post" active="php/productos/AgregarProducto.php">
                <div class="mb-3 mt-5">
                  <label for="exampleInputEmail1" class="form-label">Nombre producto</label>
                  <input type="text" class="form-control" name="ProductoNombre" aria-describedby="emailHelp">
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
                        <option value="1">Pantalones</option>
                        <option value="2">Camisetas</option>
                        <option value="3">Zapatos</option>
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
                <button type="submit" class="btn btn-primary mt-3" value="ok">Registrar</button>
              </form>
        </div>



        <!-- Tabla de productos en la base de datos -->
        <div class="col-lg-8 mt-5">
            <table class="table table-striped mt-5">
                <thead class="bg-info">
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre Producto</th>
                    <th scope="col">cantidad disponible</th>
                    <th scope="col">precio</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">imagen del producto</th>
                    <th scope="col">estado</th>
                    <th scope="col">descripcion</th>
                    <th scope="col">pro_fecha_registro</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  include "conexion.php";
                  $sql = $conexion->query(" select * from productos");
                  while ($datos = $sql->fetch_object()) { ?>
                    <tr>
                       
                       <td><?= $datos->producto_id ?></td>
                       <td><?= $datos->pro_nombre ?></td>
                       <td><?= $datos->pro_cant_disponible ?></td>
                       <td><?= $datos->pro_precio ?></td>
                       <td><?= $datos->pro_categoria ?></td>
                       <td><?= $datos->pro_imagen ?></td>
                       <td><?= $datos->pro_estado ?></td>
                       <td><?= $datos->pro_descripcion ?></td>
                       <td><?= $datos->pro_fecha_registro ?></td>
                       <td>
                          <a href="" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                          <a href="" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                       </td>
                     </tr>
                
                  
                  <?php }
                  ?>
                  
                  
                </tbody>
              </table>
        </div>
    </section>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>