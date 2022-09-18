<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

    <!-- custom css file link-->
    <link rel="stylesheet" href="./CSS/style.css">

</head>
<body>
    
    <nav>
        <label class="light">Applex</label>
    </nav>

    <div class="form-container">
        <form action="" method="post">
            <h3>login now</h3>


            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
            ?>


            <input type="email" name="email" required placeholder="Enter your email">
            <input type="password" name="password" required placeholder="Enter your password">
            <input type="submit" name="submit" value="login now" class="form-btn">
            <p>Don't have an account? <a href="register.php">Register now</a></p>
        </form>
    </div>

    <style>
        label.light{
            color: white;
            font-size: 50px;
            line-height: 80px;
            padding-left: 650px;
            font-weight: bold;
        }
    </style>

</body>
</html>