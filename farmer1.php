<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
/* Full-width input fields */
input[type=text], input[type=number] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;

  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 8px;
  border: none;
  cursor: pointer;
  width: 50%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.submit-btn-add{
  margin-left: 140px;
  width: auto;
  height: 40px;
  width: 200px;
  background-color:#00ff00;
}

/* Center the image and position the close button */

.container {
  padding: 16px;
}


/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 5px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 40%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

h2,h3{
  text-align: center;
  font-family: monospace;
  font-weight: bolder;
  color: green;
  font-size: 30px;

}
sup{
  color: red;
}

label{
  display: block;
  float: left;
  width : 120px;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)}
  to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
  from {transform: scale(0)}
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn {
     width: 100%;
  }
}

.main-container{
  margin-top: 80px;
}
/*Logo Design i this page */
.h2{
  margin-top: 30px;

}

</style>
</head>
<body>


<div class="main-container">
  <h2 class="h2">Services</h2>
<hr>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Add Customer</button>
<div id="id01" class="modal">
  <form class="modal-content animate" action="connect.php" method="POST">
  <h3>  <b> <u> Add Customer</u></b> </h3>
    <div class="container">
            <label for="firstname">First Name <sup>*</sup> </label>
            <input type="text" name="firstname" value="" placeholder="Enter your  name" required/>
            <br>
            <label for="ph">Phone number<sup>*</sup> </label>
            <input type="number" name="ph" value="" required/>
            <br>
            <label for="vid">village id<sup>*</sup> </label>
            <input type="text" name="vid" value="" placeholder="Enter your address" required/>
            <br>
            <label for="milk_type">Milk Type<sup>*</sup> </label>
            <input type="text" name="milk_type" value="" placeholder="Enter cow or Buffalo" required/>
            <br>
            <label for="min_litre">Minimum Litre<sup>*</sup> </label>
            <input type="number" name="min_litre" value=""/ required>
            <br>
            <input type="submit" name="savedata" class="submit-btn-add" value="Submit">
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

    </div>
  </form>
</div>

<!--Fetch Details-->

<div class="card">
  <div class="card-body">
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dry";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM farmer ";
        $query_run = mysqli_query($conn, $sql);
  ?>

    <table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">name</th>
      <th scope="col">Phone</th>
      <th scope="col">village id</th>
      <th scope="col">Type</th>
      <th scope="col">Minimum Litre/day</th>

    </tr>

  </thead>
  <?php
    if ($query_run)
    {
        foreach ($query_run as $row)
        {
  ?>

    <tbody>
      <tr>
        <td> <?php echo $row['id']; ?> </td>
        <td> <?php echo $row['fname']; ?> </td>
        <td> <?php echo $row['ph']; ?> </td>
        <td> <?php echo $row['f_vid']; ?> </td>
        <td> <?php echo $row['milk_type']; ?> </td>
        <td> <?php echo $row['min_litre']; ?> </td>


      </tr>
    </tbody>
    <?php
        }
      }
      else {
        echo "No Record Found";
      }

    ?>

</table>


  </div>

</div>


<!--Delte The customer-->

</div>

<div class="footer">

</div>
</body>
</html>
