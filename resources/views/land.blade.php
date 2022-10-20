<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Kasi APK</title>
</head>
<body>
  
<nav>
   <div class="logo">AoCoffeShop</div>
   <!-- toggle menu <span id="IL_AD1" class="IL_AD">button</span> -->
   <span class="menubtn" onclick="openNav()">&#9776;</span>
 
   <div class="navLinks">
     <ul>
       <li><a href="#">Home</a></li>
       <li><a href="#">About</a></li>
       <li><a href="#">Services</a></li>
       <li><a href="#">Contact</a></li>
       <button type="button"><a href="login">Login</a></button>
     </ul>
   </div>
 </nav>
   <!-- responsive side navbar -->
   <div class="sideNav" id="sidenav">
     <a href="#" class="closeBtn" onclick="closeNav()"> &#10006;</a>
     <a href="#">Home</a>
     <a href="#">About</a>
     <a href="#">Services</a>
     <a href="#">Contact</a>
     <a href="#"><button type="button">Login</button> </a>
   </div>
   
   <!-- Header content with banner image -->
   <div class="row">
     <div class="column1">
       <h1>Responsive Design</h1>
       <p>Contact us for responsive web design to grow your business!</p>
       <button>PURCHASE</button>
     </div>
     <div class="column2">
       <img src="https://www.hmablogs.com/wp-content/uploads/2022/06/banner-img.png" alt="banner" width="500px">
     </div>
   </div>
   
   <!-- javascript to make side menu appear -->
 <script>
   function openNav() {
     document.getElementById("sidenav").style.width = "50%";
   }
   function closeNav() {
     document.getElementById("sidenav").style.width = "0%";
   }
 </script>
 </body>
</html>