
<header class="navbar navbar-inverse navbar-fixed-top">
    <!-- Left Header Navigation -->
    <ul class="nav navbar-nav-custom">
        <!-- Main Sidebar Toggle Button -->
        <li>
            <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                <i class="fa fa-ellipsis-v fa-fw animation-fadeInRight" id="sidebar-toggle-mini"></i>
                <i class="fa fa-bars fa-fw animation-fadeInRight" id="sidebar-toggle-full"></i>
            </a>
        </li>
        <!-- END Main Sidebar Toggle Button -->
    </ul>
    <!-- END Left Header Navigation -->

    <!-- Right Header Navigation -->
    <ul class="nav navbar-nav-custom pull-right">

        {{--<!-- Alternative Sidebar Toggle Button -->
        <li>
            <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar-alt');this.blur();">
                <i class="gi gi-settings"></i>
            </a>
        </li>
        <!-- END Alternative Sidebar Toggle Button -->--}}

        <!-- User Dropdown -->
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{ auth()->user()->getImage }}" alt="avatar">
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
                <li class="dropdown-header">
                    <strong>{{ auth()->user()->fullname }}</strong>
                </li>
                <li>
                    <a href="{{ route('profile') }}">
                        <i class="fa fa-pencil-square fa-fw pull-right"></i>
                        {{ __('messages.admin.navbar.profile') }}
                    </a>
                </li>
                <li class="divider"><li>
                {{-- @can('settings-admin')
                    <li>
                        <a href="{{ route('settings') }}">
                            <i class="gi gi-settings fa-fw pull-right"></i>
                            {{ __('messages.admin.navbar.settings') }}
                        </a>
                    </li>
                @endcan --}}
                <li>
                    <form id="logout-form" action="{{ route('logout') }}" method="post">{!! csrf_field() !!}</form>
                    
                    </a>
                </li>
            </ul>
        </li>
        <!-- END User Dropdown -->
    </ul>
    <!-- END Right Header Navigation -->
</header>
