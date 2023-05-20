<?php
    include "inc/header.php";

    if($_GET['vid']){
        $villaid = $_GET['vid'];
        $villa = fshijVilla($villaid);
        $emri = $villa['emri'];
        $adresa = $villa['adresa'];
        $katemri = $villa['katemri'];
        $pershkrimi = $villa['pershkrimi'];
        $cmimi = $villa['cmimi'];

    }

    if(isset($_POST['delete'])){
        fshijVilla($_POST['villaid']);
    }
?>
<!-- <section class="canva">
    <section class="images-banner">
        <img src="img/1.png" alt="">
        <img src="img/2.png" alt="">
        <img src="img/3.png" alt="">
    </section>
</section> -->
<?php
    if(isset($_POST['delete'])):
?>
<section class="formbackground">
<div class="formaV">
        <br>
        <br>
        <h1>Forma per modifikimin e Villes</h1>
        <br>
        <form id="villa" method="post">
        <input type="hidden" id="villaid" name="villaid" 
                value="<?php if(!empty($villaid)) echo $villaid ?>">
            <div class="input_labels">
                <label for="emri">Emri</label> 
                <input disabled type="text" id="emri" name="emri" value="<?php if(!empty($emri)) echo $emri ?>">
            </div>
            <div class="input_labels">
                <label for="adresa">Adresa</label> 
                <input disabled type="text" id="adresa" name="adresa" value="<?php if(!empty($adresa)) echo $adresa ?>">
            </div>
            <div class="input_labels">
                <label for="kategoria">Kategoria</label> 
                <select id="kategoria" name="kategoria">
                    <option disabled value="">Zgjedh kategorine </option>
                    <?php
                        echo "<option value='$vkategoriid'>$emri</option>";
                        $kategorit = merrKategorit();
                        while($kategoria = mysqli_fetch_assoc($kategorit)){
                            $id = $kategoria['vkategoriid'];
                            $emri = $kategoria['emri'];
                            if($vkategoriid != $id){
                                echo "<option value='$id'>$emri</option>";
                            }
                        }
                    ?>
                </select>
            </div>
            <div class="input_labels">
            <label for="pershkrimi">Pershkrimi</label> <br>
                <input disabled type="text" id="pershkrimi" name="pershkrimi"
                value="<?php if(!empty($pershkrimi)) echo $pershkrimi ?>">
            </div>
            <div class="input_labels">
            <label for="cmimi">Cmimi</label> <br>
                <input disabled type="text" id="cmimi" name="cmimi"
                value="<?php if(!empty($cmimi)) echo $cmimi ?>">
            </div>
            <div class="input_labels">
                <div class="butonat">
                    <input  id='fshij' type='submit'
                    name='fshij' class='addUpdateDeleteBTN' value='Delete Vila'> 
                </div>
            </div>
        </form>
    </div>
    </section>
    </section>
    
    <?php endif; 
    ?>                    

<?php
include "inc/footer.php";
?>