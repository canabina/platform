<!DOCTYPE html>
<html lang="en">

    <head>
        <base href="/admin" target="_blank">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gentallela Alela! | </title>

        <!-- Bootstrap -->
        <link href="<?= $layoutVars['assetsUrl']; ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="<?= $layoutVars['assetsUrl']; ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="<?= $layoutVars['assetsUrl']; ?>vendors/iCheck/skins/flat/green.css" rel="stylesheet">
        <!-- bootstrap-progressbar -->
        <link href="<?= $layoutVars['assetsUrl']; ?>vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
        <!-- jVectorMap -->
        <link href="<?= $layoutVars['assetsUrl']; ?>css/maps/jquery-jvectormap-2.0.3.css" rel="stylesheet" />

        <!-- Custom Theme Style -->
        <link href="<?= $layoutVars['assetsUrl']; ?>css/custom.css" rel="stylesheet">
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="/admin" class="site_title"><span>Rename.com.ua</span></a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <div class="profile">
                            <div class="profile_pic">
                                <img src="<?= $layoutVars['assetsUrl']; ?>images/img.jpg" alt="..." class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                                <span>Welcome,</span>
                                <h2>John Doe</h2>
                            </div>
                        </div>
                        <!-- /menu profile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <ul class="nav side-menu">
                                    <li style='margin-top: 75px;'><a><i class="fa fa-home"></i> Главная </span></a>
                                    </li>
                                    <li><a><i class="fa fa-edit"></i> Районы </a>
                                    </li>
                                    <li><a><i class="fa fa-desktop"></i> Улицы </a>
                                    </li>
                                    <li><a><i class="fa fa-bar-chart-o"></i> Статистика</a>
                                    </li>
                                    <li><a><i class="fa fa-table"></i> Статичиские страници </a>
                                    </li>
                                    <li><a><i class="fa fa-table"></i> Настройки </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <!-- /sidebar menu -->

                        <!-- /menu footer buttons -->
                        <div class="sidebar-footer hidden-small">
                            <a data-toggle="tooltip" data-placement="top" title="Settings">
                                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Lock">
                                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Logout">
                                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            </a>
                        </div>
                        <!-- /menu footer buttons -->
                    </div>
                </div>

                <!-- top navigation -->
                <div class="top_nav">

                    <div class="nav_menu">
                        <nav class="" role="navigation">
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>

                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="<?= $layoutVars['assetsUrl']; ?>images/img.jpg" alt="">John Doe
                        <span class=" fa fa-angle-down"></span>
                      </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li>
                                            <a href="/admin/settings">
                                                <span>Настройки</span>
                                            </a>
                                        </li>
                                        <li><a href="/admin/logout"><i class="fa fa-sign-out pull-right"></i>Выход</a>
                                        </li>
                                    </ul>
                                </li>

                                <li role="presentation" class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-envelope-o"></i>
                                        <span class="badge bg-green">6</span>
                                    </a>
                                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                        <li>
                                            <a>
                                                <span class="image">
                                              <img src="<?= $layoutVars['assetsUrl']; ?>images/img.jpg" alt="Profile Image" />
                                          </span>
                                                <span>
                                              <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                                              Film festivals used to be do-or-die moments for movie makers. They were where...
                                          </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <span class="image">
                                              <img src="<?= $layoutVars['assetsUrl']; ?>images/img.jpg" alt="Profile Image" />
                                          </span>
                                                <span>
                                              <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                                              Film festivals used to be do-or-die moments for movie makers. They were where...
                                          </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <span class="image">
                                              <img src="<?= $layoutVars['assetsUrl']; ?>images/img.jpg" alt="Profile Image" />
                                          </span>
                                                <span>
                                              <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                                              Film festivals used to be do-or-die moments for movie makers. They were where...
                                          </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <span class="image">
                                              <img src="<?= $layoutVars['assetsUrl']; ?>images/img.jpg" alt="Profile Image" />
                                          </span>
                                                <span>
                                              <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                                              Film festivals used to be do-or-die moments for movie makers. They were where...
                                          </span>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="text-center">
                                                <a href="inbox.html">
                                                    <strong>See All Alerts</strong>
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </nav>
                    </div>

                </div>
                <!-- /top navigation -->


                <!-- page content -->
                <div class="right_col" role="main">
                    <?= $content; ?>
                </div>

                <!-- /page content -->

                <!-- footer content -->
                <footer>
                    <div class="pull-right">
                        Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
        </div>

        <!-- jQuery -->
        <script src="<?= $layoutVars['assetsUrl']; ?>vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?= $layoutVars['assetsUrl']; ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="<?= $layoutVars['assetsUrl']; ?>vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="<?= $layoutVars['assetsUrl']; ?>vendors/nprogress/nprogress.js"></script>
        <!-- Chart.js -->
        <script src="<?= $layoutVars['assetsUrl']; ?>vendors/Chart.js/dist/Chart.min.js"></script>
        <!-- gauge.js -->
        <script src="<?= $layoutVars['assetsUrl']; ?>vendors/bernii/gauge.js/dist/gauge.min.js"></script>
        <!-- bootstrap-progressbar -->
        <script src="<?= $layoutVars['assetsUrl']; ?>vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
        <!-- iCheck -->
        <script src="<?= $layoutVars['assetsUrl']; ?>vendors/iCheck/icheck.min.js"></script>
        <!-- Skycons -->
        <script src="<?= $layoutVars['assetsUrl']; ?>vendors/skycons/skycons.js"></script>
        <!-- Flot -->
        <script src="<?= $layoutVars['assetsUrl']; ?>vendors/Flot/jquery.flot.js"></script>
        <script src="<?= $layoutVars['assetsUrl']; ?>vendors/Flot/jquery.flot.pie.js"></script>
        <script src="<?= $layoutVars['assetsUrl']; ?>vendors/Flot/jquery.flot.time.js"></script>
        <script src="<?= $layoutVars['assetsUrl']; ?>vendors/Flot/jquery.flot.stack.js"></script>
        <script src="<?= $layoutVars['assetsUrl']; ?>vendors/Flot/jquery.flot.resize.js"></script>
        <!-- Flot plugins -->
        <script src="<?= $layoutVars['assetsUrl']; ?>js/flot/jquery.flot.orderBars.js"></script>
        <script src="<?= $layoutVars['assetsUrl']; ?>js/flot/date.js"></script>
        <script src="<?= $layoutVars['assetsUrl']; ?>js/flot/jquery.flot.spline.js"></script>
        <script src="<?= $layoutVars['assetsUrl']; ?>js/flot/curvedLines.js"></script>
        <!-- jVectorMap -->
        <script src="<?= $layoutVars['assetsUrl']; ?>js/maps/jquery-jvectormap-2.0.3.min.js"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="<?= $layoutVars['assetsUrl']; ?>js/moment/moment.min.js"></script>
        <script src="<?= $layoutVars['assetsUrl']; ?>js/datepicker/daterangepicker.js"></script>

        <!-- Custom Theme Scripts -->
        <script src="<?= $layoutVars['assetsUrl']; ?>js/custom.js"></script>

        <script src="<?= $layoutVars['assetsUrl']; ?>js/maps/jquery-jvectormap-world-mill-en.js"></script>
        <script src="<?= $layoutVars['assetsUrl']; ?>js/maps/jquery-jvectormap-us-aea-en.js"></script>
        <script src="<?= $layoutVars['assetsUrl']; ?>js/maps/gdp-data.js"></script>

    </body>

</html>