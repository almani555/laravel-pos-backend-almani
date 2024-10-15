<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="{{ asset('img/avatar/user.png') }}" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hi,
                {{ auth()->user()->name }}</div>
            <div class="email">{{ auth()->user()->email }}</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                    <li role="seperator" class="divider"></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">lock</i>Ganti Password</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                    <li role="seperator" class="divider"></li>
                    <li><a href="#"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit()"><i
                                class="material-icons">input</i>Sign Out</a></li>
                </ul>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN MENU</li>
            <li class="{{ Request::routeIs('home.index') ? 'active' : '' }}">
                <a href="{{ route('home.index') }}">
                    <i class="material-icons">dashboard</i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="{{ Request::routeIs('user.index') || Request::routeIs('user.create') || Request::routeIs('user.edit') ? 'active' : '' }}">
                <a href="javascript:void(0);" class="menu-toggle {{ Request::routeIs('user.index') ? 'toggled' : '' }}">
                    <i class="material-icons">person_add</i>
                    <span>Users</span>
                </a>
                <ul class="ml-menu">
                    <li class="{{ Request::routeIs('user.index') || Request::routeIs('user.create') || Request::routeIs('user.edit') ? 'active' : '' }}">
                        <a href="{{ route('user.index') }}">
                            <span>All Users</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="{{ Request::routeIs('product.index') || Request::routeIs('product.create') || Request::routeIs('product.edit') ? 'active' : '' }}">
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">local_mall</i>
                    <span>Products</span>
                </a>
                <ul class="ml-menu">
                    <li class="{{ Request::routeIs('product.index') || Request::routeIs('product.create') || Request::routeIs('product.edit') ? 'active' : '' }}">
                        <a href="{{ route('product.index') }}">
                            <span>All Products</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="{{ Request::routeIs('order.index') || Request::routeIs('order.show') ? 'active' : '' }}">
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">receipt</i>
                    <span>Orders</span>
                </a>
                <ul class="ml-menu">
                    <li class="{{ Request::routeIs('order.index') || Request::routeIs('order.show') ? 'active' : '' }}">
                        <a href="{{ route('order.index') }}">
                            <span>All Orders</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; 2024 <a href="{{ route('home.index') }}">MyPOS - Point of Sales</a>.
        </div>
        <div class="version">
            <b>Version: </b> 1.0.5
        </div>
    </div>
    <!-- #Footer -->
</aside>
