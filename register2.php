<?php
include ("conn.php");
if($_SERVER['REQUEST_METHOD']=='POST')
    {
    $name = $_POST['name'];
    $gender = $_POST['demo'];
    $dob = $_POST['dob'];
    $photoid = $_POST['photoid'];
    $photono = $_POST['photoidno'];
    $state=$_POST['state'];
    $district=$_POST['city'];
    $block=$_POST['block'];
    $vaccine=$_POST['vaccine'];
    
    $sql="INSERT INTO `customer` (`name`, `gender`, `dob`, `photoid`, `photoidno`, `state`, `district`, `block`, `vaccine`, `time`) VALUES ( '$name', '$gender', '$dob', '$photoid', '$photono', '$state', '$district', '$block', '$vaccine', current_timestamp());";
    
    if (mysqli_query($conn, $sql)) {
      echo "<script>alert('record submitted successfully');</script>";
      $login = true;
      header("location: thanks.php");
    } else {
      echo "Error creating record: " . mysqli_error($conn);
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vaccination registration system</title>
    <link rel="stylesheet" href="register.css" />
    <style>


    </style>
  </head>

  <body>
    <header>
      <nav class="navbar">
        <div id="logo">
          <img
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTa5oiWQx2-1RTnWB3yiZFOTyhuJPpA8m62ihCEDjl4&s"
            alt="covid vaccination"
          />
        </div>
        <ul>
          <li class="item">
            <a href="index.php">Home</a>
          </li>
          <li class="item"><a href="faq.php">FAQ</a></li>
        
        </ul>
      </nav>
    </header>

  
        <form  action="register2.php" method="POST">
          <div class="inputform">
          <label id="name">Register</label>
          <table>
          
          <tr>
          <div>
            <td> <label id="text">Name</label></td>
            <td><input id="firstname" type="text" placeholder="Enter Your Name" name="name" required/></td>
          </div>
          </tr>
          <tr>
          <div>
            <td><label id="text"  > Gender:- </label></td>
            <td>
              <input  type="radio" name="demo" value="male"/>
            <label id="text">Male</label>
            <input type="radio" name="demo" value="female" />
            <label id="text" >Female</label>
            </td>
          </div>
          </tr>
          <tr>
          <div>
            <td><label id="text"> Date of Birth </label> </td>
            <td><input id="photoid" type="Date" placeholder="Enter your Birth Date" name="dob" required></td>
          </div>
          </tr>
          <tr>
          <div>
            <td><label id="text">Photo ID Proof</label></td>
            <td><select id="photoid" required name="photoid"> 
            <option  selected=true>Aadhar Card</option>
            <option>Voter ID</option>
            <option>Driving License</option>
            <option>PAN Card</option>
            </select></td>
          </div>
          </tr>
          <tr>
          <div>
            <td><label id="text">Photo ID Number</label></td>
            <td><input id="photoid" type="text" placeholder="Enter Photo ID Number " name="photoidno"  required /></td>
          </div>
          </tr>
        </table>
      <br>
      
  
</div>
</div>

  <!-- this code is for center  -->
<div class="inputform">
  <label id="name">Center Details</label>
  <table>
<tr>
  <div>
    <td><label id="text">State</label></td>
    <td><select name="state" id="photoid" class="form-control">
  <option value="None" default>None</option>
  <option value="Andhra Pradesh">Andhra Pradesh</option>
  <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
  <option value="Arunachal Pradesh">Arunachal Pradesh</option>
  <option value="Assam">Assam</option>
  <option value="Bihar">Bihar</option>
  <option value="Chandigarh">Chandigarh</option>
  <option value="Chhattisgarh">Chhattisgarh</option>
  <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
  <option value="Daman and Diu">Daman and Diu</option>
  <option value="Delhi">Delhi</option>
  <option value="Lakshadweep">Lakshadweep</option>
  <option value="Puducherry">Puducherry</option>
  <option value="Goa">Goa</option>
  <option value="Gujarat">Gujarat</option>
  <option value="Haryana">Haryana</option>
  <option value="Himachal Pradesh" >Himachal Pradesh</option>
  <option value="Jammu and Kashmir">Jammu and Kashmir</option>
  <option value="Jharkhand">Jharkhand</option>
  <option value="Karnataka">Karnataka</option>
  <option value="Kerala">Kerala</option>
  <option value="Madhya Pradesh">Madhya Pradesh</option>
  <option value="Maharashtra">Maharashtra</option>
  <option value="Manipur">Manipur</option>
  <option value="Meghalaya">Meghalaya</option>
  <option value="Mizoram">Mizoram</option>
  <option value="Nagaland">Nagaland</option>
  <option value="Odisha">Odisha</option>
  <option value="Punjab">Punjab</option>
  <option value="Rajasthan" selected>Rajasthan</option>
  <option value="Sikkim">Sikkim</option>
  <option value="Tamil Nadu">Tamil Nadu</option>
  <option value="Telangana">Telangana</option>
  <option value="Tripura">Tripura</option>
  <option value="Uttar Pradesh">Uttar Pradesh</option>
  <option value="Uttarakhand">Uttarakhand</option>
  <option value="West Bengal">West Bengal</option>
  </select>
  </td>
          </div>
        </tr>
        <tr>
          <div>
            <td><label id="text">District</label></td>
      <td><select id="photoid" name="city">
      <option value="None">None</option>
      <option value="jalore">Jalore</option>
      <option value="Jaipur">Jaipur</option>
      <option value="Udaipur">Udaipur</option>
      <option value="Jodhpur">Jodhpur</option>
      <option value="Kota">Kota</option>
      <option value="Alwar">Alwar</option>
      <option value="Ajmer">Ajmer</option>
      <option value="banswara">banswara</option>
      <option value="Barmer">Barmer</option>
      <option value="Bikaner">Bikaner</option>
      <option value="Jaisalmer">Jaisalmer</option>
      <option value="Bharatpur">Bharatpur</option>
      <option value="Dousa">Dousa</option>
      <option value="Bundi">Bundi</option>
      <option value="Pratapgadh">Pratapgadh</option>

  </select></td>
          </div>
        </tr>
        <tr>
          <div>
            <td><label id="text">Block</label></td>
            <td>
              <select name="block" id="photoid">
              <option value="None" default>None</option>
              <option value="JALORE">JALORE</option>
              <option value="BHINMAL">BHINMAL</option>
              <option value="AHORE">AHORE</option>
              <option value="JASVANTPURA ">JASVANTPURA</option>
              <option value="RANIWADA ">RANIWADA</option>            
              <option value="SANCHORE ">SANCHORE</option>            
              <option value="SAYLA ">SAYLA</option>            
  </select></td>
          </div>        
        </tr>
        
          <tr>
            <div>
              <td><label id="text"  >Select Vaccine </label></td>
              <td>
                <input  type="radio" value="Covi-shield" name="vaccine"/>
              <label id="text">Covi-shield</label>
              <input type="radio" value="co-vaccine" name="vaccine" />
              <label id="text" >Co-vaccine</label>
            </td>
          </div>
        </tr>

      </table>
        <br><br>
  <center><button class="button">Register</button></center>
</div>
</form>




</body>
</html>
