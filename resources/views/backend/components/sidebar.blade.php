<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="{{ asset('frontend/img/logo2edit.png') }}" alt="Servislet Akademi Logo"  style="opacity: .8">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="/backend/home/index" class="d-block">Servislet Akademi Admin</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="/backend/home/index" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Tables
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/backend/contact/index" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Contact Information</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/backend/contact-form/index" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Contact Forms</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/backend/content/index" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Contents</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/backend/employee/index" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Employees</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/backend/form/index" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Forms</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/backend/question/index" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Questions</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/backend/user/index" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Users</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="/backend/officeImage/index" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Office Images
                        </p>
                    </a>
                </li>

                <li class="nav-header">ACCOUNT</li>
                <li class="nav-item">
                    <a href="/logout" class="nav-link">
                        <i class="nav-icon fa fa-sign-out-alt" aria-hidden="true"></i>
                        <p>Logout</p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

