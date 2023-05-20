<?php
include "inc/header.php";
if(isset($_POST['shtoKlient'])){
    shtoKlient($_POST['emri'],$_POST['mbiemri'],$_POST['email'],$_POST['numri_tel'],$_POST['numripersonal']);
}
?>

<section class="formbackground">
<div class="formaV">
        <br>
        <br>
        <h1 class="formtitle">Forma per shtimin e Klientit</h1>
        <br>
        <form id="client" method="post">
            <div class="input_labels">
                <label for="emri">Emri</label> 
                <input type="text" id="emri" name="emri" placeholder="Please write your name...">
                <div id="emri-error" class="error"></div>
            </div>
            <div class="input_labels">
                <label for="mbiemri">Mbiemri</label> 
                <input type="text" id="mbiemri" name="mbiemri" placeholder="Please write your surname...">
                <div id="mbiemri-error" class="error"></div>
            </div>
            <div class="input_labels">
                <label for="email">Email</label> 
                <input type="text" id="email" name="email" placeholder="Please write your email...">
                <div id="email-error" class="error"></div>
            </div>
            <div class="input_labels">
            <label for="numri_tel">Numri Telefonit</label> <br>
                <input type="text" id="numri_tel" name="numri_tel" placeholder="Please write your phone number...">
                <div id="numri_tel-error" class="error"></div>
            </div>
            <div class="input_labels">
            <label for="numripersonal">Numri Personal</label> <br>
                <input type="text" id="numripersonal" name="numripersonal" placeholder="Please write ypur personal number...">
                <div id="numripersonal-error" class="error"></div>
            </div>
            <div class="input_labels">
                <div class="butonat">
                    <input type="submit" id="shto" name="shtoKlient" class="addUpdateDeleteBTN" value="Add Client">
                </div>
            </div>
        </form>
    </div>
    </section>
    </section>

<?php
include "inc/footer.php";

?>
