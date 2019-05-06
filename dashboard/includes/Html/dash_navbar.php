<header class="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid d-flex align-items-center justify-content-between">
                <div class="navbar-header">
                    <!-- Navbar Header--><a href="index.php" class="navbar-brand">
                        <div class="brand-text brand-big visible text-uppercase"><strong
                                class="text-primary">Autism</strong><strong>Dashboard</strong></div>
                        <div class="brand-text brand-sm"><strong class="text-primary">A</strong><strong>D</strong></div>
                    </a>
                    <!-- Sidebar Toggle Btn-->
                    <button class="sidebar-toggle"><i class="fas fa-arrow-left"></i></button>
                </div>
                <div class="right-menu list-inline no-margin-bottom">

                    <div class="list-inline-item logout">
                        <a id="logout" href="logout.php" class="nav-link">
                            <span class="d-none d-sm-inline">Logout </span>
                            <i class="icon fa fa-sign-out-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="d-flex align-items-stretch">
        <nav id="sidebar">

            <div class="sidebar-header d-flex align-items-center">
                <div class="avatar"><img src="./public/img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle">
                </div>
                <div class="title">
                    <h1 class="h5">Mohamad Murad</h1>
                    <p>Web Developer</p>
                </div>
            </div>

            <span class="heading">Main</span>

            <ul class="list-unstyled">
                <li class="active">
                    <a href="index.php">
                        <i class="icon fa fa-home"></i>
                        Home
                    </a>
                </li>
                <li>
                    <a href="charts.php">
                        <i class="fa fa-chart-line"></i>
                        Charts
                    </a>
                </li>
                <li>
                    <a href="#ManageUsers" aria-expanded="false" data-toggle="collapse">
                        <span class="collapse-after-right fas fa-chevron-left"></span>
                       
                        <i class="fas fa-users-cog"></i>
                        Users
                    </a>
                    <ul id="ManageUsers" class="collapse list-unstyled ">
                        <li><a href="allusers.php"><i class="fa fa-users"></i>All User</a></li>
                        <li><a href="adduser.php"><i class="fa fa-user-plus"></i>Add User</a></li>
                    </ul>
                </li>

            </ul>

            <span class="heading">Acount</span>
            <ul class="list-unstyled">
                <li class="active">
                    <a href="index.php">
                        <i class="icon fa fa-user-circle"></i>
                        My Acount
                    </a>
                </li>
                

            </ul>


        </nav>