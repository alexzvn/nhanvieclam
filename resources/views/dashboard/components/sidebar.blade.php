<!--  BEGIN SIDEBAR  -->
<div class="sidebar-wrapper sidebar-theme" aria-expanded="true">
 
    <nav id="sidebar">

        <ul class="navbar-nav theme-brand flex-row  text-center">
            <li class="nav-item theme-logo">
                <a href="index.html">
                    <img src="{{ asset('assets/img/90x90.jpg') }}" class="navbar-logo" alt="logo">
                </a>
            </li>
            <li class="nav-item theme-text">
                <a href="{{ route('manager.dashboard') }}" class="nav-link"> NhanViecLam </a>
            </li>
        </ul>

        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu @active('manager.dashboard')">
                <a href="{{ route('manager.dashboard') }}" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span>Dashboard</span>
                    </div>
                    {{-- <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div> --}}
                </a>
                {{-- <ul class="collapse submenu recent-submenu mini-recent-submenu list-unstyled show" id="dashboard" data-parent="#accordionExample">
                    <li class="">
                        <a href="index.html"> Analytics </a>
                    </li>
                    <li>
                        <a href="index2.html"> Sales </a>
                    </li>
                </ul> --}}
            </li>

            {{-- <li class="menu">
                <a href="apps_chat.html" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i data-feather="bookmark"></i>
                        <span>Danh mục</span>
                    </div>
                </a>
            </li>

            <li class="menu">
                <a href="apps_chat.html" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i data-feather="file-text"></i>
                        <span>Việc làm</span>
                    </div>
                </a>
            </li>

            <li class="menu">
                <a href="apps_chat.html" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i data-feather="shopping-cart"></i>
                        <span>Lịch sử mua/bán</span>
                    </div>
                </a>
            </li>

            <li class="menu">
                <a href="apps_chat.html" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i data-feather="credit-card"></i>
                        <span>Lịch sử nạp tiền</span>
                    </div>
                </a>
            </li> --}}

            <li class="menu @active('manager.customer*')">
                <a href="#customers"data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i data-feather="users"></i><span>Khách hàng</span>
                    </div>
                    <div>
                        <i data-feather="chevron-right"></i>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="customers" data-parent="#accordionExample">
                    <li class="@active('manager.customer.create')"><a href="{{ route('manager.customer.create') }}">Tạo mới</a></li>
                    <li class="@active('manager.customer')"><a href="{{ route('manager.customer') }}">Tất cả</a></li>
                </ul>
            </li>


            <li class="menu">
                <a href="#managers" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i data-feather="user"></i><span>Quản lý</span>
                    </div>
                    <div>
                        <i data-feather="chevron-right"></i>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="managers" data-parent="#accordionExample">
                    <li><a href="index.html"> Tạo mới </a></li>
                    <li><a href="index2.html"> Tất cả </a></li>
                </ul>
            </li>

        </ul>
        
    </nav>

</div>
<!--  END SIDEBAR  -->
