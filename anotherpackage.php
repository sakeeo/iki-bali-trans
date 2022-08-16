<div class="col-lg-4 mt-5 mt-lg-0">
                <div class="mb-5">
                    <h3 class="mb-4">Another Package</h3>
                   
                    <?php
                    foreach ($pakettour as $key => $val) { ?>
                             <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                                <img class="img-fluid" src="<?php echo $val['image']; ?>" style="width: 80px; height: 80px;" alt="">
                                <div class="d-flex flex-column pl-3">
                                    
                                    <a class="text-dark mb-2" href="<?php echo $val['link']; ?>"><?php echo $val['name']; ?></a>
                                    
                                </div>
                            </div>

                    <?php } ?>
                </div>
            </div>