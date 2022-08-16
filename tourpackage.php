
    <!-- Blog Start -->
    <div class="container pt-5">
        <div class="d-flex flex-column text-center mb-5 pt-5">
            <h1 class="display-4 m-0"><span class="text-primary">Tour</span> Package</h1>
        </div>
        <div class="row pb-3">
            <?php
                foreach ($pakettour as $key => $val) { ?>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 mb-2">
                        <img class="card-img-top" src="<?php echo $val['image']; ?>" alt="">
                        <div class="card-body bg-light p-4">
                            <h4 class="card-title">
                                    <?php echo $val['name']; ?>
                            </h4>
                            <div class="d-flex mb-3">
                                <small class="mr-2">
                                    Price : <?php echo $val['price'] ;?> Minimum Pax : <?php echo $val['minimum_pax'];?>
                            </small>
                
                            </div>
                            <ul class="list-group list-group-flush mb-4" >
                                
                            <?php 
                                foreach ($val['destination'] as $key2 => $val2) { ?>
                                   <li class="list-group-item p-2" style="background:transparent">
                                        <i class="fa fa-check text-secondary mr-2"></i>
                                        <?php echo $val2; ?>
                                    </li>
                            <?php } 

                                if($val['minimum_pax']!=''){ ?>

                                    <li class="list-group-item p-2" style="background:transparent">
                                        <i class="fa fa-check text-secondary mr-2"></i>
                                        <?php echo 'Minimum '.$val['minimum_pax']; ?>

                                    </li>

                                    
                            <?php  } ?>
                                    
                            </ul>
                            
                            <a href="<?php echo $wame; ?>" target="_blank" class="btn btn-sm btn-primary mt-3 mt-md-4 px-4">Book Now</a>
                            <a href="<?php echo $val['link']; ?>" class="btn btn-sm btn-secondary mt-3 mt-md-4 px-4">Detail Package</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            
        </div>
    </div>
    <!-- Blog End -->