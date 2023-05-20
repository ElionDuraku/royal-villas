<?php
include "inc/header.php";

if(isset($_GET['rid'])){
    $rezervimi=merrRezervimId($_GET['rid']);
    $rezervimiid=$rezervimi['rezervimiid'];
    $klientiid=$rezervimi['klientiid'];
    $villaid=$rezervimi['villaid'];
    $emriv=$rezervimi['emri'];
    $emrimbiemri=$rezervimi['emrimbiemri'];
    $data_fillimit=$rezervimi['data_fillimit'];
    $data_mbarimit=$rezervimi['data_mbarimit'];
}


if(isset($_POST['deleteReservation'])){
    fshijRezervime($_POST['rezervimiid']);
}
?>
<!-- <section class="canva">
    <section class="images-banner">
        <img src="img/1.png" alt="">
        <img src="img/2.png" alt="">
        <img src="img/3.png" alt="">
</section> -->

<section class="formbackground">
<div class="formaV">
        <br>
        <br>
        <h1>Forma per fshirjen e Rezervimit</h1>
        <br>
        <form id="reservation" method="post">
            <div class="input_labels">
            <input type="hidden" name="rezervimiid" value="<?php if(!empty($rezervimiid)) echo $rezervimiid ?>">
                <label for="emriv">Emri Villes</label> <br>
                <input disabled type="text" id="emriv" name="emriv" value="<?php if(!empty($emriv)) echo $emriv ?>">
            </div>
            <div class="input_labels">
                <label for="emrimbiemri">Emri Mbiemri</label> <br>
                <input disabled type="text" id="emrimbiemri" name="emrimbiemri" value="<?php if(!empty($emrimbiemri)) echo $emrimbiemri ?>">
            </div>
            <div class="input_labels">
                <label for="data_fillimit">Data e Marrjes</label> <br>
                <input disabled type="date" id="data_fillimit" name="data_fillimit" value="<?php if(!empty($data_fillimit)) echo $data_fillimit ?>">
            </div>
            <div class="input_labels">
                <label for="data_mbarimit">Data e Kthimit</label> <br>
                <input disabled type="date" id="data_mbarimit" name="data_mbarimit" value="<?php if(!empty($data_mbarimit)) echo $data_mbarimit ?>">
            </div>
            <!-- <div class="input_labels">
                <label for="cmimi">Cmimi</label> <br>
                <input type="text" id="cmimi" name="cmimi">
            </div> -->
            <div class="input_labels">
                <div class="butonat">
                <?php
                        if(isset($_GET['rid'])){
                            echo "<input id='deleteReservation' type='submit'
                            name='deleteReservation' class='addUpdateDeleteBTN' value='Delete Reservation'>"; 
                        }
                    ?>
                </div>
            </div>
        </form>
    </div>
    </section>
    </section>

<?php
include "inc/footer.php";

?>
