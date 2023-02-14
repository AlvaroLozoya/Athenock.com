<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./visual/CSS/style.css">
    <link rel="shorcut icon" href="./visual/media/logos/logopage.ico">
    <title>Athenock</title>
</head>

<body>
    <section class="vh-100 bg-custom">
        <section>
            <?php
                session_start();
                
                if(isset($_SESSION['nombre'])){
                    include './PHP/navbarlogin.php';
                }
                else{
                    include './PHP/navbarlogout.php';
                }                       
            ?>
        </section>
        <section class="aboutUs text-center shadow">
            <div class=" mb-5">
                <div class="row mb-5 down m-0"></div>
                <div class="row m-0 ">
                    <div class="col"></div>
                    <div class="col-6 text-light">
                        <h2 class="fs-1"><b>Explora un amplio mundo desconocido</b></h2>
                    </div>
                    <div class="col"></div>
                </div>
                <div class="row m-0 mt-4">
                    <div class="col"></div>
                    <div class="col-6 text-light">
                        <p class="fs-3 mt-2 mb-5">¿Te gusta explorar?, ¿Descubrir?, ¿Visitar lugares abandonados?, ¿Hacer Urbex?, ¿patinar?, ¿El arte urbano?. Aqui puedes encontrar todo lo que estas buscando</p>
                    </div>
                    <div class="col"></div>
                </div>
                <div class="row down m-0"></div>
            </div>
            </div>
        </section>
        <section class="vh-100 bg-custom mt-5">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="carousel-1 mx-auto rounded carousel-s1">
                            <div class="row text-light animated animatedUp">
                                <div class="text-center mt-5">
                                    <h2 class="fs-1"><b>URBEX</b></h2>
                                </div>
                                <div class="row">
                                    <div class="text-center">
                                        <p class="fs-5 mt-2 ">¿Te gustaria explorar lugares que la gente no suele visitar y explorar?</p>
                                    </div>
                                </div>
                                <div class="row mt-3 mb-5">
                                    <div class="text-center mx-3">
                                        <a href="./abandonos.php"><button type="button" class="btn btn-light btn-lg mb-5"><b class="fs-6">¡¡Quiero explorar!!</b></button></a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item animatedDown">
                        <div class="carousel-2 mx-auto rounded">
                            <div class="row text-light animated animatedUp">
                                <div class="text-center mt-5">
                                    <h2 class="fs-1"><b>SPOTS</b></h2>
                                </div>
                                <div class="row">
                                    <div class="text-center">
                                        <p class="fs-5 mt-2 ">¿Te gustaria encontrar unos buenos spots para patinar?</p>
                                    </div>
                                </div>
                                <div class="row mt-3 mb-5">
                                    <div class="text-center mx-3">
                                        <a href="./abandonos.php"><button type="button" class="btn btn-light btn-lg mb-5"><b class="fs-6">¡¡Quiero spots!!</b></button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   <div class="carousel-item animatedDown">
                        <div class="carousel-3 mx-auto rounded">
                            <div class="row text-light animated animatedUp">
                                <div class="text-center mt-5">
                                    <h2 class="fs-1"><b>CONTACTANOS</b></h2>
                                </div>
                                <div class="row">
                                    <div class="text-center">
                                        <p class="fs-5 mt-2 ">Cualquier idea, sugerencia, lo que quieras. Te estamos escuchando.</p>
                                    </div>
                                </div>
                                <div class="row mt-3 mb-5">
                                    <div class="text-center mx-3">
                                        <a href="./abandonos.php"><button type="button" class="btn btn-light btn-lg mb-5"><b class="fs-6">¡¡Contactanos!!</b></button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <section class="info bg-custom margen-superior">
            <div class="backpage1 rounded"></div>
                <div class="text-center">
                    <div class="row down m-0"></div>                            
                        <div class="row m-0 mt-4">
                            <div class="col"></div>
                            <div class="col-8 text-light">
                                <p class="fs-3 mt-2 mb-5">Descubre increibles lugares donde la gente no suele estar nunca. Recuerda que cuando visitas un sitio hay que tener cuidado y fijarse bien en todo debido a que normalmente los lugares estan abandonados por lo que no puedes saber exactamente si algo se puede romper o puedes tener algun accidente.</p>
                            </div>
                            <div class="col"></div>
                        </div>
                        <div class="row down m-0"></div>
                    </div>                   
                </div>
            <div class="backpage2 rounded"></div>
                <div class="text-center">
                    <div class="row down m-0"></div>                            
                        <div class="row m-0 mt-4">
                            <div class="col"></div>
                            <div class="col-6 text-light">
                                <p class="fs-3 mt-2 mb-5">Descubre nuevos spots para patinar. ¿Modalidad, tipo? Aquí puedes encontrar lo que buscas (skaters/scooters/rollers/bikers) todos cuelgan sus spots de street o de skatepark para mantenerse activos y visitan otros spots. (Recuerda siempre respetar los lugares.)</p>
                            </div>
                            <div class="col"></div>
                        </div>
                        <div class="row down m-0"></div>
                    </div>                   
                </div>
            <div class="backpage3 rounded"></div>
                <div class="text-center">
                    <div class="row down m-0"></div>                            
                        <div class="row m-0 mt-4">
                            <div class="col"></div>
                            <div class="col-6 text-light">
                                <p class="fs-3 mt-2 mb-5">Aunque no mucha gente haga urbex o patine siempre puedes encontrar gente nueva con la que puedes compartir el tiempo y los hobbys ademas siempre es bueno hacer nuevos amigos.</p>
                            </div>
                            <div class="col"></div>
                        </div>
                        <div class="row down m-0"></div>
                    </div>                   
                </div>
            <div class="backpage4 rounded"></div>
                <div class="text-center">
                    <div class="row down m-0"></div>                            
                        <div class="row m-0 mt-4">
                            <div class="col"></div>
                            <div class="col-6 text-light">
                                <p class="fs-3 mt-2 mb-5">Haz lo que te haga feliz y aunque debes tener cuidado no olvides divertirte :)</p>
                            </div>
                            <div class="col"></div>
                        </div>
                        <div class="row down m-0"></div>
                    </div>                   
                </div>
            <p class="text-light">Athenock.com © 2022-2023</p>
        </section>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>


</html>