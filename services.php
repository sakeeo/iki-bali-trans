<div class="container-fluid bg-light pt-5">
        <div class="container py-5">
            <div class="d-flex flex-column text-center mb-5">
                <h4 class="text-secondary mb-3">Our Services</h4>
                <h1 class="display-4 m-0"><span class="text-primary">Premium</span> Services</h1>
            </div>
            <div class="row pb-3" >
                <?php  foreach ($services as $key => $val) { ?>
                    <a class="col-md-6 col-lg-4 mb-4" href="?page=<?php echo $val['link']; ?>">
                        <div class="card border-0">
                            <div class="card-header position-relative border-0 p-0 mb-4">
                                <img class="card-img-top" src="<?php echo $val['image']; ?>" alt="">
                                <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .5);">
                                    <img width="80px" src="img/icon/1.png" alt="" style="margin:auto auto 10 auto">
                                    <br>
                                        <h3 class="mb-3" style="color: white;"><?php echo $val['judul']; ?></h3>
                                        <span class="text-center ms-5 font-weight" style="color:white;margin-left: 30px;margin-right: 30px;"><?php echo $val['keterangan']; ?></span>
                                        <br>
                                        <i class="text-uppercase font-weight-bold">Read More</i>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>

