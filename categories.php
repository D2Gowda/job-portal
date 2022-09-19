<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=|, initial-scale=1.0">
    <title>Categories</title>

</head>
<body>
    <?php include('header_.php')?>
    <?php include('config.php')?>

    <?php
     
    error_reporting(0);
       

      $catid = $_GET['catid'];
      $sql = "SELECT * FROM `category` where catid = '$catid'";
      $rs = mysqli_query($con,$sql);
      $catdata = mysqli_fetch_array($rs);

      if($_GET['delid']){
        $delid = $_GET['delid'];
        $sql1 = "DELETE FROM `category` WHERE catid = '$delid'";
        mysqli_query($con,$sql1);
        header('Location: categories.php');
      }

    ?>

    <div class="form-containers">
        <form action="" method="post">
            <h3>add category</h3>
            <input type="hidden" name="cid" value="<?= $catdata['catid']?>">
            <input type="text" name="Name" required value="<?= $catdata['name']?>" placeholder="Enter the type of categories">
            <input type="submit" name="addcat" value="Add Category" class="form-btn">
            <input type="submit" name="updatecat" value="Update Category" class="form-btn">
        </form>
        <table>
            <tr>  
                <th>Id</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        
        <?php

           $sql = "SELECT * FROM `category`";
           $rs = mysqli_query($con,$sql);
           while($data = mysqli_fetch_array($rs)){

        ?>
            <tr>
                <td><?= $data['catid'] ?></td>
                <td><?= $data['name'] ?></td>
                <td>
                   <a href="categories.php?catid=<?= $data['catid'] ?>" class="btn btn-primary">Edit</a>
                    <a href="categories.php?delid=<?= $data['catid'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>

        <?php

            }
        ?>
        </table>
    </div>
<style>
 table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
  margin-left: 100px;
 }

 td, th{
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  text-align: center;
 }

 tr:nth-child(even) {
  background-color: #dddddd;
 }

 .form-containers{
    min-height: 90vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    padding-bottom: 60px;
    background: #eee;
}

.form-containers form{
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 5px 10px rgba(0,0,0,.1);
    background: #aec6cf;
    text-align: center;
    width: 500px;
}

.form-containers form h3{
    font-size: 30px;
    text-transform: uppercase;
    margin-bottom: 10px;
    color: #333;
}

.form-containers form textarea,
.form-containers form input,
.form-containers form select{
    width: 100%;
    padding: 10px 15px;
    font-size: 17px;
    background: #d3d3d3;
    margin: 8px 0;
    border-radius: 5px;
}

.form-containers form select option{
    background: #fff;
}

.form-containers form .form-btn{
    background: #fbd0d9;
    color: crimson;
    text-transform: capitalize;
    font-size: 20px;
    cursor: pointer;
}

.form-containers form .form-btn:hover{
    background: crimson;
    color: #fff;
}

.form-containers form p{
    margin-top: 10px;
    font-size: 20px;
    color: #333;
}

.form-containers form p a{
    color: crimson;
}

.form-containers form .error-msg{
    margin: 10px 0;
    display: block;
    background: crimson;
    color: #fff;
    border-radius: 5px;
    font-size: 20px;
    padding: 10px;
    padding: 10px;
}

</style>
</body>
</html>

<?php

 if(isset($_POST['addcat'])){
    $catname = $_POST['Name'];
    
    if(mysqli_query($con,"INSERT INTO `category`(`name`) VALUES ('$catname')")){
        echo "<script> alert('record inserted')";
    }else{
        echo "<script> alert('record not inserted')";
    }

 }

//update
if(isset($_POST['updatecat'])){
    $cid = $_POST['cid'];
    $catname = $_POST['Name'];
    
    if(mysqli_query($con,"UPDATE `category` SET `name`='$catname' WHERE catid = '$cid'")){
        echo "<script> alert('record inserted')";
    }else{
        echo "<script> alert('record not inserted')";
    }

}

?>