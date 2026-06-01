<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $metin='merhaba';
    echo $metin;
    $x=10;
    $y=20;
    echo $x+$y;
    ?>
</php>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x=10;
    function deneme(){
        global $x;
    echo $x;
    }
 deneme();
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x=10;
    function deneme(){
       echo $Globals['x'];;
    }
 deneme();
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x=10;
    function deneme(){
       echo $GLOBALS['x'];
    }
 deneme();
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $metin='merhaba dunya';
    print($metin);
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   $x=3.14;
    var_dump($x);
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   $araba=array("mercedes","bmw","volvo");
   var_dump($araba)
    ?>
</body>
</html>
$x=null;
   var_dump($x);
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
  define("MERHABA","YONETİM");
  echo MERHABA
    ?>
</body>
</html>
 <?php
  echo str_word_count("merhaba dunya")
    ?>
  <?php
  echo strrev("merhaba dunya")
    ?>
 <?php
  echo strpos("merhaba dunya","dunya")
    ?>
  <?php
  echo strrpos("merhaba dunya","a")
    ?>
<?php
  echo strtoupper("merhaba dunya")
    ?>
  <?php
  echo strtolower("merhaba dunya")
    ?>
 <?php
  echo str_replace("dunya","cocuk","merhaba dunya")
    ?> <?php
  echo str_replace("dunya","cocuk","merhaba dunya")
    ?>
<?php
    echo $x=" ruzgar ";
     echo'<BR>';
     echo trim($x);
    ?>
 $x="Merhaba Dunya";
    $dizi=explode(" ",$x);
    var_dump($dizi);
    ?>
 echo $dizi[0];
 <?php
    $ad="ruzgar ";
    $soyad="sahin";
    echo $ad." ".$soyad;
    ?>
 <?php
    $x="merhaba alem";
    echo substr($x,8,4)
    ?>
<?php
    $x="merhaba alem";
    echo substr($x,8);
    ?>
 <?php
    echo str_repeat("sal am <br>",10);
    ?>
 <?php
    echo "kallana \"sikin\""
    ?>
<?php
    echo "kallana \$sikin"
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function aciklamakisalt($aciklama,$karakters=50){
        if(strlen($aciklama)<50){
            return aciklama;
        }
        $kisalt=substr($aciklama,0,50);
        $sonbos=strrpos($kisalt," ");
        return substr($kisalt,0,$sonbos)."...";
    }
    echo $metin="bir urun katalogunda, uzun urun aciklamalarini belli bir <br>";
    echo aciklamakisalt($metin,50);
    ?>
</body>
</html>
 <?php
    function epostagizle($eposta){
        $sonuc=explode("@",$eposta);
        echo var_dump($sonuc);
    }
    epostagizle("aybekovanvar05@gmail.com");
    ?>
 <?php
    function epostagizle($eposta){
        $sonuc=explode("@",$eposta);
       $ilk=substr($sonuc[0],0,3);
       $yildz=str_repeat("*",strlen($sonuc[0])-3);
       return $ilk.$yildz."@".$sonuc[1];
    }
   echo epostagizle("aybekovanvar05@gmail.com");
    ?>
