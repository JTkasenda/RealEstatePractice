<!DOCTYPE html>
<html lang="en">
@include('admin.body.header')
<body>
	<div class="main-wrapper">
		<div class="page-wrapper full-page">
			<div class="page-content d-flex align-items-center justify-content-center">

				<div class="row w-100 mx-0 auth-page">
					<div class="col-md-8 col-xl-6 mx-auto">
						<div class="card">
							<div class="row">
                <div class="col-md-4 pe-md-0">
                  <div class="auth-side-wrapper">
                    
                  </div>
                </div>
                <div class="col-md-8 ps-md-0">
                  <div class="auth-form-wrapper px-4 py-5">
                    <a href="#" class="noble-ui-logo logo-light d-block mb-2">Easy<span>Learning</span></a>
                    <h5 class="text-muted fw-normal mb-4">Welcome back! Log in to your account.</h5>
                    <form class="forms-sample" method="POST" action="{{route('login')}}">
                        @csrf
                      <div class="mb-3">
                        <label for="login" class="form-label">Email/Name/Phone</label>
                        <input type="text" name="login" class="form-control" id="login" placeholder="Email">
                      </div>
                      <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" autocomplete="current-password" placeholder="Password">
                      </div>
                      <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="authCheck">
                        <label class="form-check-label" for="authCheck">
                          Remember me
                        </label>
                      </div>
                      <div>
                       
                        <button type="submit" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                          Login
                        </button>
                      </div>
                      <a href="register.html" class="d-block mt-3 text-muted">Not a user? Sign up</a>
                    </form>
                  </div>
                </div>
              </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- core:js -->
	<script src="{{asset('backend/assets/vendors/core/core.js')}}"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="{{asset('backend/assets/vendors/feather-icons/feather.min.js')}}"></script>
	<script src="{{asset('backend/assets/js/template.js')}}"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
	<!-- End custom js for this page -->

</body>
</html>