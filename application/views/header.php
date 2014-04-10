<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Halaman Utama Telusur Pesona Indonesia</title>
	
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url ('/bootstrap-3.1.1/dist/css/').'bootstrap.min.css';?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('/bootstrap-3.1.1/dist/css/').'home.css';?>" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>


  <body>
   <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button
		  <img src="logo.jpg" alt="logo">
         <!-- <a class="navbar-brand" href="#">Telusur Pesona Indonesia</a> -->
        </div>
		
		
		<!-- tab buat menu -->
        <div class="menu">
		<div class="row">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#Home">Beranda</a></li>
            <li><a href="#Taman">Taman Nasional</a></li>
            <li><a href="#Forum">Forum</a></li>
			<li><a href="#Search">Pencarian</a></li>
          </ul>
		</div><!--/.row -->  
        </div><!--/.menu -->
      </div>
    </div>

 <?php $this->load->view($body); ?>

  <div class="panel">
  <div class="row">
  <div class="panel-body">
    <h5>Copyright PPL C05 </h5>
    <h5>Data Source MAPALA UI</h5>
  </div>
  </div><!-- /.row -->
  </div>

    </body>
</html>
