<?php
include "inc/header.php";
if(isset($_POST['shtoReservation'])){
    shtoRezervim($_POST['klientiid'],$_POST['villaid'],$_POST['data_fillimit'],$_POST['data_mbarimit']);
}
?>
<!-- <section class="formbanner">
    <section class="images-banner">
        <img src="img/1.png" alt="">
        <img src="img/2.png" alt="">
        <img src="img/3.png" alt="">
</section> -->

<section class="formbackground">
<div class="formaV">
        <br>
        <br>
        <?php
        if(!isset($_SESSION['user']['roli'])){
            echo "<h1>Rezervo Vilen Tuaj</h1>";
          }else{
            echo "<h1>Forma per shtimin e rezervimit</h1>";
          }
        ?>
        <br>
        <form id="reservation" method="post">
            <div class="input_labels">
                <label for="villaid">Emri Villes</label> 
                <select id="villaid" name="villaid">
                    <option value="">Zgjedh Villen </option>
                    <?php
                        $villat=merrVillat();
                        while ($villa = mysqli_fetch_assoc($villat)) {
                            $villaid=$villa['villaid'];
                            $emri=$villa['emri'];
                            echo "<option value='$villaid'>$emri</option>";
                        }
                    ?>
                </select>
                <div id="villaid-error" class="error"></div>
            </div>
            
            <div class="input_labels">
                <label for="klientiid">Emri Mbiemri</label> 
                <select id="klientiid" name="klientiid">
                    <option value="">Zgjedh klientin </option>
                    <?php
                        $klientet=merrKlientet();
                        while ($klienti = mysqli_fetch_assoc($klientet)) {
                            $klientiid=$klienti['klientiid'];
                            $emrimbiemri=$klienti['emri'] . " " . $klienti['mbiemri'];
                            echo "<option value='$klientiid'>$emrimbiemri</option>";
                        }
                    ?>
                </select>
                <div id="klientiid-error" class="error"></div>
            </div>
            <div class="input_labels">
                <label for="data_fillimit">Data e Marrjes</label> <br>
                <input type="date" id="data_fillimit" name="data_fillimit" placeholder="Please write one date...">
                <div id="data_fillimit-error" class="error"></div>
            </div>
            <div class="input_labels">
                <label for="data_mbarimit">Data e Kthimit</label> <br>
                <input type="date" id="data_mbarimit" name="data_mbarimit" placeholder="Please write one date...">
                <div id="data_mbarimit-error" class="error"></div>
            </div>
            <!-- <div class="input_labels">
                <label for="cmimi">Cmimi</label> <br>
                <input type="text" id="cmimi" name="cmimi">
            </div> -->
            <div class="input_labels">
                <div class="butonat">
                    <input type="submit" id="shto" name="shtoReservation" class="addUpdateDeleteBTN" value="Add Reservation">
                </div>
            </div>
        </form>
    </div>
    </section>

<?php
include "inc/footer.php";

?>
