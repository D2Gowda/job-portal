<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <!-- custom css file -->
    <link rel="stylesheet" href="./CSS/c1.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>

    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">Applex</label>
        <ul>
            <li><a class="active" href="admin.php">Home</a></li>
            <li><a href="addjob.php">AddJobs</a></li>
            <li><a href="categories.php">Categories</a></li>
            <li><a href="viewapplications.php">ViewApplications</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>

    <div class="content">
        <img src="./image/img1.jpg"> 
    </div>
    <?php include('footer.php')?>
</body>
</html>