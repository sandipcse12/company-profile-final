<?php
session_start();
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
    require_once("layouts/navbar.php")
    ?>
</div>
<!-- Navbar & Hero End -->

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Job Details</h3>
    </div>
</div>
<!-- Travel Guide Start -->
<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Job Details</h5>
            <h1 class="mb-4">Available Jobs</h1>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti deserunt tenetur sapiente
                atque. Magni non explicabo beatae sit, vel reiciendis consectetur numquam id similique sunt error
                obcaecati ducimus officia maiores.
            </p>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <div class="blog-img-inner">
                            <img class="img-fluid w-100 rounded-top" src="img/job.jpg" alt="Image">
                            <div class="blog-icon">
                                <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                            </div>
                        </div>
<!--                        <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">-->
<!--                            <small class="flex-fill text-center border-end py-2"><i-->
<!--                                        class="fa fa-calendar-alt text-primary me-2"></i>28 Jan 2024</small>-->
<!--                            <a href="#" class="btn-hover flex-fill text-center text-white border-end py-2"><i-->
<!--                                        class="fa fa-dollar-sign text-primary me-2"></i>1000</a></div>-->
                    </div>
                    <div class="blog-content border border-top-0 rounded-bottom p-4">
                        <!--                        <p class="mb-3">Posted By: Royal Hamblin </p>-->
                        <a href="#" class="h4">Sr. Software Engineer</a>
                        <div class="my-3">
                            <ul>
                                <li> 1 to 3 years</li>
                                <li>The applicants should have experience in the following business area(s):
                                    E-commerce, E-commerce Startup
                                </li>
                                <li>Knowledge in developing online shopping mall or retail websites.</li>
                                <li>Solid knowledge required for deployment understanding about the meta tag and lead
                                    generations.
                                </li>
                                <li>At least 01 years’ experience as a Full Stack Developer.</li>
                                <li> Managerial work and Multi-tasking skills</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <div class="blog-img-inner">
                            <img class="img-fluid w-100 rounded-top" src="img/job.jpg" alt="Image">
                            <div class="blog-icon">
                                <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                            </div>
                        </div>
<!--                        <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">-->
<!--                            <small class="flex-fill text-center border-end py-2"><i-->
<!--                                        class="fa fa-calendar-alt text-primary me-2"></i>28 Jan 2050</small>-->
<!--                            <a href="#" class="btn-hover flex-fill text-center text-white border-end py-2"><i-->
<!--                                        class="fa fa-dollar-sign text-primary me-2"></i>800</a>-->
<!--                        </div>-->
                    </div>
                    <div class="blog-content border border-top-0 rounded-bottom p-4">
                        <!--                        <p class="mb-3">Posted By: Royal Hamblin </p>-->
                        <a href="#" class="h4">Software Engineer</a>
                        <div class="my-3">
                            <ul>
                                <li> 1 to 3 years</li>
                                <li>The applicants should have experience in the following business area(s):
                                    E-commerce, E-commerce Startup
                                </li>
                                <li>Knowledge in developing online shopping mall or retail websites.</li>
                                <li>Solid knowledge required for deployment understanding about the meta tag and lead
                                    generations.
                                </li>
                                <li>At least 01 years’ experience as a Full Stack Developer.</li>
                                <li> Managerial work and Multi-tasking skills</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <div class="blog-img-inner">
                            <img class="img-fluid w-100 rounded-top" src="img/job.jpg" alt="Image">
                            <div class="blog-icon">
                                <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                            </div>
                        </div>
<!--                        <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">-->
<!--                            <small class="flex-fill text-center border-end py-2"><i-->
<!--                                        class="fa fa-calendar-alt text-primary me-2"></i>28 Jan 2050</small>-->
<!--                            <a href="#" class="btn-hover flex-fill text-center text-white border-end py-2"><i-->
<!--                                        class="fa fa-dollar-sign text-primary me-2"></i>900</a>-->
<!--                        </div>-->
                    </div>
                    <div class="blog-content border border-top-0 rounded-bottom p-4">
                        <!--                        <p class="mb-3">Posted By: Royal Hamblin </p>-->
                        <a href="#" class="h4">UI/UX Designer</a>
                        <div class="my-3">
                            <ul>
                                <li> 1 to 3 years</li>
                                <li>The applicants should have experience in the following business area(s):
                                    E-commerce, E-commerce Startup
                                </li>
                                <li>Knowledge in developing online shopping mall or retail websites.</li>
                                <li>Solid knowledge required for deployment understanding about the meta tag and lead
                                    generations.
                                </li>
                                <li>At least 01 years’ experience as a Full Stack Developer.</li>
                                <li> Managerial work and Multi-tasking skills</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer Start -->
<?php
require_once("layouts/footer.php")
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
