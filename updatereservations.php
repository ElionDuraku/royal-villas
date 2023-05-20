<?php
include "inc/header.php";

if(isset($_POST['updateReservation'])){
    modifikoRezervim($_POST['rezervimiid'],$_POST['emrimbiemri'],$_POST['villa'],$_POST['data_fillimit'],$_POST['data_mbarimit']);
}


if(isset($_GET['rid'])){
    $rezervimi=merrRezervimId($_GET['rid']);
    $rezervimiid=$rezervimi['rezervimiid'];
    $klientiid=$rezervimi['klientiid'];
    $villaid=$rezervimi['villaid'];
    $emriv=$rezervimi['emri'];
    $emrik=$rezervimi['emrimbiemri'];
    $data_fillimit=$rezervimi['data_fillimit'];
    $data_mbarimit=$rezervimi['data_mbarimit'];
}
?>
<section class="formbackground">
<div class="formaV">
        <br>
        <br>
        <h1>Forma per modifikimin e Rezervimit</h1>
        <br>
        <form id="reservation" method="post">
            <div class="input_labels">
            <input type="hidden" name="rezervimiid" value="<?php if(!empty($rezervimiid)) echo $rezervimiid ?>">
            <label for="villa">Emri Villes</label> 
                <select id="villa" name="villa" value="<?php if(!empty($emriv)) echo $emriv ?>">
                    <?php
                        echo "<option value='$villaid'>$emriv</option>";
                        $villat = merrVillat();
                        while($villa = mysqli_fetch_assoc($villat)){
                            $villaid = $villa['villaid'];
                            $emriv = $villa['emri'];
                            if($villaid != $id){
                                echo "<option value='$villaid'>$emriv</option>";
                            }
                        }
                    ?>
                </select>
            </div>
            <div class="input_labels">
                <label for="klienti">Emri Mbiemri</label> <br>
                <select id="emrimbiemri" name="emrimbiemri" value="<?php if(!empty($emrimbiemri)) echo $emrimbiemri ?>">
                    <?php
                        echo "<option value='$klientiid'>$emrik</option>";
                        $klientet = merrKlientet();
                        while($klient = mysqli_fetch_assoc($klientet)){
                            $klientiiid = $klient['klientiid'];
                            $emrik = $klient['emri'];
                            $mbiemrik = $klient['mbiemri'];
                            $fullname = $emrik .' '. $mbiemrik;
                            if($klientiiid != $id){
                                echo "<option value='$klientiid'>$fullname</option>";
                            }
                        }
                    ?>
                </select>
            </div>
            <div class="input_labels">
                <label for="data_fillimit">Data e Marrjes</label> <br>
                <input  type="date" id="data_fillimit" name="data_fillimit" value="<?php if(!empty($data_fillimit)) echo $data_fillimit ?>">
            </div>
            <div class="input_labels">
                <label for="data_mbarimit">Data e Kthimit</label> <br>
                <input  type="date" id="data_mbarimit" name="data_mbarimit" value="<?php if(!empty($data_mbarimit)) echo $data_mbarimit ?>">
            </div>
            <div class="input_labels">
                <div class="butonat">
                <?php
                        if(isset($_GET['rid'])){
                            echo "<input id='updateReservation' type='submit'
                            name='updateReservation' class='addUpdateDeleteBTN' value='Update Reservation'>"; 
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
