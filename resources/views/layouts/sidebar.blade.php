<aside class="sidebar" id="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.dashboard')}}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul class="nav-content collapse" id="icons-nav" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="icons-bootstrap.html">
                        <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
                    </a>
                </li>
                <li>
                    <a href="icons-remix.html">
                        <i class="bi bi-circle"></i><span>Remix Icons</span>
                    </a>
                </li>
                <li>
                    <a href="icons-boxicons.html">
                        <i class="bi bi-circle"></i><span>Boxicons</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Icons Nav -->

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin.postcategory')}}">
                <i class="bi bi-person"></i>
                <span>Post Category</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin.post.index')}}">
                <i class="bi bi-person"></i>
                <span>Posts</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin.user')}}">
                <i class="bi bi-person"></i>
                <span>Users</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin.all')}}">
                <i class="bi bi-person"></i>
                <span>Admins</span>
            </a>
        </li>

    </ul>

</aside><!-- End Sidebar-->