<!-- Pricing Plan Start -->
    <div class="container-fluid bg-light pt-5 pb-4">
        <div class="container py-5">
            <div class="d-flex flex-column text-center mb-5">
                <h1 class="display-4 m-0">Pricing for<span class="text-primary">Transport</span></h1>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-6">
                    <div class="card border-0">
                        <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="img/transport/2.jpg" alt="">
                            <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .5);">
                                <h3 class="text-primary mb-3">Airport to Hotel</h3>
                                <h1 class="display-4 text-white mb-0">
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">IDR</small>200K<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Pax</small>
                                </h1>
                            </div>
                        </div>
                        <div class="card-body text-center p-0">
                            <ul class="list-group list-group-flush mb-4">
                                <table class="table">
                                    <tbody>
                                        <?php 
                                        foreach ($trfhotel as $key => $val) {
                                            echo "<tr>";
                                                echo "<td style='text-align:left;font-size:20px'><i class='fa fa-check text-secondary mr-2'></i> ".$key."</td>";
                                                echo "<td>: IDR ".$val."</td>";
                                            echo "<tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </ul>
                        </div>
                        <div class="card-footer border-0 p-0">
                            <a href="<?php echo $wame; ?>" class="btn btn-primary btn-block p-3" style="border-radius: 0;">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-6">
                    <div class="card border-0">
                        <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="img/transport/1.jpg" alt="">
                            <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .5);">
                                <h3 class="text-secondary mb-3">Hotel to Airport</h3>
                                <h1 class="display-4 text-white mb-0">
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">IDR</small>150K<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Pax</small>
                                </h1>
                            </div>
                        </div>
                        <div class="card-body text-center p-0">
                            <ul class="list-group list-group-flush mb-4">
                            <table class="table">
                                    <tbody>
                                        <?php 
                                        foreach ($trfairport as $key => $val) {
                                            echo "<tr>";
                                                echo "<td style='text-align:left;font-size:20px'><i class='fa fa-check text-secondary mr-2'></i> ".$key."</td>";
                                                echo "<td>: IDR ".$val."</td>";
                                            echo "<tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </ul>
                        </div>
                        <div class="card-footer border-0 p-0">
                            <a href="<?php echo $wame; ?>" class="btn btn-secondary btn-block p-3" style="border-radius: 0;">Book Now</a>
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->