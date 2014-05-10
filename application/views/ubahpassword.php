<div class="container marketing" id="profil">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Ubah Password</h3>
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
            <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('/anggota/changePass/');?>/">
              <input name="username" type="hidden" value="<?php echo $anggota['Username']?>">
              <div class="form-group">
                <label class="col-sm-2 control-label">Username</label>
                <div class="col-sm-10">
                  <p class="form-control-static"><?php echo $anggota['Username']?></p>
                </div>
                <label class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <p class="form-control-static"><?php echo $anggota['Email']?></p>
                </div>
              </div>
              <hr class="divider">
              <div class="form-group">
                <label class="col-sm-3 control-label">Password Lama</label>
                <div class="col-sm-9">
                  <input name="passlama" type="password" class="form-control" id="inputPassword3" placeholder="Password Lama">
                </div>
                <label class="col-sm-3 control-label">Password Baru</label>
                <div class="col-sm-9">
                  <input name="password" type="password" class="form-control" id="inputPassword3" placeholder="Password Baru">
                </div>
                <label class="col-sm-3 control-label">Konfirmasi Password</label>
                <div class="col-sm-9">
                  <input name="passconfirm" type="password" class="form-control" id="inputPassword3" placeholder="Konfirmasi Password">
                </div>
                <a href="<?php echo site_url('/profil/'.get_cookie('TelusurPesonaIndonesia'));?>"><button type="button" class="btn btn-default pull-right">Batal</button></a>
                <button type="submit" class="btn btn-default pull-right">Simpan</button>
              </div>
              <hr class="divider">
              <div class="form-group">
                <label class="col-sm-2 control-label">Total Review</label>
                <div class="col-sm-10">
                  <p class="form-control-static">: 0</p>
                </div>
                <label class="col-sm-2 control-label">Badge</label>
                <div class="col-sm-10">
                  <p class="form-control-static">: 2</p>
                </div>
              </div>
            </form>
          </div><!-- /.col-lg-48-->
        </div><!-- /.row -->
      </div>
    </div><!-- /.container -->
