<?php
$pageTitle = "Home";
  include 'includes/header.php';
  include 'includes/report-card.php';
  include 'includes/support.php';
  include 'includes/welcome.php';
  include 'includes/emailNotifications.php'; ?>

  <!-- Graph -->
  <div class="jumbotron graph">
    <div class="container">
      This is the graph area...
    </div>
  </div><!-- /jumbotron -->

  <div class="container">
    <!-- Stats -->
    <div class="row stats">

      <!-- Previous reading -->
      <div class="col-md-4 previousRead">
        <h2 class="text-center"><span class="ico"></span>3.1</h2>
        <h3 class="text-center">Previous INR</h3>
        <p class="text-center date">Thu 19th Jan</p></p>
      </div>

      <!-- Next appointment -->
      <div class="col-md-3 nextApp">
        <h2 class="text-center"><span class="ico"></span>17<span class="month">Mar</span></h2>
        <h3 class="text-center">Next appointment</h3>
        <p class="text-center date">Fri 7:00am</p>
      </div>

      <!-- Weekly dosages -->
      <div class="col-md-4 col-md-offset-1 dosages">
        <ul class="list-inline weeklyDosages">
          <li><span class="dose" data-toggle="tooltip" title="11mg"></span><label>Mo</label></li>
          <li><span class="dose" data-toggle="tooltip" title="11mg"></span><label>Tu</label></li>
          <li><span class="dose" data-toggle="tooltip" title="11mg"></span><label>We</label></li>
          <li><span class="dose" data-toggle="tooltip" title="11mg"></span><label>Th</label></li>
          <li><span class="dose" data-toggle="tooltip" title="11mg"></span><label>Fr</label></li>
          <li><span class="dose missed" data-toggle="tooltip" title="8mg Missed"></span><label>Sa</label></li>
          <li><span class="dose" data-toggle="tooltip" title="11mg"></span><label>Su</label></li>
        </ul>
        <p class="text-center date">wc Mon 20 Feb</p>
      </div>

    </div><!-- /stats -->


    <table class="table">
      <h2>Since your last test</h2>

      <!-- Table -->
      <table class="table table-hover">
        <tr>
          <td><span class="date">20<sup>th</sup></span> <span class="month">Jan</span></td>
          <td></td>
          <td class="text-right"><span class="missed"><span class="dose">12</span></span></td>
        </tr>
        <tr>
          <td><span class="date">4<sup>th</sup></span> <span class="month">Feb</span></td>
          <td></td>
          <td class="text-right"><span class="missed"><span class="dose">11</span></span></td>
        </tr>
        <tr>
          <td><span class="date">5<sup>th</sup></span> <span class="month">Feb</span></td>
          <td>Boozie evening</td>
          <td></td>
        </tr>
        <tr>
          <td><span class="date">5<sup>th</sup></span> <span class="month">Feb</span></td>
          <td>Taking antibiotics</td>
          <td class="text-right"><span class="reading"><span class="dose">2.5</span></span></td>
        </tr>
        <tr>
          <td><span class="date">12<sup>th</sup></span> <span class="month">Feb</span></td>
          <td>Taking antibiotics</td>
          <td></td>
        </tr>
        <tr>
          <td><span class="date">13<sup>th</sup></span> <span class="month">Feb</span></td>
          <td>Taking antibiotics</td>
          <td></td>
        </tr>
        <tr>
          <td><span class="date">14<sup>th</sup></span> <span class="month">Feb</span></td>
          <td>Taking antibiotics</td>
          <td></td>
        </tr>
        <tr>
          <td><span class="date">15<sup>th</sup></span> <span class="month">Feb</span></td>
          <td>Taking antibiotics</td>
          <td></td>
        </tr>
        <tr>
          <td><span class="date">25<sup>th</sup></span> <span class="month">Feb</span></td>
          <td></td>
          <td class="text-right"><span class="missed"><span class="dose">8</span></span></td>
        </tr>
      </table>

  </div><!-- /container -->

<?php include 'includes/footer.php'; ?>
