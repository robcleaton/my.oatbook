<?php
$pageTitle = "My account";
  include 'includes/header.php';
  include 'includes/report-card.php';
  include 'includes/support.php';
  include 'includes/modals.php'; ?>

  <div class="jumbotron account">
    <div class="container">
      <span class="user"></span>
    </div>
  </div><!-- /jumbotron -->

  <div class="container page">

    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h1>My account</h1>

        <table class="table">
          <tr>
            <td>First Name</td>
            <td>Rob</td>
          </tr>
          <tr>
            <td>Surname</td>
            <td>Cleaton</td>
          </tr>
          <tr>
            <td>DOB</td>
            <td>19/03/1900</td>
          </tr>
          <tr>
            <td>Gender</td>
            <td>Male</td>
          </tr>
          <tr>
            <td>INR range</td>
            <td>2.5 - 3.5</td>
          </tr>
          <tr>
            <td>Medication</td>
            <td>Warfarin</td>
          </tr>
          <tr>
            <td>Current dosage</td>
            <td>11mg</td>
          </tr>
        </table>

        <table class="table">
          <h2>My clinic</h2>
          <tr>
            <td>Clinic name</td>
            <td>London Barts</td>
          </tr>
          <tr>
            <td>Contact number</td>
            <td>020 123 4567</td>
          </tr>
          <tr>
            <td>Address</td>
            <td>2.5 - 3.5</td>
          </tr>
        </table>
      </div>
    </div>
  </div><!-- /container -->

<?php include 'includes/footer.php'; ?>
