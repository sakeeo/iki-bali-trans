



<!-- Team Start -->
<div class="container mt-5 pt-5 pb-3">
        <div class="d-flex flex-column text-center mb-5">
            <h1 class="display-4 m-0">Our <span class="text-primary">Gallery</span></h1>
        </div>
        <div class="row">
            <?php  
                for ($i=1; $i < 32; $i++) {  
                        $linkimage = "img/gallery/gallery (".$i.").jpeg";
                    ?>
                   
                   <div class="col-lg-3 col-md-6">
                        <div class="team card position-relative overflow-hidden border-0 mb-4">
                            <img class="card-img-top" src="<?php echo $linkimage; ?>" alt="">
                            <div class="card-body text-center p-0">
                                <div class="team-text d-flex flex-column justify-content-center bg-light">
                                    <h5>Find us <br> on Social Media</h5>
                                </div>
                                <div class="team-social d-flex align-items-center justify-content-center bg-dark">
                                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" target="_blank" href="<?php echo $fb; ?>"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary rounded-circle text-center px-0" style="width: 36px; height: 36px;" target="_blank" href="<?php echo $ig; ?>"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

            <?php }
            ?>
            
            
        </div>
    </div>
    <!-- Team End -->