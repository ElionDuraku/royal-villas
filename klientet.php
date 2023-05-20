<?php
    include "inc/header.php";
?>

<section class="background">
        <h1 class="otherh1">Royal Villas - <span>Te dhenat per klientet</span></h1>
        <?php
            if(isset($_SESSION['user']) && $_SESSION['user']['roli']==1){
            echo "<a href='addKlient.php' id='add'>Add More Clients</a>";
            }      
        ?>

        <table class="tables">
            <thead>
                <tr>
                    <th>Emri</th>
                    <th>Mbiemri</th>
                    <th>Email</th>
                    <th>Numri Telefonit</th>
                    <th>Numri Personal</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                $klientet = merrKlientet();
                while ($klient = mysqli_fetch_assoc($klientet)) {
                    $klientiid = $klient['klientiid'];
                    echo "<tr class='extra-row'>";
                    echo "<td>".$klient['emri'] . "</td>";
                    echo "<td>".$klient['mbiemri'] . "</td>";
                    echo "<td>".$klient['email'] . "</td>";
                    echo "<td>".$klient['numri_tel'] . "</td>";
                    echo "<td>".$klient['numripersonal'] . "</td>";
                    echo "<td class='blue'><a href='updateClient.php?kid=$klientiid'>Edit</a></td>";
                    echo "<td><a href='deleteClient.php?kid=$klientiid'>Delete</a></td>";
                    echo "</tr>";
                }
            ?>
         </tbody>   
      </table>        
    </section>

<?php
include "inc/footer.php";
?>