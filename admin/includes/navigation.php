<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <h1 style="color: white;">OFAS</h1>
            </span>
            <span class="logo-lg">
                <h1 style="color: white;">OFAS</h1>
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <h1 style="color: white;">OFAS</h1>
            </span>
            <span class="logo-lg">
                <h1 style="color: white;">OFAS</h1>

            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="nav-main-item" style="color: white;">
                    <a class="nav-link menu-link" href="index.php" role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-home-3-line"></i> <span data-key="t-apps">HOME</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarUI">
                        <i class="ri- ri-group-line"></i> <span data-key="t-base-ui">USERS</span>
                    </a>
                    <div class="collapse menu-dropdown mega-dropdown-menu" id="sidebarUI">
                        <div class="row">
                            <div class="col-lg-4">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="./staff.php" class="nav-link" data-key="t-alerts">Staffs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./students.php" class="nav-link" data-key="t-badges">Students</a>
                                    </li>

                                    <!-- <li class="nav-item">
                                        <a href="./staff.php" class="nav-link" data-key="t-calendar"> Special exam form </a>
                                    </li> -->
                                </ul>
                            </div>

                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarAdvanceUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAdvanceUI">
                        <i class="ri-stack-line"></i> <span data-key="t-advance-ui">COURSE</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAdvanceUI">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="./add_course.php" class="nav-link" data-key="t-scrollSpy">Add Course</a>
                            </li>
                            <li class="nav-item">
                                <a href="./view_course.php" class="nav-link" data-key="t-scrollSpy">View Course</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarTables" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTables">
                        <i class="ri-layout-grid-line"></i> <span data-key="t-tables">DEPARTMENT</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarTables">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="./add_dept.php" class="nav-link" data-key="t-basic-tables">Add department</a>
                            </li>
                            <li class="nav-item">
                                <a href="./view_dept.php" class="nav-link" data-key="t-grid-js">View Department</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarIcons" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarIcons">
                        <i class="ri-compasses-2-line"></i> <span data-key="t-icons">MODULE</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarIcons">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="./add_module.php" class="nav-link" data-key="t-feather">Add Module</a>
                            </li>
                            <li class="nav-item">
                                <a href="./view_module.php" class="nav-link"> <span data-key="t-crypto-svg">View Module</span></a>
                            </li>
                        </ul>
                    </div>
                </li>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>