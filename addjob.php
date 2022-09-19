<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add job</title>
    <link rel="stylesheet" href="./CSS/c1.css">
</head>
<body>
    <style>
       table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 80%;
        margin-left: 20px;
       }

       td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        text-align: center;
       }   

       tr:nth-child(even) {
        background-color: #dddddd;
       }

  </style>

    <?php include('header_.php')?>
    <?php include('connect.php')?>
    <?php

      error_reporting(0);
   
      if($_GET['deletid']){
      $deletid = $_GET['deletid'];
      $sql2 = "DELETE FROM `jobs` WHERE jobid = '$deletid'";
      mysqli_query($con,$sql2);
      header('Location: addjob.php');
     }

    ?>

    <div class="form-container">
        <form action="" method="post">
            <h3>post job</h3>
            <input type="text" name="name" required placeholder="Name of job">
            <textarea type="text" name="description" required placeholder="Description about job"></textarea>
            <input type="text" name="skill" required placeholder="Skills">
            <input type="text" name="time" required placeholder="Timings">
            <input type="text" name="salary" required placeholder="Salary">
            <textarea type="text" name="location" required placeholder="Location of job"></textarea>
            <select name="catid">
                <?php
                  $sql = "SELECT * FROM category";
                  $data = mysqli_query($con,$sql);
                  if(mysqli_num_rows($data) > 0){
                    while($row = mysqli_fetch_array($data)){
                        ?><option value="<?= $row['catid'] ?>"><?= $row['name']?></option><?php
                    }
                  }else{
                    ?><option>Category not added</option><?php
                  }
                ?>
            </select>
            <input type="submit" name="addjob" value="Post job" class="form-btn">            
        </form>

        <table>
            <tr>  
                <th>Id</th>
                <th>Title</th>
                <th>Category Id</th>
                <th>Description</th>
                <th>Timing</th>
                <th>Date</th>
                <th>Salary</th>
                <th>Location</th>
                <th>Action</th>
            </tr>

            <?php
               $sql = "SELECT * FROM `jobs`";
               $result = mysqli_query($con,$sql);
               while($data = mysqli_fetch_array($result)){
            ?>

            <tr>
              <td><?= $data['jobid'] ?></td>
              <td><?= $data['name'] ?></td>
              <td><?= $data['catid'] ?></td>
              <td><?= $data['description'] ?></td>
              <td><?= $data['timing'] ?></td>
              <td><?= $data['date'] ?></td>
              <td><?= $data['salary'] ?></td> 
              <td><?= $data['location'] ?></td>      
              <td>
                 <a href="addjob.php?deletid=<?= $data['jobid'] ?>" class="btn btn-danger">Delete</a>
              </td>
            </tr>

            <?php

               }
            ?>
        </table>

    </div>
</body>
</html>

<?php

  if(isset($_POST['addjob'])){
    $catid = $_POST['catid'];
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $description = mysqli_real_escape_string($con,$_POST['description']);
    $skill = $_POST['skill'];
    $date = date('d/m/y');
    $time = $_POST['time'];
    $salary = md5($_POST['salary']);
    $location = md5($_POST['location']);

        
    if(mysqli_query($con,"INSERT INTO `jobs`(`name`, `description`, `skill`, `timing`, `date`, `salary`, `location`, `catid`) VALUES ('$name','$description','$skill','$time','$date','$salary','$location','$catid')")){
        echo "<script> alert('record added')";
    }else{
        echo "<script> alert('record not added')";
    }
  }
?>