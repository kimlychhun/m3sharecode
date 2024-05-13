<?php
    $page = "dashboard.php";
    if(isset($_GET['p']))
    {
        $p = $_GET['p'];
        switch($p)
        {
            case "slideshow":
                $page ="slideshow.php";
                break;

            case "product":
                $page ="product.php";
                break;       

            case "category":
                $page ="category.php";
                break; 
                
            case "user":
                $page ="user.php";
                break;  

            case "configuration":
                $page ="configuration.php";
                break;  
        }
    }
?>




<!DOCTYPE html>
<html lang="en">

<?php include "includes/head.php"?>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <?php include "includes/nav.php"?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php include "includes/header.php"?>
            <!-- Navbar End -->
 
        <!-- content 2 start -->
        <?php include $page ?>
        <!-- content 2 end -->

            <!-- Footer Start -->
            <?php include "includes/footer.php"?>
            <!-- Footer End -->

        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <?php include "includes/foot.php"?>

</body>

</html>