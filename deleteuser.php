<?php
include "inc/header.php";

if(isset($_GET['pid'])){
    $perdoruesi=merrPerdoruesId($_GET['pid']);
    $perdoruesiid=$perdoruesi['perdoruesiid'];
    $emri=$perdoruesi['emri'];
    $mbiemri=$perdoruesi['mbiemri'];
    $roli=$perdoruesi['roli'];
    $nrtelefonit=$perdoruesi['nrtelefonit'];
    $email=$perdoruesi['email'];
    $fjalekalimi=$perdoruesi['fjalekalimi'];
}

if(isset($_POST['deleteUser'])){
    fshijPerdorues($_POST['perdoruesiid']);
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
        <h1>Forma per shtimin e Villes</h1>
        <br>
        <form id="automjeti" method="post">
        <input type="hidden" id="perdoruesiid" name="perdoruesiid" 
        value="<?php if(!empty($perdoruesiid)) echo $perdoruesiid ?>">
        <div class="inputAndLabels">
                <label for="emri">Emri</label> <br>
                <input disabled type="text" id="emri" name="emri" value="<?php if(!empty($emri)) echo $emri ?>">
            </div>
            <div class="inputAndLabels">
                <label for="mbiemri">Mbiemri</label> <br>
                <input disabled type="text" id="mbiemri" name="mbiemri" value="<?php if(!empty($mbiemri)) echo $mbiemri ?>">
            </div>
            <div class="inputAndLabels">
                <label for="nrtelefonit">Nr telefonit</label> <br>
                <input disabled type="text" id="nrtelefonit" name="nrtelefonit" value="<?php if(!empty($nrtelefonit)) echo $nrtelefonit ?>">
            </div>
            <div class="inputAndLabels">
                <label for="email">Email</label> <br>
                <input disabled type="email" id="email" name="email" value="<?php if(!empty($email)) echo $email ?>">
            </div>
            <div class="inputAndLabels">
                <label for="fjalekalimi">Fjalekalimi</label> <br>
                <input disabled type="password" id="fjalekalimi" name="fjalekalimi" value="<?php if(!empty($fjalekalimi)) echo $fjalekalimi ?>">
            </div>
            <div class="inputAndLabels">
                <label for="roli">Roli</label> <br>
                <select disabled id="roli" name="roli">
                    <option value="0">Staf</option>
                    <option value="1">Administrator</option>
                </select>
            </div>
            <div class="inputAndLabels">
                <div class="butonat">
                <?php
                        if(isset($_GET['pid'])){
                            echo "<input id='deleteUser' type='submit'
                            name='deleteUser' class='addUpdateDeleteBTN' value='Delete User'>"; 
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
