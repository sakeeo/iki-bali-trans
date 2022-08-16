<!-- Booking Start -->
    <br>
    <div class="container-fluid">
        <div class="container">
            <div class="row align-items-center">
                
                <div class="col-lg-12">
                    <div class="bg-primary py-5 px-4 px-sm-5">
                        <h3>BOOKING CONFIRMATION</h3>
                        <form class="py-5">
                            <div class="form-group">
                                <label for="" class="form-label">Date:</label>
                                <input type="date" id="tanggal" class="form-control border-0 p-4" placeholder="Date" required="required" />
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Name:</label>
                                <input type="text" id="yourname" class="form-control border-0 p-4" placeholder="Name" required="required" />
                            </div>
                             <div class="form-group">
                                <label for="" class="form-label">Country:</label>
                                <input type="text" id="country" class="form-control border-0 p-4" placeholder="Country" required="required" />
                            </div>
                             <div class="form-group">
                                <label for="" class="form-label">Hotel:</label>
                                <input type="text" id="hotel" class="form-control border-0 p-4" placeholder="Hotel" required="required" />
                            </div>
                             <div class="form-group">
                                <label for="" class="form-label">Pax:</label>
                                <input type="number" id="pax" class="form-control border-0 p-4" placeholder="Pax" required="required" />
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Whatsapp:</label>
                                <input type="text" id="whatsapp" class="form-control border-0 p-4" placeholder="Whatsapp " required="required" />
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Trip/Package:</label>
                                <select class="form-control" id="trip">
                                    
                                    <?php 
                                        echo "<option value='Activity tour' >Transport to airport</option>";
                                        echo "<option value='Activity tour' >Transport to hotel</option>";
                                        echo "<option value='Group tour' >Group tour</option>";
                                        echo "<option value='Activity tour' >Activity tour</option>";

                                        foreach ($pakettour as $key => $val) {
                                           echo "<option value='$val[name]' >".$val['name']."</option>";
                                        }
                                     ?>
                                   
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Pick up time:</label>
                                <input type="time" id="pickuptime" class="form-control border-0 p-4" placeholder="Pick up time " required="required" />
                            </div>

                            <div>
                                <button class="btn btn-dark btn-block border-0 py-3" type="button" onclick="sendMessage()">Book Now</button>
                            </div>
                        </form>
                    </div>
                </div>
             
            </div>
        </div>
    </div>
    <!-- Booking Start -->


