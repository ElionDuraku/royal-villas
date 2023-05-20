<?php
include "inc/header.php";
if(isset($_POST['addCategory'])){
    shtoKategorit($_POST['emri'],$_POST['pershkrimi'],$_POST['cmimi']);
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
        <h1>Forma per shtimin e Kategoris</h1>
        <br>
        <form id="category" method="post">
            <div class="input_labels">
                <label for="emri">Kategoria</label> <br>
                <input type="text" id="emri" name="emri" placeholder="Please write one category...">
                <div id="emri-error" class="error"></div>
            </div>
            <div class="input_labels">
                <label for="pershkrimi">Pershkrimi</label> <br>
                <input type="text" id="pershkrimi" name="pershkrimi" placeholder="Please write a description...">
                <div id="pershkrimi-error" class="error"></div>
            </div>
            <div class="input_labels">
                <label for="cmimi">Cmimi</label> <br>
                <input type="text" id="cmimi" name="cmimi" placeholder="Please write one price...">
                <div id="cmimi-error" class="error"></div>
            </div>
            <div class="input_labels">
                <div class="butonat">
                    <input type="submit" id="shto" name="addCategory" class="addUpdateDeleteBTN" value="Add Category">
                </div>
            </div>
        </form>
    </div>
    </section>
    </section>

<?php
include "inc/footer.php";

?>
