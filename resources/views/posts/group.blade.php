@extends("layout.app")
@section("title") Groups @endsection("title")
@section("content")
   <!-- Loader starts-->
   <div class="loader-wrapper">
      <div class="theme-loader"></div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-sidebar" id="pageWrapper">
      <!-- Page Header Start-->
        @include("component.nav")
      <!-- Page Header Ends -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper sidebar-icon">
      <!-- page sidebar start -->
      @include("component.sidebar")
             <!-- Page Sidebar Ends-->
             @include("component.order-card")
        <!-- <div class="page-body"> -->

          <!-- Container-fluid starts-->
          	<!-- <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          <h3>Group View</h3>

        </div>

      </div>
    </div>
</div> -->


          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright 2023 © mohamed ashraf All rights reserved.</p>
              </div>
              <div class="col-md-6">
                <p class="pull-right mb-0">Hand crafted & made with <i class="fa fa-heart font-secondary"></i></p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
@endsection("content")
