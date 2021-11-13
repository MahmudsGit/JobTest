<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{ route('dashboard') }}" class="site_title"><i class="fa fa-paw"></i> <span>{{ __('JobTest') }}</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{ Auth::user()->image }}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ Auth::user()->name }}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>Tasks 3</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        </ul>
                    </li>
                    <li>
                        <a><i class="fa fa-edit"></i> Seller <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('seller.create') }}">Add Seller</a></li>
                            <li><a href="{{ route('seller.index') }}">Seller Table</a></li>
                        </ul>
                    </li>
                    <li>
                        <a><i class="fa fa-edit"></i> Order <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('order.create') }}">Add Order</a></li>
                            <li><a href="{{ route('order.index') }}">Order Table</a></li>
                        </ul>
                    </li>
                    <li>
                        <a><i class="fa fa-desktop"></i> Query  <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('one.index') }}">Query 1</a></li>
                            <li><a href="{{ route('two.index') }}">Query 2</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <div class="menu_section">
                <h3>Tasks 4</h3>
                <ul class="nav side-menu">
                    <li>
                        <a href="{{ asset('palindrome.php') }}" target="_blank"><i class="fa fa-table"></i> PHP FUNCTION </a>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3>Tasks 5</h3>
                <ul class="nav side-menu">
                    <li>
                        <a href="{{ asset('javascript.php') }}" target="_blank"><i class="fa fa-table"></i> JAVASCRIPT FUNCTION </a>
                    </li>
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   this.closest('form').submit();">
                    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                </a>
            </form>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>
