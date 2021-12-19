<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>

<h2>Details</h2>

<table border="2">
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>

<?php

include "dbConn.php"; 

$records = mysqli_query($db,"select * from "); 

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['']; ?></td>
    <td><?php echo $data['']; ?></td>
    <td><?php echo $data['']; ?></td>
  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>

</body>
</html>