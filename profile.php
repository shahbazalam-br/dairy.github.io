<?php
include('session.php');

if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page

}

$username=$_SESSION['login_user'];
$sql1= "SELECT * from quadb where username='".$username."' ";
$rs1 = mysqli_query($conn, $sql1);
$fetchRow = mysqli_fetch_assoc($rs1);



if(isset($_POST['submit']))
{
    $textareaValue = trim($_POST['content']);
   
     
   
    //$sql = "insert into quadb (dairy) values ('".$textareaValue."') ON DUPLICATE KEY UPDATE username=$username "
    
    $sql = "UPDATE quadb SET dairy='".$textareaValue."' where username='".$username."' ";
    $rs = mysqli_query($conn, $sql);
    

	$affectedRows = mysqli_affected_rows($conn);
	
	if($affectedRows == 1)
	{
		$successMsg = "Record has been saved successfully";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="style1.css" rel="stylesheet" type="text/css">

</head>
<body >
<?php 
		if(isset($successMsg))
		{
			echo "<div class='success-msg'>";
			print_r($successMsg);
			echo "</div>";
		}
	?>
<div id="profile">

<b id="welcome "  >Welcome : <i><?php echo $login_session; ?></i></b>
<b style="margin-left:40%; font-size:40px"> DAIRY </b>
<b id="logout" style="border:solid 2px blue;font-size:25px;border-radius: 10px;"><a href="logout.php">Log Out</a></b>
</div>

<center>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" style=" background-image: url(background.png);">
<br>
<textarea id="dairy" name="content" rows=45% cols=150% >
<?php echo $fetchRow['dairy']?>
  </textarea>
  
  
  <br><br>
  
  <input  type="submit" name="submit" value="Submit" style="width:40%;">
</form>
</center>
</body>
</html>