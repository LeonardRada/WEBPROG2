        <!-- - - - - - - - -->
        <!-- LOGIN MODAL -->
        <!-- - - - - - - - -->
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <form class="" action="project-view/content/project-content-login.php" method="post">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="loginModalLabel">Login Form</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <!-- USERNAME INPUT -->
                <div class="modal-body">
                  <div class="container mt-1">
                    <div class="row">
                      <!-- USER ICON -->
                      <div class="col-1">
                        <span style="font-size: 30px;">
                          <i class="fas fa-user icon"></i>
                        </span>
                      </div>
                      <div class="col-11">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required >
                      </div>
                    </div>
                  </div>

                <!-- PASSWORD INPUT -->
                  <div class="container mt-3">
                    <div class="row">
                      <!-- PASSWORD ICON -->
                      <div class="col-1">
                        <span style="font-size: 30px;">
                          <i class="fas fa-key icon"></i>
                        </span>
                      </div>
                      <div class="col-11">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" minlength="8" required >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <input type="submit" class="btn btn-primary" value="Login">
                </div>
              </div>
            </form>
          </div>
        </div>
