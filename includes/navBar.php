  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <a href="/"><h1 class="oatbook-logo">OATBook</h1></a>

        <!-- Burger menu -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <div class="dropdown user">
          <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <a href="/"><span class="username hidden-xs hidden-sm">Rob Cleaton</span></a>
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a class="myaccount" href="myaccount.php">My account</a></li>
            <li><a class="settings" href="settings.php">Settings</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="login.php">Logout</a></li>
          </ul>
        </div>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="/">Home <span class="sr-only">(current)</span></a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="community.php">Community</a></li>
          <li><a href="#" data-toggle="modal" data-target="#supportModal">Support</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-default reportCard" data-toggle="modal" data-target="#reportCardModal">
              Report card
            </button>
          </li>
        </ul>

      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
