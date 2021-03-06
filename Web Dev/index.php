<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="assets/images/ui.png" type="image/ico" />

    <title> RS.Universitas Indonesia </title>

    <!-- Bootstrap -->
    <link href="assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="assets/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="assets/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="assets/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
            <center>
            &nbsp; <a href="index.php" class="fa fa-mortar-board fa-2x" style="color:#fff;"><span><font size="4.95" color="white" face="Helvetica Neue">CCIT FT-UI</font></span></a>
            </center>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="assets/images/ui.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>CCIT FT-UI</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="index.php"><i class="fa fa-home"></i> Home <span class="fa fa-chevron"></span></a>
                  </li>&nbsp;
                  <li><a href="#"><i class="fa fa-desktop"></i> Data Pasien <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php?page=tampil_ps">Tampil Data</a></li>
                      <li><a href="index.php?page=tambah_ps">Tambah Data</a></li>
                    </ul>
                  </li>&nbsp;
                  <li><a><i class="fa fa-info-circle"></i> Covid-19 Update <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="https://www.worldometers.info/coronavirus/" target='_blank'>The World</a></li>
                      <li><a href="https://www.worldometers.info/coronavirus/country/indonesia/" target='_blank'>National</a></li>
                    </ul>
                  </li>&nbsp;
                  <li><a><i class="fa fa-hospital-o"></i> Info Penting <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php?page=tablers_ps">Rumah Sakit Rujukan</a></li>
                      <li><a href="index.php?page=edukasi_ps">Edukasi</a></li>
                      <li><a href="https://covid19.go.id/pelaku-perjalanan" target='_blank'>Surat Perjalanan</a></li>
                    </ul>
                  </li>&nbsp;
                  <li><a href="#"><i class="fa fa-phone-square"></i> Kontak Layanan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index2.php?page=kontak_ps1">Kementrian - Lembaga</a></li>
                    </ul>
                  </li>
                  <!-- <li><a><i class="fa fa-gear"></i> Settings <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Settings 1</a></li>
                      <li><a href="#">Settings 2</a></li>
                    </ul> -->
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <!-- <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings" href="#">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen" href="#">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock" href="#">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="#">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div> -->

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" >
                  <a href="#" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="assets/images/ui.png" alt="">Menu
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="login.php"><i class="fa fa-sign-out pull-right"></i> Login</a>

                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content - HALAMAN UTAMA ISI DISINI -->
        <div class="right_col" role="main">
      <?php
      $queries = array();
      parse_str($_SERVER['QUERY_STRING'], $queries);
      error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
      switch ($queries['page']) {
      	case 'tampil_ps':
      		# code...
      		include 'tampil.php';
      		break;
        case 'tampil_ps2':
          # code...
          include 'tampil2.php';
          break;
        case 'kontak_ps2':
            # code...
            include 'kontak2.php';
            break;
        case 'login_ps':
            # code...
            include 'login.php';
            break;
        case 'edukasi_ps':
            # code...
            include 'edukasi.php';
            break;
        case 'tablers_ps':
            # code...
            include 'tablers.php';
            break;
      	case 'tambah_ps':
      		# code...
      		include 'tambah.php';
      		break;
        case 'tambah_ps2':
          # code...
          include 'tambah2.php';
          break;
        case 'edit_ps':
        		# code...
        	include 'edit.php';
        	break;
        case 'edit_ps_save':
          		# code...
          include 'edit.php';
          break;
        default:
		          #code...
		      include 'home.php';
		      break;
        }
        ?>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Copyright @ 2021 Web : Muh.Habibi
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="assets/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="assets/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="assets/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="assets/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="assets/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="assets/skycons/skycons.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="assets/js/custom.min.js"></script>

  </body>
</html>
