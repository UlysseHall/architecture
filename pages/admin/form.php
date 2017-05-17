<?php
$magazine = isset($data["cont"]["magazine"]) ? $data["cont"]["magazine"] : false;
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
                        <a class="navbar-brand" href="#">Ajouter votre magazine</a>
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
                                <h4 class="title">Ajouter votre magazine</h4>
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
                            <!-- 8 -->
                                <form method="post" action="index.php?action=admin_form&<?= isset($_GET['add']) ? 'add=1' : 'update=1&id='.$_GET['id'] ?>">
                                    <div class="content">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>Région</label>
                                                        <input type="text" class="form-control" name="region" <?=  $magazine ? 'value="'.$magazine->getRegion().'"' : 'placeholder="Votre région FR"' ?>>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Numéro</label>
                                                            <input type="number" class="form-control" name="number" <?= $magazine ? 'value="'.$magazine->getNumber().'"' : 'placeholder="Numéro"' ?>>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Année</label>
                                                            <input type="number" class="form-control" name="year" <?= $magazine ? 'value="'.$magazine->getYear().'"' : 'placeholder="Année de votre magazine"' ?>>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Couverture</label>
                                                            <input type="text" class="form-control" name="img" <?= $magazine ? 'value="'.$magazine->getImg().'"' : 'placeholder="Insérer votre couverture"' ?>>
                                                            <input type="file" placeholder="Couverture">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>PDF</label>
                                                            <input type="text" class="form-control" name="pdf" <?= $magazine ? 'value="'.$magazine->getPdf().'"' : 'placeholder="Insérer votre PDF"' ?>>
                                                            <input type="file" placeholder="test" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="<?= isset($_GET['add']) ? 'add' : 'update' ?>" value="1">
                                                <button type="submit" class="btn btn-info btn-fill pull-right">Ajouter votre magazine</button>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="public/images/img-content/nick-hillier-215633.jpg" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="public/images/img-content/couv_282.jpg" alt="..."/>

                                      <h4 class="title">Nom de votre magazine<br />
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
