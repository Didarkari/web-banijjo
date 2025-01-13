<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                    <li class="nav-item ">
                        
                        <a class="nav-link {{ \Request::route()->getName() == 'dashboard' ? "active" : '' }}"  href="{{route('dashboard')}}"><i
                                class="fa fa-fw fa-user-circle"></i>Dashboard </a>
                        
                    </li>



                    {{-- <li class="nav-item">
                      <a class="nav-link" href="{{ route('category.index') }}" ><i class="fa-solid fa-list"></i>Category</a>
                  </li> --}}

                    <li class="nav-item">
                        <a class="nav-link {{ \Request::route()->getName() == 'category.index' ? "active" : '' }} {{ \Request::route()->getName() == 'sub-category.index' ? "active" : '' }} {{ \Request::route()->getName() == 'product.index' ? "active" : '' }}" href="#" data-toggle="collapse" aria-expanded="false"
                            data-target="#submenu-22" aria-controls="submenu-22"><i
                                class="fa-solid fa-list"></i>Category Details</a>
                    </li>

                    <div id="submenu-22" class="collapse submenu" style="">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link {{ \Request::route()->getName() == 'category.index' ? "active" : '' }}" href="{{ route('category.index') }}">Category</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ \Request::route()->getName() == 'sub-category.index' ? "active" : '' }}" href="{{ route('sub-category.index') }}">Sub Category</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ \Request::route()->getName() == 'product.index' ? "active" : '' }}" href="{{ route('product.index') }}">Product</a>
                            </li>
                        </ul>
                    </div>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link {{ \Request::route()->getName() == 'admin.orders' ? "active" : '' }}" href="{{ route('admin.orders') }}" href="#" data-toggle="collapse" aria-expanded="false"
                            data-target="#submenu-2" aria-controls="submenu-2"><i
                                class="fa fa-fw fa-rocket"></i>Orders</a>
                    </li>

                    <div id="submenu-2" class="collapse submenu" style="">
                        <ul class="nav flex-column">

                            <li class="nav-item">
                                <a class="nav-link {{ \Request::route()->getName() == 'admin.orders' ? "active" : '' }}" href="{{ route('admin.orders') }}">Order Details</a>
                            </li>

                        </ul>
                    </div>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>
