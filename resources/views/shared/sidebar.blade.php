<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="../dashboard/images/faces/face1.jpg" alt="profile">
                    <span class="login-status online"></span>
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">{{ auth()->user()->name }} {{ auth()->user()->surname }}</span>
                    <span class="text-secondary text-small">{{ auth()->user()->role }}</span>
                </div>
            </a>
        </li>
        @if (auth()->user()->role == 'admin')
            <li class="nav-item">
                <a class="nav-link" href="/admin/home">
                    <span class="menu-title">Analytics</span>
                    <i class="mdi mdi-home menu-icon"></i>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic1" aria-expanded="false"
                    aria-controls="ui-basic">
                    <span class="menu-title">Books</span>
                    <i class="menu-arrow"></i>
                    <i class="mdi mdi-library-shelves menu-icon"></i>

                </a>
                <div class="collapse" id="ui-basic1">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="/admin/books">All Books</a></li>
                        <li class="nav-item"> <a class="nav-link"
                                href="/admin/addbook">Add new Book</a></li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic2" aria-expanded="false"
                    aria-controls="ui-basic2">
                    <span class="menu-title">Categories</span>
                    <i class="menu-arrow"></i>
                    <i class="mdi mdi-shape menu-icon"></i>

                </a>
                <div class="collapse" id="ui-basic2">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="/admin/categories">All Categories</a></li>
                        <li class="nav-item"> <a class="nav-link"
                                href="/admin/addcategory">Add new Category</a></li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic3" aria-expanded="false"
                    aria-controls="ui-basic">
                    <span class="menu-title">Languages</span>
                    <i class="menu-arrow"></i>
                    <i class="mdi mdi-alpha-t-box menu-icon"></i>

                </a>
                <div class="collapse" id="ui-basic3">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="/admin/languages">All Languages</a></li>
                        <li class="nav-item"> <a class="nav-link"
                                href="/admin/addlanguage">Add new Language</a></li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic4" aria-expanded="false"
                    aria-controls="ui-basic">
                    <span class="menu-title">Users</span>
                    <i class="menu-arrow"></i>
                    <i class="mdi mdi-account-group menu-icon"></i>

                </a>
                <div class="collapse" id="ui-basic4">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="/admin/users">All Users</a></li>
                        <li class="nav-item"> <a class="nav-link"
                                href="/admin/adduser">Add new User</a></li>
                    </ul>
                </div>
            </li>
        @endif
    </ul>
</nav>
