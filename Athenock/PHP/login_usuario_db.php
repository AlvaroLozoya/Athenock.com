<?php 

   session_start();
   include 'conexion_lrdb.php';

   $nombre=$_POST['nombre'];
   $password=$_POST['password'];


   $validar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nombre='$nombre' AND password='$password'");

   if(mysqli_num_rows($validar_usuario) > 0){
   	$_SESSION['nombre'] = $nombre;
   	 echo "
    <script>
    window.location = '../index.php';
    </script>";
    exit;
	}else{
    echo "
    <script>
    alert('Usuario o contraseña incorrectos');
    window.location = './login.php';
    </script>";
    exit;
	}
   



 ?>