<div class="container" id="signin">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Sign In</h3>
    </div>
    <div class="panel-body">
      <form class="form-signin" role="form" method="post" action="<?php echo site_url('/anggotacontroller/signIn/');?>/">
        <input type="username" name="username" class="form-control" placeholder="Username" required autofocus>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <div class="but">
          <ul>
            <li><button class="btn btn-lg btn-primary btn-block" name='signin' type="submit">Sign In</button></li>
            <!--	<li><button class="btn btn-lg btn-primary btn-block" name='cancel' type="submit">Cancel</button></li>-->
          </ul>
        </div>
      </form>
    </div>
  </div>
</div>
