<?php
    $magazine = $data["cont"]["magazine"];
?>
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
                    <a class="navbar-brand" href="index.php?action=admin_single&id=<?= $magazine->getId() ?>">Supprimer votre magazine</a>
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
                                <li><a href="index.php?action=admin_home">Bienvenue sur votre tableau de bord !</a></li>
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
                                <a href="index.php?action=admin_home">
                                    <p>Mon compte</p>
                                </a>
                            </li>
                            <li>
                                <a href="index.php">
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

                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Nom de votre magazine</label>
                                                    <div class="form-control"><?= $magazine->getRegion() ?></div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Numéro</label>
                                                    <div class="form-control"><?= $magazine->getNumber() ?></div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Année</label>
                                                    <div type="number" class="form-control"><?= $magazine->getYear() ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="index.php?action=admin_form&update=1&id=<?= $magazine->getId() ?>" class="btn btn-info btn-fill pull-left">Modifier le magazine</a>
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
                                        <img src="public/images/img-content/nick-hillier-215633.jpg" alt=""/>
                                    </div>
                                    <div class="content">
                                        <div class="author">
                                            <a href="">
                                                <img class="avatar border-gray" src="public/images/img-content/<?= $magazine->getImg() ?>" alt=""/>

                                                <h4 class="title">Nom de votre magazine</h4>
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