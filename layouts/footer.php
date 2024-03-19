<div class="container-fluid footer py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-6 col-xl-4">
                <div class="footer-item d-flex flex-column">
                    <h4 class="mb-4 text-white">Get In Touch</h4>
                    <a href=""><i class="fas fa-home me-2"></i> 44, North Badda,Dhaka, Bangladesh</a>
                    <a href=""><i class="fas fa-envelope me-2"></i> bsusmita546@gmail.com</a>
                    <a href=""><i class="fas fa-phone me-2"></i> +8801764343434</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4">
                <div class="footer-item d-flex flex-column">
                    <h4 class="mb-4 text-white">Company</h4>
                    <a href="index.php">Home</a>
                    <?php if (isset($_SESSION['login_status']) && $_SESSION['login_status'])  : ?>
                        <a href="dashboard.php">Dashboard</a>
                    <?php endif ?>
                    <a href="employee.php">Employees</a>
                    <a href="job.php">Job Details</a>
                    <?php if (isset($_SESSION['login_status']) && $_SESSION['login_status'])  : ?>
                        <a href="product.php">Services</a>
                    <?php endif ?>
                    <?php if (!isset($_SESSION['login_status']) && !$_SESSION['login_status'])  : ?>
                        <a href="contact.php">Contact</a>
                    <?php endif ?>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4">
                <div class="footer-item d-flex flex-column">
                    <h4 class="mb-4 text-white">Support</h4>
                   <p>Feel free to contact us at bsusmita546@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</div>
