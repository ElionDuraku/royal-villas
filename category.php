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
        <h1 class="otherh1">Royal Villas - <span>Te dhenat per kategorit</span></h1>
        <?php
            if(isset($_SESSION['user']) && $_SESSION['user']['roli']==1){
            echo "<a href='addcategory.php' id='add'>Add More Categories</a>";
            }      
        ?>        <table class="tables">
            <thead>
                <tr>
                    <th>Kategoria</th>
                    <th>Pershkrimi</th>
                    <th>Cmimi</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                 $kategorite = merrKategorit();
                 while($kategoria = mysqli_fetch_assoc($kategorite)){
                     $kid = $kategoria['kategoriaid'];
                     echo "<tr class='extra-row'>";
                     echo "<td>". $kategoria['emri']. "</td>";
                     echo "<td>". $kategoria['pershkrimi']. "</td>";
                     echo "<td>". $kategoria['cmimi']. "</td>";
                     echo "<td class='blue'><a href='updatecategory.php?kid={$kid}'>Edit</a></td>";
                     echo "<td><a href='deletecategory.php?kid={$kid}'>Delete</a></td>";
                     echo "</tr>";
                     }
             ?>
         </tbody>   
      </table>        
    </section>    

<?php
include "inc/footer.php";
?>