<?php
$pageTitle = "Login";
  include 'includes/header.php'; ?>

<style>
body {
  background: rgba(255, 215, 58, 0.71);
  padding: 0px;
}

  /*
    .container {
    background: url('/assets/images/bg.jpg') center center no-repeat;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }*/

  .navbar, footer {
    display: none;
  }
  h1 {
    display: block;
  }

      .container {
        display: table;
        position: absolute;
        height: 100%;
        width: 100%;
      }

      .vertical-center {
        display: table-cell;
        vertical-align: middle;
      }


</style>

  <div class="container">

    <div class="row vertical-center">
      <div class="col-sm-4 col-sm-offset-4">
        <h1 class="oatbook center-block">OATBook</h1>

        <form action="/">
          <div class="form-group">
            <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="inputPassword1" placeholder="Password">
          </div>
          <div class="col-xs-12">
            <button type="submit" class="btn btn-default">Login</button>
          </div>
        </form>
      </div>

    </div><!-- /row -->
  </div><!-- /container -->


<?php include 'includes/footer.php'; ?>
