
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vaccination registration system</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css\signup.css" />
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

    <center><img src="https://assets.stickpng.com/images/580b585b2edbce24c47b24d2.png" alt=""></center>
    <center>
      <div style="font-size:40px;,font-family: 'Poppins', sans-serif;">
<?php
  session_start();
  echo "Thank you ";
  echo $_SESSION['name'];
  ?>
  </div> 
  <br>
  <h2>You have successfully registred </h2>
  
  <h1>Stay Safe</h1>
    <h1>Stay Healthy</h1></center>
  </body>