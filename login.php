<?php
$pageTitle = "Login";
  include 'includes/header.php'; ?>

<style>
  body {
    background: rgba(255, 215, 58, 0.71);
  }
  .navbar, footer {
    display: none;
  }
</style>

  <div class="container">

    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">Login
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>

    </div><!-- /row -->
  </div><!-- /container -->


<?php include 'includes/footer.php'; ?>
