<html>
<head>
	<link href="styles.css" rel="stylesheet">
</head>
<body>
    <a name="top"></a>
<div>
	<ul id="navbar">
  <li id="navtab"><a   id="navlink" href="index.php">Home</a></li>
  <li id="navtab"><a  id="navlink" href="Artists.php">Artists</a></li>
  <li id="navtab"><a  id="navlink" href="Venues.php">Venues</a></li>
  <li id="navtab"><a  id="navlink" href="Performances.php">Performances</a></li>
  <li id="navtab"><a  id="navlink" href="Login.php">Login</a></li>
  <li id="headerLogo">ES<span id="headerSpan">Groove</span></li>
</ul>
  <hr style="height: 15px; background-color: #444; border-color: #444; margin: 0; padding: 0;">
</div>
   
     <br>

    <h1 id="title">Login <span id="headerSpan">Menu<span></h1>
    <hr style="height:5px; background-color:white; border-color: white;">
    <fieldset id="loginField">
        <legend id="loginLegend">Enter Login Information</legend>
        <form action = "sessionLoggedIn.php" method = "post">
            <label for="email" id="textLabel">Username:</label>
            <input type="email" name="email" id="userName" placeholder="Enter Username...." required />
            <br> 
            <label for="password" id="textLabel">Password:</label> 
            <input type="password" name="password" id="passWord" placeholder="Enter Password...." required />
            <br> 
            <input type="submit" name="submit" id="submit">
        </form>
    </fieldset>













</body>
<footer class="footer-distributed">

            <div class="footer-left">

                <h3>ES<span>Groove</span></h3>

                <p class="footer-links">
                    <a id="footerLink" href="index.php">Home</a>
                    
                    <a id="footerLink" href="Artists.php">Artists</a>
                    
                    <a id="footerLink" href="Venues.php">Venues</a>
                    
                    <a id="footerLink" href="Performances.php">Performances</a>
                    
                    <a id="footerLink" href="Login.php">Login</a>
                    
                    <a href="#top">Back to top of page</a>
                </p>

                <p class="footer-company-name">ESGroove © 2021</p>

            </div>
        </footer>
       
</html>
