<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>skitconnect</title>
   <style>
   /* styles.css */

/* Top Navigation Bar */
.top_navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: green; /* Change this to your desired background color */
    padding: 10px 20px;
    color: #fff; /* Change text color if needed */
}

/* Logo */
.logo {
    font-size: 60px;
    font-weight: bold;
}

/* Hamburger Icon (Menu Button) */
.menu {
    font-size: 40px;
    cursor: pointer;
}

body{background-image: url(../images/notes.jfif);}
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
   </style>
</head>
<body>
    <!-- Top Navigation Bar -->
    <div class="top_navbar">
        <img src="../images/logo.jpeg" width="100px" height="100px">
        <div class="logo">Sri Krishna Institute Of Technology</div>
        <div class="menu">
            <div class="hamburger">
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
                <div id="mySidenav" class="sidenav">
                    
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="home.php">Home</a>
                    <a href="https://www.skit.org.in">About</a>
                    <a href="student.php">Student Login</a>
                    <a href="teacher.php">Faculty Login</a>
                    <a href="library.php">Librarian Login</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Rest of your website content goes here -->

    <!-- Include Font Awesome icons kit (add this to your head tag) -->
    <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>
   
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</body>
</html>
