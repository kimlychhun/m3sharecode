<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Admin Panel</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                    <!--  -->    <h6 class="mb-0">John Wick</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                <!-- active -->
                    <a href="index.php" class="nav-item nav-link <?php echo ($page == 'dashboard.php') ? 'active' : ''; ?>">
                        <i class="fa fa-tachometer-alt me-2"></i>Dashboard
                    </a>
                    <a href="index.php?p=slideshow" class="nav-item nav-link <?php echo ($page == 'slideshow.php') ? 'active' : ''; ?>" ><i class="fa fa-laptop me-2"></i>Slideshow</a>
                    <a href="index.php?p=product" class="nav-item nav-link <?php echo ($page == 'product.php') ? 'active' : ''; ?>"><i class="fas fa-box me-2"></i>Product</a>
                    <a href="index.php?p=category" class="nav-item nav-link <?php echo ($page == 'category.php') ? 'active' : ''; ?>"><i class="fa fa-th me-2"></i>Category</a>
                    <a href="index.php?p=user" class="nav-item nav-link <?php echo ($page == 'user.php') ? 'active' : ''; ?>"><i class="fa fa-user me-2"></i>User</a>
                    <a href="index.php?p=configuration" class="nav-item nav-link <?php echo ($page == 'configuration.php') ? 'active' : ''; ?>"><i class="fa fa-cog me-2"></i>Configuration</a>
                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item">Blank Page</a>
                        </div>
                    </div> -->
                </div>
            </nav>
        </div>