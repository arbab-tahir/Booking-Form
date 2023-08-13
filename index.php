<?php
   $insert = false;
if(isset($_POST['name'])){
   $server = "localhost";
   $username = "root";
   $password = "";

   $con = mysqli_connect($server, $username, $password);

   if(!$con){
    die("Conection to this database failed due to " . mysqli_connect_error());
   } 
//    echo "Conection to the database is Successfull";

   $name = $_POST['name'];
   $email = $_POST['email'];
   $age = $_POST['age'];
   $gender = $_POST['gender'];
   $phone = $_POST['phone'];
   $desc = $_POST['desc'];

   $sql = "INSERT INTO `trip`.`trip` (`name`, `email`, `age`, `gender`, `phone`, `desc`, `dt`)
   VALUES ('$name', '$email', '$age', '$gender', '$phone',
    '$desc', current_timestamp());";

    // echo $sql;

    if($con->query($sql) == true){

        $insert = true;
        // echo "Data inserted successfully";
    } else{
        echo "Error: $sql <br> $con->error";
    }

    $con->close();
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome To Travel Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&family=Sriracha&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- Background -->
    <img class="bg" src="bg.jpg" alt="Pakistan's Northern Areas" />

    <div class="container">
      <!-- Title -->
      <h1>Welcome To Pakistan's Northern Trip Form</h1>
      <p>
        Enter Your Details Here And Submit Form To Confirm Your Participation In
        Trip
      </p>
      <?php
      if($insert == true){
        echo "<p class='submitMsg'>
        Thanks for submiting your form. We are happy to see you joining us for
        the trip
      </p>"; 
      }
     ?>
      <!-- Form -->
      <form action="index.php" method="post">
        <input type="text" name="name" id="id" placeholder="Enter your name" />
        <input
          type="text"
          name="email"
          id="email"
          placeholder="Enter your email"
        />
        <input type="text" name="age" id="age" placeholder="Enter your age" />
        <input
          type="text"
          name="gender"
          id="gender"
          placeholder="Enter your gender"
        />
        <input
          type="phone"
          name="phone"
          id="phone"
          placeholder="Enter your phone"
        />
        <textarea
          name="desc"
          id="desc"
          cols="30"
          rows="6"
          placeholder="Enter other informations here"
        ></textarea>

        <button type="submit" class="btn">Submit</button>
      </form>
    </div>

    <script src="index.js"></script>
  </body>
</html>
