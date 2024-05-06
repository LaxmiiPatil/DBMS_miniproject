
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="css/style.css">
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
  }

  .container {
    max-width: 500px;
    margin: 200px auto;
    padding: 25px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }

  .container h2 {
    text-align: center;
    margin-bottom: 20px;
  }

  .dashboard-links {
    list-style-type: none;
    padding: 0;
  }

  .dashboard-links li {
    margin-bottom: 10px;
  }

  .dashboard-links li a {
    display: block;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
  }

  .dashboard-links li a:hover {
    background-color: #45a049;
  }
</style>
</head>
<body>
<div class="container">
  <h2>Welcome to Student Dashboard</h2>
  <ul class="dashboard-links">
   
    <li><a href="insert.php">Insert New Record</a></li>
    <li><a href="view.php">View Records</a></li>

   
  </ul>
</div>
</body>
</html>
