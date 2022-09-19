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
    <link rel="stylesheet" href="./CSS/c1.css">
    <link rel="stylesheet" href="./css/c2.css">

    <!-- Font awsome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    
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
            <li><a href="index.php">Home</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">register</a></li>
        </ul>
    </nav>

    <div class="content">
            <img src="./Image/img1.jpg">
    </div>

    <!--footer design-->
    <footer>
        <div class="main-content">
            
            <div class="div left box">
                <h2>About us</h2>
                <div class="content">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt 
                    tempore commodi tempora nisi enim ratione. In, aperiam voluptates molestiae dolore sapiente placeat? Impedit consequuntur iusto odit culpa labore tempore alias.</p>
                    <div class="social">
                        <a href="#"><span class="fab fa-facebook"></span></a>
                        <a href="#"><span class="fab fa-twitter"></span></a>
                        <a href="#"><span class="fab fa-instagram"></span></a>
                        <a href="#"><span class="fab fa-youtube"></span></a>
                    </div>
                </div>
            </div>

            <div class="center box">
                <h2>address</h2>
                <div class="content">
                    <div class="place">
                        <span class="fas fa-map-marker-alt"></span>
                        <span class="text">Hebbal, Bangalore</span>
                    </div>
                    <div class="phone">
                        <span class="fas fa-phone-alt"></span>
                        <span class="text">+91 8867155366</span>
                    </div>
                    <div class="email">
                        <span class="fas fa-envelope"></span>
                        <span class="text">darshangowdag.2002@gmail.com</span>
                    </div>
                </div>
            </div>

            <div class="right box">
                <h2>Contact us</h2>
                <div class="content">
                    <form action="#">
                        <div class="email">
                            <div class="text">Email *</div>
                            <input type="email" required>
                        </div>
                        <div class="msg">
                            <div class="text">Message *</div>
                            <textarea rows="2" cols="25" required></textarea>
                        </div>
                        <div class="btn">
                            <button type="submit">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="bottom">
            <center>
                <span class="credit">Created By <a href="https://github.com/D2Gowda">Darshan Gowda G</a> | </span>
                <span class="far fa-copyright"></span><span> 2020 All rights reserved.</span>
            </center>
        </div>
    </footer>
</body>
</html>