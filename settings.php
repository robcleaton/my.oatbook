<?php
$pageTitle = "Settings";
  include 'includes/header.php';
  include 'includes/report-card.php';
  include 'includes/support.php'; ?>


  <div class="container">
    <h1>Settings</h1>
    <table class="table">
      <h2>Email alerts</h2>

      <h3>Appointments</h3>
      <ul class="list-unstyled">
        <li>
          <div class="checkbox">
            <label>
              <input type="checkbox" value="" checked>
              I have an upcoming appointment
            </label>
            <button type="button" class="btn btn-default btn-md">
              <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> rob@oatbook.co.uk
            </button>
            <a href="">Add another email</a>
          </div>
        </li>

        <li>
          <div class="checkbox">
            <label>
              <input type="checkbox" value="" checked>
              I missed an appointment
            </label>
            <button type="button" class="btn btn-default btn-md" style="clear:both;">
              <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> rob@oatbook.co.uk
            </button>
            <a href="">Add another email</a>
          </div>
        </li>

        <h3>Dosages</h3>
        <li>
          <div class="checkbox">
            <label>
              <input type="checkbox" value="" checked>
              Daily dosage reminder
            </label>
            <button type="button" class="btn btn-default btn-md">
              <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> rob@oatbook.co.uk
            </button>
            <a href="">Add another email</a>
          </div>
        </li>

        <li>
          <div class="checkbox">
            <label>
              <input type="checkbox" value="" checked>
              I missed a dosage
            </label>
            <button type="button" class="btn btn-default btn-md">
              <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> rob@oatbook.co.uk
            </button>
            <a href="">Add another email</a>
          </div>
        </li>

        <h3>Medication</h3>
        <li>
          <div class="checkbox">
            <label>
              <input type="checkbox" value="" checked>
              Medication is running low
            </label>
            <button type="button" class="btn btn-default btn-md">
              <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> rob@oatbook.co.uk
            </button>
            <a href="">Add another email</a>
          </div>
        </li>

        <li>
          <h3>Reports</h3>
          <div class="checkbox">
            <label>
              <input type="checkbox" value="" checked>
              I have an upcoming appointment
            </label>
            <button type="button" class="btn btn-default btn-md">
              <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> rob@oatbook.co.uk
            </button>
            <a href="">Add another email</a>
          </div>
        </li>
      </ul>

  </div><!-- /container -->

<?php include 'includes/footer.php'; ?>
