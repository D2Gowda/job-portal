<!-- 
  Copyright 2022
  Darshan Gowda G
  @D2Gowda
 -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <!-- custom css file link -->
    <link rel="stylesheet" href="./CSS/style.css">
    
</head>
<body>
    <style>
        .content img{
            height: 90vh;
            width: 100%;
         }
    </style>
  
    <!--header design-->
    <nav>
        <label class="logo">Applex</label>
        <ul>
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">register</a></li>
        </ul>
    </nav>

    <div class="content">
            <img src="./Image/img1.jpg">
    </div>

    <!--footer design-->
    <?php include('footer.php') ?>
</body>
</html>