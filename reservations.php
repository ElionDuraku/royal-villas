<?php
    include "inc/header.php";
?>
<!-- <section class="canva">
    <section class="images-banner">
        <img src="img/1.png" alt="">
        <img src="img/2.png" alt="">
        <img src="img/3.png" alt="">
    </section>
</section> -->
<section class="background">
        <h1 class="otherh1">Royal Villas - <span>Te dhenat per rezervimet</span></h1>
        <a href="addreservation.php" id="add"></i>Add More Reservation</a>
        <table class="tables">
            <thead>
                <tr>
                    <th>Villa</th>
                    <th>Emri Mbiemri</th>
                    <th>Data e Marrjes</th>
                    <th>Data e Kthimit</th>
                    <!-- <th>Cmimi</th> -->
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                $rezervimet = merrRezervimet();
                while ($rezervimi = mysqli_fetch_assoc($rezervimet)) {
                    $rezervimiid = $rezervimi['rezervimiid'];
                    echo "<tr class='extra-row'>";
                    echo "<td>".$rezervimi['emri'] . "</td>";
                    echo "<td>".$rezervimi['emrimbiemri'] . "</td>";
                    // echo "<td>".$rezervimi['mbiemri'] . "</td>";
                    // echo "<td>".$rezervimi['villa_id'] . "</td>";
                    echo "<td>".$rezervimi['data_fillimit'] . "</td>";
                    echo "<td>".$rezervimi['data_mbarimit'] . "</td>";
                    // echo "<td>".$rezervimi['cmimi'] . "</td>";
                    echo "<td class='blue'><a href='updatereservations.php?rid=$rezervimiid'>Edit</a></td>";
                    echo "<td><a href='deletereservation.php?rid=$rezervimiid'>Delete</a></td>";
                    echo "</tr>";
                }
            ?>

         </tbody>   
      </table>        
    </section>
<?php
include "inc/footer.php";
?>