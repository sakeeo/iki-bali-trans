    <!-- Footer Start -->
    <?php require_once 'contact.php'; ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
              
                 window.sendMessage = () => {

                    var name = $('#yourname').val();
                    var tanggal = $('#tanggal').val();
                    var country = $('#country').val();
                    var hotel = $('#hotel').val();
                    var pax = $('#pax').val();
                    var whatsapp = $('#whatsapp').val();
                    var trip = $('#trip').val();
                    var pickuptime= $('#pickuptime').val();

                    //var text = "Helo..my name is "+name+" I want to book a tour package";

                    var text = "*BOOKING CONFIRMED* %0A*IKI BALI TRANS ORGANIZER* %0A============================= %0ADate %20:%20"+tanggal+" %0AName %20:%20 "+name+" %0ACountry %20:%20"+country+" %0AHotel %20:%20"+hotel+" %0ATotal pax %20:%20"+pax+" %0AWhatsapp %20:%20"+whatsapp+" %0ATrip %20:%20"+trip+"% %0APick Up Time %20:%20"+pickuptime+" %0APayment %20:%20 Cash %0AConfirm by %20:%20 Rizki  %0A%0A*Thank you*"
                    window.location.href = "https://wa.me/6281377602010?text="+text;

                }
               
            });
    </script>
