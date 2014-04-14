<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Portal Informasi Taman Nasional Indonesia">
    <meta name="author" content="PPL C05">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('/bootstrap/dist/css').'/bootstrap.min.css';?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('/bootstrap/dist/css').'/sticky-footer-navbar.css';?>" rel="stylesheet">
    <link href="<?php echo base_url('/bootstrap/dist/css').'/signin.css';?>" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="<?php echo base_url('design/').'/logobaru.png';?>" alt="Telusur Pesona Indonesia" width="150"></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Beranda</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Taman Nasional</a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
            <li><a href="#forum">Forum</a></li>
            <li><a href="#pencarian">Pencarian</a></li>
            <li class="dropdown">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="width:52px; height:52px;">
                <span class=" glyphicon glyphicon-user"></span>
              </button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Sign In</a></li>
                <li><a href="#">Sign Up</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <!-- Begin page content -->
    <?php $this->load->view($body); ?>

    <div id="footer">
      <div class="container">
        <p class="text-muted">Copyright PPL C05 | Data Source Mapala UI</p>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
