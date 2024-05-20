<!DOCTYPE html>
<html lang="en">

<head>
 <title>Lab 6 Q1</title>
</head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
<body>
 <?php
 $name = "Muhammad Daniel Emir Bin Nazaruddin";
 $matricNum = "DI220175";
 $course = "Information Technology";
 $year = "2";
 $address = "No. 19, Jalan Pintas Jaya 8, Taman Pintas Jaya, 86400, Parit Raja, Batu Pahat, Johor.";
 ?>
 <table>
 <tr>
 <td>Name</td>
 <td><?php echo "$name"; ?></td>
 </tr>
 <tr>
 <td>Matric Number </td>
 <td><?php echo "$matricNum"; ?></td>
 </tr>
 <tr>
 <td>Course </td>
 <td><?php echo "$course"; ?></td>
 </tr>
 <tr>
 <td>Year of Study </td>
 <td><?php echo "$year"; ?></td>
 </tr>
 <tr>
 <td>Address </td>
 <td><?php echo "$address"; ?></td>
 </tr>
 </table>

</body>

</html>