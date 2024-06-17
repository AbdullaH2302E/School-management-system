<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22" />
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-dark.png" alt="" height="21" />
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22" />
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-light.png" alt="" height="21" />
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu"></div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="index.html">
                        <i class="las la-house-damage"></i>
                        <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarInvoiceManagement" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarInvoiceManagement">
                        <i class="las la-file-invoice"></i>
                        <span data-key="t-invoices">Attendance</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarInvoiceManagement">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route('CreateAttendence')}}" class="nav-link">Add attendance</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('attendence')}}" class="nav-link" >View attendance</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarAuthentication" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuthentication">
                        <i class="las la-cog"></i>
                        <span data-key="t-authentication">Classroom</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAuthentication">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="auth-signin.html" class="nav-link" data-key="t-signin">Grades</a>
                            </li>
                            <li class="nav-item">
                                <a href="auth-signup.html" class="nav-link" data-key="t-signup">Class Performance</a>
                            </li>
                            <li class="nav-item">
                                <a href="auth-pass-reset.html" class="nav-link" data-key="t-password-reset">Assignment</a>
                            </li>
                            <li class="nav-item">
                                <a href="auth-lockscreen.html" class="nav-link" data-key="t-lock-screen">Homework/Tasks</a>
                            </li>
                            <li class="nav-item">
                                <a href="auth-lockscreen.html" class="nav-link" data-key="t-lock-screen">Schedule</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarUI">
                        <i class="las la-pen-nib"></i>
                        <span data-key="t-bootstrap-ui">Courses</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarAdvanceUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAdvanceUI">
                        <i class="las la-share-alt"></i>
                        <span data-key="t-advance-ui">Exams</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarForms" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarForms">
                        <i class="lab la-wpforms"></i>
                        <span data-key="t-forms">Results</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarTables" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTables">
                        <i class="las la-table"></i>
                        <span data-key="t-tables">Notifications</span>
                    </a>
                </li>

                <div class="help-box text-center">
                    <img src="assets/images/create-invoice.png" class="img-fluid" alt="" />
                    <p class="mb-3 mt-2 text-muted">Upgrade To Pro For More Features</p>
                    <div class="mt-3">
                        <a href="invoice-add.html" class="btn btn-primary">Create Invoice</a>
                    </div>
                </div>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
