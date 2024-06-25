<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <style>
      .top_navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: green; /* Change this to your desired background color */
   padding:5px 10px;
   
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
  color: green;
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

body{background-image: url(images/back.jpg); height:100%;background-repeat: no-repeat;}
.centeredForm {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-top: 20px;
    margin-left: 500px;
    width: 500px;
    height: 500px;
    background-color: #f9f9f9; 
    border: 2px solid black;
}

/* Form Styling */
.centeredForm h2 {
    font-size: 24px;
    margin-bottom: 20px;
}

.centeredForm form {
    width: 300px; /* Set your desired form width */
}

.centeredForm label {
    display: block;
    margin-bottom: 10px;
}

.centeredForm input[type="text"],
.centeredForm input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.centeredForm button {
    background-color: #0074d9; /* Set your desired button color */
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

.centeredForm button:hover {
    background-color: #0056b3; /* Set hover color */
}

    </style>
</head>
<body>
<div class="top_navbar">
        <img src="images/logo.jpeg" width="100px" height="100px">
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

    
   











    <div class="centeredForm">
      <img src="images/login.png" style="width:120px;height:120px">
        <h2>Librarian Login</h2>
        <form action="liblog.php" method="post">
            <label for="fid"><b>Librarian ID</b></label>
            <input type="text" placeholder="Enter Lib ID" name="fid" required>
            <label for="pswd"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="pswd" required>
            <a href="passwordt.php">Forgot Password?</a><br><br>
            <button type="submit">Login</button>
        </form>
    </div>




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
