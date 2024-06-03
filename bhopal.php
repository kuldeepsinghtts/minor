<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>

<style>

.K2-grid {
  padding: 5px;
  text-align: center;
}

.K2-grid ul {
  clear: both;
  margin: 15px 0 20px;
  padding:0;
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.coll-3 ul li {
  width: 30%;
}

.K2-grid li {
  font-size: 0.9em;
  font-weight: 500;
  line-height: 1.3em;
  text-align: center;
  background: #ffffff;
  border-radius: 5px;
  margin: 5px 0;
  box-sizing: border-box;
  box-shadow: rgb(0 0 0 / 24%) 0px 3px 8px;
  padding: 10px 0 10px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.K2-grid li a {
  display: block;
  text-decoration: none;
  color: #333;
}

.K2-grid li svg {
  margin: 3px 0;
  width: 35px;
  height: 35px;
  fill: #26ae61;
  display: inline-block;
}

.K2-grid li span {
  display: block;
  padding: 0 3px;
}
</style>






    </style>
    <title>May i Help You</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.html">May i Help You</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="welcome.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>

      
     
    </ul>

  <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
        <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome ". $_SESSION['username']?></a>
      </li>
  </ul>
  </div>


  </div>
</nav>

<div class="container mt-4">
<h3><?php echo "Welcome ". $_SESSION['username']?>! You can now use this website</h3>
<hr>

</div>





<div class='K2-grid coll-3 icon-p-2'>
<h2> jabalpur </h2>
        
<ul>
<li>
    <a href='#' title='Blogs'><svg xmlns='/img/plam.jpg' viewbox='0 0 32 32'><g><path d='M2,29a1,1,0,0,1-1-1.11l.77-7a1,1,0,0,1,.29-.59L18.42,3.94a3.2,3.2,0,0,1,4.53,0l3.11,3.11a3.2,3.2,0,0,1,0,4.53L9.71,27.93a1,1,0,0,1-.59.29l-7,.77Zm7-1.78H9ZM3.73,21.45l-.6,5.42,5.42-.6,16.1-16.1a1.2,1.2,0,0,0,0-1.7L21.53,5.35a1.2,1.2,0,0,0-1.7,0Z'/><path d='M23,14.21a1,1,0,0,1-.71-.29L16.08,7.69A1,1,0,0,1,17.5,6.27l6.23,6.23a1,1,0,0,1,0,1.42A1,1,0,0,1,23,14.21Z'/><rect x='7.39' y='16.1' width='11.01' height='2' transform='translate(-8.31 14.13) rotate(-45)'/><path d='M30,29H14a1,1,0,0,1,0-2H30a1,1,0,0,1,0,2Z'/></path></rect></path></path></g></svg>
    <span>Blog</span></a>
</li>

<li>
    <a href='#' title='Blogger'><svg xmlns='http://www.w3.org/2000/svg' viewbox='0 0 32 32'><g><path d='M24,3H8A5,5,0,0,0,3,8V24a5,5,0,0,0,5,5H24a5,5,0,0,0,5-5V8A5,5,0,0,0,24,3Zm3,21a3,3,0,0,1-3,3H8a3,3,0,0,1-3-3V8A3,3,0,0,1,8,5H24a3,3,0,0,1,3,3Z'/><path d='M22,15H20.44A3.91,3.91,0,0,0,21,13a4,4,0,0,0-4-4H13a4,4,0,0,0-4,4v6a4,4,0,0,0,4,4h6a4,4,0,0,0,4-4V16A1,1,0,0,0,22,15ZM11,13a2,2,0,0,1,2-2h4a2,2,0,0,1,0,4H11Zm10,6a2,2,0,0,1-2,2H13a2,2,0,0,1-2-2V17H21Z'/></path></path></g></svg>
    <span>Blogger</span></a>
</li>

<li>
    <a href='#' title='Seo'><svg fill='currentColor' viewbox='0 0 16 16' xmlns='http://www.w3.org/2000/svg'>
    <path d='M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H14a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 2 7h5.5V6A1.5 1.5 0 0 1 6 4.5v-1zM8.5 5a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1zM0 11.5A1.5 1.5 0 0 1 1.5 10h1A1.5 1.5 0 0 1 4 11.5v1A1.5 1.5 0 0 1 2.5 14h-1A1.5 1.5 0 0 1 0 12.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm4.5.5A1.5 1.5 0 0 1 7.5 10h1a1.5 1.5 0 0 1 1.5 1.5v1A1.5 1.5 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm4.5.5a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z' fill-rule='evenodd'></path>
    </svg><span>SEO</span></a>
</li>
        
<li>
    <a href='#' title='News'><svg viewbox='0 0 24 24'>
    <path d='M20 5L20 19L4 19L4 5H20M20 3H4C2.89 3 2 3.89 2 5V19C2 20.11 2.89 21 4 21H20C21.11 21 22 20.11 22 19V5C22 3.89 21.11 3 20 3M18 15H6V17H18V15M10 7H6V13H10V7M12 9H18V7H12V9M18 11H12V13H18V11Z' fill-rule='evenodd'></path>
    </svg><span>News</span></a>
</li>

<li>
    <a href='#' title='Subscribe'><svg xmlns='http://www.w3.org/2000/svg' viewbox='0 0 32 32'><g><path d='M29.73,9.9A5,5,0,0,0,25.1,5.36a115.19,115.19,0,0,0-18.2,0A5,5,0,0,0,2.27,9.9a69,69,0,0,0,0,12.2A5,5,0,0,0,6.9,26.64c3,.24,6.06.36,9.1.36s6.08-.12,9.1-.36a5,5,0,0,0,4.63-4.54A69,69,0,0,0,29.73,9.9Zm-2,12A3,3,0,0,1,25,24.65a113.8,113.8,0,0,1-17.9,0,3,3,0,0,1-2.78-2.72,65.26,65.26,0,0,1,0-11.86A3,3,0,0,1,7.05,7.35C10,7.12,13,7,16,7s6,.12,9,.35a3,3,0,0,1,2.78,2.72A65.26,65.26,0,0,1,27.73,21.93Z'/><path d='M21.45,15.11l-8-4A1,1,0,0,0,12,12v8a1,1,0,0,0,.47.85A1,1,0,0,0,13,21a1,1,0,0,0,.45-.11l8-4a1,1,0,0,0,0-1.78ZM14,18.38V13.62L18.76,16Z'/></path></path></g></svg>
    <span>Subscribe</span></a>
</li>


<li>
    <a href='#' title='Telegram'><svg xmlns='http://www.w3.org/2000/svg' viewbox='0 0 32 32'><g><path d='M24,28a1,1,0,0,1-.62-.22l-6.54-5.23a1.83,1.83,0,0,1-.13.16l-4,4a1,1,0,0,1-1.65-.36L8.2,18.72,2.55,15.89a1,1,0,0,1,.09-1.82l26-10a1,1,0,0,1,1,.17,1,1,0,0,1,.33,1l-5,22a1,1,0,0,1-.65.72A1,1,0,0,1,24,28Zm-8.43-9,7.81,6.25L27.61,6.61,5.47,15.12l4,2a1,1,0,0,1,.49.54l2.45,6.54,2.89-2.88-1.9-1.53A1,1,0,0,1,13,19a1,1,0,0,1,.35-.78l7-6a1,1,0,1,1,1.3,1.52Z'/></path></g></svg>
    <span>Telegram</span></a>
</li>
</ul>
</div>




</div>
   </div>
  </body>
</html>
