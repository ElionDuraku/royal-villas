<?php
    include "inc/header.php";

    if($_GET['vid']){
        $villaid = $_GET['vid'];
        $villa = merrVillatId($villaid);
        $emri = $villa['emri'];
        $adresa = $villa['adresa'];
        $katemri = $villa['katemri'];
        $pershkrimi = $villa['pershkrimi'];
        $kategoriaid = $villa['kategoriaid'];
        $cmimi = $villa['cmimi'];

    }

    if(isset($_POST['updatevilla'])){
        modifikoVilla(
        $_POST['villaid'],$_POST['adresa'],$_POST['emri'],$_POST['pershkrimi'],$_POST['kategoriaid']);
    }
?>
<!-- <section class="canva">
    <section class="images-banner">
        <img src="img/1.png" alt="">
        <img src="img/2.png" alt="">
        <img src="img/3.png" alt="">
    </section>
</section> -->
<section class="formbackground">
<div class="formaV">
        <br>
        <br>
        <h1>Forma per modifikimin e Villes</h1>
        <br>
        <form id="vills" method="post">
        <input type="hidden" id="villaid" name="villaid" 
                value="<?php if(!empty($villaid)) echo $villaid ?>">
            <div class="input_labels">
                <label for="emri">Emri</label> 
                <input type="text" id="emri" name="emri" value="<?php if(!empty($emri)) echo $emri ?>">
            </div>
            <div class="input_labels">
                <label for="adresa">Adresa</label> 
                <input type="text" id="adresa" name="adresa" value="<?php if(!empty($adresa)) echo $adresa ?>">
            </div>
            <div class="input_labels">
                <label for="kategoria">Kategoria</label> 
                <select id="kategoriaid" name="kategoriaid">
                    <?php
                        echo "<option value='$kategoriaid'>$katemri</option>";
                        $kategorit = merrKategorit();
                        while($kategoria = mysqli_fetch_assoc($kategorit)){
                            $id = $kategoria['kategoriaid'];
                            $katemri = $kategoria['emri'];
                            if($kategoriaid != $id){
                                echo "<option value='$id'>$katemri</option>";
                            }
                            // echo "<option value='$id'>$katemri</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="input_labels">
            <label for="pershkrimi">Pershkrimi</label> <br>
                <input type="text" id="pershkrimi" name="pershkrimi"
                value="<?php if(!empty($pershkrimi)) echo $pershkrimi ?>">
            </div>
            <div class="input_labels">
            <label for="cmimi">Cmimi</label> <br>
                <input type="text" id="cmimi" name="cmimi"
                value="<?php if(!empty($cmimi)) echo $cmimi ?>">
            </div>
            <div class="input_labels">
                <div class="butonat">
                <?php
                        if(isset($_GET['vid'])){
                            echo "<input id='updatevilla' type='submit'
                            name='updatevilla' class='addUpdateDeleteBTN' value='Update Vila'>"; 
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