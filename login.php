<?php
require_once("login_service.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Company Profile System By Susmita Biswas</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="img/favicon.png" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/custom.css" rel="stylesheet">
</head>

<body>

<!-- Spinner Start -->
<div id="spinner"
     class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->

<!-- Topbar Start -->
<div class="container-fluid bg-primary px-5 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-lg-12 text-center text-lg-end mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://twitter.com/"><i
                            class="fab fa-twitter fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                   href="https://www.facebook.com/"><i class="fab fa-facebook-f fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                   href="https://www.linkedin.com/"><i class="fab fa-linkedin-in fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                   href="https://www.instagram.com/"><i class="fab fa-instagram fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="https://www.youtube.com/"><i
                            class="fab fa-youtube fw-normal"></i></a>
            </div>
        </div>
        <!--                <div class="col-lg-4 text-center text-lg-end">-->
        <!--                    <div class="d-inline-flex align-items-center" style="height: 45px;">-->
        <!--                        <a href="#"><small class="me-3 text-light"><i class="fa fa-user me-2"></i>Register</small></a>-->
        <!--                        <a href="#"><small class="me-3 text-light"><i class="fa fa-sign-in-alt me-2"></i>Login</small></a>-->
        <!--                        <div class="dropdown">-->
        <!--                            <a href="#" class="dropdown-toggle text-light" data-bs-toggle="dropdown"><small><i class="fa fa-home me-2"></i> My Dashboard</small></a>-->
        <!--                            <div class="dropdown-menu rounded">-->
        <!--                                <a href="#" class="dropdown-item"><i class="fas fa-user-alt me-2"></i> My Profile</a>-->
        <!--                                <a href="#" class="dropdown-item"><i class="fas fa-comment-alt me-2"></i> Inbox</a>-->
        <!--                                <a href="#" class="dropdown-item"><i class="fas fa-bell me-2"></i> Notifications</a>-->
        <!--                                <a href="#" class="dropdown-item"><i class="fas fa-cog me-2"></i> Account Settings</a>-->
        <!--                                <a href="#" class="dropdown-item"><i class="fas fa-power-off me-2"></i> Log Out</a>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <?php
    require_once ("layouts/navbar.php")
    ?>
</div>
<!-- Navbar & Hero End -->

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Login</h3>
    </div>
</div>
<!-- Travel Guide Start -->
<div class="container-fluid">
    <div class="row justify-content-md-center py-5"
    ">
    <div class="col-md-6">
        <?php if (isset($_SESSION['login_error'])) : ?>
            <div class="alert alert-danger" role="alert">
                <?php
                echo $_SESSION['login_error'];
                unset($_SESSION['login_error']);
                ?>
            </div>
        <?php endif ?>

        <?php if (isset($_SESSION['logout_info'])) : ?>
            <div class="alert alert-primary" role="alert">
                <?php
                echo $_SESSION['logout_info'];
                unset($_SESSION['logout_info']);
                ?>
            </div>
        <?php endif ?>

        <form action="login_service.php" METHOD="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary rounded-pill py-2 px-4" name="login">Login</button>
            </div>
        </form>
    </div>
</div>
</div>

<!-- Footer Start -->
<?php
require_once ("layouts/footer.php")
?>
<!-- Footer End -->

<!-- Copyright Start -->
<div class="container-fluid copyright text-body py-4">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-md-12 text-center  mb-md-0">
                <i class="fas fa-copyright me-2"></i>All right reserved.
                Developed By <a class="text-white" href="#">Susmita Biswas</a>
            </div>
            <!--                    <div class="col-md-6 text-center text-md-start">-->
            <!--                        Developed By <a class="text-white" href="#">Susmita Biswas</a>-->
            <!--                    </div>-->
        </div>
    </div>
</div>
</div>

<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>


<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>
