<?php
$request_uri = $_SERVER['REQUEST_URI'];
$request_uri = explode('?', $request_uri)[0];
$request_uri = trim($request_uri, '/');
$uri_parts = explode('/', $request_uri);
?>
<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="" class="navbar-brand p-0">
        <img src="img/Logo.jpg" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="index.php" class="nav-item nav-link  <?php echo $uri_parts[1] == 'index.php' ? 'active' : '' ?>">Home</a>
            <?php if (isset($_SESSION['login_status']) && $_SESSION['login_status'])  : ?>
                <a href="dashboard.php"
                   class="nav-item nav-link <?php echo $uri_parts[1] == 'dashboard.php' ? 'active' : '' ?>">Dashboard</a>
            <?php endif ?>
            <a href="employee.php"
               class="nav-item nav-link <?php echo $uri_parts[1] == 'employee.php' ? 'active' : '' ?> ">Employees</a>
            <a href="job.php" class="nav-item nav-link <?php echo $uri_parts[1] == 'job.php' ? 'active' : '' ?>">Job
                Details</a>
            <?php if (isset($_SESSION['login_status']) && $_SESSION['login_status'])  : ?>
                <a href="product.php"
                   class="nav-item nav-link <?php echo $uri_parts[1] == 'product.php' ? 'active' : '' ?>">Services</a>
            <?php endif ?>
            <?php if (!isset($_SESSION['login_status']) && !$_SESSION['login_status'])  : ?>
            <a href="contact.php"
               class="nav-item nav-link <?php echo $uri_parts[1] == 'contact.php' ? 'active' : '' ?>">Contact</a>
            <?php endif ?>
            <?php if (isset($_SESSION['login_status']) && $_SESSION['login_status'])  : ?>
                <a href="logout.php" class="nav-item nav-link">Logout</a>
            <?php else: ?>
                <a href="login.php"
                   class="nav-item nav-link <?php echo $uri_parts[1] == 'login.php' ? 'active' : '' ?>">Login</a>
            <?php endif ?>
        </div>
    </div>
</nav>
