<?php require_once("configpost.php");?>




<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
        <link rel="stylesheet" href="main.css">
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
 <div class="content">
     <div class="content-text">
         <h1>Share your content now</h1>
     </div>
 </div>
 
 <div class="share">
     <div class="sharenow">
      <button onclick="window.location.href='UPLOAD.php';">POST HERE</button>
        <button onclick="window.location.href='main.php';">REFRESH THE PAGE</button>
     </div>
          <?php 
	if(isset($_GET['image_success']))
		{
		echo '<div class="success">Image Uploaded successfully</div>'; 
		}

		if(isset($_GET['action']))
		{
    $action=$_GET['action'];
	if($action=='saved')
	{
		echo '<div class="success">Saved </div>'; 
	}
	elseif($action=='deleted')
	{
		echo '<div class="success">Image Deleted Successfully ... </div>'; 
	}
		}
	?>

 </div>

 </div>


<div class="table">
    <div class="format">
        <table>
            
            
            	<?php $res=mysqli_query($db,"SELECT* from items ORDER by id DESC");
			while($row=mysqli_fetch_array($res)) 
			{
				echo '<tr>
				   <th><img src="uploads/'.$row['image'].'" height="100%"
				   width="50%" class="display-photo"></th> 
				   <tr>
				   <th>" '.$row['title'].' "</th> 
				   </tr>
				   <tr>
				   <td><a href="EDIT.php?id='.$row['id'].'"><button class="btn-primary">Edit </button></a>
                  	 <a href=\'DELETE.php?id='.$row['id'].'\' onClick=\'return confirm("Are you sure you want to delete?")\'"><button class="btn-primary btn_del">Delete</button></a>
                  </td> 
				   </tr>
				</tr>'
				
				;
				
			} 	?>	
				
        </table>
    </div>
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