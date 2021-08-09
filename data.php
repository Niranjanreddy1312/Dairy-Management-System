
<?php
require_once 'connection.php';
session_start();?>  //connecting to database


<html>
<head>
	<title> data entry</title>
	<link rel="stylesheet" href="css/bootstrap.css"
	<title>data enry</title>
	<style>
	.header {
  position: fixed;
  right:0;
  top: 0;
  width: 100%;
  background-color: black;
  color: white;
  text-align: center;
}

/* Header styling   */
.LOGO{
  height: 100px;
  width: auto;
  float: left;
  margin-left: 30px;
}

.list{
  float: right;
  margin-right: 40px;
}


.list li{
  display: inline-block;
  margin-right: 30px;
  margin-top: 30px;
}

.list li a{
  text-decoration: none;
  font-size: 20px;
  color:white;
  font-family: serif;
  font-weight: bold;
}

.list li:hover{
  border-bottom: 4px solid yellow;
  transition: .3s;
}
		.main-box{width:auto;
		margin-top:150px;
		}
	.heading{top:12%;
		color:black;
	font-size:35px;
	text-align:center;
	position:relative;
	letter-spacing:3px;
	line-height:10px
	}
		.main-box{width:auto;
		margin-top:150px;
		margin-left:650px;		
		}
	.heading{top:12%;
		color:black;
	font-size:35px;
	text-align:center;
	position:relative;
	letter-spacing:3px;
	line-height:10px
	}
	.entry{
		font-size:20px;
		
	
	line-height:20px;}
	.entry input
	{
	padding:7px;
	}
	
	.entry label{
		line-height:20px;
		font-family:cursive;
       color:green;
	   font-size:25px;
    }
.submit{
margin-top:30px;}
		
	</style>
</head>
<body>
	-Header-->
    <div class="header">
      <a href="startpage.php">  <img src="images/logo.jpeg"  alt="logo" class="LOGO"></a>
	    
      <ul class="list">
        <li> <a href="startpage.php" class="effect">HOME</a> </li>
		<li> <a href="Service.php" class="effect"><i class="fas fa-dolly-flatbed"></i> SERVICES</a> </li>
        <li> <a href="#" class="effect">ABOUT US</a> </li>
      </ul>
    </div>
	<h3 class="heading">Daily Data Entry sheet </h3>
	<div class="main-box">
	<?php
	if(isset($_SESSION['status']))
	{
		echo"<h4>".$_SESSION['status']."</h4>";
		unset($_SESSION['status']);
	}
	?>
		<form class="entry"  action="valid.php"  method="POST">
			 <label for="fid"> enter the farmer id: </label><br>
                <input type="text" name="fid" value="" placeholder="enter farmer id"/>
				<br>
				
				<label for="quan">enter the quantity:</label><br>
                <input type="text" name="quan" value="" placeholder="Enter quantity"/>
                <br>
				 <label> date</label><br>
				<input type="date" name="to-date"/> 
				<br>
               
				<input type="submit" name="senddata" class="submit" value="Submit">
        </form>
       </div>
</body>
</html>