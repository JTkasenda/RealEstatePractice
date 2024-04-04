<!DOCTYPE html>
<html lang="en">
@include('admin.body.header')
<body>
	<div class="main-wrapper">
    @include('admin.body.sidebar')
    
		<!-- partial -->
	
		<div class="page-wrapper">
					
			<!-- partial:partials/_navbar.html -->
			@include('admin.body.navbar')
			<!-- partial -->

	<div class="page-content">

        @yield('admin')
	</div>

			<!-- partial:partials/_footer.html -->
      @include('admin.body.footer')
			<!-- partial -->
		
		</div>
	</div>

	<!-- core:js -->
	<script src="{{asset('/backend/assets/vendors/core/core.js')}}"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
  <script src="{{asset('/backend/assets/vendors/flatpickr/flatpickr.min.js')}}"></script>
  <script src="{{asset('/backend/assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="{{asset('/backend/assets/vendors/feather-icons/feather.min.js')}}"></script>
	<script src="{{asset('/backend/assets/js/template.js')}}"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
  <script src="{{asset('/backend/assets/js/dashboard-dark.js')}}"></script>
	<!-- End custom js for this page -->

</body>
</html>    