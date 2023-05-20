<?php
    include "inc/header.php";
?>
    

      <div class="slideshow-container">
        <div class="images">
            <img src="img/banner3.jpeg" alt="">
            <h1>Welcome to Royal Villas</h1>
            <?php
            if(!isset($_SESSION['user']['roli'])){
              echo "<a href='addreservation.php'><button class='book-now'>Booking Now</button></a>";
            }else{
              echo "<a href='reservations.php'><button class='book-now'>Booking Now</button></a>";
            }
            ?>
        </div>
        <div class="images">
            <img src="img/banner2.jpg" alt="">
            <h1>Welcome to Royal Villas</h1>
            <?php
            if(!isset($_SESSION['user']['roli'])){
              echo "<a href='addreservation.php'><button class='book-now'>Booking Now</button></a>";
            }else{
              echo "<a href='reservations.php'><button class='book-now'>Booking Now</button></a>";
            }
            ?>
        </div>
        <div class="images">
            <img src="img/banner5.jpg" alt="">
            <h1>Welcome to Royal Villas</h1>
            <?php
            if(!isset($_SESSION['user']['roli'])){
              echo "<a href='addreservation.php'><button class='book-now'>Booking Now</button></a>";
            }else{
              echo "<a href='reservations.php'><button class='book-now'>Booking Now</button></a>";
            }
            ?>
        </div>
        <div class="images">
            <img src="img/banner4.jpeg" alt="">
            <h1>Welcome to Royal Villas</h1>
            <?php
            if(!isset($_SESSION['user']['roli'])){
              echo "<a href='addreservation.php'><button class='book-now'>Booking Now</button></a>";
            }else{
              echo "<a href='reservations.php'><button class='book-now'>Booking Now</button></a>";
            }
            ?>
        </div>
    </div>

    <!-- about_area_start -->

    <section class="about-us fade-in">
        <div class="about-txt">
            <div class="firstabouttxt">
                <span class="about-top">About Us</span>
                <h1>Welcome to <span class="yellow">Royal Villas</span></h1>
                <p>Ne jemi një kompani që ofron vila të mrekullueshme për qira në destinacionet më ekskluzive në botë. Me një përvojë prej vitesh në industrinë e akomodimit, 
                ne jemi përkushtuar për të ofruar një përvojë të paharrueshme për klientët tanë. Royal Villa ka një portofol të gjerë të vilave,
                të dizajnuara me kujdes dhe me stil. </p><br>
                <p>Të gjitha vilat tona ofrojnë hapësira të mëdha dhe të rehatshme, nëpërmjet të cilave mund të ndjeheni si në shtëpinë tuaj. Përveç kësaj, 
                    çdo vilë është pajisur me mjetet më moderne për të siguruar që klientët tanë të kenë një qëndrim sa më të këndshëm. </p>
            </div>
            <div class="booking-btn">
              <?php
              if(!isset($_SESSION['user']['roli'])){
                echo "<a href='addreservation.php'><button class='booking'>Booking Now</button></a>";
              }else{
                echo "<a href='reservations.php'><button class='booking'>Booking Now</button></a>";
              }
              ?>
            </div>
        </div>
        <div class="about-img">
            <img src="img/1.png" alt="">
        </div>
        
    </section>
    <!-- about_area_end -->

    <!-- explore Villas part start -->
    <section class="villas-explore fade-in">
        <h1>Explore Our <span class="yellow">Villas</span></h1>
        <div class="row">
            <div class="box">
              <img src="img/1.png" alt="Foto 1">
              <h3>Kategoria I</h3>
              <p><b>Kategoria I :</b> Villat e kësaj kategorie ofrojnë pamje spektakolare nga deti dhe mjedisin natyror në përgjithësi.
               Villat janë të dizajnuara me stil dhe ofrojnë ambiente të rehatshme dhe të përshtatshme për të gjithë mysafirët.
                Përveç kësaj, ato janë të pajisura me të gjitha kushtet moderne.</p>
              <!-- <button>Book Now</button> -->
            </div>
            
            <div class="box">
              <img src="img/2.png" alt="Foto 2">
              <h3>Kategoria II</h3>
              <p><b>Kategoria II :</b> Villat e kësaj kategorie ofrojnë një ambient të qetë dhe të relaksuar, dhe janë të vendosura 
              në një zonë të qetë të mjedisit natyror. Villat janë të pajisura me të gjitha kushtet e nevojshme, përfshirë një kuzhinë 
              të plotësisht ekipuar dhe një ambient të rehatshëm të gjumit për t'u relaksuar.</p>
              <!-- <button>Book Now</button> -->
            </div>
            
            <div class="box">
              <img src="img/3.png" alt="Foto 3">
              <h3>Kategoria III</h3>
              <p><b>Kategoria III :</b> Villat e kësaj kategorie janë të vendosura në një zonë bregdetare dhe ofrojnë një pamje fantastike
               nga deti dhe plazhi. Villat janë të dizajnuara me stil dhe ofrojnë ambiente të mëdha dhe të përshtatshme për familje dhe 
               grupe të mëdha, për një qëndrim të këndshëm dhe të relaksuar.</p>
              <!-- <button>Book Now</button> -->
            </div>
            <div class="box">
              <img src="img/4.png" alt="Foto 1">
              <h3>Kategoria IV</h3>
              <p><b>Kategoria IV :</b> Villat e kësaj kategorie janë të dizajnuara në stil modern dhe ofrojnë ambiente të mëdha dhe të 
              përshtatshme për familjet dhe grupe të mëdha. Villat janë të pajisura me të gjitha kushtet e nevojshme, duke përfshirë një
               kuzhinë të plotësisht ekipuar dhe një ambient të qetësisë për t'u relaksuar.</p>
              <!-- <button>Book Now</button> -->
            </div>
            
            <div class="box">
              <img src="img/5.png" alt="Foto 2">
              <h3>Kategoria V</h3>
              <p><b>Kategoria V :</b> Villat e kësaj kategorie janë të vendosura në një zonë të qetë dhe të relaksuar të mjedisit natyror. 
              Villat janë të pajisura me të gjitha kushtet e nevojshme, përfshirë një kuzhinë të plotësisht ekipuar dhe një ambient
               të mjaftueshëm të qetësisë për t'u relaksuar, me një zonë tërheqëse me pemë dhe lule.</p>
              <!-- <button>Book Now</button> -->
            </div>
            
            <div class="box">
              <img src="img/6.png" alt="Foto 3">
              <h3>Kategoria VI</h3>
              <p><b>Kategoria VI :</b> Villat e kësaj kategorie janë të vendosura në një zonë të jashtëzakonshme të mjedisit natyror,
               me pamje të mrekullueshme nga deti dhe natyra rrethuese. Villat janë të dizajnuara në stil tradicional dhe ofrojnë ambiente
                të rehatshme dhe të përshtatshme për të gjithë mysafirët. </p>
              <!-- <button>Book Now</button> -->
            </div>
          </div>
          
    </section>
    <!-- explore Villas part end -->

    <!-- video villa part start  -->
    <section class="video-part fade-in">
        <div class="video-txt">
            <div class="firstvideotxt">
                <span class="video-top">LUXURY LIVING</span>
                <h1>Villa Luksoze</h1>
                <p>Nje nga villat tona me luksoze dhe me te pelqyera eshte Vila Ekskluzive, e cila ndodhet ne nje nga vendet me te bukura bregdetare ne bote. Me nje pamje eklektike nga deti dhe pjeset e brendshme te dizajnuara me shije te vecante, Vila Ekskluzive eshte nje destinacion i mrekullueshem per nje pushim te rehatshem dhe me stil. </p><br>
            </div>
            <div class="booking-btn">
            <?php
              if(!isset($_SESSION['user']['roli'])){
                echo "<a href='addreservation.php'><button class='booking'>Booking Now</button></a>";
              }else{
                echo "<a href='reservations.php'><button class='booking'>Booking Now</button></a>";
              }
              ?>
            </div>
            
        </div>
        <div class="about-video">
            <video src="img/villa-video.mp4"  controls mute></video>
            <!-- <img src="img/1.png" alt=""> -->
        </div>
    </section>
    <!-- video villa part end  -->

    
    <!-- SERVICES PART START   -->
    <section class="services fade-in">
      <h1>Explore Our <span class="yellow">Services</span></h1>
        <div class="box-serv">
          <div class="boxes-services">
            <div class="icon">
              <i id="icons" class="fa fa-home"></i>
            </div>
            <div class="services-txt">
              <h3>Rooms & Apartments</h3>
              <p>Ky vend ofron dhoma dhe apartamente të rehatshme për të gjithë mysafirët e tij. Dhomat janë të pajisura me të gjitha kushtet moderne.</p>
            </div>
          </div>
          
          <div class="boxes-services">
          <div class="icon">
              <i id="icons" class="fa fa-home"></i>
            </div>
            <div class="services-txt">
              <h3>Food & Restaurants</h3>
              <p>Ne kemi një restorant të ndryshëm që ofron një gamë të gjerë ushqimesh për t'u zgjedhur. Mund të shijoni ushqim tradicional dhe lokal, si dhe ushqim ndërkombëtar.</p>
            </div>
          </div>
          
          <div class="boxes-services">
          <div class="icon">
              <i id="icons" class="fas fa-spa"></i>
            </div>
            <div class="services-txt">
              <h3>Spa & Fitness</h3>
              <p>Për të rënë në gjumë dhe për të ndjehur të relaksuar, ofrojmë një spa me shërbime të plotë. Për ata që duan të jenë në formë, kemi një qendër të fitnessit.</p>
            </div>
          </div>
          <div class="boxes-services">
          <div class="icon">
              <i id="icons" class="fas fa-gamepad"></i>
            </div>
            <div class="services-txt">
              <h3>Sports & Gaming</h3>
              <p>Për ata që duan aktivitete të jashtme, ne ofrojmë një gamë të gjerë aktivitetesh sportive, si futboll, basketboll, volejboll dhe plazh.</p>
            </div>
          </div>
          <div class="boxes-services">
          <div class="icon">
              <i id="icons" class="fa fa-gift"></i>
            </div>
            <div class="services-txt">
              <h3>Event & Party</h3>
              <p>Ne organizojmë ngjarje dhe feste të ndryshme, si dasma, martesa, festa zyrtare dhe evente të tjera sociale. </p>
            </div>
          </div>
          <div class="boxes-services">
          <div class="icon">
              <i id="icons" class="fa fa-dumbbell"></i>
            </div>
            <div class="services-txt">
              <h3>GYM & Yoga</h3>
              <p>Për ata që duan të jenë aktivë dhe të relaksuar, ofrojmë një GYM dhe klasa të yoga-s. Këto shërbime janë të përshtatshme për të gjithë.</p>
            </div>
          </div>
      </div>
    </section>
    <!-- SERVICES PART END   -->

    <!-- RESERVATIONS PART START   -->
    <section class="reservations fade-in">
      <div class="center">
        <h1>For Reservations?</h1>
        <?php
            if(!isset($_SESSION['user']['roli'])){
              echo "<a href='addreservation.php'><button class='reservation-btn'>Reservations</button></a>";
            }else{
              echo "<a href='reservations.php'><button class='reservation-btn'>Reservations</button></a>";
            }
         ?>
      </div>
    </section>
    
    <!-- RESERVATIONS PART END   -->
    

    <!-- FOOTER PART START   -->

<?php
include "inc/footer.php";
?>