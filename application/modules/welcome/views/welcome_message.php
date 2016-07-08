    <div id="all">

        <header>
            <!-- *** TOP ***
_________________________________________________________ -->
            <div id="top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-5 contact">               
                            <p class="hidden-md hidden-lg"><a href="#" data-animate-hover="pulse"><i class="fa fa-phone"></i></a>  <a href="#" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </p>
                        </div>
                        <div class="col-xs-7">
                            <div class="social">
                                <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </div>

                            <div class="login">
                                <?php if($this->ion_auth->logged_in()){
                                    $user= $this->ion_auth->user()->row();
                                    echo $user->username; ?>
                                    <a href="<?php echo base_url(); ?>auth/logout" ><i class="fa fa-sign-out"></i> <span class="hidden-xs text-uppercase">Salir</span></a>
                                     <?php }   
                                        else{ ?>

                                <a href="<?php echo base_url(); ?>auth/login" data-toggle="modal" data-target="#login-modal"><i class="fa fa-sign-in"></i> <span class="hidden-xs text-uppercase">Ingresar</span></a>
                                <a href="<?php echo base_url(); ?>auth/create_user" data-toggle="modal" data-target="#register-modal"><i class="fa fa-user"></i> <span class="hidden-xs text-uppercase">Registrar</span></a>
                                <?php  } ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- *** TOP END *** -->

            <!-- *** NAVBAR ***
    _________________________________________________________ -->

            <div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">

                <div class="navbar navbar-default yamm" role="navigation" id="navbar">

                    <div class="container">
                        <div class="navbar-header">

                            <a class="navbar-brand home" href="<?php echo base_url(); ?>">
                                <img src="<?php echo base_url(); ?>assets/img/logo2.png" alt="Serigrafia" class="hidden-xs hidden-sm">
                                <img src="<?php echo base_url(); ?>assets/img/logo2.png" alt="Serigrafia" class="visible-xs visible-sm"><span class="sr-only">Serigrafia</span>
                            </a>
                            <div class="navbar-buttons">
                                <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                                    <span class="sr-only">Toggle navigation</span>
                                    <i class="fa fa-align-justify"></i>
                                </button>
                            </div>
                        </div>
                        <!--/.navbar-header -->

                        <div class="navbar-collapse collapse" id="navigation">

                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown active">
                                    <a href="javascript: void(0)" class="">Inicio </a>                 
                                </li>
                                <li class="use-yamm yamm-fw">
                                    <a href="<?php echo base_url(); ?>/productos" class="">Productos</a>
                                </li>
                                <li class="use-yamm yamm-fw">
                                    <a href="<?php echo base_url(); ?>" class="">Productos en Blanco</a>
                                </li>
                               
                                <li class="use-yamm yamm-fw">
                                    <a href="<?php echo base_url(); ?>" class="">Articulos</a>
                                </li>
                                
                                <li class="dropdown">
                                    <a href="javascript: void(0)" class="">Contactanos</a>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->

                        <div class="collapse clearfix" id="search">
                            <form class="navbar-form" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </form>

                        </div>
                        <!--/.nav-collapse -->

                    </div>


                </div>
                <!-- /#navbar -->

            </div>

            <!-- *** NAVBAR END *** -->

        </header>

        <!-- *** LOGIN MODAL ***
_________________________________________________________ -->

        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="/auth/login" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email_modal" placeholder="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password_modal" placeholder="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-template-main"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="customer-register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                    </div>
                </div>
            </div>
        </div>

        <!-- *** LOGIN MODAL END *** -->

        <!-- *** Register MODAL ***
_________________________________________________________ -->
                 <div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content register-form">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="customer-orders.html" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email_modal" placeholder="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password_modal" placeholder="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-template-main"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="customer-register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                    </div>
                </div>
            </div>
        </div>

        <section>
            <!-- *** HOMEPAGE CAROUSEL ***
 _________________________________________________________ -->

            <div class="home-carousel">

                <div class="dark-mask"></div>

                <div class="container">
                    <div class="homepage owl-carousel">
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-5 right">
                                    <p>
                                        <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="">
                                    </p>
                                    <h1>Multipurpose responsive theme</h1>
                                    <p>Business. Corporate. Agency.
                                        <br />Portfolio. Blog. E-commerce.</p>
                                </div>
                                <div class="col-sm-7">
                                    <img class="img-responsive" src="<?php echo base_url(); ?>assets/img/template-homepage.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">

                                <div class="col-sm-7 text-center">
                                    <img class="img-responsive" src="<?php echo base_url(); ?>assets/img/template-mac.png" alt="">
                                </div>

                                <div class="col-sm-5">
                                    <h2>46 HTML pages full of features</h2>
                                    <ul class="list-style-none">
                                        <li>Sliders and carousels</li>
                                        <li>4 Header variations</li>
                                        <li>Google maps, Forms, Megamenu, CSS3 Animations and much more</li>
                                        <li>+ 11 extra pages showing template features</li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-5 right">
                                    <h1>Design</h1>
                                    <ul class="list-style-none">
                                        <li>Clean and elegant design</li>
                                        <li>Full width and boxed mode</li>
                                        <li>Easily readable Roboto font and awesome icons</li>
                                        <li>7 preprepared colour variations</li>
                                    </ul>
                                </div>
                                <div class="col-sm-7">
                                    <img class="img-responsive" src="<?php echo base_url(); ?>assets/img/template-easy-customize.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-7">
                                    <img class="img-responsive" src="<?php echo base_url(); ?>assets/img/template-easy-code.png" alt="">
                                </div>
                                <div class="col-sm-5">
                                    <h1>Easy to customize</h1>
                                    <ul class="list-style-none">
                                        <li>7 preprepared colour variations.</li>
                                        <li>Easily to change fonts</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.project owl-slider -->
                </div>
            </div>

            <!-- *** HOMEPAGE CAROUSEL END *** -->
        </section>

        <section class="bar background-white no-mb">
            <div class="container">
                <div class="col-md-12">
                    <div class="heading text-center">                        
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="team-member" data-animate="fadeInUp">
                                <div class="image">
                                    <a href="team-member.html">
                                        <img src="<?php echo base_url(); ?>assets/img/producto.jpg" alt="" class="img-responsive img-circle">
                                    </a>
                                </div>
                                <h3><a href="team-member.html">Prodctos Terminados</a></h3>
                                <!-- <p class="role">Founder</p> -->
                                <div class="text">
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                </div>
                            </div>
                            <!-- /.team-member -->
                        </div>
                        <div class="col-md-4 col-sm-4" data-animate="fadeInUp">
                            <div class="team-member">
                                <div class="image">
                                    <a href="team-member.html">
                                        <img src="<?php echo base_url(); ?>assets/img/producto_blanco.jpg" alt="" class="img-responsive img-circle">
                                    </a>
                                </div>
                                <h3><a href="team-member.html">Productos en Blanco</a></h3>
                                
                                <div class="text">
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                </div>
                            </div>
                            <!-- /.team-member -->
                        </div>
                        <div class="col-md-4 col-sm-4" data-animate="fadeInUp">
                            <div class="team-member">
                                <div class="image">
                                    <a href="team-member.html">
                                        <img src="<?php echo base_url(); ?>assets/img/articulo.jpg" alt="" class="img-responsive img-circle">
                                    </a>
                                </div>
                                <h3><a href="team-member.html">Articulos</a></h3>
                                
                                <div class="text">
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                </div>
                            </div>
                            <!-- /.team-member -->
                        </div>

                    </div>
                    <!-- /.row -->
                </div>
            </div>
        </section>

        <section class="bar background-image-fixed-2 no-mb color-white text-center">
            <div class="dark-mask"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="icon icon-lg"><i class="fa fa-building-o"></i>
                        </div>
                        <h1>Quienes somos</h1>
                        <p class="lead">We have prepared for you more than 40 different HTML pages, including 5 variations of homepage.</p>
                        <p class="text-center">
                            <a href="index.html" class="btn btn-template-transparent-black btn-lg">Conocenos</a>
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <section class="bar background-gray no-mb">
            <div class="container">
                <div class="row">
                    <div class="heading text-center">
                            <h2>Clientes</h2>
                        </div>
                    <div class="col-md-12">
                        <ul class="owl-carousel customers no-mb">
                            <li class="item">
                                <img src="<?php echo base_url(); ?>assets/img/customer-1.png" alt="" class="img-responsive">
                            </li>
                            <li class="item">
                                <img src="<?php echo base_url(); ?>assets/img/customer-2.png" alt="" class="img-responsive">
                            </li>
                            <li class="item">
                                <img src="<?php echo base_url(); ?>assets/img/customer-3.png" alt="" class="img-responsive">
                            </li>
                            <li class="item">
                                <img src="<?php echo base_url(); ?>assets/img/customer-4.png" alt="" class="img-responsive">
                            </li>
                            <li class="item">
                                <img src="<?php echo base_url(); ?>assets/img/customer-5.png" alt="" class="img-responsive">
                            </li>
                            <li class="item">
                                <img src="<?php echo base_url(); ?>assets/img/customer-6.png" alt="" class="img-responsive">
                            </li>
                        </ul>
                        <!-- /.owl-carousel -->
                    </div>

                </div>
            </div>
        </section>

                </div>

            </div>
            <!-- /.container -->
        </section>
        <!-- /.bar -->
      