<?php
include_once "../config/conectar.php";
//RETORNA UNA LISTA (VARIOS REGISTROS)
function getAllProductos()
{
  try {
    $sql = "SELECT * FROM tab_productos
            ORDER BY prod_desc";
    $conexion = conectaBaseDatos();
    $stmt = $conexion->prepare($sql);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
      $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $lista;
    } else
      return null;
  } catch (PDOException $e) {
    echo $e->getMessage();
    return null;
  }
}
?>