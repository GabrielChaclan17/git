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
    <link rel="shortcut icon" href="./img/pagmate.png" />
    <title>Matematicas | Help for students</title>
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
    
<!--Card Bienvenido-->
<div class="nosotros">
<div class="card mb-3" style="max-width: 100%;">
  <div class="row g-0">
    <div class="col-md-4">
      <div class="foto">
      <img src="./img/math.png" width="299" height="340" alt="Imagen no encontrada">
    </div>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <b><h5 class="titulo">¡Bienvenido a la Sección de Matematicas!</h5></b>
        <p class="texto">Querido estudiante, bienvenido a la sección de Matematicas, esa materia
          que muchas veces es nuestra pesadilla; Pero ¿Adivina qué? ¡Hay Solución para esas tareas! Si, 
          asi como lo haz leído, si hay manera de hacer mas fácil esas tareas y estamos aca para ayudarte!
        </p>

        <p class="texto">Queremos que dejes de sufrir en esta materia y te traemos unos cursos, tutoriales y algunas
          paginas/sitio web que te facilitarán tu vida en esta materia, ¡Disfruta de ella!
        </p>
        <p class="peque"><small class="text-muted">¡A Salvar el Semestre!</small></p>
      </div>
    </div>
  </div>
</div>
</div>


<!-- Tarjetas Paginas -->
<section class="container">
<div class="cardpage">
        <div class="card" style="width: 17rem;">
            <img src="./img/mathsolver.png" style="width: 100%;"class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Math Solver</h5>
              <p class="card-text">Obtén soluciones paso a paso a tus problemas matemáticos</p>
              <a href="https://math.microsoft.com/es" class="btn btn-outline-success">¡Vamos!</a>
            </div>
          </div>
        <div class="card" style="width: 17rem;">
            <img src="./img/cymath.png" style="width: 100%;"class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Cymath</h5>
              <p class="card-text">Es una aplicación que nos permitirá resolver problemas matemáticos de forma automática</p>
              <a href="https://www.cymath.com/sp/" class="btn btn-outline-success">¡Vamos!</a>
            </div>
          </div>
        <div class="card" style="width: 17rem;">
            <img src="./img/symbolab.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Symbolab</h5>
              <p class="card-text">Es un servicio en línea que 
                calcula soluciones paso a paso aproblemas matemáticos 
                en una variedad de materias</p>
              <a href="https://es.symbolab.com" class="btn btn-outline-success">¡Vamos!</a>
            </div>
          </div>
          <div class="card" style="width: 17rem;">
            <img src="./img/geogebra.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Geogebra</h5>
              <p class="card-text">GeoGebra es un software de matemáticas, Fisica, Quimica; su especialidad es Algebra</p>
              <a href="https://www.geogebra.org" class="btn btn-outline-success">¡Vamos!</a>
            </div>
          </div>
          <div class="card" style="width: 17rem;">
            <img src="./img/sangaku.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Sangaku Maths</h5>
              <p class="card-text">Teoría y ejercicios de matemáticas para secundaria, bachillerato y 
                primeros cursos de carreras técnicas</p>
              <a href="https://www.sangakoo.com" class="btn btn-outline-success">¡Vamos!</a>
            </div>
          </div>
          <div class="card" style="width: 17rem;">
            <img src="./img/mathway.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Mathway</h5>
              <p class="card-text">Mathway ofrece a estudiantes las herramientas que necesitan 
                para entender y resolver sus problemas de matemáticas.</p>
              <a href="https://www.mathway.com/es/Algebra" class="btn btn-outline-success">¡Vamos!</a>
            </div>
          </div>
          <div class="card" style="width: 17rem;">
            <img src="./img/wolfram.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Wolfram</h5>
              <p class="card-text">Servicio en línea que responde a las preguntas directamente, 
                mediante el procesamiento de la respuesta</p>
              <a href="https://www.wolframalpha.com" class="btn btn-outline-success">¡Vamos!</a>
            </div>
          </div>
          <div class="card" style="width: 17rem;">
            <img src="./img/mathpapa.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">MathPapa</h5>
              <p class="card-text">Calculadora algebraica que resuelve operaciones algebraicas, ecuaciones, 
                sistema de ecuaciones, inecuaciones, etc.. </p>
              <a href="https://www.mathpapa.com/algebra-calculator.html" class="btn btn-outline-success">¡Vamos!</a>
            </div>
          </div>
          <div class="card" style="width: 17rem;">
            <img src="./img/desarrollando.gif" style="width: 100%;"class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">En Desarrollo...</h5>
              <p class="card-text">Descripcion no disponible</p>
              <a href="#" class="btn btn-outline-success">Proximamente</a>
            </div>
          </div>
          <div class="card" style="width: 17rem;">
            <img src="./img/desarrollando.gif" style="width: 100%;"class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">En Desarrollo...</h5>
              <p class="card-text">Descripcion no disponible</p>
              <a href="#" class="btn btn-outline-success">Proximamente</a>
            </div>
          </div>
          <div class="card" style="width: 17rem;">
            <img src="./img/desarrollando.gif" style="width: 100%;"class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">En Desarrollo...</h5>
              <p class="card-text">Descripcion no disponible</p>
              <a href="#" class="btn btn-outline-success">Proximamente</a>
            </div>
          </div>
          <div class="card" style="width: 17rem;">
            <img src="./img/desarrollando.gif" style="width: 100%;"class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">En Desarrollo...</h5>
              <p class="card-text">Descripcion no disponible</p>
              <a href="#" class="btn btn-outline-success">Proximamente</a>
            </div>
          </div>


          
        </div>
</section>

<section class="container">
  <div class="cardpage">
          <div class="card" style="width: 17rem;">
              <img src="./img/desarrollando.gif" style="width: 100%;"class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Math Solver</h5>
                <p class="card-text">Obtén soluciones paso a paso a tus problemas matemáticos</p>
                <a href="https://math.microsoft.com/es" class="btn btn-outline-success">¡Vamos!</a>
              </div>
            </div>
          <div class="card" style="width: 17rem;">
              <img src="./img/desarrollando.gif" style="width: 100%;"class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">En Desarrollo...</h5>
                <p class="card-text">Descripcion no disponible</p>
                <a href="#" class="btn btn-outline-success">Proximamente</a>
              </div>
            </div>
            <div class="card" style="width: 17rem;">
              <img src="./img/desarrollando.gif" style="width: 100%;"class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">En Desarrollo...</h5>
                <p class="card-text">Descripcion no disponible</p>
                <a href="#" class="btn btn-outline-success">Proximamente</a>
              </div>
            </div>
            <div class="card" style="width: 17rem;">
              <img src="./img/desarrollando.gif" style="width: 100%;"class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">En Desarrollo...</h5>
                <p class="card-text">Descripcion no disponible</p>
                <a href="#" class="btn btn-outline-success">Proximamente</a>
              </div>
            </div>
            <div class="card" style="width: 17rem;">
              <img src="./img/desarrollando.gif" style="width: 100%;"class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">En Desarrollo...</h5>
                <p class="card-text">Descripcion no disponible</p>
                <a href="#" class="btn btn-outline-success">Proximamente</a>
              </div>
            </div>
            <div class="card" style="width: 17rem;">
              <img src="./img/desarrollando.gif" style="width: 100%;"class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">En Desarrollo...</h5>
                <p class="card-text">Descripcion no disponible</p>
                <a href="#" class="btn btn-outline-success">Proximamente</a>
              </div>
            </div>
            <div class="card" style="width: 17rem;">
              <img src="./img/desarrollando.gif" style="width: 100%;"class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">En Desarrollo...</h5>
                <p class="card-text">Descripcion no disponible</p>
                <a href="#" class="btn btn-outline-success">Proximamente</a>
              </div>
            </div>
            <div class="card" style="width: 17rem;">
              <img src="./img/desarrollando.gif" style="width: 100%;"class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">En Desarrollo...</h5>
                <p class="card-text">Descripcion no disponible</p>
                <a href="#" class="btn btn-outline-success">Proximamente</a>
              </div>
            </div>
            <div class="card" style="width: 17rem;">
              <img src="./img/desarrollando.gif" style="width: 100%;"class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">En Desarrollo...</h5>
                <p class="card-text">Descripcion no disponible</p>
                <a href="#" class="btn btn-outline-success">Proximamente</a>
              </div>
            </div>
            <div class="card" style="width: 17rem;">
              <img src="./img/desarrollando.gif" style="width: 100%;"class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">En Desarrollo...</h5>
                <p class="card-text">Descripcion no disponible</p>
                <a href="#" class="btn btn-outline-success">Proximamente</a>
              </div>
            </div>
            <div class="card" style="width: 17rem;">
              <img src="./img/desarrollando.gif" style="width: 100%;"class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">En Desarrollo...</h5>
                <p class="card-text">Descripcion no disponible</p>
                <a href="#" class="btn btn-outline-success">Proximamente</a>
              </div>
            </div>
            <div class="card" style="width: 17rem;">
              <img src="./img/desarrollando.gif" style="width: 100%;"class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">En Desarrollo...</h5>
                <p class="card-text">Descripcion no disponible</p>
                <a href="#" class="btn btn-outline-success">Proximamente</a>
              </div>
            </div>
 </section>

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
                        <a href="">Informacion Compañia</a> | <a href="">Privacion y Politica</a> | <a href="">Terminos y Condiciones</a>
                    </div>
                </div>

            </div>
        
    </footer>


</body>
</html>