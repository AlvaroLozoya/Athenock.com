<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../visual/CSS/stylesubir.css">
    <link rel="shorcut icon" href="../visual/media/logos/logopage.ico">
    <title>Athenock - Subir un lugar</title>
</head>

<body>
    <section class="bg-custom">
        <div class="bg-custom vh-100 ">
            <div class="card position-absolute top-50 start-50 translate-middle text-light margen-custom">
                <div class="row">
                    <div class="col-7 mt-4 ms-4">
                        <h5 class="card-title position-absolute">Subir un sitio</h5>
                        <p class="card-text position-relative mt-5">Por favor complete todos los campos para subir un sitio de forma correcta, si tienes un problema no dudes en <a href="../contactanos.php" class="color-custom1">contactarnos</a></p>
                    </div>
                    <div class="col ms-2 mt-3 me-2">
                        <a href="../index.php" title="Volver a la página principal"><img src="../visual/media/logos/logologin1.png" class="w-100 ms-auto my-auto position-relative rounded-circle"></a>
                    </div>
                </div>
                <form action="./subir_lugar_db.php" method="POST" type="POST" enctype="multipart/formdata" >
                    <div class="card-body mt-4">
                        <label for="exampleFormControlInput1" class="form-label ">Nombre del lugar</label>
                        <input type="text" class="form-control alt mb-4" placeholder="Ponle un nombre al lugar" name="nombre" required>
                        <label for="exampleFormControlInput1" class="form-label ">Dificultad</label>
                        <input type="text" class="form-control alt" placeholder="Dificultad de entrar y moverse por dentro" name="dificultad" required>
                        <label for="exampleFormControlInput1" class="form-label mt-4">Estado</label>
                        <input type="text" class="form-control alt" placeholder="Estado del lugar" name="estado" required>
                        <label for="exampleFormControlInput1" class="form-label mt-4">Acceso</label>
                        <input type="text" class="form-control alt" placeholder="Por donde se entra lugar" name="acceso" required>
                        <label for="exampleFormControlInput1" class="form-label mt-4">Peligros</label>
                        <input type="text" class="form-control alt" placeholder="Peligros del lugar" name="peligros" required>
                        <label for="exampleFormControlInput1" class="form-label mt-4">Descripción</label>
                        <input type="text" class="form-control alt" placeholder="Una descripción del lugar" name="descripcion" required>
                        <label for="exampleFormControlInput1" class="form-label mt-4">Foto de portada</label>
                        <input type="file" class="form-control alt" placeholder="foto" name="foto_portada" title="inserta una foto de portada">
                        <label for="exampleFormControlInput1" class="form-label mt-4">Fotos</label>
                        <input type="file" class="form-control alt" placeholder="fotos" name="fotos" title="inserta fotos del lugar">
                        <label for="exampleFormControlInput1" class="form-label mt-4">Localizacion</label>
                        <input type="text" class="form-control alt" placeholder="Una descripción del lugar" name="localizacion" required>
                        <label for="exampleFormControlInput1" class="form-label mt-4">latitud</label>
                        <input type="text" class="form-control alt" placeholder="Una descripción del lugar" name="latitud" required>
                        <label for="exampleFormControlInput1" class="form-label mt-4">longitud</label>
                        <input type="text" class="form-control alt" placeholder="Una descripción del lugar" name="longitud" required>  
                    </div>
                    <div class="d-grid gap-2 mt-4 border-2 rounded">
                        <a href="./PHP/upload-lugares.php">
                            <button class="btn btn-success color-custom alt wid" value="subir">Subir</button>
                        </a>
                    </div>
                </form>
                <div class="mt-4 text-center mb-3">
                    <small>¿Tienes algún problema? <a class="color-custom1" href="../contactanos.php">Contactanos ></a></small>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-custom v-cus">
        
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>