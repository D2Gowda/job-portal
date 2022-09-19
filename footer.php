<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>footer</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            color: #d9d9d9;
        }

        footer{
            position: relative;
            bottom: 0px;
            width: 100%;
            width: 100%;
            background: #111;
        }

        .main-content{
            display: flex;
        }

        .main-content .box{
            flex-basis: 50%;
            padding: 10px 20px;
        }

        .box h2{
            font-size: 1.125rem;
            font-weight: 600;
            text-transform: uppercase;
        }

        .box .content{
            margin: 20px 0 0 0;
            position: relative;
        }    

        .box .content:before{
            position: absolute;
            content: '';
            top: -10px;
            height: 2px;
            width: 100%;
            background: #1a1a1a;
        }

        .box .content:after{
            position: absolute;
            content: '';
            height: 2px;
            width: 15%;
            background: #f12020;
            top: -10px;
        }

        .left .content p{
            text-align: justify;
        }

        .left .content .social{
            margin: 20px 0 0 0;
        }

        .left .content .social a{
            margin: 0 20px;
        }

        .left .content .social a span{
            height: 40px;
            width: 40px;
            background: #1a1a1a;
            line-height: 40px;
            text-align: center;
            font-size: 18px;
            border-radius: 5px;
            transition: 0.3s;
        }

        .left .content .social a span:hover{
            background: #f12020;
        }

        .center .content .fas{
            font-size: 1.4375rem;
            background: #1a1a1a;
            height: 45px;
            width: 45px;
            line-height: 45px;
            text-align: center;
            border-radius: 50%;
            transition: 0.3s;
            cursor: pointer;
        }

        .center .content .fas:hover{
            background: #f12020;
        }

        .center .content .text{
            font-size: 1.0625rem;
            font-weight: 500;
            padding-left: 10px;
        }
        
        .center .content .phone{
            margin: 10px 0px;
        }

        .right form .text{
            font-size: 1.0625rem;
            margin-bottom: 2px;
            color: #656565;
        }

        .right form .msg{
            margin-top: 10px;
        }

        .right form input,
        .right form textarea{
            width: 100%;
            font-size: 1.0625rem;
            background: #151515;
            padding-left: 10px;
            border: 1px solid #222222;
        }

        .right form input:focus,
        .right form textarea:focus{
            outline-color: #3498db;
        }

        .right form input{
            height: 35px;
        }

        .right form .btn{
            margin-top: 10px;
        }

        .right form .btn button{
            height: 40px;
            width: 100%;
            border: none;
            outline: none;
            background: #f12020;
            font-size: 1.0625rem;
            font-weight: 500;
            cursor: pointer;
            transition: 0.3s;
        }

        .right form .btn button:hover{
            background: #000;
        }

        .bottom center{
            padding: 5px;
            font-size: 0.9375rem;
            background: #151515;
        }

        .bottom center span{
            color: #656565;
        }

        .bottom center a{
            color: #f12020;
            text-decoration: none;
        }

        .bottom center a:hover{
            text-decoration: underline;
        }

        @media screen and (max-width: 900px){
            footer{
                position: relative;
                bottom: 0px;
            }
            .main-content{
                flex-wrap: wrap;
                flex-direction: column;
            }
            .main-content .box{
                margin: 5px 0;
            }
        }
    </style>


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
