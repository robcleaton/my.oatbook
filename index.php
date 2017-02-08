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
    <!-- Stats -->
    <div class="row stats">

      <!-- Previous reading -->
      <div class="col-md-4">
        <h2 class="text-center">2.9</h2>
        <h3 class="text-center">Previous INR</h3>
        <p class="text-center date">Tue 21st Feb</p></p>
      </div>

      <!-- Next appointment -->
      <div class="col-md-4">
        <h2 class="text-center">19<span class="month">Mar</span></h2>
        <h3 class="text-center">Next appointment</h3>
        <p class="text-center date">Fri 7:00am</p>
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
        <p class="text-center date">wc Mon 19 Feb</p>
      </div>

    </div><!-- /stats -->
  </div><!-- /container -->

<?php include 'includes/footer.php'; ?>
