<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

<?php
$conn=mysqli_connect("localhost","root","","aftab");
$query="SELECT * FROM  users";
$run_query=mysqli_query($conn,$query);
?>
<table border="1px" , cellpadding=25>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Address</th>
  </tr>
<?php
while($mydata=mysqli_fetch_array($run_query)){
  ?>

<tr>
  <td> <?php echo $mydata["ID"]; ?></td>
  <td> <?php echo $mydata["Name"]; ?></td>
  <td> <?php echo $mydata["Email"]; ?></td>
  <td> <?php echo $mydata["Address"]; ?></td>

</tr>
<?php
}
?>

</table>




</body>
</html>
