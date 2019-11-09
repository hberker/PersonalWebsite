<?php
//index.php

$error = '';
$name = '';
$email = '';
$subject = '';
$message = '';

function clean_text($string)
{
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);
 return $string;
}

if(isset($_POST["submit"]))
{
 if(empty($_POST["name"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Name</label></p>';
 }
 else
 {
  $name = clean_text($_POST["name"]);
  if(!preg_match("/^[a-zA-Z ]*$/",$name))
  {
   $error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
  }
 }
 if(empty($_POST["email"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Email</label></p>';
 }
 else
 {
  $email = clean_text($_POST["email"]);
  if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
   $error .= '<p><label class="text-danger">Invalid email format</label></p>';
  }
 }
 if(empty($_POST["subject"]))
 {
  $error .= '<p><label class="text-danger">Subject is required</label></p>';
 }
 else
 {
  $subject = clean_text($_POST["subject"]);
 }
 if(empty($_POST["message"]))
 {
  $error .= '<p><label class="text-danger">Message is required</label></p>';
 }
 else
 {
  $message = clean_text($_POST["message"]);
 }

 if($error == '')
 {
  $file_open = fopen("../CSV/contact_data.csv", "a");
  $no_rows = count(file("../CSV/contact_data.csv"));
  if($no_rows > 1)
  {
   $no_rows = ($no_rows - 1) + 1;
  }
  $form_data = array(
   'sr_no'  => $no_rows,
   'name'  => $name,
   'email'  => $email,
   'subject' => $subject,
   'message' => $message
  );
  fputcsv($file_open, $form_data);
  $error = '<label class="text-success">Thank you for contacting us</label>';
  $name = '';
  $email = '';
  $subject = '';
  $message = '';
 }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <script src="../CODE/popup.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../CSS/DropDownMenu.css">
        <link rel="stylesheet" type="text/css" href="../CSS/MenuName.css">
        <link rel="stylesheet" type="text/css" href="../CSS/contact.css">
        <link rel="stylesheet" type="text/css" href="../CSS/global.css">

    </head>
    <body>
        <!-- The overlay -->
        <div id="myNav" class="overlay">
            <!-- Button to close the overlay navigation -->
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <!-- Overlay content -->
            <div class="overlay-content">
                <a href="main.html">Home</a>
                <a href="projects.html">Projects</a>
                <a href="about.html">About</a>
                <a href="contact.php">Contact</a>
            </div>
        </div>
        <!-- The Name/menu-->
        <div class="headerTop">
            <span class="MenuName" style="font-size:30px;cursor:pointer" onclick="openNav()"><h1>HOSNI BERKER</h1></span>
        </div>
        <div class="introCont">
            <div class = "postContent">
                <h2>Contact</h2>
                <p>
                   Feel free to reach out with any questions.
                </p>
                <div class="container">
                <br />
  <div class="container">
   <!--<h2 align="center">Contact Me</h2>
   <br />-->
   <div class="col-md-6" style="margin:0 auto; float:none; color:black;">
    <form method="post">
     <h3>Contact Form</h3>
     <br />
     <h3 class="error"><?php echo $error; ?></h2>
     <div class="form-group">
      <label>Enter Name</label>
      <input type="text" name="name" placeholder="Enter Name" class="form-control" value="<?php echo $name; ?>" />
     </div>
     <div class="form-group">
      <label>Enter Email</label>
      <input type="text" name="email" class="form-control" placeholder="Enter Email" value="<?php echo $email; ?>" />
     </div>
     <div class="form-group">
      <label>Enter Subject</label>
      <input type="text" name="subject" class="form-control" placeholder="Enter Subject" value="<?php echo $subject; ?>" />
     </div>
     <div class="form-group">
      <label>Enter Message</label>
      <textarea name="message" class="form-control" placeholder="Enter Message"><?php echo $message; ?></textarea>
     </div>
     <div class="form-group" align="center">
      <input type="submit" name="submit" class="btn btn-info" value="Submit" />
     </div>
    </form>
   </div>
  </div>
</div>

        </div>
    </body>
</html>