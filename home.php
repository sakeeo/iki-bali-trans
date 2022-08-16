    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carosel/klingking.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h3 class="text-white mb-3 d-none d-sm-block"></h3>
                            <h1 class="display-3 text-white mb-3">IKI BALI TRANS</h1>
                            <h5 class="text-white mb-3 d-none d-sm-block">
                                Like a Boss. Find the Friendly Bali driver because You are the Boss
                            </h5>
                            <a href="<?php echo $wame; ?>" target="_blank" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Book Now</a>
                            <a href="?page=services" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">Show Services</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carosel/candikuning.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                           <div class="p-3" style="max-width: 900px;">
                            <h3 class="text-white mb-3 d-none d-sm-block"></h3>
                            <h1 class="display-3 text-white mb-3">IKI BALI TRANS</h1>
                            <h5 class="text-white mb-3 d-none d-sm-block">
                                Like a Boss Find the Friendly Bali driver because You are the Boss
                            </h5>
                            <a href="" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Book Now</a>
                            <a href="" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">Show Services</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
   <?php require_once 'about.php'; ?>
    <!-- About End -->
    <!-- Services Start -->
    <?php require_once 'services.php'; ?>
    <!-- Services End -->