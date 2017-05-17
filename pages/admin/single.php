<div class="wrapper">
        <div class="sidebar" data-color="azure" data-image="assets/img/sidebar-5.jpg">

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="dashboard.html" class="simple-text">
                        Tableau de bord
                    </a>
                </div>

                <ul class="nav">
                    <li class="active">
                        <a href="dashboard.html">
                            <i class="pe-7s-home"></i>
                            <p>Tableau de bord</p>
                        </a>
                    </li>
                    <li>
                        <a href="ajouter.html" >
                            <i class="pe-7s-note"></i>
                            <p>Ajouter</p>
                        </a>
                    </li>
                    <li>
                        <a href="modifier.html">
                            <i class="pe-7s-tools"></i>
                            <p>Modifier</p>
                        </a>
                    </li>
                    <li>
                        <a href="supprimer.html">
                            <i class="pe-7s-trash"></i>
                            <p>Supprimer</p>
                        </a>
                    </li>

                    <li class="active-pro">
                        <a href="upgrade.html">
                            <i class="pe-7s-right-arrow"></i>
                            <p>Aller sur le site</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>


        <div class="main-panel">
            <nav class="navbar navbar-default navbar-fixed">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Supprimer votre magazine</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-left">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-sm hidden-xs"></b>
                                    <span class="notification hidden-sm hidden-xs">1</span>
                                    <p class="hidden-lg hidden-md">
                                        1 Notification
                                        <b class="caret"></b>
                                    </p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Bienvenue sur votre tableau de bord !</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa fa-search"></i>
                                    <p class="hidden-lg hidden-md">Rechercher</p>
                                </a>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="">
                                        <p>Mon compte</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <p>Déconnexion</p>
                                    </a>
                                </li>
                                <li>
                                    <li class="separator hidden-lg hidden-md"></li>
                                </ul>
                            </div>
                        </div>
                    </nav>


                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="header">
                                            <h4 class="title">Supprimer votre magazine</h4>
                                            <script>var today = new Date();
                                            var dd = today.getDate();
                                            var mm = today.getMonth()+1; //January is 0!
                                            var yyyy = today.getFullYear();
                                            if(dd<10) {
                                                dd='0'+dd
                                            }
                                            if(mm<10) {
                                                mm='0'+mm
                                            }
                                            today = mm+'/'+dd+'/'+yyyy;
                                            document.write(today);</script>
                                        </div>
                                        <div class="content">
                                            <form>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label>Nom de votre magazine</label>
                                                            <input type="text" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Numéro</label>
                                                            <input type="number" class="form-control" placeholder="286">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Année</label>
                                                            <input type="number" class="form-control" placeholder="Année de votre magazine">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Votre article</label>
                                                            <textarea rows="5" class="form-control" placeholder="" value="Mike">Depuis 1990, la revue "L'Architecture de votre région" propose un panorama détaillé de l'architecture d'une région, d'un territoire ou d'un pays.</textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <form method="post" action="index.php?action=admin_single&id=<?= $_GET['id'] ?>">
                                                    <input type="hidden" name="delete" value="1">
                                                    <input type="submit" name="" value="Supprimer votre magazine" class="btn btn-info btn-fill pull-right">
                                                </form>

                                                <div class="clearfix"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-user">
                                        <div class="image">
                                            <img src="assets/img/nick-hillier-215633.jpg" alt="..."/>
                                        </div>
                                        <div class="content">
                                            <div class="author">
                                                <a href="#">
                                                    <img class="avatar border-gray" src="assets/img/couv_282.jpg" alt="..."/>

                                                    <h4 class="title">Nom de votre magazine<br />
                                                        <small>######</small>
                                                    </h4>
                                                </a>
                                            </div>
                                        </div>
                                        <hr>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </body>

        <!--   Core JS Files   -->
        <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

        <!--  Checkbox, Radio & Switch Plugins -->
        <script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

        <!--  Charts Plugin -->
        <script src="assets/js/chartist.min.js"></script>

        <!--  Notifications Plugin    -->
        <script src="assets/js/bootstrap-notify.js"></script>

        <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
        <script src="assets/js/light-bootstrap-dashboard.js"></script>

        <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>