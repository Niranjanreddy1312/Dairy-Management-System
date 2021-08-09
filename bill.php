<?php 
require_once "connection.php";
	if(isset($_POST['billinfo']))
	{$fid=$_POST['fid'];
	 $frmdate=$_POST['from-date'];
	 $todate=$_POST['to-date'];
	
	$sql="SELECT id,fname,milk_type from farmer where id='$fid'";
	$query_run=mysqli_query($conn,$sql);

	if($query_run)
	{
		foreach($query_run as $row)
		{
			echo "farmer id:".$row['id']."<br>";
			echo "famer name:".$row['fname']."<br>";
			echo "milk_type:".$row['milk_type']."<br>";
		}
	}
	else{
		echo "record not found";
	}
	
	}?>
	value="<?php if($row['milk_type']=="cow")
					{
		             $sl="select pcost from products where pid=1";
					 $result=mysqli_fetch_assoc($sl)
					echo $result['pcost'];
					}
					else{
						$sl="select pcost from products where pid=2";
					 	$result=mysqli_fetch_assoc($sl)
						echo $result['pcost'];
						}
						
					
					?>"
						
						  
		  