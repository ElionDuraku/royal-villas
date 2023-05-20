<?php
include "inc/header.php";
if(isset($_POST['shtoVilla'])){
    shtoVilla($_POST['emri'],$_POST['adresa'],$_POST['pershkrimi'],$_POST['kategoriaid']);
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
        <h1 class="formtitle">Forma per shtimin e Villes</h1>
        <br>
        <form id="villa" method="post">
            <div class="input_labels">
                <label for="emri">Emri i villes</label> 
                <input type="text" id="emri" name="emri" placeholder="Please write villa's name...">
                <div id="emri-error" class="error"></div>
            </div>
            <div class="input_labels">
                <label for="adresa">Adresa</label> 
                <input type="text" id="adresa" name="adresa" placeholder="Please write villa's adress...">
                <div id="adresa-error" class="error"></div>
            </div>
            <div class="input_labels">
                <label for="kategoriaid">Kategoria</label> 
                <select id="kategoriaid" name="kategoriaid">
                    <option value="">Zgjedh kategorine </option>
                    <?php
                        $kategorit=merrKategorit();
                        while ($kategoria = mysqli_fetch_assoc($kategorit)) {
                            $kategoriaid=$kategoria['kategoriaid'];
                            $emri=$kategoria['emri'];
                            echo "<option value='$kategoriaid'>$emri</option>";
                        }
                    ?>
                </select>
                <div id="kategoriaid-error" class="error"></div>
            </div>
            <div class="input_labels">
                <label for="pershkrimi">Pershkrimi</label> 
                <input type="text" id="pershkrimi" name="pershkrimi" placeholder="Please write a description...">
                <div id="pershkrimi-error" class="error"></div>
            </div>
            <div class="input_labels">
            <label for="cmimi">Cmimi</label> <br>
                <input type="text" id="cmimi" name="cmimi" placeholder="Please write price...">
                <div id="cmimi-error" class="error"></div>
            </div>
            <div class="input_labels">
                <div class="butonat">
                    <input type="submit" id="shto" name="shtoVilla" class="addUpdateDeleteBTN" value="Add Vila">
                </div>
            </div>
        </form>
    </div>
    </section>
    </section>

<?php
include "inc/footer.php";

?>
