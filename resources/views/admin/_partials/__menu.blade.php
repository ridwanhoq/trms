<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>::MAIN MENU::</h3>
        </div>

        <ul class="list-unstyled components">
            <p>Menu</p>
            <li>
                <a href="#">Dashboard</a>
            </li>
            {{-- <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Categories</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="#">Categories</a>
                    </li>
                    <li>
                        <a href="#">Page 2</a>
                    </li>
                    <li>
                        <a href="#">Page 3</a>
                    </li>
                </ul>
            </li> --}}
            <li>
                <a href="#">{{ __('Categories') }}</a>
            </li>

            <li>
                <a href="">{{ __('Trainings') }}</a>
            </li>

            <li>
                <a href="#">Contact</a>
            </li>
        </ul>
    </nav>

</div>




<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
<ul class="collapse list-unstyled" id="pageSubmenu">
    <li>
        <a href="#">Page 1</a>
    </li>
    <li>
        <a href="#">Page 2</a>
    </li>
    <li>
        <a href="#">Page 3</a>
    </li>
</ul>


<div id="content">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-info">
                <i class="fas fa-align-left"></i>
                <span>Toggle Sidebar</span>
            </button>

        </div>
    </nav>
</div>
