   <?php 
  $dosya=fopen("got.txt","r") or die("dosya açilamadi");
    echo fread($dosya,filesize("got.txt"));
    
    ?>
  <?php 
  $dosya=fopen("got.txt","r") or die("dosya açilamadi");
    while(!feof($dosya)){
        echo nl2br(fgets($dosya));

    }
    fclose($dosya)
    ?>
 <?php 
  $dosya=fopen("got.txt","r") or die("dosya açilamadi");
    while(!feof($dosya)){
        echo nl2br(fgetc($dosya));

    }
    fclose($dosya)
    ?>
   <?php 
  $dosya=fopen("yeni.txt","w") or die("dosya oluşdurulamadi");
    fwrite($dosya,"nehir çelik \n");
    ?>
  <?php 
 $cerezadi="kullanici";
 $cerezdegeri="zkya";
 setcookie($cerezadi,$cerezdegeri,time()+(24*60*60));

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
  <?php 
  if(isset($_COOKIE["kullanici"])){
    echo $_COOKIE["kullanici"];
  }
  else{
    echo "cerez gonderilmemiş";
  }
  ?>
</body>  
</html>
  <?php 
 $cerezadi="kullanici";
 $cerezdegeri="rkya";
 setcookie($cerezadi,$cerezdegeri,time()-(24*60*60));

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
  <?php 
  if(isset($_COOKIE["kullanici"])){
    echo $_COOKIE["kullanici"];
  }
  else{
    echo "cerez gonderilmemiş";
  }
  ?>
</body>  
</html>
  <?php 
 $cerezadi="kullanici";
 $cerezdegeri="rkya";
 setcookie("got","sikdrak",time()+(24*60*60));

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
  <?php 
  if(isset($_COOKIE["got"])){
    echo $_COOKIE["got"];
  }
  else{
    echo "cerez gonderilmemiş";
  }
  ?>
</body>  
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
 <form metod="post" action="merhaba.php">
        kullanici adi:  <input type="text" name="kullanici" ><br>
        value="<?php echo (isset($_COOKIE["kullanici"])? $_COOKIE["kullanici"]:"");?>
        beni hatrla: <input type="checkbox" name="hatrla" value="1"><br>
        <button type="sumbit">gonder </button>


 </form>
</body>  
</html>
<?php 
session_start();

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
    $_SESSION["renk"]="mavi";

    ?>
    <a href="oturum2.php">oturum2</a>
</body>
</html>
<?php 
session_start();

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
    echo "renginiz".$_SESSION["renk"];
    ?>
</body>
</html>
