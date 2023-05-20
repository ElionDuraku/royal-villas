<?php
    include "inc/header.php";

    if($_GET['kid']){
        $klientiid = $_GET['kid'];
        $klienti = merrKlientId($klientiid);
        $emri = $klienti['emri'];
        $mbiemri = $klienti['mbiemri'];
        $email = $klienti['email'];
        $numri_tel = $klienti['numri_tel'];
        $numripersonal = $klienti['numripersonal'];
    }

    if(isset($_POST['deleteClient'])){
        fshijKlient($_POST['klientiid']);
    }
?>
<section class="formbackground">
<div class="formaV">
        <br>
        <br>
        <h1>Forma per modifikimin e Klientit</h1>
        <br>
        <form id="" method="post">
        <input type="hidden" id="klientiid" name="klientiid" value="<?php if(!empty($klientiid)) echo $klientiid ?>">
            <div class="input_labels">
                <label for="emri">Emri</label> 
                <input disabled type="text" id="emri" name="emri" value="<?php if(!empty($emri)) echo $emri ?>">
            </div>
            <div class="input_labels">
                <label for="mbiemri">Mbiemri</label> 
                <input disabled type="text" id="mbiemri" name="mbiemri" value="<?php if(!empty($mbiemri)) echo $mbiemri ?>">
                <div id="mbiemri-error" class="error"></div>
            </div>
            <div class="input_labels">
                <label for="email">Email</label> 
                <input disabled type="text" id="email" name="email" value="<?php if(!empty($email)) echo $email ?>">
                <div id="email-error" class="error"></div>
            </div>
            <div class="input_labels">
                <label for="numri_tel">Numri Telefonit</label> <br>
                <input disabled type="text" id="numri_tel" name="numri_tel" value="<?php if(!empty($numri_tel)) echo $numri_tel ?>">
                <div id="numri_tel-error" class="error"></div>
            </div>
            <div class="input_labels">
                <label for="numripersonal">Numri Personal</label> <br>
                <input disabled type="text" id="numripersonal" name="numripersonal" value="<?php if(!empty($numripersonal)) echo $numripersonal ?>">
                <div id="numripersonal-error" class="error"></div>
            </div>
            <div class="input_labels">
                <div class="butonat">
                    <input  id='deleteClient' type='submit'
                    name='deleteClient' class='addUpdateDeleteBTN' value='Delete Client'> 
                </div>
            </div>
        </form>
    </div>
    </section>
    </section>


<?php
include "inc/footer.php";
?>