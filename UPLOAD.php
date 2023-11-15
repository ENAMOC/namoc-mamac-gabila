<?php require_once("configpost.php");?>

	<?php
		if(isset($_POST['form_submit']))
		{	
			$title=$_POST['title'];
$folder = "uploads/";
$image_file=$_FILES['image']['name'];
 $file = $_FILES['image']['tmp_name'];
 $path = $folder . $image_file;  
 $target_file=$folder.basename($image_file);
 $imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
//Allow only JPG, JPEG, PNG & GIF etc formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
 $error[] = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed';   
}
//Set image upload size 
    if ($_FILES["image"]["size"] > 1048576) {
   $error[] = 'Sorry, your image is too large. Upload less than 1 MB KB in size.';
}
if(!isset($error))
{
	// move image in folder 
move_uploaded_file($file,$target_file); 
$result=mysqli_query($db,"INSERT INTO items(image,title) VALUES('$image_file','$title')"); 
if($result)
{
    echo '<h1>Upload Succesfully...</h1>';
}
else 
{
	echo 'Something went wrong'; 
}
}
		}
if(isset($error)){ 

foreach ($error as $error) { 
	echo '<div class="message">'.$error.'</div><br>'; 	
}
}
	?> 
	
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
        <link rel="stylesheet" href="UPLOAD.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;1,100;1,300;1,400;1,500;1,600;1,700&family=Monserrat:wght@700;800;900&display=swap" rel="stylesheet">
    <!--  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Box icon -->
     <link rel="stylesheet" href="https://.com/boxicons@latest/css/boxicons.min.css">
       <title>The Blog</title>

</head>
<body
<!--== header ==-->

     <header class="header">
      <div class="logo">
        <img src="Imagepost/Logonow.png">
      </div>
      <div class="navbar">
  
        <a href="Index.html">Home <i class="fa-solid fa-house"></i></a>
        <a href="#About">About <i class="fa-solid fa-lightbulb"></i></a>
        <a href="#Category">Category <i class="fa-solid fa-list"></i></a>
        <a href="#Article">Article <i class="fa-solid fa-newspaper"></i></a>
      </div>
      
      
      
      
      <div class="heading-right">
  
         <div class="search">
  <button onclick="myFunction()" class="dropbtn"><i class="fa-solid fa-magnifying-glass"></i></button>
  <div id="myDropdown" class="dropdown-content">
    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
    <a href="Fashion.html">Fashion</a>
    <a href="#Painting">Painting</a>
    <a href="#Interior">Interior</a>
    <a href="#bags">Bags</a>
    <a href="#Food">Food</a>
    <a href="#Plant">Plant</a>
    <a href="#travel">Travel</a>
  </div>
</div>
     
     
    <!--=====-->
        
    
        
         <a href="#heart"><i class="fa-solid fa-heart fa-fade"></i></a>
         <a href="#Login.html"><i class="fa-solid fa-user"></i></a>
         
    <!--== <div class="menu" id="menu-icon"><i class="fa-solid fa-bars"></i></div> -->
     
        <!--====--->


<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">MENU</button>
  <div id="myDropdown" class="dropdown-content">
      <a href="Index.html">Home <i class="fa-solid fa-house"></i></a>
        <a href="#About">About <i class="fa-solid fa-lightbulb"></i></a>
        <a href="Category.html">Category <i class="fa-solid fa-list"></i></a>
        <a href="#Article">Article <i class="fa-solid fa-newspaper"></i></a>
  </div>
</div>
  </div>
      </div>
    </header>
    
   <!--=========home=========-->
 
 <div class="Post">
<div class="layout">
 <form action="" method="POST" enctype="multipart/form-data">
<label class="image-label">IMAGE</label> <br><br>
<input type="file" name="image" class="form-picture" required > <br><br>
<label class="description-label">DESCRIPTION</label><br><br>
<textarea type="text" name="title" class="text-description"></textarea><br><br>
<button name="form_submit" class="btn-upload">UPLOAD</button>
</form>
<br><br>
<button class="refresh" onclick="window.location.href='main.php';">REFRESH THE PAGE</button>
 </div>
</div>
<div class="theme-photo">
    <img src="Imagepost/theme.jpg">
</div>








        
    <!--======== Footer =====-->
    
    <section class="footer">
        <div class="footer-box">
          <h3>SERVICES</h3>
          <a href="#email">Email Marketing</a>
          <a href="#campaign">Campaigns</a>
          <a href="#brand">Brandings</a>
          <a href="#offline">0ffline</a>
        </div>
        
        <div class="footer-box">
          <h3>About us</h3>
          <a href="#story">Our story</a>
          <a href="#benefits">Benefits</a>
          <a href="#team">Team</a>
          <a href="#career">Career</a>
        </div>
        
        <div class="footer-box">
          <h3>Help</h3>
          <a href="#Faq">FAQS</a>
          <a href="#contact">Contact us</a>
        </div>
        
        <div class="footer-box">
          <h3>Social</h3>
          <div class="social">
           <a href="#facebook"><i class="fa-brands fa-facebook"></i></a>
          <a href="#Instagram"><i class="fa-brands fa-instagram"></i></a>
          <a href="#twitter"><i class="fa-brands fa-twitter"></i></a>
      
          </div>
          </div>
        
      </section> <!-- end --> 
     
      <!-- copyright-->
      <section class="copyright">
        <p>Copyright 2023 By Namoc, Gabila, and Mamac</p>
      </section>
  
  
    
     









<!-- Javascript -->
  <script src="Js/script.js"></script>
</body>
</html>