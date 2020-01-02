<?php
$host="localhost";
$username="root";
$password="";
$dbname="upload";

$conn = mysqli_connect($host,$username,$password,$dbname);
?>


<h2>Upload Video</h2>
<form method="POST" action="" enctype="multipart/form-data">

Name : <input type="text" name="videoname" /><br><br><br>
Description : <input type="text"
       cols="40" 
       rows="5" 
       style="width:200px; height:50px;" 
       name="videodesc" 
       id="Text1" 
       value="" /><br><br><br>
<input type="file" name="video"/><br><br><br>
<input type="submit" name="submit" value="Upload"/>
</form>




<?php

if(isset($_POST['submit'])){
 //Targeting Folder
 $target="videos/";
 $target=$target.basename($_FILES['video']['name']);
 //Getting Selected video Type
 $type=pathinfo($target,PATHINFO_EXTENSION);
 //Allow Certain File Format To Upload
 if($type!='mp4' && $type!='3gp' && $type!='avi'){
  echo "Only mp4,3gp,avi file format are allowed to Upload";
 }else{
  //checking for Exsisting video Files
  if(file_exists($target)){
   echo "File Exist";
  }else{
   
   //Moving The video file to Desired Directory
  $uplaod_success=move_uploaded_file($_FILES['video']['tmp_name'],$target);
  if($uplaod_success==TRUE){
   //Getting Selected video Information
   $name=$_FILES['video']['name'];
      $size=$_FILES['video']['size'];
	  
	  $videoname=$_POST["videoname"];
	   $videodesc=$_POST["videodesc"];
	  
   $sql="INSERT INTO videos (name,size,type,videoname,videodesc)VALUES('$name','$size','$type','$videoname','$videodesc')";
   
  
  $result=mysqli_query($conn, $sql);
   
   if($result==TRUE){
    echo "Your video '$name' Successfully Upload and Information Saved Our Database";
   }
  }
  }
  
 
 }
 
}
?>