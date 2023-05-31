<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $server = "localhost";
$username = "root";
$password = "";
$database = "vaccination";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
//     echo "success";
// }
// else{
    die("Error". mysqli_connect_error());
}
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    
     
    $sql = "SELECT * FROM `users` where username='$username' AND password='$password'";
    // $sql = "SELECT * FROM `king` WHERE username='bhai'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
    if ($num == 1){
        // while($row=mysqli_fetch_assoc($result)){
          //   if (password_verify($password, $row['password'])){ 
                $login = true;
                session_start();
                $_SESSION['name'] = $row['name'];
                header("location: register2.php");
            } 
            else{
                //$showError = "Invalid Credentials";
                echo "<script>alert('Invalid Credentials');</script>";
            }
        // }
        
    } 
    // else{
    //    // $showError = "Invalid Credentials";
    //     echo "Invalid Credentials";
    // }
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Vaccination registration system</title>
  <link rel="stylesheet" href="css/signin.css" />
  <style>

  </style>
</head>

<body>
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
        <a href="signup.php">Sign Up</a>
      </li>
    </ul>
  </nav>
  </header>


  <!-- input form starts from here  -->

  <form class="inputform" action="signin.php" method="POST">
    <label id="name">Login</label>
    <div>
      <img id="vaclogo"
        src="https://img.freepik.com/premium-vector/time-vaccinate-vector-logo-covid-19-vaccination-stylized-icon-medical-syringe-with-vaccine_480270-164.jpg?w=2000" />
    </div>
    <table>
      <div>
        <tr>
          <td><label id="type">Username</label></td>
          <td>
            <input id="email" type="text" placeholder="Enter your username" name="username"  name=required />
          </td>
        </tr>
      </div>
      <div>
        <tr>
          <td><label id="type">Password</label></td>
          <td>
            <input id="password" type="password" placeholder="Enter password" name="password" required />
          </td>
        </tr>
      </div>
    </table>
    <div>
      <!-- <td><button id="facilities1">Forgot Password</button></td> -->
      <br />
      <center><button class="button">Submit</button></center>
    </div>
  </form>
</body>
<header>

</html>