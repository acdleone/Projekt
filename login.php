
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link href="Blog.css" type="text/css" rel="stylesheet">
    <title>Home</title>
<script>
    
    
    </script>

</head>



<body>
       <!--<div id="skyline">
            
        </div>-->

    <div id="side">

        <ul id="navigation" class="Menu">
            <li><a href="Blogs.php">Blog</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Registrieren</a></li>
        </ul>

        <div id="content">
            <h2>Login</h2>

        <form name="inputs" onsubmit="check()" action="Bloghinzu.php">
            <p>
                <input type="text" name="usr" class="tab" placeholder="Benutzername" required>
            </p>
            <p>
                <input type="password" name="pw" class="tab" placeholder="Passwort" required>
            </p>
            <input type="submit" name="submit" value="Login" class="button">
            <input type="button" onclick="window.location.href='index.php'" value="Back" class="button">

        </form>
        </div>

    </div>



</body>

</html>