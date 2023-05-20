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
        <h1 class="otherh1">Royal Villas - <span>Te dhenat per villat</span></h1>
        <?php
            if(isset($_SESSION['user']) && $_SESSION['user']['roli']==1){
            echo "<a href='addvilla.php' id='add'>Add More Vila</a>";
            }      
        ?>

        <table class="tables">
            <thead>
                <tr>
                    <th>Emri i Viles</th>
                    <th>Adressa</th>
                    <th>Kategoria</th>
                    <th>Pershkrimi</th>
                    <th>Cmimi</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                $villat = merrVillat();
                while ($villa = mysqli_fetch_assoc($villat)) {
                    $villaid = $villa['villaid'];
                    echo "<tr class='extra-row'>";
                    echo "<td>".$villa['emri'] . "</td>";
                    echo "<td>".$villa['adresa'] . "</td>";
                    echo "<td>".$villa['katemri'] . "</td>";
                    echo "<td>".$villa['pershkrimi'] . "</td>";
                    echo "<td>".$villa['cmimi'] . "</td>";
                    echo "<td class='blue'><a href='updatevilla.php?vid=$villaid'>Edit</a></td>";
                    echo "<td><a href='deletevilla.php?vid=$villaid'>Delete</a></td>";
                    echo "</tr>";
                }
            ?>
         </tbody>   
      </table>        
    </section>

<?php
include "inc/footer.php";
?>