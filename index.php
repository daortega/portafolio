  <!-- llamado a los metadatos del header, los saqué para reducir líneas -->
<?php include('header.php');?>

<body id="page-top" class="index">

    <!-- Navigation, ya estaba -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"> Denisse Ortega </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Enfoques</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Portafolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Sobre mí</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>

        <div class="container">

            <div class="intro-text">
                <div class="intro-lead-in">Bienvenido a mi</div>
                <div class="intro-heading">Portafolio</div>
                <a href="#portfolio" class="page-scroll btn btn-xl">Ver Proyectos</a>
            </div>
        </div>
    </header>

    <!-- Enfoques de trabajo -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Enfoques</h2>
                    <h3 class="section-subheading text-muted"> Como trabajo en varias areas, les dejo algunas de mayor interés para mi.</h3>
                </div>
            </div>
              <!-- Cambié algunos iconos, aunque no sean tan representativos -->
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-cogs fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Industrial</h4>
                    <p class="text-muted"> Pensado desde lo digital y analógico: modelado 3D en programas, fabricación con herramientas digitales, trabajos en madera. </p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Digital</h4>
                    <p class="text-muted"> Aquí me refiero desde trabajo en Web hasta Visualización de Datos por medio de programas. Puede ir ligado al mundo industrial o gráfico.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-pencil-square-o fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Gráfico</h4>
                    <p class="text-muted"> Si bien lo aplico más en fotomontajes, también hago dibujo vectorial, tarjetas, afiches, presentaciones, etc. No lo considero tanto mi fuerte. </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section, venía así, pero le añadí php  -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Portafolio</h2>
                    <h3 class="section-subheading text-muted"> Estos son algunos de mis proyectos más recientes. </h3>
                </div>
            </div>

            <div class="row">
                <!-- esto lo modifiqué yo para poder subir mis proyectos a futuro de forma más rápida -->
                <?php
                $blog = array_map('str_getcsv', file('img/portfolio/portfolio.csv'));
                array_walk($blog, function(&$a) use ($blog) {$a = array_combine($blog[0], $a);});
                array_shift($blog);
                $all = count($blog);
                for($n=0; $n < $all; $n++){?>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a href="#<?php echo($blog[$n]["modal"])?>" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src=<?php echo($blog[$n]["src"])?> class="img-responsive" alt="<?php echo($blog[$n]["alt"])?>">
                        </a>
                        <div class="portfolio-caption">
                          <h4><?php echo($blog[$n]["nombre"])?></h4>
                          <p><?php echo($blog[$n]["categoria"])?></p>

                        </div>
                    </div>
                <?php };?>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Sobre mí</h2>
                    <h3 class="section-subheading text-muted"> Estudiante de Diseño que busca práctica profesional. </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">

                    <ul class="timeline">
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/2.jpg" alt="fotografía Diseño UC">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2013 - 2017</h4>
                                    <h4 class="subheading">Diseño Integral</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Pontificia Universidad Católica de Chile.</p>
                                </div>
                            </div>
                        </li>

                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/4.jpg" alt="Buscando práctica de diseño">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2017</h4>
                                    <h4 class="subheading">Práctica de Oficina</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Actualmente estoy en búsqueda de un lugar donde hacer mi práctica de Diseño.</p>
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section/añadido -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contacto </h2>
                    <h3 class="section-subheading text-muted"> Escribe a continuación tus datos. Te responderé pronto.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                            <h4 class="section-heading"> Nombre <h4>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Su nombre *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <h4 class="section-heading">E-Mail <h4>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Su mail *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <h4 class="section-heading"> Teléfono <h4>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Su número de teléfono/celular *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <h4 class="section-heading"> Mensaje <h4>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Su mensaje *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Enviar Mensaje</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
              <div class="col-md-3">
                </div>
                <!-- Redes sociales, añadí más botones -->
                <div class="col-md-6">
                    <ul class="list-inline social-buttons">
                        <li><a href="https://www.linkedin.com/in/daortegav/"><i class="fa fa-linkedin"></i></a>
                        </li>
                        <li><a href="https://github.com/daortega"><i class="fa fa-github"></i></a>
                        </li>
                        <li><a href="https://vimeo.com/user33348516"><i class="fa fa-vimeo"></i></a>
                        </li>
                        <li><a href="https://www.instagram.com/daortegav/"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <span class="copyright"> daortega 2017</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->

    <!-- Los Modal del portafolio, que intervení con php también -->
    <?php
      $cont = array_map('str_getcsv', file('img/portfolio/portfolio.csv'));
      array_walk($cont, function(&$a) use ($cont) {$a = array_combine($cont[0], $a);});
      array_shift($cont);
      $all = count($cont);
      for($n=0; $n < $all; $n++){?>
        <div class="portfolio-modal modal fade" id="<?php echo($cont[$n]["modal"])?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">

                                    <!-- Detalles del proyecto -->
                                    <h2><?php echo($cont[$n]["nombre"])?></h2>
                                    <p class="item-intro text-muted"> Año: <?php echo($cont[$n]["year"])?> | Categoría: <?php echo($cont[$n]["categoria"])?></p>
                                    <img class="img-responsive img-centered" src=<?php echo($cont[$n]["src"])?> alt=<?php echo($cont[$n]["alt"])?>>
                                    <h4> Descripción </h4>
                                  <p><?php echo($cont[$n]["descripcion"])?></p>
                                    <div class="img-responsive img-centered"><?php echo($cont[$n]["src2"])?></div>
                                  <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php };?>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>
    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>
   <!-- Para la curva de p5 que añadí -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.11/p5.min.js"></script>

</body>
</html>
