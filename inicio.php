<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="./img/inicio.png" />
    <title>Inicio | Help for students</title>
</head>

<body>
<!--No entrar sin Login-->
<?php
session_start();
if(!isset($_SESSION["nombre"])){
  header("location:index.html");
}

?>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="./img/help.png" title="Help for Students" alt="" width="90" height="90" class="d-inline-block align-text-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="inicio.php">Help for students |</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Matematica.php">Matematicas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Lenguaje.php">Lenguaje</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Biologia.php">Biologia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Fundamental.php">Fisica Fundamental</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Quimica.php">Quimica</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="cursos.php">CURSOS</a>
        </li>
        <li class="nav-item">
        <a href="cerrar.php">
            <button type="button" class="btn btn-outline-danger">Cerrar Sesion</button>
            </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    
<!--Carroussel-->
<div class="carouseltodo">
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="./img/Carousel1.jpg" class="d-block w-100" alt="No se encontro la imagen">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="./img/Carousel2.jpg" class="d-block w-100" alt="No se encontro la imagen">
    </div>
    <div class="carousel-item">
      <img src="./img/Carousel3.jpg" class="d-block w-100" alt="No se encontro la imagen">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

<!--Card Bienvenido-->
<div class="nosotros">
<div class="card mb-3" style="max-width: 100%;">
  <div class="row g-0">
    <div class="col-md-4">
      <div class="foto">
      <img src="./img/prueba.jpg" width="300" height="350" alt="Imagen no encontrada">
    </div>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <b><h5 class="titulo">¡Bienvenido!</h5></b>
        <p class="texto">Hola estudiante, bienvenido a HELP FOR STUDENTS, es un sitio web que ha 
          recopilado toda plataforma y/o sitio web para facilitar tus tareas. Aca encontrarás plataformas 
          para Matematica, Comunicación y lenguaje, Fisica Fundamental, Biologia, Quimica, Entre otras. 
          Actualmente aun seguimos trabajando para seguir recopilando y actualizando las plataformas que 
          encontrarás aca!</p>

        <p class="texto">¿Estás de exámenes? Es el momento de mantener la motivación bien alta, trabajar duro
           y buscar ayuda en HELP FOR STUDENTS! "Confía en ti mismo sin importar los que los demás piensen. Arnold Schwarzenegger"</p>
        <p class="peque"><small class="text-muted">¡A Salvar el Semestre!</small></p>
      </div>
    </div>
  </div>
</div>
</div>

  <!-- Card Mision, Vision, Desarrollador-->
  <div class="cardpageindex">
    <div class="card" style="width: 18rem;">
        <img src="./img/mision.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Mision</h5>
          <p class="card-text">Nuestra mision es hacer una pagina web agradable, accesible, entendible y sobre todo
            capaz de ayudar a las personas que necesitan (Reforazamiento o Ayuda) en las distintas areas o cursos del grado
            donde se encuentre.</p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="img/foto.jpg" class="formal" alt="...">
        <div class="card-body">
          <h5 class="card-title">Desarrollador</h5>
          <p class="card-text">¡Hola! Soy Job Gabriel José Chaclán Velásquez, Estudiante de 
                      Bachillerato en Computación Científica, Tengo 17 años de edad, Resido en
                      San Antonio Suchitepequez del Departamento de Suchitepequez.</p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="./img/vision.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Vision</h5>
          <p class="card-text">Nuestra Vision es llegar a todo estudiante, sea cual sea su edad, tambien entregarle
            la ayuda necesaria, personalizada, segura y eficaz en todas las areas posibles. Tambien innovar cada dia,
            expandiendo nuestro catalogo de cursos y aplicaciones para ayuda.</p>
        </div>
</div>

  <!--Contactanos-->
  <div class="contacto-index">
  <h2>Contactanos</h2>
  <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Nombre Completo</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nombre Completo">
    </div>

    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Correo Electronico</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>

    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Asunto</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

   <div class="boton">
    <button type="button" class="btn btn-outline-primary">Enviar</button>
  </div>
  <h6>NOTA: Este contacto aun no esta funcionando, contactame mediante mis Redes Sociales.</h6>
</div>

<!-- Footer -->
<footer>
       
       <div class="container-footer-all">
        
            <div class="container-body">

                <div class="colum1">
                    <h1>Informacion del Desarrollador</h1>

                    <p>¡Hola! Soy Job Gabriel José Chaclán Velásquez, Estudiante de 
                      Bachillerato en Computación Científica, Tengo 17 años de edad, Resido en
                      San Antonio Suchitepequez del Departamento de Suchitepequez. Al ser estudiante me di 
                      cuenta de una problematica muy comun y quise ayudar a colegas estudiantes a facilitarles el
                      hacer sus tareas, entonces me di la tarea de recopilar paginas, cursos, plataformas que nos ayuden 
                      como estudiantes al momento de realizar TAREAS. Cabe resaltar que simplemente es para ayudar y faciliatar,
                      no hay que olvidar que estudiar y prestar atención a las clases es de suma importancia.
                    </p>

                </div>

                <div class="colum2">

                    <h1>Redes Sociales</h1>

                    <div class="red">
                    <a href="https://www.facebook.com/elgambito14/"><img src="./img/facebook.png" title="Facebook"></a>
                       <label>Siguenos en Facebook</label>
                    </div>
                    <div class="red">
                    <a href="https://twitter.com/Gabo_Yt16"><img src="./img/twitter.png" title="Twitter"></a>
                        <label>Siguenos en Twitter</label>
                    </div>
                    <div class="red">
                    <a href="https://www.facebook.com/elgambito14/"><img src="./img/ig.png" title="Instagram"></a>
                       <label>Siguenos en Instagram</label>
                    </div>
                    <div class="red">
                    <a href="https://github.com/JobGabo"><img src="./img/github.png" title="Github"></a>
                        <label>Siguenos en Github</label>
                    </div>

                </div>

                <div class="colum3">

                    <h1>Informacion Contactos</h1>

                    <div class="red2">
                        <img src="./img/house.png" title="Domicilio">
                        <label>San Antonio Suchitepequez, Departamento de 
                          Suchitepequez | Ciudad de Guatemala | Centroamerica.
                        </label>
                    </div>

                    <div class="red2">
                        <img src="./img/smartphone.png" title="Telefono">
                        <label>+502 0000-0000</label>
                    </div>

                    <div class="red2">
                        <img src="./img/contact.png" title="Email">
                         <label>Glsuchitepequez@gmail.com</label>
                    </div>

                </div>

            </div>
        
        </div>
        
        <div class="container-footer">
               <div class="footer">
                    <div class="copyright">
                        © 2021 Todos los Derechos Reservados | <a href="">HELP FOR STUDENTS</a>
                    </div>

                    <div class="information">
                        <a href="#">Informacion Compañia</a> | <a href="#">Privacion y Politica</a> | <a href="#">Terminos y Condiciones</a>
                    </div>
                </div>

            </div>
        
    </footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>