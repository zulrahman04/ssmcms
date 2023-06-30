

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Factory</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Factory</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Factory Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">Our Factory</h1>
            </div>
            <div class="row g-4">
                <?php foreach ($factory as $key) { ?>
                <div class="col-md-6 col-lg-4 portfolio-item wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="<?= base_url('public/assets/img/').$key->image ?>" alt="" style="width: 400px; height: 270px;">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="<?= base_url('public/assets/img/').$key->image ?>" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3"><?= $key->nama ?></h4>
                            <p><?= $key->description ?></p>
                            <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Projects End -->