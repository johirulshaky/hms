<?php
include_once('hms/include/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='contact.php'</script>";

}


?>
<!DOCTYPE HTML>
<html>

<head>
    <title>HMS | Contact us</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
</head>

<body>
    <!--start-wrap-->

    <!--start-header-->
    <div class="header">
        <div class="wrap">
            <!--start-logo-->
            <div class="logo">
                <a href="index.html" style="font-size: 30px;">HMS</a>
            </div>
            <!--end-logo-->
            <!--start-top-nav-->
            <div class="top-nav">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li class="active"><a href="contact.php">contact</a></li>
                </ul>
            </div>
            <div class="clear"> </div>
            <!--end-top-nav-->
        </div>
        <!--end-header-->
    </div>
    <div class="clear"> </div>
    <div class="wrap">
        <div class="contact">
            <div class="section group">
                <div class="col span_2_of_3">
                    <div class="contact-form">
                        <h2>About Us</h2>
                    </div>
					<div class="aboutText">
						<p>I’m excited to apply for the wordpress developer position at Fiverr. Although I’m an entry-level applicant, I am passionate about doing a great job and out of the skills you’re looking for I have already developed HTML, Html5, CSS, Css3, Bootstrap4, JavaScript, jQuery, SQL, PHP, wordpress theme customize and expert in Psd to responsive html, image to responsive html, xd to responsive html with pixel, rem perfection and Responsive Design. most expert in build e-commerce website.I’m excited to apply for the wordpress developer position at Fiverr. Although I’m an entry-level applicant, I am passionate about doing a great job and out of the skills you’re looking for I have already developed HTML, Html5, CSS, Css3, Bootstrap4, JavaScript, jQuery, SQL, PHP, wordpress theme customize and expert in Psd to responsive html, image to responsive html, xd to responsive html with pixel, rem perfection and Responsive Design. most expert in build e-commerce website.I’m excited to apply for the wordpress developer position at Fiverr. Although I’m an entry-level applicant, I am passionate about doing a great job and out of the skills you’re looking for I have already developed HTML, Html5, CSS, Css3, Bootstrap4, JavaScript, jQuery, SQL, PHP, wordpress theme customize and expert in Psd to responsive html, image to responsive html, xd to responsive html with pixel, rem perfection and Responsive Design. most expert in build e-commerce website</p>
					</div>
                </div>
            </div>
            <div class="clear"> </div>
        </div>
        <div class="clear"> </div>
    </div>
</body>

</html>
