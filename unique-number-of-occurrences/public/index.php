<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

<body>
    <!-- Navigation -->

        

    <!-- Page Content -->
    <div class="container">

        <div class="row">

          <!--category here-->

            <div class="col-md-12">

                <div class="pt-5 d-flex" >
                    <div class="col-9"><h2>Simple algorithm calculator</h2></div>
                    <div class="col-3" >
                        <button type="button" class="btn btn-primary pull-right" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Enter integers 
                        </button>
                    </div>
                    
                </div>
                <hr>

                <div class="card">
                  <div class="card-header">
                    <i class="fa fa-list fa-fw"></i> Number of occurrences for each integer
                  </div>
                  <div class="card-body">
                    <table class="table table-bordered table-hover table-striped text-center">
                              <thead>

                                  <tr>
                                       <!-- <th>No #</th> -->
                                       <th>Integer</th>
                                       <th>Occurrences</th>
                                  </tr>
                                  <?php calculate_occurrences() ; ?>


                                </thead>
                                <tbody>

                            </tbody>
                        </table>

                        <?php reset_button (); ?>

                  </div>
                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->








<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Number into the array</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="index.php" method="post">
            <div class="form-floating">
              <textarea 
                    class="form-control" 
                    placeholder="Leave a comment here" 
                    id="floatingTextarea2" 
                    style="height: 100px"
                    name="array"></textarea>
              <label for="floatingTextarea2">Enter array of integers and saparate it by comma..</label>
            </div>
        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" name="calculate" value="calculate">
      </div>

      </form>
    </div>
  </div>
</div>

<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>