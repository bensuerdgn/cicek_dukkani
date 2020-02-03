<?php 
  include "./connect.php";
  $flowers = $db->query("SELECT * FROM cicekler");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>

<body>

    <div class="header">
        <div class="navbar">
            <div class="menu">menu</div>
            <h3>flowers</h3>
            <h3>search</h3>
        </div>
    </div>

    <div class="showcase">
        <div class="first">
          <?php
            if($flowers->rowCount()) {
              foreach( $flowers as $row ) {
          ?>  

            <div class="photo">
              <div class="img">
                <img src="<?php echo $row["cicek_resim"]; ?>" alt=""></img>
              </div>
              <div class="title"><?php echo $row["cicek_adi"]; ?></div>
              <div class="content"><?php echo $row["cicek_aciklama"]; ?></div>
            </div>   

          <?php    
              }
            } 
          ?>
        </div>
    </div>

    <div class="footer"></div>
</body>

</html>
