        <!-- Page Sidebar Start-->
        <header class="main-nav">
    <div class="sidebar-user text-center">
        <a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="{{ asset('assets/images/dashboard/1.png') }}" alt="" />
        <div class="badge-bottom"><span class="badge badge-primary">New</span></div>
        <a href="user-profile"> <h6 class="mt-3 f-14 f-w-600">Mohamed Ashraf</h6></a>
        <p class="mb-0 font-roboto">Human Resources Department</p>
        <ul>


            <li>
                <span><span class="counter">9</span>k</span>
                <p>Orders Done </p>

            </li>
        </ul>
    </div>
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title " href="{{route('home')}}"><i data-feather="home"></i><span>home</span></a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title " href="{{route('posts.group')}}"><i data-feather="database"></i><span>Groups</span></a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="airplay"></i><span>Widgets</span></a>
                        <ul class="nav-submenu menu-content"  style="display: none;">
                            <li><a href="https://laravel.pixelstrap.com/viho/widgets/general-widget" class="">General</a></li>
                            <li><a href="https://laravel.pixelstrap.com/viho/widgets/chart-widget" class="">Chart</a></li>
                        </ul>
                    </li>
                         <li>
                        <a class="nav-link menu-title link-nav " href="https://laravel.pixelstrap.com/viho/knowledgebase"><i data-feather="database"></i><span>Knowledgebase</span></a>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
