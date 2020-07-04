        <!-- - - - - - - - -->
        <!-- SIGN-UP MODAL -->
        <!-- - - - - - - - -->
        <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <form class="" action="project-view/process/signup.php" method="post">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="signupModalLabel">Sign-Up Form</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">
                  <!-- USERNAME INPUT -->
                  <div class="container mt-1">
                    <div class="row">
                      <div class="col-12">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required >
                      </div>
                    </div>
                  </div>

                  <!-- PASSWORD INPUT -->
                  <div class="container mt-3">
                    <div class="row">
                      <div class="col-12">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" minlength ="8" required >
                      </div>
                    </div>
                  </div>

                  <!-- FIRST NAME INPUT -->
                  <div class="container mt-3">
                    <div class="row">
                      <div class="col-12">
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" required >
                      </div>
                    </div>
                  </div>

                  <!-- MIDDLE NAME INPUT -->
                  <div class="container mt-3">
                    <div class="row">
                      <div class="col-12">
                        <input type="text" class="form-control" id="middlename" name="middlename" placeholder="Middle Name" >
                      </div>
                    </div>
                  </div>

                  <!-- LAST NAME INPUT -->
                  <div class="container mt-3">
                    <div class="row">
                      <div class="col-12">
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" required >
                      </div>
                    </div>
                  </div>

                  <!-- SUFFIX INPUT -->
                  <div class="container mt-3">
                    <div class="row">
                      <div class="col-12">
                        <input type="text" class="form-control" id="suffix" name="suffix" placeholder="Suffix" >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <input type="submit" class="btn btn-primary" value="Sign-Up">
                </div>
              </div>
            </form>
          </div>
        </div>
