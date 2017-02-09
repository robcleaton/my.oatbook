<?php
$pageTitle = "Community";
  include 'includes/header.php';
  include 'includes/report-card.php';
  include 'includes/support.php';
  include 'includes/newPost.php'; ?>


  <div class="container">

    <div class="row">
      <h1>Community</h1>

      <!-- Button trigger modal -->
      <div class="col-md-2 col-md-offset-10">
        <button type="button" class="btn btn-primary btn-md" style="float:right;" data-toggle="modal" data-target="#newPostModal">
          Post a question
        </button>
      </div>

    </div>

    <!-- Post Block 1 -->
    <div class="row postBlock">
        <div class="col-sm-1">
          <div class="user center-block"></div>
        </div>

        <div class="col-sm-10">
          <h3><a href="#">Living with warfarin</a></h3>
          <p>Rob Cleaton <span class="date">2 hours ago</span></p>
        </div>

        <div class="col-sm-1">
          <p><span class="count">21</span>replies</p>
        </div>
    </div>

    <!-- Post Block 2 -->
    <div class="row postBlock">
        <div class="col-sm-1">
          <div class="user center-block"></div>
        </div>

        <div class="col-sm-10">
          <h3><a href="#">Eating your greens</a></h3>
          <p>Rob Cleaton <span class="date">2 hours ago</span></p>
        </div>

        <div class="col-sm-1">
          <p><span class="count">21</span>replies</p>
        </div>
    </div>

    <!-- Post Block 3 -->
    <div class="row postBlock">
        <div class="col-sm-1">
          <div class="user center-block"></div>
        </div>

        <div class="col-sm-10">
          <h3><a href="#">Setting medication reminders</a></h3>
          <p>Rob Cleaton <span class="date">2 hours ago</span></p>
        </div>

        <div class="col-sm-1">
          <p><span class="count">21</span>replies</p>
        </div>
    </div>


    <!-- Pagination -->
    <div class="row">
      <div class="center-block" style="width:250px;">
        <nav aria-label="Page navigation">
          <ul class="pagination">
            <li>
              <a href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li>
              <a href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>

  </div><!-- /container -->

<?php include 'includes/footer.php'; ?>
