<?php
include "inc/header.php";
if(isset($_POST['shtoUser'])){
    shtoPerdorues($_POST['emri'],$_POST['mbiemri'],$_POST['nrtelefonit'],$_POST['email'],$_POST['fjalekalimi'],$_POST['roli']);
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
        <h1>Forma per shtimin e Userit</h1>
        <br>
        <form id="userF" method="post">
        <div class="input_labels">
                <label for="emri">Emri</label> <br>
                <input type="text" id="emri" name="emri" placeholder="Please write your firstname...">
                <div id="emri-error" class="error"></div>
            </div>
            <div class="input_labels">
                <label for="mbiemri">Mbiemri</label> <br>
                <input type="text" id="mbiemri" name="mbiemri" placeholder="Please write your surname...">
                <div id="mbiemri-error" class="error"></div>
            </div>
            <div class="input_labels">
                <label for="nrtelefonit">Nr telefonit</label> <br>
                <input type="text" id="nrtelefonit" name="nrtelefonit" placeholder="Please write your phone number...">
                <div id="nrtelefonit-error" class="error"></div>
            </div>
            <div class="input_labels">
                <label for="email">Email</label> <br>
                <input type="email" id="email" name="email"  placeholder="Please write your email...">
                <div id="email-error" class="error"></div>
            </div>
            <div class="input_labels">
                <label for="fjalekalimi">Fjalekalimi</label> <br>
                <input type="password" id="fjalekalimi" name="fjalekalimi"  placeholder="Please write your password...">
                <div id="fjalekalimi-error" class="error"></div>
            </div>
            <div class="input_labels">
                <label for="roli">Roli</label> <br>
                <select id="roli" name="roli">
                    <option value="#">Zgjedh Rolin</option>
                    <option value="0">Staf</option>
                    <option value="1">Administrator</option>
                </select>
            </div>
            <div class="input_labels">
                <div class="butonat">
                    <input type="submit" id="shto" name="shtoUser" class="addUpdateDeleteBTN" value="Shto Perdorues">
                </div>
            </div>
        </form>
    </div>
    </section>
    </section>

<?php
include "inc/footer.php";

?>
