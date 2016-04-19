<!DOCTYPE HTML>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link href="Blog.css" type="text/css" rel="stylesheet">
    <title>Home</title>
    <script>
        function check(){
            var p1 = document.getElementById("pw").value;
            var p2 = document.getElementById("pw2").value;
            
            if(p1 != p2){
                alert('Passwörter stimmen nicht überein'); return false;
            }
        }
                
    </script>

</head>

<?php
    if(isset($_POST["submit"])){
        
        require_once('config.php');
        
        
        $username = $_POST['usr'];
        $alter = $_POST['alter'];
        $password = $_POST['pw2'];
        
        
        
        $sql = "INSERT INTO user (name, age, passwort) VALUES ('$username','$alter','$password')";
        
        $result = mysqli_query($verbindung, $sql);
        
        header('Location: Bloghinzu.php');
    }
?>

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
            
            <h2>Registrieren</h2>

            <form method="post" onsubmit="return check();">
                <p>
                    <input type="text" name="usr" class="tab" placeholder="Benutzername" required>
                </p>
                <p>
                    <input type="text" name="alter" class="tab" placeholder="Alter" required>
                </p>
                <p>
                    <input type="password" id="pw" class="tab" placeholder="Passwort" required>
                </p>
                <p>
                    <input type="password" name="pw2" id="pw2" class="tab" placeholder="Passwort wiederholen" required>
                </p>

                <input type="submit" name="submit" value="Registrieren" class="button">
                <input type="button" onclick="window.location.href='index.php'" value="Back" class="button">

            </form>
        </div>

    </div>



</body>

</html>
