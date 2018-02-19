<!-- Navigation -->
<nav class="navbar navbar-expand navbar-dark" style="background-color: #2C3E50">
    <a class="sidebar-toggle text-light mr-3" id="sidebarCollapse">
        <i class="fa fa-bars"></i>
    </a>
    <a class="navbar-brand" href="<?php echo 'index.php'; ?>">
        <i class="fa fa-code-branch"></i>PHP Bootstrap Login</a>
    <div class="navbar-collapse collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
                    <i class="fa fa-user"></i>&nbsp;&nbsp;
                    <?php echo $_SESSION['username']; ?>&nbsp;&nbsp;
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Profile</a>
                    <a class="dropdown-item" href="#">Setting</a>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>