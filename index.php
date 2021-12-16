<?php
   if(isset($_POST["name"]))
   if(isset($_POST["email"]))
   if(isset($_POST["contact"]))
   if(isset($_POST["date"]))
   if(isset($_POST["session"]))
   if(isset($_POST["topic"]))
   if(isset($_POST["organization"]))
   if(isset($_POST["dropdown"]))
   if(isset($_POST["people"]))
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
    $session= $_POST['session'];
    $topic= $_POST['topic'];
    $organization=$_POST['organization'];
    $dropdown= $_POST['dropdown'];
    $people =$_POST['people'];
    $requirements= $_POST ['requirements'];

    $sql="INSERT INTO `seminarbooking`.`form` (`name`, `email`, `contact`, `dateofseminar`,`session`, `topic`, `organization`, `hall`, `expected people`, `requirements`, `date/time`) VALUES ('$name', '$email', '$contact', '$date', '$session','$topic', '$organization', '$dropdown', '$people', '$requirements',current_timestamp());";
    //echo $sql;
     
    if($con->query($sql) ==TRUE){
        echo "Successfully Booked";
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
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
</head>
<body>
    <section class="header">
        <nav>
            <a href="index.html"></a>
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
            <form action="index.php" method="post">
            <label>NAME:</label>
            <input type="text" class="form-control" name="name" 
            required="required" placeholder="Enter Your Name"> 
            <label>EMAIL-ID:</label>
            <input type="email" class="form-control" name="email" required="required" placeholder="Enter Your Email-ID">
            <label>CONTACT</label>
            <input type="tel" class="form-control" name="contact" pattern="[789][0-9]{9}"
            required="required" placeholder="Enter Your 10 digit Contact Number">
           
            <div class="input-grp">
                <label>Date of Booking</label>
            <input type="date" class="form-control" name="date"  required="required" placeholder="Enter Date of Booking">
           
            <div class="input-grp">
                <label>Seminar Session</label>
                <select class="custom-select" name="session"  required="required">
                    <option value="2 HOURS">2 HOURS</option>
                    <option value="5 HOURS">5 HOURS</option>
                    <option value="6 HOURS">6 HOURS</option>
                </select> 
           
            <div class="input-grp">
                <label>Seminar Topic</label>
            <input type="text" class="form-control" name="topic"  required="required" placeholder="Topic of Seminar">

            <div class="input-grp">
                <label>Organization</label>
            <input type="text" class="form-control" name="organization"  required="required" placeholder="Enter The Organization">

            <div class="input-grp">
                <label>Seminar Hall For</label>
            <select class="custom-select" name="dropdown"  required="required">
                <option value="School Seminar">School Seminar</option>
                <option value="College Seminar">College Seminar</option>
                <option value="Corporate Seminar">Corporate Seminar</option>
            </select> 

            <div class="input-grp">
                <label>Expected People</label>
            <input type="text" class="form-control" name="people"  required="required" placeholder="Enter The Expected People">

            <div class="input-grp">
                <label>Special Requirements</label>
            <input type="text" class="form-control" name="requirements"  required="required" placeholder="Enter Any Requirements"> <br>
            
            <button class="btn1">SUBMIT</button>
            </div>
        </div>
    </div>
    </section>         
</body>
</html>


 


  
  
  




    
    
   

   
