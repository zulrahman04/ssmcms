

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Project</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Project</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Project Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">Our Project</h1>
            </div>
            <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">All</li>
                        <?php foreach ($categoryp as $key) {?>
                            <li class="mx-2" data-filter=".<?= $key->id?>"><?= $key->name?></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container">
                <?php foreach ($project as $key) { ?>
                <div class="col-lg-4 col-md-6 portfolio-item <?= $key->category ?> wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img src="<?= base_url('public/assets/img/').$key->image ?>" alt="" width="400" height="270">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="<?= base_url('public/assets/img/').$key->image ?>" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2"><?= $key->nama ?></p>
                            <h5 class="lh-base mb-0"><?= $key->description ?></a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Project End -->