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
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Brand</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="#/" class="user"><p class="username">Rob Cleaton</p></a></li>
          <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="community.php">Community</a></li>
          <li><a href="#" data-toggle="modal" data-target="#supportModal">Support</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Link</a></li>
          <li>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#reportCardModal">
              Report card
            </button>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </li>
        </ul>

      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>