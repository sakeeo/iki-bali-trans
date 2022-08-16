<!-- Navbar Start -->
<div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-capitalize font-italic text-white"><span class="text-primary">IKI </span>BALI TRANS</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">

                    <a href="?page=home" class="nav-item nav-link <?php if($page=='home'){echo 'active'; }?>">Home</a>
                   
                    <a href="?page=about" class="nav-item nav-link <?php if($page=='about'){echo 'active'; }?>">About Us</a>
                    <a href="?page=gallery" class="nav-item nav-link <?php if($page=='gallery'){echo 'active'; }?>">Gallery</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle 
                        <?php if($page=='transport' 
                        || $page=='tourpackage' 
                        || $page=='activity' 
                        || $page=='ticketfastboat'
                        || $page=='combination' ){
                            echo 'active'; 
                            } ?>" data-toggle="dropdown">Service</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="?page=transport" class="dropdown-item">Transport</a>
                            <a href="?page=tourpackage" class="dropdown-item">Tour Package</a>
                            <a href="?page=activity" class="dropdown-item">Activity</a>
                            <a href="?page=ticketfastboat" class="dropdown-item">Ticket Fastboat</a>
                            <a href="?page=grouptour" class="dropdown-item">Group Tour</a>
                        </div>
                    </div>

                    
                    <a href="?page=contact" class="nav-item nav-link <?php if($page=='contact'){echo 'active'; }?>">Contact</a>

                </div>

               <!--  <a href="" class="btn btn-lg btn-primary px-3 d-none d-lg-block">Get Quote</a> -->
            </div>
        </nav>
    </div>
    <!-- Navbar End -->