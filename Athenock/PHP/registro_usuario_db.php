<?php 

include 'conexion_lrdb.php';

$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$password=$_POST['password'];

$query= "INSERT INTO usuarios (nombre, correo, password) VALUES ('$nombre', '$correo', '$password')";

        


$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo "
    <script>
    alert('El usuario se registró correctamente');
    window.location = '../index.php';
    </script>";
}else{
    echo "
    <script>
    alert('El usuario no se ha podido registrar, intentelo de nuevo');
    window.location = './register.php';
    </script>";
}




msqli_close($conexion);
?>
            