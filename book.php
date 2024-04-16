<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

    if(isset($_POST['submit']))
  {
  	$bid=$_GET['bookid'];
  	
 $name=$_POST['name'];
  $mobnum=$_POST['mobnum'];
 $email=$_POST['email'];
 $edate=$_POST['edate'];
 $est=$_POST['est'];
  $eetime=$_POST['eetime'];
 $vaddress=$_POST['vaddress'];
 $eventtype=$_POST['eventtype'];
 $addinfo=$_POST['addinfo'];
 $bookingid=mt_rand(100000000, 999999999);
$sql="insert into tblbooking(BookingID,Name,MobileNumber,Email,EventDate,EventStartingtime,EventEndingtime,VenueAddress,EventType,AdditionalInformation)values(:bookingid,:name,:mobnum,:email,:edate,:est,:eetime,:vaddress,:eventtype,:addinfo)";
$query=$dbh->prepare($sql);
$query->bindParam(':bookingid',$bookingid,PDO::PARAM_STR);

$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':mobnum',$mobnum,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':edate',$edate,PDO::PARAM_STR);
$query->bindParam(':est',$est,PDO::PARAM_STR);
$query->bindParam(':eetime',$eetime,PDO::PARAM_STR);
$query->bindParam(':vaddress',$vaddress,PDO::PARAM_STR);
$query->bindParam(':eventtype',$eventtype,PDO::PARAM_STR);
$query->bindParam(':addinfo',$addinfo,PDO::PARAM_STR);

 $query->execute();
   $LastInsertId=$dbh->lastInsertId();
   if ($LastInsertId>0) {
    echo '<script>alert("Your Booking Request Has Been Send. We Will Contact You Soon")</script>';
echo "<script>window.location.href ='book.php'</script>";
  }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

}


?>
<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Criczone - Book</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        
        <a href="index.html"><img src="assets/img/logo.jpg" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="index.php">Home</a></li>
         
          <li><a class="nav-link scrollto active" href="book.php">Booking Events</a></li>
          
        
          
            
          </li>
          
		  
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    <!--  <a href="#book-a-table" class="book-a-table-btn scrollto">Book a table</a>--> 
	 
 
    </div>
  </header><!-- End Header -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DJ - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  
  <link href="assets/css1/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Delicious - v4.2.0
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
 
<body background="assets/img/bg.jpg">
<body>
<main id="main">
<div class="contact content">
	 		  <div class="container"> 	
		  
		
		
			 <div class="contact-grids">
				 <div class="col-md-6 contact-left"></br></br>
					<p><b> Book Your Events now. <b> 
					 <form method="post"></p>
					 	
						 <ul>
							 <li class="text-info">Name: </li>
							 <li><input type="text" class="form-control" name="name" required="true"></li>
						 </ul>					 				 
						 <ul>
							 <li class="text-info">Email: </li>
							 <li><input type="email" class="form-control" name="email" required="true"></li>
						 </ul>
						 <ul>
						 	 <ul>
							 <li class="text-info">Mobile Number: </li>
							 <li><input type="text" class="text" name="mobnum" required="true" maxlength="10" pattern="[0-9]+"></li>
						 </ul>
							 <li class="text-info">Event Date: </li>
							 <li><input type="date" class="form-control" name="edate" required="true"></li>
						 </ul>					 
						 <ul>
							 <li class="text-info">Event Starting Time:</li>
							 <li><select type="text" class="form-control" name="est" required="true">
							 	<option value="">Select Starting Time</option>
							 	<option value="1 a.m">1 a.m</option>
							 	<option value="2 a.m">2 a.m</option>
							 	<option value="3 a.m">3 a.m</option>
							 	<option value="4 a.m">4 a.m</option>
							 	<option value="5 a.m">5 a.m</option>
							 	<option value="6 a.m">6 a.m</option>
							 	<option value="7 a.m">7 a.m</option>
							 	<option value="8 a.m">8 a.m</option>
							 	<option value="9 a.m">9 a.m</option>
							 	<option value="10 a.m">10 a.m</option>
							 	<option value="11 a.m">11 a.m</option>
							 	<option value="12 p.m">12 a.m</option>
							 	<option value="1 p.m">1 p.m</option>
							 	<option value="2 p.m">2 p.m</option>
							 	<option value="3 p.m">3 p.m</option>
							 	<option value="4 p.m">4 p.m</option>
							 	<option value="5 p.m">5 p.m</option>
							 	<option value="6 p.m">6 p.m</option>
							 	<option value="7 p.m">7 p.m</option>
							 	<option value="8 p.m">8 p.m</option>
							 	<option value="9 p.m">9 p.m</option>
							 	<option value="10 p.m">10 p.m</option>
							 	<option value="11 p.m">11 p.m</option>
							 	<option value="12 a.m">12 a.m</option>
							 </select></li>
						 </ul>
						 <ul>
							 <li class="text-info">Event Finish Time:</li>
							 <li><select type="text" class="form-control" name="eetime" required="true">
							 	<option value="">Select Finish Time</option>
							 	<option value="1 a.m">1 a.m</option>
							 	<option value="2 a.m">2 a.m</option>
							 	<option value="3 a.m">3 a.m</option>
							 	<option value="4 a.m">4 a.m</option>
							 	<option value="5 a.m">5 a.m</option>
							 	<option value="6 a.m">6 a.m</option>
							 	<option value="7 a.m">7 a.m</option>
							 	<option value="8 a.m">8 a.m</option>
							 	<option value="9 a.m">9 a.m</option>
							 	<option value="10 a.m">10 a.m</option>
							 	<option value="11 a.m">11 a.m</option>
							 	<option value="12 p.m">12 a.m</option>
							 	<option value="1 p.m">1 p.m</option>
							 	<option value="2 p.m">2 p.m</option>
							 	<option value="3 p.m">3 p.m</option>
							 	<option value="4 p.m">4 p.m</option>
							 	<option value="5 p.m">5 p.m</option>
							 	<option value="6 p.m">6 p.m</option>
							 	<option value="7 p.m">7 p.m</option>
							 	<option value="8 p.m">8 p.m</option>
							 	<option value="9 p.m">9 p.m</option>
							 	<option value="10 p.m">10 p.m</option>
							 	<option value="11 p.m">11 p.m</option>
							 	<option value="12 a.m">12 a.m</option>
							 </select></li>
						 </ul>
						 <ul>
							 <li class="text-info">Venue Address:</li>
							 <li><textarea type="text" class="form-control" name="vaddress" required="true" ></textarea></li>
						 </ul>
						 <ul>
							 <li class="text-info">Type of Event:</li>
							 <li><select type="text" class="form-control" name="eventtype" required="true" >
							 	<option value="">Choose Event Type</option>
							 	<?php 

$sql2 = "SELECT * from   tbleventtype ";
$query2 = $dbh -> prepare($sql2);
$query2->execute();
$result2=$query2->fetchAll(PDO::FETCH_OBJ);

foreach($result2 as $row)
{          
    ?>  
<option value="<?php echo htmlentities($row->EventType);?>"><?php echo htmlentities($row->EventType);?></option>
 <?php } ?>
							 </select></li>
						 </ul>	
						 <ul>
							 <li class="text-info">Additional Information:</li>
							 <li><textarea type="text" class="form-control" name="addinfo" required="true"></textarea></li>
						 </ul>					
						 <input type="submit" name="submit" value="Book">					 
					 </form>
				 </div>
				 
				 <div class="clearfix"></div>
			 </div>
		 </div>
		</main>

<?php
include "_footer.php";