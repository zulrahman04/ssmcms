<!DOCTYPE html>
<html lang="en">

<style>

    #myVideo {
        /* position: absolute;
        right: 0;
        bottom: 0; */
        min-width: 100%; 
        min-height: 100%;
        /* pointer-events: none; */
    }
    #text{
        position: absolute;
        color: #ffffff;
        left: 20%;
        top: 50%;
        transform: translate(-50%, -50%);
    }
    
</style>
<head>
    <meta charset="utf-8">
    <title>Sinar Sakti Metalindo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?= base_url('public/assets/') ?>img/ssm.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('public/assets/') ?>lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url('public/assets/') ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url('public/assets/') ?>lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('public/assets/') ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url('public/assets/') ?>css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>Jl. Raya Narogong Km. 16 Kp. Bakom No. 46 Limusnunggal - Cileungsi Bogor 16820, Indonesia</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+62 21 823 3231</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href="https://www.linkedin.com/company/pt-sinar-sakti-metalindo"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="<?= base_url() ?>" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <img src="<?= base_url('public/assets/') ?>img/favicon.png" alt="">
            <h5 class="m-0 text-primary">Sinar Sakti Metalindo</h5>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="<?= base_url() ?>" class="nav-item nav-link <?= $this->uri->segment(1) == '' ? 'active' : '' ?>">Home</a>
                <a href="<?= base_url('about') ?>" class="nav-item nav-link <?= $this->uri->segment(1)== 'about' ? 'active' : '' ?>">About</a>
                <a href="<?= base_url('project') ?>" class="nav-item nav-link <?= $this->uri->segment(1)== 'project' ? 'active' : '' ?>">Project</a>
                <a href="<?= base_url('factory') ?>" class="nav-item nav-link <?= $this->uri->segment(1)== 'factory' ? 'active' : '' ?>">Factory</a>
                <a href="<?= base_url('contact') ?>" class="nav-item nav-link <?= $this->uri->segment(1)== 'contact' ? 'active' : '' ?>">Contact</a>
            </div>
            <!-- <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Get A Quote<i class="fa fa-arrow-right ms-3"></i></a> -->
        </div>
    </nav>
    <!-- Navbar End -->


    <?php $this->load->view($page); ?>
    

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Raya Narogong Km. 16 Kp. Bakom No. 46 Limusnunggal - Cileungsi Bogor 16820, Indonesia</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 21 823 3231</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@sinarsaktimetalindo.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/company/pt-sinar-sakti-metalindo"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Project</h4>
                    <?php $dt = $this->db->where('type','project')->limit('5')->get('mst_categories')->result();
                    foreach ($dt as $key) {?>
                    <a class="btn btn-link" href=""><?= $key->name ?></a>
                    <?php } ?>
                    <a class="btn btn-link" href="<?= base_url('project') ?>">See All</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="<?= base_url() ?>">Home</a>
                    <a class="btn btn-link" href="<?= base_url('about') ?>">About Us</a>
                    <a class="btn btn-link" href="<?= base_url('project') ?>">Project</a>
                    <a class="btn btn-link" href="<?= base_url('factory') ?>">Factory</a>
                    <a class="btn btn-link" href="<?= base_url('contact') ?>">Contact Us</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Send</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">PT. Sinar Sakti Metalindo</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com" hidden>HTML Codex</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('public/assets/') ?>lib/wow/wow.min.js"></script>
    <script src="<?= base_url('public/assets/') ?>lib/easing/easing.min.js"></script>
    <script src="<?= base_url('public/assets/') ?>lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url('public/assets/') ?>lib/counterup/counterup.min.js"></script>
    <script src="<?= base_url('public/assets/') ?>lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?= base_url('public/assets/') ?>lib/isotope/isotope.pkgd.min.js"></script>
    <script src="<?= base_url('public/assets/') ?>lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url('public/assets/') ?>js/main.js"></script>
</body>

</html>