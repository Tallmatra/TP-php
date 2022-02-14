<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="index.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body >
  
<?php 
   session_start();
?>
<form  action="controller.php" method="post"  >
   
       <label for="">Entrer un nombre:</label>
        <input type="text" name="nombre" id="nombre"><br><br>
        <?php 
          if(!isset($_SESSION['error']['nombre']) && isset($_SESSION['post']) ) 
          echo  $_SESSION['post']['nombre']; else ''  
        ?> 
          <?php 
           if(isset($_SESSION['error']['nombre'])):?>
                <span style="color:black"><?php echo $_SESSION['error']['nombre'] ?></span>
          <?php endif?>

    

    <input type="submit" name="button" value="Valider" id="button">

</form>
<?php 
if(isset($_SESSION['error'])){
    unset($_SESSION['error']);
}

?>
</body>
</html>









