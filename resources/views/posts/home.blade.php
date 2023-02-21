@extends("layout.app")
@section("title") groups @endsection("title")

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
        <div class="page-body">
          <!-- Container-fluid starts-->
          	<div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
        <h3>Select Group</h3>
          <!-- <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="https://laravel.pixelstrap.com/viho/dashboard">Home</a></li>
              <li class="breadcrumb-item">Charts</li>
		<li class="breadcrumb-item active">Chartist Chart</li>
          </ol> -->
        </div>
        <div class="col-lg-6">
          <!-- Bookmark Start-->
          <div class="bookmark">
            <!-- <ul>
              <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="inbox"></i></a></li>
              <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
              <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
              <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
              <li>
                <a href="javascript:void(0)"><i class="bookmark-search" data-feather="star"></i></a>
                <form class="form-inline search-form">
                  <div class="form-group form-control-search">
                    <input type="text" placeholder="Search..">
                  </div>
                </form>
              </li>
            </ul> -->
          </div>
          <!-- Bookmark Ends-->
        </div>
      </div>
    </div>
</div>
<div class="container-fluid">

	</div>

    @include("component.order-group")

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
