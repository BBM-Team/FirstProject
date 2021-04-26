<div
  class="modal fade"
  id="signupModal"
  tabindex="-1"
  role="dialog"
  aria-labelledby="signupModal"
  aria-hidden="true"
>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Signup</h4>
        <button
          type="button"
          class="close"
          data-dismiss="modal"
          aria-hidden="true"
        >
          &times;
        </button>
      </div>

      <div class="modal-body">
        <div class="modal-body-scroller">
          <div class="container-content-middle">
            <form action="assets/signup.inc.php" method="post" role="form" class="mx-auto text-center signup-form">
              <div class="form-group">
                <input
                  type="text"
                  name= "name"
                  class="form-control"
                  placeholder="First Name"
                  required
                />
              </div>
              <div class="form-group">
                <input
                  type="text"
                  name= "nameL"
                  class="form-control"
                  placeholder="Last Name"
                  required
                />
              </div>
              <div class="form-group">
                <input
                  type="text"
                  name= "email"
                  class="form-control"
                  placeholder="Email"
                  required
                />
              </div>
              <div class="form-group">
                <input
                  type="password"
                  name= "password"
                  class="form-control"
                  placeholder="Password"
                  required
                />
              </div>
              <div class="form-group mb-3">
                <input
                  type="password"
                  name= "passwordc"
                  class="form-control"
                  placeholder="Confirm Password"
                  required
                />
              </div>

              <div class="mb-5">
                <button
                  type="submit"
                  name="submit"
                  class="btn btn-secondary"
                  >
                  Sign up
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
