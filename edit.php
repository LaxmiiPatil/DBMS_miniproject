<?php
include("db.php");

$id=$_REQUEST['id'];
$query = "SELECT * from new_record where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error($con));
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css">

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    .form {
        width: 500px;
        margin: 170px auto;
        background: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    h1 {
        text-align: center;
        margin-bottom: 20px;
    }
    input[type="text"], input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
    p {
        margin: 0;
    }
    a {
        text-decoration: none;
        color: #337ab7;
    }
</style>
</head>
<body>
<div class="form">
    <p><a href="dashboard.php">Dashboard</a> | <a href="insert.php">Insert New Record</a></p>
    <h1>Update Record</h1>
    <?php
    $status = "";
    if(isset($_POST['new']) && $_POST['new']==1)
    {
        $id=$_REQUEST['id'];
        $trn_date = date("Y-m-d H:i:s");
        $name =$_REQUEST['name'];
        $age =$_REQUEST['age'];
        $email =$_REQUEST['email'];
        @$submittedby =$_REQUEST['submittedby'];

        $update="update new_record set trn_date='".$trn_date."', name='".$name."', age='".$age."',          email='".$email."', submittedby='".$submittedby."' where id='".$id."'";
        if(!empty($con))
        mysqli_query($con, $update) or die(mysqli_error($con));
        $status = "Record Updated Successfully. <br/><br/><a href='view.php'>View Updated Record</a>";
        echo '<p style="color:#4CAF50;">'.$status.'</p>';
    } else {
    ?>
    <div>
        <form name="form" method="post" action=""> 
            <input type="hidden" name="new" value="1" />
            <input name="id" type="hidden" value="<?php if(!empty($row)) echo $row['id'];?>" />
            <p><input type="text" name="name" placeholder="Enter Name" required value="<?php if(!empty($row)) echo $row['name'];?>" /></p>
            <p><input type="text" name="age" placeholder="Enter Age" required value="<?php if(!empty($row)) echo $row['age'];?>" /></p>
             <p><input type="text" name="email" placeholder="Enter Email" required value="<?php if(!empty($row)) echo $row['email'];?>" /></p>
            <p><input name="submit" type="submit" value="Update" /></p>
        </form>
    </div>
    <?php } ?>
</div>
</body>
</html>
