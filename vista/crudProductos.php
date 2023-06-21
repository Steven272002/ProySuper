    <?php 
    include_once "../funciones/funciones.php";
    $datos=getAllProductos()
    ?>
    <?php 
    include_once "head.php";
    ?>
<h3>PRODUCTOS DISPONIBLES :)</h3> 
<a  href="nuevop.php" class="btn btn-success"> NUEVO</a>
<hr>
<table class="table table-dark">
  <thead>
    <th scope ="col"> ID </th>
    <th scope ="col"> Descripcion </th>
    <th scope ="col"> Costo </th>
    <th scope ="col"> Marca </th>
    <th scope ="col"> Categoria </th>
    <th scope ="col"> Azucar </th>
    <th scope ="col"> IVA </th>
    <th scope ="col"> Imagen </th>
    <th scope ="col"> Acciones </th>
  </thead>
  <tbody>

    <?php 
    if($datos != null ){
      foreach($datos as $indice => $fila ){   // inicio funcion
    ?>

    <tr>
      
      <th scope="row"><?php echo $fila['id_prod'] ;?> </th>
      <td><?php echo $fila['prod_desc'] ;?> </td>
      <td><?php echo $fila['prod_precio_c'] ; ?> </td>
      <td><?php echo $fila['mar_id'] ; ?></td>
      <td><?php echo $fila['cat_id'] ; ?></td>
      <td><?php echo $fila['prod_nivel_azucar'] ; ?></td>
      <td><?php echo $fila['prod_aplica_iva'] ; ?></td>
      <td>
        <img src="../imagen/<?php echo $fila['prod_imagen'];?>" alt="50" width="50">
      </td>

      <td>
        <a href="" class="btn btn-success">Ver</a>
        <a href="" class="btn btn-primary">Editar</a>
        <a href="" class="btn btn-danger">Eliminar</a>
      </td>
    </tr>

    <?php 
      }
    }             // fin funcion 
    ?>

  </tbody>
</table>

    <?php 
    include_once "footer.php";
    ?>