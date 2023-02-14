<?php
   include 'conexion_lrdb.php';

if (isset($_POST['subir'])) {
   $archivo = $_FILES['archivo']['name'];
   if (isset($archivo) && $archivo != "") {
      $tipo = $_FILES['archivo']['type'];
      $tamano = $_FILES['archivo']['size'];
      $temp = $_FILES['archivo']['tmp_name'];
     if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000000))) {
        echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
        - Se permiten archivos .gif, .jpg, .png.</b></div>';
     }
     else {
        if (move_uploaded_file($temp, 'images/'.$archivo)) {
            echo '<div><b>Se ha subido correctamente la imagen.</b></div>';
        }
        else {
           echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
        }
      }
   }
}
$nombre=$_POST['nombre'];
$dificultad=$_POST['dificultad'];
$estado=$_POST['estado'];
$acceso=$_POST['acceso'];
$peligros=$_POST['peligros'];
$descripcion=$_POST['descripcion'];
$localizacion=$_POST['localizacion'];
$latitud=$_POST['latitud'];
$longitud=$_POST['longitud'];
$foto_portada = $_FILES['name'];
$fotos = $_FILES['name'];

$query= "INSERT INTO lugares VALUES ('$foto_portada', '$nombre', '$dificultad', '$localizacion', '$latitud', '$longitud', '$estado', '$acceso', '$peligros', '$descripcion')";

$query2= "INSERT INTO fotos_lugares VALUES ('$fotos', $_GET['cod_lugar'])";

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo "
    <script>
    alert('El lugar se registró correctamente');
    window.location = './subir_lugar.php';
    </script>";
}else{
    echo "
    <script>
    alert('El lugar no se ha podido registrar, intentelo de nuevo');
    window.location = './subir_lugar.php';
    </script>";
}


msqli_close($conexion);
?>