<?php
$pageTitle = "Settings";
  include 'includes/header.php';
  include 'includes/report-card.php';
  include 'includes/support.php';
  include 'includes/emailNotifications.php';
  ?>

  <div class="container">
    <table class="table">
      <h1>Email alerts</h1>
      <p class="lead">Stay up-to-date or keep your close ones informed.</p>

      <!-- Appointments -->
      <div class="row checkbox-block">
        <div class="col-xs-12 checkbox">
          <label class="c-checkbox">
            <input type="checkbox" value="" checked>
            <h4 class="m-b-2">I have an upcoming appointment</h4>
          </label>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#removeEmailModal">
            rob@oatbook.co.uk <span class="remove">&times;</span>
          </button>
          <button type="button" class="btn btn-link" data-toggle="modal" data-target="#addEmailModal">Add another email</button>
        </div>
      </div>

      <div class="row checkbox-block">
        <div class="col-xs-12 checkbox">
          <label>
            <input type="checkbox" value="" checked>
            <h4>I missed an appointment</h4>
          </label>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#removeEmailModal">
            rob@oatbook.co.uk <span class="remove">&times;</span>
          </button>
          <button type="button" class="btn btn-link" data-toggle="modal" data-target="#addEmailModal">Add another email</button>
        </div>
      </div>

      <!-- Dosages -->
      <div class="row checkbox-block">
        <div class="col-xs-12 checkbox">
          <label>
            <input type="checkbox" value="" checked>
            <h4>Daily dosage reminder</h4>
          </label>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#removeEmailModal">
            rob@oatbook.co.uk <span class="remove">&times;</span>
          </button>
          <button type="button" class="btn btn-link" data-toggle="modal" data-target="#addEmailModal">Add another email</button>
        </div>
      </div>

      <div class="row checkbox-block">
        <div class="col-xs-12 checkbox">
          <label>
            <input type="checkbox" value="" checked>
            <h4>I missed a dosage</h4>
          </label>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#removeEmailModal">
            rob@oatbook.co.uk <span class="remove">&times;</span>
          </button>
          <button type="button" class="btn btn-link" data-toggle="modal" data-target="#addEmailModal">Add another email</button>
        </div>
      </div>

      <!-- Medication -->
      <div class="row checkbox-block">
        <div class="col-xs-12 checkbox">
          <label>
            <input type="checkbox" value="" checked>
            <h4>Medication is running low</h4>
          </label>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#removeEmailModal">
            rob@oatbook.co.uk <span class="remove">&times;</span>
          </button>
          <button type="button" class="btn btn-link" data-toggle="modal" data-target="#addEmailModal">Add another email</button>
        </div>
      </div>

      <div class="row checkbox-block">
        <div class="col-xs-12 checkbox">
          <label>
            <input type="checkbox" value="" checked>
            <h4>Monthly health reports</h4>
          </label>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#removeEmailModal">
            rob@oatbook.co.uk <span class="remove">&times;</span>
          </button>
          <button type="button" class="btn btn-link" data-toggle="modal" data-target="#addEmailModal">Add another email</button>
        </div>
      </div>

      <button type="button" class="btn btn-primary">Save changes</button>

  </div><!-- /container -->

<?php include 'includes/footer.php'; ?>
