 <?php
$host="localhost";
$username="root";
$password="";
$dbname="upload";

$conn = mysqli_connect($host,$username,$password,$dbname);
?>
 
 
 <?php
include("connect.php");
include('upload.php');
?>
<hr/>
<link rel="stylesheet" href="style.css" type="text/css"/>
<table>
 <tr>
   <th>Video Name</th>
   <th>Size</th>
   <th>Type</th>
   <th>Action</th>
      <th>Video Name</th>
   <th>Video Description</th>
  </tr>
 <?php
 $sql="SELECT*FROM videos";
  $result=mysqli_query($conn, $sql);
 while($row=mysqli_fetch_array($result)){?>
  <tr>
  <td><?php echo $row['name'];?></td>
  <td><?php echo $row['size']/(1024*1024);?>MB</td>
  <td><?php echo $row['type'];?></td>
   <td><a href="files/<?php echo $row['name'];?>"  download>Download</a></td>
   <td><?php echo $row['videoname'];?></td>
    <td><?php echo $row['videodesc'];?></td>
 
  </tr>
  <?php }?>
  </table>