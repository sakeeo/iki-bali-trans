
    <!-- Blog Start -->
    <div class="container pt-5">
        <div class="d-flex flex-column text-center mb-5 pt-5">
            <h1 class="display-4 m-0"><span class="text-primary">Corporate & Combination</span><br>Activity Package</h1>
        </div>
        <div class="row pb-3">
            <?php
                foreach ($activity as $key => $val) { ?>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 mb-2">
                        <img class="card-img-top" src="<?php echo $val['image']; ?>" alt="">
                        <div class="card-body bg-light p-4">
                            <h4 class="card-title"> <?php echo $val['name']; ?></h4>
                            <a href="<?php echo $wame; ?>" target="_blank" class="btn btn-sm btn-primary mt-3 mt-md-4 px-4">Book Now</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            
        </div>
    </div>
    <!-- Blog End -->