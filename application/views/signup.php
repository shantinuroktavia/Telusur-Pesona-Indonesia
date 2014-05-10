<div class="container" id="signin">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Sign Up</h3>
    </div>
    <div class="panel-body">
      <form class="form-signin" role="form" method="post" action="<?php echo site_url('/anggotacontroller/daftarBaru/');?>/">
        <input type="username" name="username" class="form-control" placeholder="Username" required autofocus>
        <input type="email" name="email" class="form-control" placeholder="Email" required>
        <input type="password" name="password" class="form-control" placeholder="Password" required autofocus>
        <input type="password" name="passconfirm" class="form-control" placeholder="Confirm Password" required>
        <label></label>
        <div class="but" id="btn">
          <ul>
            <li><button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button></li>
            <li><button class="btn btn-lg btn-primary btn-block" type="cancel">Cancel</button></li>
          </ul>
        </div>
      </form>
    </div>
  </div>
</div> <!-- /container -->
