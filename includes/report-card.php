<!-- Modal 2 -->
<div class="modal fade" id="reportCardModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Report card</h4>
      </div>
      <div class="modal-body">

          <!-- Graph -->
          <div class="jumbotron graph">
            <div class="container">
              This is the graph area...
            </div>
          </div><!-- /jumbotron -->

          <!-- Stats -->
          <div class="row stats">

            <!-- Previous reading -->
            <div class="col-md-6 previousRead">
              <h2 class="text-center"><span class="ico"></span>2.9</h2>
              <h3 class="text-center">Previous INR</h3>
              <p class="text-center date">Tue 21st Feb</p></p>
            </div>

            <!-- Next appointment -->
            <div class="col-md-5 nextApp">
              <h2 class="text-center"><span class="ico"></span>19<span class="month">Mar</span></h2>
              <h3 class="text-center">Next appointment</h3>
              <p class="text-center date">Fri 7:00am</p>
            </div>

            <!-- Weekly dosages -->
            <div class="col-md-10 col-sm-offset-1">
              <ul class="list-inline weeklyDosages">
                <li><span class="dose" data-toggle="tooltip" title="11mg"></span><label>Mo</label></li>
                <li><span class="dose" data-toggle="tooltip" title="11mg"></span><label>Tu</label></li>
                <li><span class="dose" data-toggle="tooltip" title="11mg"></span><label>We</label></li>
                <li><span class="dose" data-toggle="tooltip" title="11mg"></span><label>Th</label></li>
                <li><span class="dose" data-toggle="tooltip" title="11mg"></span><label>Fr</label></li>
                <li><span class="dose" data-toggle="tooltip" title="11mg"></span><label>Sa</label></li>
                <li><span class="dose" data-toggle="tooltip" title="11mg"></span><label>Su</label></li>
              </ul>
              <p class="text-center date">wc Mon 19 Feb</p>
            </div>

          </div><!-- /stats -->

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
              <td></td>
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
              <td><span class="date">20<sup>th</sup></span> <span class="month">Feb</span></td>
              <td></td>
              <td class="text-right"><span class="missed"><span class="dose">8</span></span></td>
            </tr>
          </table>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <!-- Single button -->
        <div class="btn-group dropup">
          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Share <span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
            <li><a href="#">Share private link</a></li>
            <li><a href="#">Email report</a></li>
            <li><a href="#">Download report</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div><!-- /Modal 2 -->
