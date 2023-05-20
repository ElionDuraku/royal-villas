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
        <h1 class="otherh1">Royal Villas - <span>Te dhenat per perdouresit</span></h1>
        <a href="adduser.php" id="add"></i>Add More Users</a>
        <table class="tables">
            <thead>
                <tr>
                    <th>Emri</th>
                    <th>Mbiemri</th>
                    <th>Email</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                $perdoruesit = merrPerdoruesit();
                while ($perdoruesi = mysqli_fetch_assoc($perdoruesit)) {
                    $perdoruesiid = $perdoruesi['perdoruesiid'];
                    echo "<tr class='extra-row'>";
                    echo "<td>".$perdoruesi['emri'] . "</td>";
                    echo "<td>".$perdoruesi['mbiemri'] . "</td>";
                    echo "<td>".$perdoruesi['email'] . "</td>";
                    echo "<td class='blue'><a href='updateuser.php?pid=$perdoruesiid'>Edit</a></td>";
                    echo "<td><a href='deleteuser.php?pid=$perdoruesiid'>Delete</a></td>";
                    echo "</tr>";
                }
            ?>
         </tbody>   
      </table>        
    </section>
<?php
include "inc/footer.php";
?>