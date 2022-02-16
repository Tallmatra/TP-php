<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>Document</title>
</head>
<body>
<?php
    session_start();
    ?>
<form action="controller.php" method="post">

<label for="">Entrer le jour:</label> 
 <input type="text" name="jour" value="<?php if(!isset($_SESSION['error']['jour']) && isset($_SESSION['post']) ) 
      echo  $_SESSION['post']['jour']; else ''  ?>">
      <?php if(isset($_SESSION['error']['jour'])):?>
            <span style="color:red"><?php echo $_SESSION['error']['jour'] ?></span>
      <?php endif?> <br> <br><br>
 <label for="">Entrer le mois:</label>
 <input type="text" name="mois" value="<?php if(!isset($_SESSION['error']['mois']) && isset($_SESSION['post']) ) 
      echo  $_SESSION['post']['mois']; else ''  ?>">
      <?php if(isset($_SESSION['error']['mois'])):?>
            <span style="color:red"><?php echo $_SESSION['error']['mois'] ?></span>
      <?php endif?> <br> <br><br>
 <label for="">Entrer l'annèe:</label>
 <input type="text" name="annee" value="<?php if(!isset($_SESSION['error']['annee']) && isset($_SESSION['post']) ) 
      echo  $_SESSION['post']['annee']; else ''  ?>">
      <?php if(isset($_SESSION['error']['annee'])):?>
            <span style="color:red"><?php echo $_SESSION['error']['annee'] ?></span>
      <?php session_unset(); endif?> <br><br>
<input type="submit" name="bouton" value="Entrer">






</form>
</body>
</html>

<?php
if(isset($SESION["error"])){
      unset ($_SESSION["error"]);
}
?>