<?php
// {% for magazine in data["cont"]["list"] %}
// echo "<pre>";
// var_dump($data["cont"]["list"]);
?>
<div class="wrapper">
    <div class="sidebar" data-color="azure" data-image="assets/img/sidebar-5.jpg">

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="" class="simple-text">
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
                    <a href="ajouter.html">
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
                    <a class="navbar-brand" href="#">Administrateur</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
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
								<p class="hidden-lg hidden-md">Search</p>
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



				<div class="col-md-6">
						<div class="card ">
								<div class="header">
										<h4 class="title">Magazines l'architecture de votre région</h4>
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
document.write(today);
</script><p class="category"></p>
								</div>
								<div class="content">
										<div class="table-full-width">
												<table class="table">
														<tbody>
																<tr>
																		<td>
																				<label class="checkbox">
																						<input type="checkbox" value="" data-toggle="checkbox" checked="">
																				</label>
																		</td>
																		<td> <a href="#">Revue N°285 - 2017 - Martinique</a></td>
																		<td class="td-actions text-right">
																				<button type="button" rel="tooltip" title="Modifier" class="btn btn-info btn-simple btn-xs">
																						<i class="fa fa-edit"></i>
																				</button>
																				<button type="button" rel="tooltip" title="Supprimer" class="btn btn-danger btn-simple btn-xs">
																						<i class="fa fa-times"></i>
																				</button>
																		</td>
																</tr>
																<tr>
																		<td>
																				<label class="checkbox">
																						<input type="checkbox" value="" data-toggle="checkbox">
																				</label>
																		</td>
																		<td><a href="#">Revue N°284 - 2016 - Ile-de-France</a></td>
																		<td class="td-actions text-right">
																				<button type="button" rel="tooltip" title="Modifier" class="btn btn-info btn-simple btn-xs">
																						<i class="fa fa-edit"></i>
																				</button>
																				<button type="button" rel="tooltip" title="Supprimer" class="btn btn-danger btn-simple btn-xs">
																						<i class="fa fa-times"></i>
																				</button>
																		</td>
																</tr>
																<tr>
																		<td>
																				<label class="checkbox">
																						<input type="checkbox" value="" data-toggle="checkbox">
																				</label>
																		</td>
																			<td><a href="#">Revue N°283 - 2016 - Bretagne - Normandie</a></td>
																		<td class="td-actions text-right">
																				<button type="button" rel="tooltip" title="Modifier" class="btn btn-info btn-simple btn-xs">
																						<i class="fa fa-edit"></i>
																				</button>
																				<button type="button" rel="tooltip" title="Supprimer" class="btn btn-danger btn-simple btn-xs">
																						<i class="fa fa-times"></i>
																				</button>
																		</td>
																</tr>
																<tr>
																		<td>
																				<label class="checkbox">
																						<input type="checkbox" value="" data-toggle="checkbox">
																				</label>
																		</td>
																		<td><a href="#">Revue N°282 - 2016 - Rhône-Alpes</a></td>
																		<td class="td-actions text-right">
																				<button type="button" rel="tooltip" title="Modifier" class="btn btn-info btn-simple btn-xs">
																						<i class="fa fa-edit"></i>
																				</button>
																				<button type="button" rel="tooltip" title="Supprimer" class="btn btn-danger btn-simple btn-xs">
																						<i class="fa fa-times"></i>
																				</button>
																		</td>
																</tr>
																<tr>
																		<td>
																				<label class="checkbox">
																						<input type="checkbox" value="" data-toggle="checkbox">
																				</label>
																		</td>
																		<td><a href="#">Revue N°281 - 2016 - Guadeloupe</a></td>
																		<td class="td-actions text-right">
																				<button type="button" rel="tooltip" title="Modifier" class="btn btn-info btn-simple btn-xs">
																						<i class="fa fa-edit"></i>
																				</button>
																				<button type="button" rel="tooltip" title="Supprimer" class="btn btn-danger btn-simple btn-xs">
																						<i class="fa fa-times"></i>
																				</button>
																		</td>
																</tr>
																<tr>
																		<td>
																				<label class="checkbox">
																						<input type="checkbox" value="" data-toggle="checkbox">
																				</label>
																		</td>
																		<td><a href="#">Revue N°280 - 2016 - Alsace</a></td>
																		<td class="td-actions text-right">
																				<button type="button" rel="tooltip" title="Modifier" class="btn btn-info btn-simple btn-xs">
																						<i class="fa fa-edit"></i>
																				</button>
																				<button type="button" rel="tooltip" title="Supprimer" class="btn btn-danger btn-simple btn-xs">
																						<i class="fa fa-times"></i>
																				</button>
																		</td>
																</tr>
														</tbody>
												</table>
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

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-smile',
            	message: "C'est un grand honneur de vous avoir dans notre équipe. Bienvenue à bord !"

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>
