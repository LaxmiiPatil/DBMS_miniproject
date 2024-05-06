
<?php
include("db.php");
error_reporting(0);

$status = "";
if(isset($_POST['new']) && $_POST['new'] == 1){
    $trn_date = date("Y-m-d H:i:s");
    $name = $_REQUEST['name'];
    $age = $_REQUEST['age'];
    $email = $_REQUEST['email'];
    $ins_query = "INSERT INTO new_record (`trn_date`, `name`, `age`, `email`) VALUES ('$trn_date', '$name', '$age', '$email')";
    $result = mysqli_query($con, $ins_query);
    
    if($result){
        $status = "New Record Inserted Successfully.";
    } else{
        $status = "Error: Unable to insert record.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert New Record</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 500px;
    margin: 150px auto;
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    color: #333;
}

.form input[type="text"],
.form input[type="submit"] {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    transition: border-color 0.3s ease;
}

.form input[type="text"]:focus,
.form input[type="submit"]:focus {
    border-color: #4caf50;
}

.form input[type="submit"] {
    background-color: #4caf50;
    color: white;
    cursor: pointer;
}

.form input[type="submit"]:hover {
    background-color: #45a049;
}

.form p {
    margin: 0;
}

.form p.error {
    color: #ff0000;
    font-size: 14px;
    margin-top: 5px;
}
</style>
    
    <script>
        //validation
        function validateForm() {
    var name = document.forms["form"]["name"].value;
    var age = document.forms["form"]["age"].value;

    var nameRegex = /^[A-Za-z\s]+$/;
    var ageRegex = /^[0-9]+$/;

    if (!name.match(nameRegex)) {
        document.getElementById("nameError").innerText = "Only alphabets are accepted.";
        return false;
    } else {
        document.getElementById("nameError").innerText = "";
    }

    if (!age.match(ageRegex)) {
        document.getElementById("ageError").innerText = "Only numbers are accepted.";
        return false;
    } else {
        document.getElementById("ageError").innerText = "";
    }
}
    </script>
</head>
<body>
    <div class="container">
        <h1>Insert New Record</h1>
        <form class="form" name="form" method="post" action="" onsubmit="return validateForm()">
            <input type="hidden" name="new" value="1">
            <p><input type="text" name="name" placeholder="Enter Name" required></p>
            <p><span id="nameError" class="error"></span></p>
            <p><input type="text" name="age" placeholder="Enter Age" required></p>
            <p><span id="ageError" class="error"></span></p>
            <p><input type="text" name="email" placeholder="Enter Email" required></p>
            <p><input name="submit" type="submit" value="Submit"></p>
        </form>
        
        <?php if ($status): ?>
            <p style="color: #4caf50;"><?php echo $status; ?></p>
            <p><a href='view.php'>View Inserted Record</a></p>
        <?php endif; ?>
    </div>
</body>
</html>

