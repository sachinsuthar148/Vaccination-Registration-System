<?php
include("conn.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vaccination registration system</title>
  <link rel="stylesheet" href="css/signup.css" />
</head>

<body>
  <header>
    <nav class="navbar">
      <div id="logo">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTa5oiWQx2-1RTnWB3yiZFOTyhuJPpA8m62ihCEDjl4&s"
          alt="covid vaccination" />
      </div>
      <ul>
        <li class="item">
          <a href="index.php">Home</a>
        </li>
        <li class="item"><a href="faq.php">FAQ</a></li>
        <li class="item">
          <a href="signin.php">Login</a>
        </li>
      </ul>
    </nav>
  </header>
  <?php
  $showAlert = false;
  $showError = false;
  if($_SERVER["REQUEST_METHOD"] == "POST"){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email=$_POST['email'];
  $mobileno=$_POST['mobno'];
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"];
  $exists = false;
  if (($password == $cpassword) && $exists == false) {
    $sql = "INSERT INTO `users` ( `name`,`username`,`email`,`mobileno`, `password`,`date`) VALUES ('$name','$username','$email','$mobileno', '$password',current_timestamp())";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      $showAlert = true;
      echo "<script>alert('signup successfully')</script>";

      header("location: signin.php");
  echo "<script>alert('signup successfully')</script>";
    }
  } else {
    echo "<script>alert('Passwords do not match')</script>";
  }
  }
  ?>


  <form class="inputform" action="signup.php" method="post">
    <label id="name">Sign Up</label>
    <table>
      <div>
        <tr>
          <td><label id="type">Name</label></td>
          <td>
            <input id="firstname" type="text" placeholder="Enter Your Name" name="name" required />
          </td>
        </tr>
      </div>
      <div>
        <tr>
          <td><label id="type">Username</label></td>
          <td>
            <input id="email" type="text" placeholder="Enter Username" name="username" required />
          </td>
        </tr>
      </div>

      
      <div>
        <tr>
          <td><label id="type">Email</label></td>
          <td>
            <input id="email" type="email" placeholder="Enter Email" name="email" required />
          </td>
        </tr>
      </div>
      <div>

      
      <div>
        <tr>
          <td><label id="type">Mobile No.</label></td>
          <td>
            <input id="email" type="text" placeholder="Enter Mobile Number" name="mobno" required />
          </td>
        </tr>
      </div>
      <div>

      <div>
        <tr>
          <td><label id="type">Password</label></td>
          <td>
            <input id="password" type="password" placeholder="Enter password" name="password" required />
          </td>
        </tr>
      </div>
      <div>
        <tr>
          <td><label id="type">Confirm Password</label></td>
          <td>
            <input id="password" type="password" placeholder="Confirm password" name="cpassword" required />
          </td>
        </tr>
      </div>
      <br />
    </table>
    <br />
    <br />
    <button class="button">Submit</button>
  </form>
</body>

</html>