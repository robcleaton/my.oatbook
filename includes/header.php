<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>My OATBook | <?php echo $pageTitle; ?></title>

    <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <!-- Bootstrap -->
    <link href="stylesheets/styles.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <h1 class="oatbook-logo">OATBook</h1>

        <!-- Burger menu -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        
        <div class="dropdown user">
          <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <a href="/"><p class="username hidden-xs hidden-sm">Rob Cleaton</p></a>
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="myaccount.php">My account</a></li>
            <li><a href="settings.php">Settings</a></li>
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
