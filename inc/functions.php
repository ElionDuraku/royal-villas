<?php
session_start();
$dbconn;
dbConnection();
function dbConnection()
{
    global $dbconn;
    $dbconn = mysqli_connect("localhost", 'root', '', 'royalvillas');
    if (!$dbconn) {
        die("Deshtoi lidhja me DB" . mysqli_error($dbconn));
    }
}

// FUNKSIONET PER LOGIN 

function login($email,$fjalekalimi){
    global $dbconn;
    $sql="SELECT perdoruesiid, emri, mbiemri, email, roli FROM perdoruesit";
    $sql.=" WHERE email='$email' AND fjalekalimi='$fjalekalimi'";
    $res=mysqli_query($dbconn,$sql);
    
    if(mysqli_num_rows($res)==1){
        $user_data=mysqli_fetch_assoc($res);
        $user=array();
        $user['perdoruesiid']=$user_data['perdoruesiid'];
        $user['emrimbiemri']=$user_data['emri']. " " . $user_data['mbiemri'];
        $user['roli']=$user_data['roli'];
        $_SESSION['user']=$user;
        header("Location: index.php");
    }else{
        header ("Location: register.php");
    }
}




// FUNKSIONET PER VILLAT 
function merrVillat()
{
    global $dbconn;
    $sql = "SELECT v.villaid, v.emri, k.emri AS katemri, v.adresa, v.pershkrimi, k.cmimi
    FROM villat v INNER JOIN kategorit k ON v.kategoriaid=k.kategoriaid";
    $res=mysqli_query($dbconn,$sql);
    if($res){
        return $res;
    }else{
        echo "Nuk po arrihet listimi i villave " . mysqli_error($dbconn);
    }
}

function merrVillatId($villaid){
    global $dbconn;
    $sql = "SELECT v.villaid, k.kategoriaid, v.emri, k.emri AS katemri, v.adresa, v.pershkrimi, k.cmimi
        FROM villat v INNER JOIN kategorit k ON v.kategoriaid=k.kategoriaid
        WHERE villaid=$villaid";
    $res = mysqli_query($dbconn, $sql);
    return mysqli_fetch_assoc($res);
}

function shtoVilla($emri, $adresa, $pershkrimi, $kategoriaid)
{
    global $dbconn;
    $sql = "INSERT INTO villat (emri,adresa,pershkrimi,kategoriaid) VALUES";
    $sql .= " ('$emri','$adresa','$pershkrimi','$kategoriaid')";
    $res = mysqli_query($dbconn, $sql);
    if ($res) {
        $_SESSION['message'] = "Villa u shtua me sukses";
        header("Location: villa.php");
    } else {
        die("Deshtoi shtimi i villes" . mysqli_error($dbconn));
    }
}



function modifikoVilla($villaid, $adresa, $emri, $pershkrimi, $kategoriaid){
    global $dbconn;
    $sql="UPDATE villat SET adresa='$adresa', emri='$emri', pershkrimi='$pershkrimi', kategoriaid='$kategoriaid' WHERE villaid = $villaid";
    $res = mysqli_query($dbconn,$sql);
    if($res){
        $_SESSION['message'] = "Villa u modifikua me sukses";
        header("Location: villa.php");
    }else{
        die("Deshtoi modifikimi i villes" . mysqli_error($dbconn));
    }
}

function fshijVilla($villaid){
    global $dbconn;
    $sql = "DELETE FROM villat WHERE villaid = $villaid";
    $villa= mysqli_query($dbconn,$sql);
    if($villa){
        $_SESSION['message']= "Villa u fshij me sukses";
        header("Location: villa.php");
    }else{
        die("Deshtoi fshirja e villes" . mysqli_error($dbconn));
    }
}




// FUNKSIONET PER KATEGORIT 

function merrKategorit()
{
    global $dbconn;
    $sql = "SELECT * FROM kategorit";
    return mysqli_query($dbconn, $sql);
}

function merrKategoritId($kategoriaid){
    global $dbconn;
    $sql="SELECT emri, pershkrimi, cmimi FROM kategorit";
    $sql.= " WHERE kategoriaid=$kategoriaid";
    $res=mysqli_query($dbconn,$sql);
    if($res){
        return mysqli_fetch_assoc($res);
    }else{
        echo "Nuk po arrihet listimi i kategorive " . mysqli_error($dbconn);
    }
}

function shtoKategorit($emri,$pershkrimi,$cmimi)
{
    global $dbconn;
    $sql = "INSERT INTO kategorit (emri,pershkrimi,cmimi) VALUES";
    $sql .= " ('$emri','$pershkrimi','$cmimi')";
    $res = mysqli_query($dbconn, $sql);
    if ($res) {
        $_SESSION['message'] = "Kategoria u shtua me sukses";
        header("Location: category.php");
    } else {
        die("Deshtoi shtimi i kategorise" . mysqli_error($dbconn));
    }
}

function modifikoKategorit($emri,$pershkrimi,$cmimi,$kategoriaid){
    global $dbconn;
    $sql="UPDATE kategorit SET emri='$emri', pershkrimi='$pershkrimi', cmimi='$cmimi' WHERE kategoriaid=$kategoriaid";
    $res = mysqli_query($dbconn,$sql);
    if($res){
        $_SESSION['message'] = "Kategoria u modifikua me sukses";
        header("Location: category.php");
    }else{
        die("Deshtoi modifikimi i kategorise" . mysqli_error($dbconn));
    }
}

function fshijKategorit($kategoriaid){
    global $dbconn;
    $sql = "DELETE FROM kategorit WHERE kategoriaid = $kategoriaid";
    $kategoria= mysqli_query($dbconn,$sql);
    if($kategoria){
        $_SESSION['message']= "Kategoria u fshij me sukses";
        header("Location: category.php");
    }else{
        die("Deshtoi fshirja e kategorise" . mysqli_error($dbconn));
    }
}



// FUNKSIONET PER REZERVIMET 

function merrRezervimet(){
    global $dbconn;
    $sql = "SELECT r.rezervimiid, v.emri, CONCAT(k.emri,' ', k.mbiemri) as emrimbiemri, r.data_fillimit, r.data_mbarimit, r.cmimi ";
    $sql .= "FROM rezervimet r INNER JOIN villat v ON r.villaid=v.villaid INNER JOIN klientet k ON r.klientiid=k.klientiid";
    $res = mysqli_query($dbconn, $sql);
    if ($res) {
        return $res;
    } else {
        echo "Nuk po arrihet listimi i rezervimeve: " . mysqli_error($dbconn);
    }
}


function merrRezervimId($rezervimiid){
    global $dbconn;
    $sql = "SELECT r.rezervimiid,v.villaid, v.emri,k.klientiid, CONCAT(k.emri,' ',k.mbiemri) AS emrimbiemri, r.data_fillimit, r.data_mbarimit";
    $sql.=" FROM rezervimet r INNER JOIN villat v  ON r.villaid=v.villaid INNER JOIN klientet k ON r.klientiid=k.klientiid";
    $sql.=" WHERE rezervimiid=$rezervimiid";
    $res=mysqli_query($dbconn,$sql);
    if($res){
        $rezervimi = mysqli_fetch_assoc($res);
        return $rezervimi;
    }else{
        echo "Nuk po arrihet listimi i rezervimeve " . mysqli_error($dbconn);
    }
}


function shtoRezervim($klientiid,$villaid,$data_fillimit,$data_mbarimit){
    global $dbconn;
    $perdoruesiid=$_SESSION['user']['perdoruesiid'];
    $sql="INSERT INTO rezervimet(klientiid, villaid, perdoruesiid, data_fillimit, data_mbarimit) VALUES ";
    $sql.="('$klientiid', '$villaid', '$perdoruesiid', '$data_fillimit', '$data_mbarimit')";
    $res=mysqli_query($dbconn,$sql);
    if($res){
        $_SESSION['message']="Rezervimi u shtua me sukses";
        header("Location: reservations.php");
    }else{
        die("Deshtoi shtimi i rezervimit" . mysqli_error($dbconn));
    }
}

function modifikoRezervim($rezervimiid,$klientiid,$villaid,$data_fillimit,$data_mbarimit){
    global $dbconn;
    $perdoruesiid=$_SESSION['user']['perdoruesiid'];
    $sql = "UPDATE rezervimet SET klientiid='$klientiid', villaid='$villaid', perdoruesiid='$perdoruesiid', ";
    $sql .= "data_fillimit='$data_fillimit', data_mbarimit='$data_mbarimit' WHERE rezervimiid=$rezervimiid";
    $res=mysqli_query($dbconn,$sql);
    if($res){
        $_SESSION['message']="Rezervimi u modifikua me sukses";
        header("Location: reservations.php");
    }else{
        die("Deshtoi modifikimi i rezervimit" . mysqli_error($dbconn));
    }
}

function fshijRezervime($rezervimiid){
    global $dbconn;
    $sql = "DELETE FROM rezervimet WHERE rezervimiid=$rezervimiid";
    $rezervimi = mysqli_query($dbconn,$sql);
    if($rezervimi){
        $_SESSION['message']="Rezervimi u fshi me sukses";
        header("Location: reservations.php");
    }else{
        die("Deshtoi fshimi i rezervimit" . mysqli_error($dbconn));
    }
}


// FUNKSIONET PER PERDORUESIT 

function merrPerdoruesit(){
    global $dbconn;
    $sql="SELECT perdoruesiid, emri, mbiemri, nrtelefonit, email FROM perdoruesit";
    $res=mysqli_query($dbconn,$sql);
    if($res){
        return $res;
    }else{
        echo "Nuk po arrihet listimi i perdoruesve " . mysqli_error($dbconn);
    }
}
function merrPerdoruesId($perdoruesiid){
    global $dbconn;
    $sql="SELECT perdoruesiid, emri, mbiemri, nrtelefonit, email, fjalekalimi, roli FROM perdoruesit";
    $sql.=" WHERE perdoruesiid=$perdoruesiid";
    $res=mysqli_query($dbconn,$sql);
    if($res){
        return mysqli_fetch_assoc($res);
    }else{
        echo "Nuk po arrihet listimi i perdoruesve " . mysqli_error($dbconn);
    }
}

function shtoPerdorues($emri,$mbiemri,$nrtelefonit,$email,$fjalekalimi,$roli){
    global $dbconn;
    $sql="INSERT INTO perdoruesit(emri, mbiemri, nrtelefonit, email, fjalekalimi,roli)";
    $sql.=" VALUES ('$emri','$mbiemri','$nrtelefonit','$email',$fjalekalimi,$roli)";
    $res=mysqli_query($dbconn,$sql);
    if($res){
        $_SESSION['mesazhi']="Perdoruesi u regjistrua me sukses";
        header("Location: users.php");
    }else{
        echo "Nuk po arrihet shtimi i perdoruesve " . mysqli_error($dbconn);
    }
}
function modifikoPerdorues($perdoruesiid,$emri,$mbiemri,$nrtelefonit,$email,$fjalekalimi,$roli){
    global $dbconn;
    $sql="UPDATE perdoruesit SET emri='$emri', mbiemri='$mbiemri', email='$email'";
    $sql.=", nrtelefonit='$nrtelefonit',roli=$roli,fjalekalimi='$fjalekalimi'";
    $sql.=" WHERE perdoruesiid=$perdoruesiid ";
    $res=mysqli_query($dbconn,$sql);
    if($res){
        $_SESSION['mesazhi']="Perdoruesi u modifkua me sukses";
        header("Location: users.php");
    }else{
        echo "Nuk po arrihet modifikimi i perdoruesve " . mysqli_error($dbconn);
    }
}

function fshijPerdorues($perdoruesiid){
    global $dbconn;
    $sql = "DELETE FROM perdoruesit WHERE perdoruesiid=$perdoruesiid";
    $perdoruesi = mysqli_query($dbconn,$sql);
    if($perdoruesi){
        $_SESSION['message']="Perdoruesi u fshi me sukses";
        header("Location: users.php");
    }else{
        die("Deshtoi fshirja e perdoruesit" . mysqli_error($dbconn));
    }
}

// FUNKSIONE PER KLIENTET

// function merrKlientet(){
//     global $dbconn;
//     $sql = "SELECT * FROM klientet";
//     return mysqli_query($dbconn, $sql);
// }


function merrKlientet()
{
    global $dbconn;
    // $sql = "SELECT k.klientiid, k.emri, k.mbiemri, k.email, k.numri_tel, k.numripersonal, r.rezervimiid
    // FROM klientet k INNER JOIN rezervimet r ON k.klientiid = r.klientiid";
    $sql = "SELECT * FROM klientet";
    $res=mysqli_query($dbconn,$sql);
    if($res){
        return $res;
    }else{
        echo "Nuk po arrihet listimi i villave " . mysqli_error($dbconn);
    }
}

function merrKlientId($klientiid){
    global $dbconn;
    // $sql = "SELECT k.klientiid, k.emri, k.mbiemri, k.email, k.numri_tel, k.numripersonal, r.rezervimiid
    // FROM klientet k INNER JOIN rezervimet r ON k.klientiid = r.klientiid 
    $sql = "SELECT * FROM klientet
    WHERE klientiid=$klientiid";
    $res = mysqli_query($dbconn, $sql);
    return mysqli_fetch_assoc($res);
}

function shtoKlient($emri, $mbiemri, $email, $numri_tel, $numripersonal)
{
    global $dbconn;
    $sql = "INSERT INTO klientet (emri,mbiemri,email,numri_tel,numripersonal) VALUES";
    $sql .= " ('$emri','$mbiemri','$email','$numri_tel','$numripersonal')";
    $res = mysqli_query($dbconn, $sql);
    if ($res) {
        $_SESSION['message'] = "Klienti u shtua me sukses";
        header("Location: klientet.php");
    } else {
        die("Deshtoi shtimi i klientit" . mysqli_error($dbconn));
    }
}

function modifikoKlient($klientiid ,$emri, $mbiemri, $email, $numri_tel, $numripersonal){
    global $dbconn;
    $sql="UPDATE klientet SET emri='$emri', mbiemri='$mbiemri', email='$email', numri_tel='$numri_tel', numripersonal='$numripersonal'
    WHERE klientiid = $klientiid";
    $res = mysqli_query($dbconn,$sql);
    if($res){
        $_SESSION['message'] = "Klienti u modifikua me sukses";
        header("Location: klientet.php");
    }else{
        die("Deshtoi modifikimi i klientit" . mysqli_error($dbconn));
    }
}

function fshijKlient($klientiid){
    global $dbconn;
    $sql = "DELETE FROM klientet WHERE klientiid = $klientiid";
    $klient= mysqli_query($dbconn,$sql);
    if($klient){
        $_SESSION['message']= "Klienti u fshij me sukses";
        header("Location: klientet.php");
    }else{
        die("Deshtoi fshirja e klientit" . mysqli_error($dbconn));
    }
}

?>

