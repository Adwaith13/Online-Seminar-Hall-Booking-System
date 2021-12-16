<?php
 if(isset($_POST["name"]))
 if(isset($_POST["email"]))
 if(isset($_POST["contact"]))
 if(isset($_POST["requirements"]))

{
    $server = "localhost";
    $username = "root";
    $password = "";
    
    $con=mysqli_connect($server,$username,$password,);

    if(!$con){
        die("connection failed due to".mysqli_connect_error());
    }
    //echo "Successfully Connected";

    $name= $_POST ['name'];
    $email = $_POST ['email'];
    $contact = $_POST ['contact'];
    $date= $_POST['date'];
    $requirements= $_POST ['requirements'];

    $sql="INSERT INTO `seminarbooking`.`cancel`(`name`, `email`, `contact`, `dateofbooking`, `reason`, `date/time`) VALUES ('$name', '$email', '$contact', '$date', '$requirements', current_timestamp());";
    //echo $sql;

    if($con->query($sql) ==TRUE){
        echo "Successfully Cancelled";
    }
    else{
        echo "ERROR:$sql <br> $con->error";
    }
    $con->close();
} 
?>   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seminar</title>
    <link rel="stylesheet" href="cancellation.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
</head>
<body>
    <section class="header">
        <nav>
            <a href="index.html"> </a>
              <div class="nav-links" id="navlinks">
                  <ul>
                      <li> <a href="index.html">HOME</a> </li>
                      <li> <a href="online.html">WEBINAR</a> </li>
                      <li> <a href="cancellation.html">CANCELLATIONS</a> </li>
                  </ul>
              </div>
        </nav>
        
            <div class="form-box"> 
            <div class="form">
                <form action="cancel.php" method="post">
                    <label>NAME:</label>
                    <input type="text" class="form-control" name="name"  required="required" placeholder="Enter Your Name"> <br>
                    <label>EMAIL-ID:</label>
                    <input type="email" class="form-control" name="email" required="required" placeholder="Enter Your Email-ID"> <br>
                    <label>CONTACT:</label>
                    <input type="tel" class="form-control" name="contact" pattern="[789][0-9]{9}"
                    required="required" placeholder="Enter Your 10 digit Contact Number"> <br>
                   
                    <div class="input-grp">
                        <label>Date of Booking:</label>
                    <input type="date" class="form-control" name="date"  required="required" placeholder="Enter Date of Seminar"> <br>
                    
                    <button class="btn1">CANCEL</button>
                </div>
            </div>
    </section>   
</body>
</html>     