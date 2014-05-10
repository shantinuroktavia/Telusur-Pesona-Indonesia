<div class="container marketing" id="profil">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Profil</h3>
        </div>
        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="img-square" src="http://lh6.ggpht.com/-Ngo2XaPvrao/T-36mmyKBQI/AAAAAAAAFQo/GPeSirGEbtI/38004-140x140_thumb%25255B1%25255D.png?imgmax=800" alt="Generic placeholder image">
            <h3>About Me</h3>
            <p><?php echo $anggota['AboutMe'];?></p>
            <button type="button" class="btn btn-default">Ganti Foto</button>
            <button type="button" class="btn btn-default">Ubah About Me</button>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-8">
            <form class="form-horizontal" role="form">
              <div class="form-group">
                <label class="col-sm-2 control-label">Username</label>
                <div class="col-sm-10">
                  <p class="form-control-static">: <?php echo $anggota['Username'];?></p>
                </div>
                <label class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <p class="form-control-static">: <?php echo $anggota['Email'];?></p>
                </div>
              </div>
              <hr class="divider">
              <div class="form-group">
                <label class="col-sm-2 control-label">Nama</label>
                <div class="col-sm-10">
                  <p class="form-control-static">: <?php echo $anggota['Nama'];?></p>
                </div>
                <label class="col-sm-2 control-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                  <p class="form-control-static">: <?php echo $anggota['Birthdate'];?></p>
                </div>
                <label class="col-sm-2 control-label">Lokasi</label>
                <div class="col-sm-10">
                  <p class="form-control-static">: <?php echo $anggota['Lokasi'];?></p>
                </div>
                <label class="col-sm-2 control-label">Pekerjaan</label>
                <div class="col-sm-10">
                  <p class="form-control-static">: <?php echo $anggota['Pekerjaan'];?></p>
                </div>
                <label class="col-sm-2 control-label">Website</label>
                <div class="col-sm-10">
                  <p class="form-control-static">: <?php echo $anggota['Website'];?></p>
                </div><?php if(get_cookie('TelusurPesonaIndonesia')==$anggota['IdAnggota']) echo '
                <a href="'.site_url("/UbahPassword").'"><button type="button" class="btn btn-default pull-right">Ubah Password</button>
                <a href="'.site_url("/UbahProfil").'"><button type="button" class="btn btn-default pull-right">Ubah Profil</button></a>';?></div>
              <hr class="divider">
              <!--<div class="form-group">
                <label class="col-sm-2 control-label">Total Review</label>
                <div class="col-sm-10">
                  <p class="form-control-static">: 0</p>
                </div>
                <label class="col-sm-2 control-label">Badge</label>
                <div class="col-sm-10">
                  <p class="form-control-static">: 2</p>
                </div>
              </div>-->
            </form>
          </div><!-- /.col-lg-48-->
        </div><!-- /.row -->
      </div>
    </div><!-- /.container -->
