<!DOCTYPE html>
<html lang="en">
 <head>
 <title>Webpage displaying mysql table</title>
 <style>
      table {
        width: 87%;
        border-collapse: collapse;
      }
      th, td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
      }
      tr:hover {
        background-color: #f5f5f5;
      }
 </style>
  </head>
 <body>
  <header>
   <h1> A PHP and SQL Website </h1>
  </header>
<?php
require_once "pdo.php";
$stmt = $pdo->query("SELECT name, email, password FROM users");
echo '<table border = 1>'."\n";
 echo "<tr><th>";
 echo "Name";
 echo "</th><th>";
 echo "email";
 echo"</th><th>";
 echo "Password";
 echo"</th>";
while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
  echo"<tr><td>";
  echo($row['name']);
  echo("</td><td>");
  echo($row['email']);
  echo("</td><td>");
  echo($row['password']);
  echo("</td></tr>\n");
}
echo "</table>\n";
 ?>
 <footer>

 &copy; 2019 Heidi Guenther

 </footer>

 </body>

 </html>
