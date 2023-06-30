<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>CMS - Sinar Sakti Metalindo</title>

        <!-- Custom fonts for this template-->
        <link href="<?= base_url('public/assets/cms') ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
            
        <!-- Custom styles for this template-->
        <link href="<?= base_url('public/assets/cms') ?>/css/sb-admin-2.min.css" rel="stylesheet">
        

    </head>

    <body class="bg-gradient-primary">

        <script src="<?= base_url('public/assets/cms') ?>/plugins/jquery/jquery.min.js"></script>
        <!-- jquery-validation -->
        <script src="<?= base_url('public/assets/cms') ?>/plugins/jquery-validation/jquery.validate.min.js"></script>
        <script src="<?= base_url('public/assets/cms') ?>/plugins/jquery-validation/additional-methods.min.js"></script>

        <!-- Bootstrap core JavaScript-->
        <script src="<?= base_url('public/assets/cms') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?= base_url('public/assets/cms') ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?= base_url('public/assets/cms') ?>/js/sb-admin-2.min.js"></script>

        <script src="<?= base_url('public/assets/cms') ?>/jquery-loading-overlay-2.1.6/dist/loadingoverlay.min.js" type="text/javascript"></script>
        <style>
            .error{
                font-size: 1em;
                color: #e74a3b;
            }
        </style>
        <div class="container">        <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class="col-xl-8">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                                <div class="col-lg-12">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Welcome To SSM CMS</h1>
                                            <span class="text"><?= $this->session->flashdata('success'); ?></span>
                                        </div>
                                        <form method="post" action='<?= base_url() ?>cms/login/cekUser' id="myform" accept-charset="utf-8" class="user">
                                            <div class="form-group">
                                                <input type="email" class="form-control form-control-user"
                                                    id="email" name="email" aria-describedby="emailHelp"
                                                    placeholder="Enter Email Address..." required>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user"
                                                    id="password" name="password" placeholder="Password" required>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-user btn-block" > Login</button>
                                        </form>
                                        <hr>
                                        <div class="text-center">
                                            <a class="small" href="<?= base_url() ?>">← Back to Sinar Sakti Metalindo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>  

    </body>

</html>