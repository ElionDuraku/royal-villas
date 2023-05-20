<?php
include "inc/header.php";
if(isset($_POST['updateCategory'])){
    modifikoKategorit($_POST['emri'],$_POST['pershkrimi'],$_POST['cmimi'],$_POST['kategoriaid']);
}

if(isset($_GET['kid'])){
    $kategoriaid=$_GET['kid'];
    $kategoria=merrKategoritId($kategoriaid);
    $emri=$kategoria['emri'];
    $pershkrimi=$kategoria['pershkrimi'];
    $cmimi=$kategoria['cmimi'];
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
        <h1>Forma per fshirjen e Kategoris</h1>
        <br>
        <form id="category" method="post">
            <input type="hidden" id="kategoriaid" name="kategoriaid" 
            value="<?php if(!empty($kategoriaid)) echo $kategoriaid ?>">
            <div class="input_labels">
                <label for="emri">Kategoria</label> <br>
                <input type="text" id="emri" name="emri" value="<?php if(!empty($emri)) echo $emri ?>">
            </div>
            <div class="input_labels">
                <label for="pershkrimi">Pershkrimi</label> <br>
                <input type="text" id="pershkrimi" name="pershkrimi" value="<?php if(!empty($pershkrimi)) echo $pershkrimi ?>">  
            </div>
            <div class="input_labels">
                <label for="cmimi">Cmimi</label> <br>
                <input type="text" id="cmimi" name="cmimi" value="<?php if(!empty($cmimi)) echo $cmimi ?>">  
            </div>
            <div class="input_labels">
                <div class="butonat">
                <?php
                        if(isset($_GET['kid'])){
                            echo "<input id='updateCategory' type='submit'
                            name='updateCategory' class='addUpdateDeleteBTN' value='Update Category'>"; 
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
