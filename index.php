<?php
//$wame = 'https://wa.me/6281377602010';
$wame = '?page=book';
$fb = "https://www.facebook.com/ikibalitrans-101207589325102/";
$ig= "https://www.instagram.com/ikibalitrans/";

$trfhotel=array(
    'Kuta'          => '200K',
    'Seminyak'      => '250K',
    'Canggu Area'   => '300K',
    'Jimbaran Area' => '250K',
    'Pecatu Area'   => '300K',
    'Nusa Dua'      => '300K',
    'Sanur'         => '250K',
    'Ubud Area'     => '400K',
    'Tegalalang'    => '450K',
    'Amed'          => '850K',
    'Lovina'        => '850K'
);
$trfairport = array(
    'Kuta'          => '150K',
    'Seminyak'      => '200K',
    'Canggu Area'   => '250K',
    'Jimbaran Area' => '200K',
    'Pecatu Area'   => '250K',
    'Nusa Dua'      => '250K',
    'Sanur'         => '200K',
    'Ubud Area'     => '350K',
    'Tegalalang'    => '400K',
    'Amed'          => '800K',
    'Lovina'        => '800K'
);

$pakettour = array(
    array(
        'package_id'=>'paket01',
        'image'=>'img/package/paket01.jpg',
        'name'=>'Ubud Tour',
        'price'=>'IDR. 600K',
        'minimum_pax'=>'',
        'duration'=>'10 Hours',
        'destination'=>array(
            'Tagenungan Waterfall / Batuan Temple',
            'Tegalalang Rice Terace / Monkey Forest',
            'Tirta Empul',
            'Coffe Plantation / Bali Swing',
            'Art (Art Painting, Wood Carving, Silver and Gold)'
        ),
        'link'=>'?page=ubud-tour',
    ),
    array(
        'package_id'=>'paket02',
        'image'=>'img/package/paket02.jpg',
        'name'=>'Middle Of Bali',
        'price'=>'IDR. 600K',
        'minimum_pax'=>'',
        'duration'=>'10 Hours',
        'destination'=>array(
            'Blooms Garden',
            'Ulundanu Beratan Temple (Bedugul)',
            'Jatiluwih Rice Terace (UNESCO)',
            'Tanah Lot Temple',
            'Luwak Coffe Plantation',
            'Aling-Aling Waterfall',
        ),
        'link'=>'?page=middle-of-bali',
    ),
    array(
        'package_id'=>'paket03',
        'image'=>'img/package/paket03.jpg',
        'name'=>'South Denpasar (Uluwatu & Nusa Dua)',
        'price'=>'IDR. 550K',
        'minimum_pax'=>'',
        'duration'=>'10 Hours',
        'destination'=>array(
            'Watersport (Parasailing,Jet Sky,Banana boat)',
            'GWK (Garuda Wisnu Kencana) Statue Part',
            'Melasti beach/ Pandawa Beach',
            'Uluwatu Temple & Kecak Dance',
            'Jimbaran Bay Seafood',
        ),
        'link'=>'?page=south-denpasar',
    ),
    array(
        'package_id'=>'paket04',
        'image'=>'img/package/paket04.jpg',
        'name'=>'Kuta Tour',
        'minimum_pax'=>'',
        'price'=>'IDR. 550K',
        'duration'=>'10 Hours',
        'destination'=>array(
            'Taman Ayun Temple',
            'Kedaton temple',
            'Tanah Lot Temple',
            'Canggu Area',
            'Seminyak Area / Kuta Area'
        ),
        'link'=>'?page=kuta-tour',
    ),
    array(
        'package_id'=>'paket05',
        'image'=>'img/package/paket05.jpg',
        'name'=>'Karangasem Tour (Heaven Gate)',
        'minimum_pax'=>'',
        'price'=>'IDR. 650K',
        'duration'=>'10 Hours',
        'destination'=>array(
            'Lempuyang Temple',
            'Tirta Gangga',
            'Cepung Waterfall',
            'Besakih Temple',
        ),
        'link'=>'?page=karangasem-tour',
    ),
    array(
        'package_id'=>'paket06',
        'image'=>'img/package/paket06.jpg',
        'name'=>'Nusa Penida Package',
        'minimum_pax'=>'2 Pax',
        'price'=>'IDR. 1.000K',
        'duration'=>'10 Hours',
        'destination'=>array(
            'Tiket Fast Boat (return)',
            'Transport Hotel to Sanur (return)',
            'Private Car at Nusa Penida (inc. Petrol)',
            'Lunch And Mineral Water',
            'Photoshoot Service'
        ),
        'link'=>'?page=nusa-penida-package',
    ),
    array(
        'package_id'=>'paket07',
        'image'=>'img/package/paket07.jpg',
        'name'=>'Nusa Penida With Snorkling Package',
        'minimum_pax'=>'2 Pax',
        'price'=>'IDR. 1.400K',
        'duration'=>'10 Hours',
        'destination'=>array(
            'Tiket Fast Boat (return)',
            'Transport Hotel to Sanur (return)',
            'Private Car at Nusa Penida (inc. Petrol)',
            'Lunch And Mineral Water',
            'Photoshoot Service',
            'Snorkling'
        ),
        'link'=>'?page=snorkling',
    ),
    array(
        'package_id'=>'paket08',
        'image'=>'img/package/paket08.jpg',
        'name'=>'Blue Fire at Kawah Ijen',
        'minimum_pax'=>'2 Pax',
        'price'=>'IDR. 2.000K',
        'duration'=>'10 Hours',
        'destination'=>array(
            'Private Car + Driver + Petrol',
            'Ticket Ferry Return',
            'Ticket to Destination',
            'Breakfast',
        ),
        'link'=>'?page=kawahijen',
    ),
    array(
        'package_id'=>'paket09',
        'image'=>'img/package/paket09.jpg',
        'name'=>'Lovina Tour',
        'minimum_pax'=>'2 Pax',
        'price'=>'IDR. 850K',
        'duration'=>'10 Hours',
        'destination'=>array(
            'Dolphin',
            'Git-Git Waterfall',
            'Aling-Aling Waterfall',
            'Wanagiri',
            'Handara Gate'
        ),
        'link'=>'?page=lovina',
    ),
    

);

$activity=array(

    array(
        'name' => 'Elephant Riding',
        'image' => 'img/activity/elephant-riding.jpg',
    ),
    array(
        'name' => 'A T V',
        'image' => 'img/activity/atv.jpg',
    ),
    array(
        'name' => 'Rafting',
        'image' => 'img/activity/rafting.jpg',
    ),
    array(
        'name' => 'Tracking',
        'image' => 'img/activity/tracking.jpg',
    ),
    array(
        'name' => 'Watersport',
        'image' => 'img/activity/watersport.jpg',
    ),
    array(
        'name' => 'Cycling',
        'image' => 'img/activity/cycling.jpg',
    ),
    array(
        'name' => 'Message And Spa',
        'image' => 'img/activity/message-and-spa.jpg',
    ),
    array(
        'name' => 'Cooking Class',
        'image' => 'img/activity/cooking-class.jpg',
    ),
    array(
        'name' => 'The 3D ilusion Art',
        'image' => 'img/activity/ilusion-art.jpg',
    ),
    array(
        'name' => 'Polo Ralph Laurent',
        'image' => 'img/activity/polo-ralf-laurent.jpg',
    ),
    array(
        'name' => 'Tagenungan Waterfall',
        'image' => 'img/activity/tagenungan-waterfall.jpg',
    ),
    array(
        'name' => 'World Magic Bali',
        'image' => 'img/activity/world-magic-bali.jpg',
    ),
    array(
        'name' => 'Besakih Temple',
        'image' => 'img/activity/besakih-temple.jpg',
    ),
    array(
        'name' => 'Turtle island',
        'image' => 'img/activity/turtle-island.jpg',
    ),
    array(
        'name' => 'Jati Luwih',
        'image' => 'img/activity/jati-luwih.jpg',
    ),
    array(
        'name' => 'Lovina Beach',
        'image' => 'img/activity/lovina-beach.jpg',
    ),
    array(
        'name' => 'Bali Zoo Park',
        'image' => 'img/activity/bali-zoo-park.jpg',
    ),
    array(
        'name' => 'Bali Bird Park',
        'image' => 'img/activity/bali-bird-park.jpg',
    ),
    array(
        'name' => 'Bali Safari',
        'image' => 'img/activity/bali-safari.jpg',
    ),


);


$ticketfastboot =array(
    array(
        'destination'=>'Sanur - Gili Island',
        'price'=>'IDR 500K / Pax',
        'image'=>'img/ticketfastboot/sanur-gili.jpg'
    ),
);



$services = array(
    array(
        'judul'         => 'Transport',
        'keterangan'    => 'Pick up service from airport to hotel or hotel to airport',
        'image'          => 'img/bgimage/transport.jpg',
        'link'         => 'transport',
    ),
    array(
        'judul'         => 'Tour Package',
        'keterangan'    => 'Tour package, this service includes a vehicle, driver and tour guide',
        'image'          => 'img/bgimage/tourpackage.jpg',
        'link'         => 'tourpackage',
    ),
    array(
        'judul'         => 'Activity',
        'keterangan'    => 'for those of you who like sports tourism, this is the right service',
        'image'          => 'img/bgimage/activity.jpg',
        'link'         => 'activity',
    ),
    array(
        'judul'         => 'Ticket Fastboat',
        'keterangan'    => 'if you want to travel to the gili island, we provide fast boat service',
        'image'          => 'img/bgimage/ticket.jpg',
        'link'         => 'ticketfastboat',
    ),
    array(
        'judul'         => 'Group Tour',
        'keterangan'    => '',
        'image'          => 'img/bgimage/grouptour.jpg',
        'link'         => 'grouptour',
    ),
);

echo "<!DOCTYPE html>";
echo "<html lang='en'>";
$page = 'home';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}
require_once 'header.php';
require_once 'menu.php';
echo "<body>";
require_once $page.'.php';
require_once 'footer.php';
echo "</body>";
echo "</html>"

?>