<?php
include("db.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />
<style>
/* Add your custom CSS styles here */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.form {
    margin: 20px auto;
    max-width: 800px;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

h2 {
    margin-top: 0;
    color: #333;
}

table {
    width: 100%;
    border-collapse: collapse;
}

table th, table td {
    padding: 10px;
    text-align: center;
}

table th {
    background-color: #4caf50;
    color: #fff;
}

table td {
    background-color: #f9f9f9;
}

a {
    color: #007bff;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}
</style>
</head>
<body>
<div class="form">
 
<a href="insert.php">Insert New Record</a> 

<h2>View Records</h2>
<table border="1">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>Name</strong></th>
<th><strong>Age</strong></th>
<th><strong>Email</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from new_record ORDER BY id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td><?php echo $count; ?></td>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["age"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
<td><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>
