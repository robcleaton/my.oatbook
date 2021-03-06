
  <div class="feedback">
    <p>We would love to hear your <a href="#" data-toggle="modal" data-target="#supportModal">feedback</a></p>
  </div>

  <footer class="container-fluid">
    <div class="row">
      <div class="center-block">
        <a href="/"><h4 class="oatbook center-block">OATBook</h4></a>
        <p class="text-center">&copy; <?php echo date("Y"); ?> OATBook</p>
        <ul class="list-inline text-center">
          <li><a href="/">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="community.php">Community</a></li>
          <li><a href="support.php" data-toggle="modal" data-target="#supportModal">Support</a></li>
        </ul>

        <ul class="list-inline social">
          <li><a href="https://twitter.com/warfaceuk" target="_blank"><i class="fa fa-twitter"></i></a></li>
          <li><a href="https://www.instagram.com/oatbook/" target="_blank"><i class="fa fa-instagram"></i></a></li>
        </ul>
      </div>

    </div><!-- /row -->
  </footer><!-- /container-fluid -->

  <?php include'analytics.php'; ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../assets/javascripts/bootstrap.min.js"></script>
    <script>
      $(function () {
        $('[data-toggle="tooltip"]').tooltip()
      })
    </script>
    <script>

        $('#myAlert').on('closed.bs.alert', function () {
      // do something…
    })
</script>

</body>
</html>
