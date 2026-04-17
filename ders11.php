  <?php
    echo "bugun:".date("Y-m-d");
    echo "<br>";
    echo "bugun:".date("d.m.Y");
    echo  "<br>";
    echo "saat:".date("H:i:s");
    echo "<br>";
    $tarih=strtotime("tomorrow");
    echo date("Y-m-d",$tarih);
 $d=strtotime("next saturday");
    echo date("Y-m-d",$d);
    echo "<br>";
    $b=strtotime("+3 months");
    echo date("Y-m-d",$b);
    ?>
  <?php
    $nt=strtotime("saturday");
    $bt=strtotime("+6 weeks",$nt);
    while($nt<$bt){
        echo date("Y-m-d",$nt);
        echo "<br>";
        $nt= strtotime("+1 weeks",$nt);
    }
    ?>
  <?php
    $nt=strtotime("4 July");
    $bt=ceil(($nt-time())/(24*60*60));
    echo "4 temuza kalan gun sayisi:".$bt;
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
    .hata{
        color:red
    }
    </style>
</head>
<body>
    <?php 
    $i="";
    $h="";
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $i=$_POST["isim"];
        if(empty($i)){
            $h="Lutfen adinizi giriniz";
        }
    }
    
    ?>
 <form metod="post">
    isim:<input type=text name="isim" value="<?php echo $i; ?>" >
    <span class="hata" >*<?php echo $h; ?></span><br>
    <button type="sumbit">gonder</button>
 </form>
</body>
</html>
