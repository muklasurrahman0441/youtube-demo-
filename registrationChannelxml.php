

    <?php 
	//$connect=mysql_connect("localhost","root","")
   $conn = new PDO('mysql:host=localhost; dbname=alibaba','root', ''); 
   // require_once ('db.php');
    // mysql_select_db("project",$connect);
     
   if (isset($_POST['Submit'])) {
     
    move_uploaded_file($_FILES["image"]["tmp_name"],"image/" . $_FILES["image"]["name"]);			
    $img=$_FILES["image"]["name"];
	
	
	
	
	$num=$_POST['nam'];
	//$id=$_POST['id'];	
	//$ses=$_POST['ses'];	

	$discrip=$_POST['discrip'];
	//mysql_select_db("project",$con
     
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql="INSERT INTO `producthome`(`image`, `name`,`discription`) VALUES ('$img','$num','$discrip')";
    $conn->exec($sql);
  echo "('Successfully ')";
//header("location:alumni_crud.php");
   }
    ?>