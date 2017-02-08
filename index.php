<?php
$pageTitle = "Home";
  include 'includes/header.php';
  include 'includes/report-card.php';
  include 'includes/support.php'; ?>


  <!-- Graph -->
  <div class="jumbotron">
    <div class="container">
      This is the graph area...
    </div>
  </div><!-- /jumbotron -->


  <div class="container">
    <h1 class="center-block">Hello, world!</h1>
    <!-- Stats -->
    <div class="row">

      <!-- Previous reading -->
      <div class="col-md-4">
        <h2>2.9</h2>
        <h3>Previous INR</h3>
        <p class="date">Tue 21st Feb</p></p>
      </div>

      <!-- Next appointment -->
      <div class="col-md-4">
        <span class="dateLarge">19<small>th</small></span>
        <span class="month">Mar</span>
        <h3>Next appointment</h3>
        <p class="date">Fri 7:00am</p>
      </div>

      <!-- Weekly dosages -->
      <div class="col-md-4">
        <ul class="list-inline weeklyDosages">
          <li><span class="dose"></span><label>Mo</label></li>
          <li><span class="dose"></span><label>Tu</label></li>
          <li><span class="dose"></span><label>We</label></li>
          <li><span class="dose"></span><label>Th</label></li>
          <li><span class="dose"></span><label>Fr</label></li>
          <li><span class="dose"></span><label>Sa</label></li>
          <li><span class="dose"></span><label>Su</label></li>
        </ul>
        <h3>Next appointment</h3>
        <p class="date">wc Mon 19 Feb</p>
      </div>

    </div><!-- /stats -->
  </div><!-- /container -->

<?php include 'includes/footer.php'; ?>
