<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./visual/CSS/styleregister.css">
    <link rel="shorcut icon" href="./visual/media/logos/logopage.ico">
    <title>Athenock- Contact Us</title>
</head>

<body>
    <section class="bg-custom">
        <div class="bg-image1 vh-100 ">
            <div class="card position-absolute top-50 start-50 translate-middle text-light margen-custom">
                <div class="row">
                    <div class="col-7 mt-4 ms-4">
                        <h5 class="card-title position-absolute">Contactanos</h5>
                        <p class="card-text position-relative mt-5">Puedes dejar cualquier sugerencia, problema o idea que quieras. ¡Os eschuchamos!</p>
                    </div>
                    <div class="col ms-2 mt-3 me-2">
                        <a href="./index.php" title="Volver a la página principal"><img src="./visual/media/logos/logologin1.png" class="w-100 ms-auto my-auto position-relative rounded-circle"></a>
                    </div>
                </div>
                <form action="https://formspree.io/f/xdobydvp" method="POST">
                <div class="card-body mt-4">
                    <label for="exampleFormControlInput1" class="form-label ">Nombre de usuario</label>
                    <input type="text" class="form-control alt mb-4" placeholder="nombre de usuario" name="nombre" required>
                    <label for="exampleFormControlInput1" class="form-label ">Correo electrónico</label>
                    <input type="email" class="form-control alt" placeholder="name@example.com" name="email" required>
                    <label for="exampleFormControlInput1" class="form-label mt-4">Cuentanos lo que quieras, Somos todo oidos</label>
                    <input type="text-box" class="form-control alt" placeholder=":)" name="message" required>
                </div>
                <div class="d-grid gap-2 mt-4 border-2 rounded">
                    <button class="btn btn-success color-custom alt wid">Enviar</button>
                </div>
                </form>
                <div class="mt-4 text-center mb-3 ">
                    
                </div>
            </div>
        </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>