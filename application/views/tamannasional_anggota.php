<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title><?php echo $tamannasional['NamaTaman'];?> - Telusur Pesona Indonesia</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    <script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  </head>
  <!-- NAVBAR
  ================================================== -->
  <body>
    <div class="container marketing">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><?php echo $tamannasional['NamaTaman'];?></h3>
        </div>
        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-3">
            <h3>Review</h3>
            <hr class="divider">
            <div class="form-group">
              <?php echo $tamannasional['Profil'];?>
            </div>
            <hr class="divider">
            <h4>Komentar</h4>
            <table class="review" width="30%">
              <tr>
                <td class="review">Tes</td>
              </tr>
            </table>
          </div><!--/.col-lg-3-->
          <div class="col-lg-9">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="item active">
                  <img src="<?php echo base_url('/fototaman/1.jpg');?>" alt="First slide">
                  <div class="container">
                    <div class="carousel-caption">
                      <h1><?php echo $tamannasional['NamaTaman'];?></h1>
                      <p>Ini contoh isi caption dari foto taman nasional</p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <img src="<?php echo base_url('/fototaman/2.jpg');?>" alt="Second slide">
                </div>
                <div class="item">
                  <img src="<?php echo base_url('/fototaman/3.jpg');?>" alt="Third slide">
                </div>
              </div>
              <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
            <div class="tambahan">
              <table>
                <tr>
                  <td>
                    <button type="button" class="btn btn-default">Galeri Foto</button>
                  </td>
                  <td><ul></ul></td>
                  <td>
                    <button type="button" class="btn btn-default">Upload Foto</button>
                  </td>
                  <td>
                    <ul class="social_network">
                      <li>
                        <a href="https://twitter.com/share" class="twitter-share-button" data-dnt="true" data-count="none" data-via="twitterapi">Tweet</a>
                      </li>
                      <li>
                        <a class="fb-share-button" data-href="<?php echo site_url('/tamannasional/'.$tamannasional['IdTaman']);?>" data-type="button">Share</a>
                      </li>
                    </ul>
                  </td>
                  <td>
                    <input id="input-id" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs">
                  </td>
                </tr>
              </table>
            </div>
            <hr class="divider">
            <div class="row">
              <div id="informasi">
                <div class="col-lg-4">
                  <a data-toggle="collapse" data-parent="#informasi" href="#aksesibilitas">
                  Aksesibilitas
                  </a>
                  <br>
                  <a data-toggle="collapse" data-parent="#informasi" href="#waktu">
                  Waktu Kunjung Terbaik
                  </a>
                  <br>
                  <a data-toggle="collapse" data-parent="#informasi" href="#sarana">
                  Sarana Layanan Pengunjung
                  </a>
                  <br>
                  <a data-toggle="collapse" data-parent="#informasi" href="#kontak">
                  Kontak Pengelola
                  </a>
                  <br>
                  <a data-toggle="collapse" data-parent="#informasi" href="#htm">
                  Tiket Masuk
                  </a>
                  <br>
                  <a data-toggle="collapse" data-parent="#informasi" href="#tips">
                  Tips
                  </a>
                  <br>
                  <a data-toggle="collapse" data-parent="#informasi" href="#penginapan">
                  Area Kemping / Penginapan
                  </a>
                  <br>
                  <a data-toggle="collapse" data-parent="#informasi" href="#aktivitas">
                  Aktivitas yang Dapat Dilakukan
                  </a>
                  <br>
                  <a data-toggle="collapse" data-parent="#informasi" href="#halmenarik">
                  Hal-Hal Menarik
                  </a>
                </div>
                <div class="col-lg-8">
                  <div id="aksesibilitas" class="collapse">
                    <center><h3>Aksesibilitas</h3></center>
                    <p>
                      <?php echo $tamannasional['Akses'];?>
                    <br>
                    </p>
                  </div>
                  <div id="waktu" class="collapse">
                    <center><h3>Waktu Kunjung Terbaik</h3></center>
                    <p>
                      <?php echo $tamannasional['Waktu'];?>
                    <br>
                    </p>
                  </div>
                  <div id="sarana" class="collapse">
                    <center><h3>Sarana Layanan Pengunjung</h3></center>
                    <p>
                      <?php echo $tamannasional['Sarana'];?>
                    </p>
                  </div>
                  <div id="kontak" class="collapse">
                    <center><h3>Kontak Pengelola</h3></center>
                    <p>
                      <?php echo $tamannasional['NomorKontak'];?>
                    </p>
                  </div>
                  <div id="htm" class="collapse">
                    <center><h3>Tiket Masuk</h3></center>
                    <p>
                      <?php echo $tamannasional['HTM'];?>
                    </p>
                  </div>
                  <div id="tips" class="collapse">
                    <center><h3>Tips</h3></center>
                    <p>
                      <?php echo $tamannasional['Tips'];?>
                    </p>
                  </div>
                  <div id="penginapan" class="collapse">
                    <center><h3>Area Kemping / Penginapan</h3></center>
                    <!--<p>
                      <?php echo $tamannasional['Penginapan'];?>
                    </p>-->
                  </div>
                  <div id="aktivitas" class="collapse">
                    <center><h3>Aktivitas yang Dapat Dilakukan</h3></center>
                    <p>
                      <?php echo $tamannasional['Aktivitas'];?>
                    </p>
                  </div>
                  <div id="halmenarik" class="collapse">
                    <center><h3>Hal-Hal Menarik</h3></center>
                    <p>
                      <?php echo $tamannasional['HalMenarik'];?>
                    </p>
                  </div>
                </div>
              </div>

            </div>
          </div><!--/.col-lg-9-->
        </div><!-- /.row -->
      </div>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
  </body>
</html>
